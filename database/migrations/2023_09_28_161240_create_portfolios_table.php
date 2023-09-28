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
            $table->binary('company_image');
            $table->string('company_name');
            $table->string('company_project_title');
            $table->longText('company_project_description');
            $table->longText('company_project_task');
            $table->string('company_location');
            $table->char('company_link', 255);
            $table->date('company_date_launched');
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