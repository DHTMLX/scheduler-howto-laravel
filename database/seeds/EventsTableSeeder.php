<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('events')->insert([
            ['id'=>1, 'text'=>'Event #1', 'start_date'=>'2018-12-05 08:00:00',
                 'end_date'=>'2018-12-05 12:00:00'],
            ['id'=>2, 'text'=>'Event #2', 'start_date'=>'2018-12-06 15:00:00',
                 'end_date'=>'2018-12-06 16:30:00'],
            ['id'=>3, 'text'=>'Event #3', 'start_date'=>'2018-12-04 00:00:00',
                 'end_date'=>'2018-12-20 00:00:00'],
            ['id'=>4, 'text'=>'Event #4', 'start_date'=>'2018-12-01 08:00:00',
                 'end_date'=>'2018-12-01 12:00:00'],
            ['id'=>5, 'text'=>'Event #5', 'start_date'=>'2018-12-20 08:00:00',
                 'end_date'=>'2018-12-20 12:00:00'],
            ['id'=>6, 'text'=>'Event #6', 'start_date'=>'2018-12-25 08:00:00',
                 'end_date'=>'2018-12-25 12:00:00']
        ]);
    }
}
