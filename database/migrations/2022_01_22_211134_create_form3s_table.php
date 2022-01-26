<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form3s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();

            $table->integer('quiz3_1')->nullable();
            $table->integer('quiz3_2')->nullable();

            $table->string('quiz3_2_1')->nullable();
            $table->integer('quiz3_2_2')->nullable();
            $table->json('quiz3_2_3')->nullable();
            $table->integer('quiz3_2_4')->nullable();
            $table->string('quiz3_2_5')->nullable();

            $table->string('quiz3_3_1')->nullable();
            $table->string('quiz3_3_2')->nullable();
            $table->string('quiz3_3_3')->nullable();
            $table->string('quiz3_3_4')->nullable();
            $table->json('quiz3_3_5')->nullable();
            $table->integer('quiz3_3_6')->nullable();
            $table->string('quiz3_3_7')->nullable();

           


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
        Schema::dropIfExists('form3s');
    }
}
