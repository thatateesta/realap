<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quations', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->integer('catagory_id')->unsigned();
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('quations');
    }
}
