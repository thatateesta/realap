<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnsworsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('body');
            $table->integer('quatiom_id')->unsigned();
            $table->integer('user_id');
            $table->foreign('quation_id')->references('id')->on('quations')->onDelete('cascade');

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
        Schema::dropIfExists('answors');
    }
}
