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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique()->comment('Loại menu');
            $table->string('name')->nullable()->comment('Tên menu');
            $table->longText('content')->nullable()->comment('Cây thư mục của menu');
            $table->string('list_id_category')->nullable();
            $table->string('status')->default(\App\Enums\CommonEnum::UNACTIVATED);
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
        Schema::dropIfExists('menus');
    }
};
