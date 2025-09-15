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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            // Kunci asal: 'quiz_id' kehubung ke 'id' di tabel 'quizzes'
            $table->foreignId('quiz_id')->constrained()->onDelete('cascade');
            $table->text('question_text'); // 'teks_pertanyaan'
            $table->string('question_type'); // 'tipe_pertanyaan', contoh: 'multiple_choice'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
