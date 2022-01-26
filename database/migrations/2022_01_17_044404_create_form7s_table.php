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


            $table->integer('quiz7_1')->nullable();
            $table->json('quiz7_1_1')->nullable();

            $table->integer('quiz7_2')->nullable();
            $table->json('quiz7_2_1')->nullable();

            $table->integer('quiz7_3')->nullable();
            $table->json('quiz7_3_1')->nullable();

            $table->integer('quiz7_4')->nullable();
            $table->json('quiz7_4_1')->nullable();

            $table->integer('quiz7_5')->nullable();
            $table->json('quiz7_5_1')->nullable();

            $table->integer('quiz7_6')->nullable();
            $table->json('quiz7_6_1')->nullable();

            $table->integer('quiz7_7')->nullable();
            $table->json('quiz7_7_1')->nullable();

            $table->integer('quiz7_8')->nullable();
            $table->json('quiz7_8_1')->nullable();

            $table->integer('quiz7_9')->nullable();
            $table->json('quiz7_9_1')->nullable();

            $table->integer('quiz7_10')->nullable();
            $table->json('quiz7_10_1')->nullable();

            
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
