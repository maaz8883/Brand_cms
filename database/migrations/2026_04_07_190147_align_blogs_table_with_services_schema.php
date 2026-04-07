<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            if (! Schema::hasColumn('blogs', 'title')) {
                $table->text('title')->nullable()->after('id');
            }
            if (! Schema::hasColumn('blogs', 'meta_title')) {
                $table->text('meta_title')->nullable()->after('title');
            }
            if (! Schema::hasColumn('blogs', 'meta_description')) {
                $table->text('meta_description')->nullable()->after('meta_title');
            }
            if (! Schema::hasColumn('blogs', 'slug')) {
                $table->text('slug')->nullable()->after('meta_description');
            }
            if (! Schema::hasColumn('blogs', 'keywords')) {
                $table->text('keywords')->nullable()->after('slug');
            }
            if (! Schema::hasColumn('blogs', 'content')) {
                $table->longText('content')->nullable()->after('keywords');
            }
            if (! Schema::hasColumn('blogs', 'brand')) {
                $table->text('brand')->nullable()->after('content');
            }
            if (! Schema::hasColumn('blogs', 'image')) {
                $table->text('image')->nullable()->after('brand');
            }
        });

        // Backfill new columns from existing blog columns if present.
        DB::statement("
            UPDATE blogs
            SET
                title = COALESCE(title, title_en),
                meta_title = COALESCE(meta_title, title_en),
                meta_description = COALESCE(meta_description, short_description_en),
                slug = COALESCE(slug, slug_en),
                content = COALESCE(content, content_en),
                brand = COALESCE(brand, author),
                image = COALESCE(image, featured_image)
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $dropColumns = [];
            foreach (['title', 'meta_title', 'meta_description', 'slug', 'keywords', 'content', 'brand', 'image'] as $column) {
                if (Schema::hasColumn('blogs', $column)) {
                    $dropColumns[] = $column;
                }
            }

            if ($dropColumns !== []) {
                $table->dropColumn($dropColumns);
            }
        });
    }
};
