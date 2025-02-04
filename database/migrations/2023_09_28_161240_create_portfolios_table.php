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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->longText('company_description');
            $table->binary('featured_image');
            $table->binary('framed_image');
            $table->binary('image_before');
            $table->binary('image_after');
            $table->longText('challenges');
            $table->string('issues');
            $table->string('services_provided');
            $table->longText('solution');
            $table->string('technology');
            $table->char('link', 255);
            $table->longText('owner_testimonial');
            $table->string('status')->default('draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
