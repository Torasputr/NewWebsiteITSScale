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
        Schema::create('newkarirs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('position_id')->constrained()->onDelete('cascade');
            $table->string('cv');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('currentCompany')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('portfolio')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newkarirs');
    }
};
