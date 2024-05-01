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
        Schema::create('student', function (Blueprint $table) {
            $table->timestamps();
            $table->string('full_name');
            $table->string('speciality');
            $table->string('matricule') -> primary();
            $table->string('sex');
            $table->string('email');
            $table->enum('level',[1,2,3,4,5]);
            $table->date('birthdate');
            $table->integer('numero');
            $table->string('filiere');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
