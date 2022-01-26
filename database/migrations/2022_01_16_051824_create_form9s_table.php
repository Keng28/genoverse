<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm9sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form9s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            
            $table->integer('quiz9_1')->nullable();
            $table->integer('quiz9_2')->nullable();
            $table->integer('quiz9_3')->nullable();

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
        Schema::dropIfExists('form9s');
    }
}
