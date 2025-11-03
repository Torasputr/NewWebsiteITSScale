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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('thumbnail');
            $table->string('thumbnail_alt');
            $table->foreignId('author_id')->constrained('authors')->onDelete('cascade');
            $table->date('date');
            $table->text('paragraph1');
            $table->string('image1');
            $table->string('image1_alt');
            $table->string('image1_source');
            $table->text('paragraph2');
            $table->string('image2');
            $table->string('image2_alt');
            $table->string('image2_source');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
