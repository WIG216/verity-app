<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_certificates', function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('registration_number')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->string('place_of_birth');
            $table->string('email')->unique();
            $table->string('specialty');
            $table->integer('class');
            $table->string('contact');
            $table->string('guardian_name');
            $table->string('location');
            $table->string('emergency_number');
            $table->string('img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_certificates');
    }
};
