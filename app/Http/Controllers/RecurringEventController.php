<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecurringEvent;

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
        $event->rec_type = $request->rec_type;
        $event->event_length = $request->event_length;
        $event->event_pid = $request->event_pid;

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
        $event->rec_type = $request->rec_type;
        $event->event_length = $request->event_length;
        $event->event_pid = $request->event_pid;
        $event->save();
        $this->deleteRelated($event);
        return response()->json([
            "action"=> "updated"
        ]);
    }

    private function deleteRelated($event){
        if($event->event_pid && $event->event_pid !== "none"){
            RecurringEvent::where("event_pid", $event->id)->delete();
        }
    }

    public function destroy($id){
        $event = RecurringEvent::find($id);

        // delete the modified instance of the recurring series
        if($event->event_pid){
            $event->rec_type = "none";
            $event->save();
        }else{
            // delete a regular instance
            $event->delete();
        }
        $this->deleteRelated($event);
        return response()->json([
            "action"=> "deleted"
        ]);

    }
}
