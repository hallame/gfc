<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('verse_of_days', function (Blueprint $table) {
            $table->id();
            $table->date('day')->primary();
            $table->foreignId('verse_id')->constrained('verses')->cascadeOnDelete();
            $table->foreignId('meditation_id')->nullable()->constrained('meditations')->nullOnDelete();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verse_of_days');
    }
};
