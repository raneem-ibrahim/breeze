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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
    $table->string('name');
    $table->enum('gender', ['female', 'male']);
    $table->integer('age');
    $table->enum('study_type', ['حفظ', 'أحكام']);
    $table->foreignId('teacher_id')->nullable()->constrained('teachers')->nullOnDelete();
    $table->string('email')->unique();
    $table->string('password');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
