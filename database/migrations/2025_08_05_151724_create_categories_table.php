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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('name')->nullable()->comment('Tên danh mục');
            $table->string('slug')->nullable()->comment('Slug');
            $table->longText('description')->nullable()->comment('Miêu tả danh mục');

            $table->string('type')->default('news')->comment('Loại danh mục');
            $table->string('image')->nullable()->comment('Ảnh đại diện');
            $table->string('cover')->nullable()->comment('Ảnh bìa');

            $table->string('status')->default('unactivated');
            $table->string('is_outstanding')->default('unactivated');
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
