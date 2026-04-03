<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            if (Schema::hasColumn('blogs', 'slug_de')) {
                try {
                    $table->dropUnique(['slug_de']);
                } catch (\Throwable) {
                    // Index name may differ; column drop still attempted below on some drivers
                }
            }
        });

        Schema::table('blogs', function (Blueprint $table) {
            $drops = array_values(array_filter(
                ['title_de', 'content_de', 'short_description_de', 'slug_de'],
                fn (string $c) => Schema::hasColumn('blogs', $c)
            ));
            if ($drops !== []) {
                $table->dropColumn($drops);
            }
        });
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('title_de')->nullable()->after('title_en');
            $table->string('slug_de')->nullable()->after('slug_en');
            $table->text('content_de')->nullable()->after('content_en');
            $table->text('short_description_de')->nullable()->after('short_description_en');
        });

        Schema::table('blogs', function (Blueprint $table) {
            $table->unique('slug_de');
        });
    }
};
