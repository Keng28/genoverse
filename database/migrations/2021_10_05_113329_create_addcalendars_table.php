<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddcalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addcalendars', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('doctor');
            $table->time('time');
            $table->time('time2');
            $table->date('date');
            $table->string('category');
            $table->string('link');
            $table->integer('walkin')->nullable();
            $table->string('note',510)->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addcalendars');
    }
    
}
