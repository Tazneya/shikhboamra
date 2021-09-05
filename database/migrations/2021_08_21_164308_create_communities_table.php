<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('st_id')->unsigned();
            $table->bigInteger('course_id')->unsigned();
            $table->string('que_type');
            $table->string('que_text');
            $table->string('que_image');
            $table->string('ans_type');
            $table->string('ans_text');
            $table->string('ans_image');
           
            $table->integer('active_status')->default(1);
            $table->integer('delete_status')->default(0);
            $table->timestamps();
            $table->foreign('st_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('communities');
    }
}
