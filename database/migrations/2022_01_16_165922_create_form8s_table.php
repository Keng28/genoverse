<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm8sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form8s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();

            $table->integer('quiz8_1')->nullable();
            $table->string('quiz8_1_1_1')->nullable();
            $table->string('quiz8_1_1_2')->nullable();
            $table->string('quiz8_1_1_3')->nullable();
            $table->string('quiz8_1_2_1')->nullable();
            $table->string('quiz8_1_2_2')->nullable();
            $table->string('quiz8_1_2_3')->nullable();
            $table->string('quiz8_1_2_4')->nullable();
            $table->integer('quiz8_2')->nullable();
            $table->string('quiz8_2_1_1')->nullable();
            $table->string('quiz8_2_1_2')->nullable();
            $table->string('quiz8_2_1_3')->nullable();
            $table->string('quiz8_2_1_4')->nullable();
            $table->string('quiz8_2_1_5')->nullable();
            $table->string('quiz8_2_2_1')->nullable();
            $table->string('quiz8_2_2_2')->nullable();
            $table->string('quiz8_2_2_3')->nullable();
            $table->string('quiz8_2_2_4')->nullable();
            $table->string('quiz8_3')->nullable();
            $table->string('quiz8_3_1')->nullable();
            $table->string('quiz8_3_2')->nullable();
            $table->string('quiz8_3_3')->nullable();
            $table->string('quiz8_3_4')->nullable();


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
        Schema::dropIfExists('form8s');
    }
}
