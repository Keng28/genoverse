<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form1s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();

            $table->integer('quiz_1')->nullable();
            $table->integer('quiz_2')->nullable();
            $table->string('quiz_2_1')->nullable();

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
        Schema::dropIfExists('form1s');
    }
}
