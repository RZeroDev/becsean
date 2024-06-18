






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
        Schema::create('automatings', function (Blueprint $table) {
            $table->id();
            $table->string('linkedin_client_id')->nullable();
            $table->string('linkedin_client_secret')->nullable();
            $table->string('linkedin_page_id')->nullable();
            $table->text('linkedin_access_token')->nullable();
            $table->string('linkedin_callback')->nullable();
            $table->string('twitter_account_id')->nullable();
            $table->string('twitter_consumer_key')->nullable();
            $table->text('twitter_consumer_secret')->nullable();
            $table->string('twitter_bearer_token')->nullable();
            $table->string('twitter_access_token')->nullable();
            $table->string('twitter_access_token_secret')->nullable();
            $table->string('instagram_page_id')->nullable();
            $table->string('facebook_page_id')->nullable();
            $table->text('facebook_access_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('automatings');
    }
};
