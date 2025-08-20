<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('verses', function (Blueprint $table) {
            $table->id();

            $table->string('reference'); // ex: "Jean 3:16"
            $table->text('content');
            $table->string('version')->default('LSG');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('verses');
    }
};
