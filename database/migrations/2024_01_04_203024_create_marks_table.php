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
        Schema::create('marks', function (Blueprint $table) {

            $table->timestamps();
            $table->id();
            $table->string('studentmatricule');
            $table->string('coursecode');
            $table->double('camark')->max(30);
            $table->double('snmark');
            $table->double('tpmark')->max(40);
            $table->integer('year');
            $table->enum('semester',[1,2]);
            $table->double('total')->max(100);
            $table->foreign('studentmatricule')->references('matricule')->on('student');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};
