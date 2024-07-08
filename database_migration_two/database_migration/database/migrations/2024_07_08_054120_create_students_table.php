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
        // Create the 'students' table
        Schema::create('students', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('city', 23)->default('No city')->nullable();
            $table->string('percentage')->comment('student presentage');
            $table->integer('age')->unsigned();
            $table->primary('id');

            // $table->timestamps();
        });

        // Rename the 'students' table to 'student'
        Schema::rename('students', 'student');

        // Drop the 'fathername' table if it exists
        Schema::dropIfExists('fathername');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the 'student' table
        Schema::dropIfExists('student');
    }
};
