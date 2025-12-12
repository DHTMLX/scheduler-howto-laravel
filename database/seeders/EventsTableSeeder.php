<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
   public function run()
   {
       DB::table('events')->insert([
           ['id'=>1, 'text'=>'Event #1', 'start_date'=>'2026-01-05 08:00:00',
                'end_date'=>'2026-01-05 12:00:00'],
           ['id'=>2, 'text'=>'Event #2', 'start_date'=>'2026-01-06 15:00:00',
                'end_date'=>'2026-01-06 16:30:00'],
           ['id'=>3, 'text'=>'Event #3', 'start_date'=>'2026-01-04 00:00:00',
                'end_date'=>'2026-01-20 00:00:00'],
           ['id'=>4, 'text'=>'Event #4', 'start_date'=>'2026-01-07 08:00:00',
                'end_date'=>'2026-01-07 12:00:00'],
           ['id'=>5, 'text'=>'Event #5', 'start_date'=>'2026-01-07 08:00:00',
                'end_date'=>'2026-01-07 12:00:00'],
           ['id'=>6, 'text'=>'Event #6', 'start_date'=>'2026-01-09 12:00:00',
                'end_date'=>'2026-01-09 18:00:00']
       ]);
   }
}
