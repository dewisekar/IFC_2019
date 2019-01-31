<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jersey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jersey', function (Blueprint $table){
            $table->increments('id_jersey');
            $table->string('jersey');
            $table->string('celana');
            $table->string('kaoskaki');
            $table->integer('id_tim');
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
        Schema::dropIfExists('jersey');
    }
}
