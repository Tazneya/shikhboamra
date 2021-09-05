<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerScriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_scripts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('st_id')->unsigned();
            $table->bigInteger('question_id')->unsigned();
           
            $table->integer('given_ans');
            $table->string('verdict');
            $table->integer('active_status')->default(1);
            $table->integer('delete_status')->default(0);
            $table->timestamps();
            $table->foreign('st_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_scripts');
    }
}
