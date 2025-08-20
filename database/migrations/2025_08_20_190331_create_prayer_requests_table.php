<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('prayer_requests', function (Blueprint $table) {
            $table->id();

            $table->boolean('is_anonymous')->default(false);
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('subject');
            $table->text('message');
            $table->timestamps();
            $table->timestamp('prayed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prayer_requests');
    }
};
