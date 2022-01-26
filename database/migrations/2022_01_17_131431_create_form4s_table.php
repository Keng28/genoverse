<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form4s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();

            $table->integer('quiz4_1')->nullable();
            $table->json('quiz4_1_1')->nullable();
            $table->string('quiz4_1_2')->nullable();
            $table->string('quiz4_1_3')->nullable();
            $table->string('quiz4_2_1')->nullable();
            $table->json('quiz4_2_2')->nullable();
            $table->string('quiz4_2_3')->nullable();


            
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
        Schema::dropIfExists('form4s');
    }
}
