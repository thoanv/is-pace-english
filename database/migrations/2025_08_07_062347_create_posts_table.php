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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_id')->nullable();
            $table->string('title')->nullable()->comment('Tiêu đề');
            $table->string('image')->nullable()->comment('Ảnh');
            $table->string('slug')->nullable();
            $table->longText('description')->nullable()->comment('Mô tả');
            $table->longText('content')->nullable()->comment('Mô tả');
            $table->integer('view')->default(0);
            $table->string('is_outstanding')->default(\App\Enums\CommonEnum::UNACTIVATED)->comment('Nổi bật');
            $table->string('status')->default(\App\Enums\CommonEnum::UNACTIVATED);
            $table->dateTime('date_publish')->nullable()->comment('Ngày lên bài');
            $table->decimal('stars', 4, 1)->default(5)->nullable()->comment('Đánh giá');
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
