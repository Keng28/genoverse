<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm7sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form7s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();


            $table->integer('quiz7_1_1')->nullable();
            $table->integer('quiz7_1_2')->nullable();
            $table->integer('quiz7_1_3')->nullable();
            $table->integer('quiz7_1_4')->nullable();
            $table->integer('quiz7_1_5')->nullable();

            $table->integer('quiz7_2_1')->nullable();
            $table->integer('quiz7_2_2')->nullable();
            $table->integer('quiz7_2_3')->nullable();
            $table->integer('quiz7_2_4')->nullable();
            $table->integer('quiz7_2_5')->nullable();

            $table->integer('quiz7_3_1')->nullable();
            $table->integer('quiz7_3_2')->nullable();
            $table->integer('quiz7_3_3')->nullable();
            $table->integer('quiz7_3_4')->nullable();
            $table->integer('quiz7_3_5')->nullable();

            $table->integer('quiz7_4_1')->nullable();
            $table->integer('quiz7_4_2')->nullable();
            $table->integer('quiz7_4_3')->nullable();
            $table->integer('quiz7_4_4')->nullable();
            $table->integer('quiz7_4_5')->nullable();

            $table->integer('quiz7_5_1')->nullable();
            $table->integer('quiz7_5_2')->nullable();
            $table->integer('quiz7_5_3')->nullable();
            $table->integer('quiz7_5_4')->nullable();
            $table->integer('quiz7_5_5')->nullable();

            $table->integer('quiz7_6_1')->nullable();
            $table->integer('quiz7_6_2')->nullable();
            $table->integer('quiz7_6_3')->nullable();
            $table->integer('quiz7_6_4')->nullable();
            $table->integer('quiz7_6_5')->nullable();

            $table->integer('quiz7_7_1')->nullable();
            $table->integer('quiz7_7_2')->nullable();
            $table->integer('quiz7_7_3')->nullable();
            $table->integer('quiz7_7_4')->nullable();
            $table->integer('quiz7_7_5')->nullable();

            $table->integer('quiz7_8_1')->nullable();
            $table->integer('quiz7_8_2')->nullable();
            $table->integer('quiz7_8_3')->nullable();
            $table->integer('quiz7_8_4')->nullable();
            $table->integer('quiz7_8_5')->nullable();

            $table->integer('quiz7_9_1')->nullable();
            $table->integer('quiz7_9_2')->nullable();
            $table->integer('quiz7_9_3')->nullable();
            $table->integer('quiz7_9_4')->nullable();
            $table->integer('quiz7_9_5')->nullable();

            $table->integer('quiz7_10_1')->nullable();
            $table->integer('quiz7_10_2')->nullable();
            $table->integer('quiz7_10_3')->nullable();
            $table->integer('quiz7_10_4')->nullable();
            $table->integer('quiz7_10_5')->nullable();

            
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
        Schema::dropIfExists('form7s');
    }
}
