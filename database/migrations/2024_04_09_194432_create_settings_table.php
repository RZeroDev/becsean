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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->unique();
            $table->string('company_phone')->unique();
            $table->string('company_phone1')->unique();
            $table->string('company_email')->unique();
            $table->string('company_facebook')->nullable();
            $table->string('company_instagram')->nullable();
            $table->string('company_youtube')->nullable();
            $table->string('company_twitter')->nullable();
            $table->string('company_linkedin')->nullable();
            $table->string('company_tiktok')->nullable();
            $table->string('company_headquarters')->nullable();
            $table->text('analytics')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
