<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form5s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();

            $table->integer('quiz5_1')->nullable();
            $table->integer('quiz5_2')->nullable();

            $table->json('quiz5_2_1_1')->nullable();
            $table->string('quiz5_2_1_2')->nullable();

            $table->json('quiz5_2_2_1')->nullable();
            $table->string('quiz5_2_2_2')->nullable();

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
        Schema::dropIfExists('form5s');
    }
}
