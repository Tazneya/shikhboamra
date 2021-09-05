<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagAnalyticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_analytics', function (Blueprint $table) {
            $table->id();
            
            $table->string('tag_name');
            $table->bigInteger('st_id')->unsigned();
            
           
            $table->integer('value');
            $table->integer('try');
            $table->string('class_name');
            $table->string('subject_name');
           
            $table->timestamps();
            $table->foreign('st_id')->references('id')->on('users')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_analytics');
    }
}
