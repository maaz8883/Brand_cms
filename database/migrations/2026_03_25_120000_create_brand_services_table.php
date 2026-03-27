<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('brand_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('slug');
            $table->boolean('is_published')->default(true);
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->string('meta_title')->nullable();
            $table->string('meta_description', 500)->nullable();
            $table->json('content');
            $table->timestamps();

            $table->unique(['brand_id', 'slug']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('brand_services');
    }
};
