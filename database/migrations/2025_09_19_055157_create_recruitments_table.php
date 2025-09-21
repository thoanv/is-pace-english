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
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_id')->nullable();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->nullable();
            $table->string('vi_tri')->nullable();
            $table->string('bang_cap')->nullable();
            $table->string('thu_nhap')->nullable();
            $table->string('hinh_thuc_lam_viec')->nullable();
            $table->string('noi_lam_viec')->nullable();
            $table->string('kinh_nghiem')->nullable();
            $table->string('cap_bac')->nullable();
            $table->string('lam_viec')->nullable();
            $table->text('content')->nullable();
            $table->dateTime('date_publish')->nullable();
            $table->integer('view')->default(0);
            $table->string('status')->default(\App\Enums\CommonEnum::UNACTIVATED);
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
        Schema::dropIfExists('recruitments');
    }
};
