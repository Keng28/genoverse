<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodHealthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_healths', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('health_1')->nullable();
            $table->string('health_2')->nullable();
            $table->string('health_3')->nullable();
            $table->string('health_4')->nullable();
            $table->string('health_5')->nullable();
            $table->string('health_6')->nullable();
            $table->date('health_7')->nullable();
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
        Schema::dropIfExists('food_healths');
    }
}
