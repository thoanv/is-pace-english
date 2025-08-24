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
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('logo_white')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('thumbnail')->nullable();

            $table->string('meta_header')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();

            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();

            $table->text('video_intro')->nullable();
            $table->text('map')->nullable();

            $table->text('facebook')->nullable();
            $table->text('google')->nullable();
            $table->text('youtube')->nullable();
            $table->text('tiktok')->nullable();
            $table->text('twitter')->nullable();
            $table->text('pinterest')->nullable();
            $table->text('instagram')->nullable();
            $table->text('come_to_us')->nullable();
            $table->text('image_left')->nullable();
            $table->text('image_right')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generals');
    }
};
