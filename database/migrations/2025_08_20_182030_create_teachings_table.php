<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('teachings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('slug')->unique();
            $table->text('summary')->nullable();
            $table->longText('content')->nullable();

            $table->string('kind', 20)->default('doctrine');   // doctrine|predication|etude
            $table->string('status', 20)->default('draft');    // draft|review|scheduled|published|archived
            $table->index('kind');
            $table->index(['status','published_at']);



            $table->foreignId('serie_id')->nullable()->constrained('series')->nullOnDelete();

            // SEO
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();

            $table->timestamp('published_at')->nullable();

            $table->integer('duration')->nullable();
            $table->string('video_url')->nullable(); // youtube/vimeo/lecteur interne
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachings');
    }
};
