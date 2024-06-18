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
        Schema::create('about_homes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('secondTitle')->nullable();
            $table->text('firstDescription')->nullable();
            $table->text('secondDescription')->nullable();
            $table->string('actionText')->nullable();
            $table->string('image')->nullable();
            $table->string('shape')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_homes');
    }
};
