<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecurringEvent;

class RecurringEventController extends Controller
{
    public function index(Request $request){
        $events = new RecurringEvent();
 
        $from = $request->from;
        $to = $request->to;
 
        return response()->json([
            "data" => $events->
                where("start_date", "<", $to)->
                where("end_date", ">=", $from)->get()
        ]);
    }

    public function store(Request $request){

        $event = new RecurringEvent();

        $event->text = strip_tags($request->text);
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;

        $event->duration = $request->duration;
        $event->rrule = $request->rrule;
        $event->recurring_event_id = $request->recurring_event_id;
        $event->original_start = $request->original_start;
        $event->deleted = $request->deleted;

        $event->save();

        $status = "inserted";
        if($event->rec_type == "none"){
            $status = "deleted";
        }

        return response()->json([
            "action"=> $status,
            "tid" => $event->id
        ]);
    }

    public function update($id, Request $request){
        $event = RecurringEvent::find($id);

        $event->text = strip_tags($request->text);
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;

        $event->duration = $request->duration;
        $event->rrule = $request->rrule;
        $event->recurring_event_id = $request->recurring_event_id;
        $event->original_start = $request->original_start;
        $event->deleted = $request->deleted;

        $event->save();

        // If rrule is set and recurring_event_id is null, delete modified occurrences
        if ($event->rrule && $event->recurring_event_id === null) {
            RecurringEvent::where('recurring_event_id', $id)->delete();
        }

        return response()->json([
            "action" => "updated"
        ]);
    }

    public function destroy($id){
        $event = RecurringEvent::find($id);

        // delete the modified instance of the recurring series
        if ($event->recurring_event_id) {
            // Deleting a modified occurrence from a recurring series
            // Instead of deleting, update the record to mark deleted (soft delete)
            RecurringEvent::where('id', $id)->update(['deleted' => 1]);
        } else {
            if ($event->rrule) {
                // If deleting a recurring series, delete all modified occurrences
                RecurringEvent::where('recurring_event_id', $id)->delete();
            }
            $event->delete();
        }

        return response()->json([
            "action"=> "deleted"
        ]);
    }
}

