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
        Schema::dropIfExists('posts');
        // Schema::create('posts', function (Blueprint $table) {
        //     $table->id();
        //     $table->binary('featured_image');
        //     $table->string('title');
        //     $table->longText('content');
        //     $table->string('author');
        //     $table->string('category');
        //     $table->string('tags');
        //     $table->string('status')->default('draft');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
