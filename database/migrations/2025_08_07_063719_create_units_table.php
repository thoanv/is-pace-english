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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('tên cơ sở');
            $table->string('code')->nullable()->comment('mã cơ sở');
            $table->string('image')->nullable()->comment('Ảnh cơ sở');
            $table->string('phone')->nullable()->comment('Phone');
            $table->string('address')->nullable()->comment('address');
            $table->longText('map')->nullable()->comment('map');
            $table->string('status')->default(\App\Enums\CommonEnum::ACTIVATED);
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
        Schema::dropIfExists('units');
    }
};
