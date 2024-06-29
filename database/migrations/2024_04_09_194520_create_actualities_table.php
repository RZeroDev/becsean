<?php

use App\Models\ActualitiesCategorie;
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
        Schema::create('actualities', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('pdf')->nullable();
            $table->string('video')->nullable();
            $table->string('facebook_post_id')->nullable();
            $table->string('instagram_post_id')->nullable();
            $table->string('linkedin_post_id')->nullable();
            $table->string('twitter_post_id')->nullable();
            $table->text('description');
            $table->foreignIdFor(ActualitiesCategorie::class);
            $table->string('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actualities');
    }
};
