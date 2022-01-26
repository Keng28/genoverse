<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('drug_1')->nullable();
            $table->string('drug_2')->nullable();
            $table->string('drug_3')->nullable();
            $table->string('drug_4')->nullable();
            $table->string('drug_5')->nullable();
            $table->string('drug_6')->nullable();
            $table->string('drug_7')->nullable();

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
        Schema::dropIfExists('drugs');
    }
}
