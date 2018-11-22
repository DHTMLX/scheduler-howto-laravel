<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecurringEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurring_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('text');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
        
            $table->string('rec_type')->nullable();
            $table->bigInteger('event_length')->nullable();
            $table->string('event_pid')->nullable();
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recurring_events');
    }
}
