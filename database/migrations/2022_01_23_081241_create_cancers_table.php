<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();

            $table->string('cancer3_1')->nullable();
            $table->string('cancer3_2')->nullable();

            $table->integer('cancer3_3')->nullable();
            $table->integer('cancer3_4')->nullable();

            $table->string('cancer3_5')->nullable();

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
        Schema::dropIfExists('cancers');
    }
}
