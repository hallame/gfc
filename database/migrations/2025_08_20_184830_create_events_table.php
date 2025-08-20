<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();
            $table->enum('kind',['convention','croisade','retraite','conference','culte','atelier','autre'])->default('autre');
            $table->longText('description')->nullable();
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->string('timezone')->default('Africa/Porto-Novo');
            $table->string('venue')->nullable();
            $table->string('address_line1')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->decimal('lat',9,6)->nullable();
            $table->decimal('lon',9,6)->nullable();
            $table->boolean('is_online')->default(false);
            $table->string('stream_url')->nullable();
            $table->string('registration_url')->nullable();
            $table->enum('status',['draft','review','scheduled','published','archived'])->default('published');
            $table->timestamp('published_at')->nullable();
            $table->check('end_at >= start_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
