<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form2s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            
            $table->integer('quiz2_1')->nullable();
            $table->string('quiz2_1_1')->nullable();
            $table->integer('quiz2_1_2')->nullable();

            $table->integer('quiz2_2')->nullable();
            $table->string('quiz2_2_1')->nullable();
            $table->integer('quiz2_2_2')->nullable();

            $table->integer('quiz2_3')->nullable();
            $table->string('quiz2_3_1')->nullable();
            $table->integer('quiz2_3_2')->nullable();

            $table->integer('quiz2_4')->nullable();
            $table->string('quiz2_4_1')->nullable();
            $table->integer('quiz2_4_2')->nullable();

            $table->integer('quiz2_5')->nullable();
            $table->string('quiz2_5_1')->nullable();
            $table->integer('quiz2_5_2')->nullable();

            $table->integer('quiz2_6')->nullable();
            $table->string('quiz2_6_1')->nullable();
            $table->integer('quiz2_6_2')->nullable();

            $table->integer('quiz2_7')->nullable();
            $table->string('quiz2_7_1')->nullable();
            $table->integer('quiz2_7_2')->nullable();

            $table->integer('quiz2_8')->nullable();
            $table->string('quiz2_8_1')->nullable();
            $table->integer('quiz2_8_2')->nullable();

            $table->integer('quiz2_9')->nullable();
            $table->string('quiz2_9_1')->nullable();
            $table->integer('quiz2_9_2')->nullable();

            $table->integer('quiz2_10')->nullable();
            $table->string('quiz2_10_1')->nullable();
            $table->integer('quiz2_10_2')->nullable();


            $table->integer('quiz2_11')->nullable();
            $table->string('quiz2_11_1')->nullable();
            $table->integer('quiz2_11_2')->nullable();


            $table->integer('quiz2_12')->nullable();
            $table->string('quiz2_12_1')->nullable();
            $table->integer('quiz2_12_2')->nullable();


            $table->integer('quiz2_13')->nullable();
            $table->string('quiz2_13_1')->nullable();
            $table->integer('quiz2_13_2')->nullable();


            $table->integer('quiz2_14')->nullable();
            $table->string('quiz2_14_1')->nullable();
            $table->integer('quiz2_14_2')->nullable();


            $table->integer('quiz2_15')->nullable();
            $table->string('quiz2_15_1')->nullable();
            $table->integer('quiz2_15_2')->nullable();


            $table->integer('quiz2_16')->nullable();
            $table->string('quiz2_16_1')->nullable();
            $table->integer('quiz2_16_2')->nullable();


            $table->integer('quiz2_17')->nullable();
            $table->string('quiz2_17_1')->nullable();
            $table->integer('quiz2_17_2')->nullable();


            $table->integer('quiz2_18')->nullable();
            $table->string('quiz2_18_1')->nullable();
            $table->integer('quiz2_18_2')->nullable();


            $table->integer('quiz2_19')->nullable();
            $table->string('quiz2_19_1')->nullable();
            $table->integer('quiz2_19_2')->nullable();


            $table->integer('quiz2_20')->nullable();
            $table->string('quiz2_20_1')->nullable();
            $table->integer('quiz2_20_2')->nullable();


            $table->integer('quiz2_21')->nullable();
            $table->string('quiz2_21_1')->nullable();
            $table->integer('quiz2_21_2')->nullable();


            $table->integer('quiz2_22')->nullable();
            $table->string('quiz2_22_1')->nullable();
            $table->integer('quiz2_22_2')->nullable();


            $table->integer('quiz2_23')->nullable();
            $table->string('quiz2_23_1')->nullable();
            $table->integer('quiz2_23_2')->nullable();


            $table->integer('quiz2_24')->nullable();
            $table->string('quiz2_24_1')->nullable();
            $table->integer('quiz2_24_2')->nullable();


            $table->integer('quiz2_25')->nullable();
            $table->string('quiz2_25_1')->nullable();
            $table->integer('quiz2_25_2')->nullable();


            $table->integer('quiz2_26')->nullable();
            $table->string('quiz2_26_1')->nullable();
            $table->integer('quiz2_26_2')->nullable();


            $table->integer('quiz2_27')->nullable();
            $table->string('quiz2_27_1')->nullable();
            $table->integer('quiz2_27_2')->nullable();


            $table->integer('quiz2_28')->nullable();
            $table->string('quiz2_28_1')->nullable();
            $table->integer('quiz2_28_2')->nullable();
            $table->json('quiz2_28_3')->nullable();
            $table->string('quiz2_28_4')->nullable();

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
        Schema::dropIfExists('form2s');
    }
}
