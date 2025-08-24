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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('unit_id')->nullable();
            $table->string('name')->nullable()->comment('Tên');
            $table->longText('link')->nullable()->comment('Link');
            $table->string('image')->nullable()->comment('Ảnh đại diện');
            $table->string('status')->default('unactivated');
            $table->string('is_outstanding')->default('unactivated');
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
        Schema::dropIfExists('activities');
    }
};
