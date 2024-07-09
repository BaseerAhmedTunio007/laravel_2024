<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            ///////// first way laraval foreign key//////
            // $table->unsignedBigInteger('stu_id');
            // $table->foreign('stu_id')->references('id')
            // ->on('students')
            // ->onUpdate('casade')
            // ->onDelete('cascade');
    
            ///////// End way laraval foreign key//////

            //+++++++++++++Second way use foregin key in laraval /////
            $table->foreignId('student_id')->constrained()->cascadeUpdate()->cascadeDelete();
               // ++++++++   end second way students table name show (student_id) //////
               

            $table->string('book');
            $table->date('due_date')->nullable();
            $table->boolean('status');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libraries');
    }
};
