<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            if (Schema::hasColumn('blogs', 'category_id')) {
                $table->dropForeign(['category_id']);
                $table->dropColumn('category_id');
            }
        });

        Schema::table('blogs', function (Blueprint $table) {
            if (! Schema::hasColumn('blogs', 'brand_id')) {
                $table->foreignId('brand_id')->nullable()->after('user_id')->constrained('brands')->nullOnDelete();
            }
        });
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            if (Schema::hasColumn('blogs', 'brand_id')) {
                $table->dropForeign(['brand_id']);
                $table->dropColumn('brand_id');
            }
        });

        Schema::table('blogs', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->after('user_id')->constrained()->nullOnDelete();
        });
    }
};
