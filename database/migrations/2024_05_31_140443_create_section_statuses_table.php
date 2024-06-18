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
        Schema::create('section_statuses', function (Blueprint $table) {
            $table->id();
            $table->boolean('service')->default(true);
            $table->boolean('about')->default(true);
            $table->boolean('testimonial')->default(true);
            $table->boolean('work')->default(true);
            $table->boolean('action')->default(true);
            $table->boolean('actuality')->default(true);
            $table->boolean('partner')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_statuses');
    }
};
