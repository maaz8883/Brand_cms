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
        Schema::table('blogs', function (Blueprint $table) {
            // Add English columns (rename existing)
            $table->string('title_en')->nullable()->after('id');
            $table->text('content_en')->nullable()->after('title_en');
            
            // Add German columns
            $table->string('title_de')->nullable()->after('title_en');
            $table->text('content_de')->nullable()->after('content_en');
            
            // Short description columns
            $table->text('short_description_en')->nullable()->after('content_de');
            $table->text('short_description_de')->nullable()->after('short_description_en');
            
            // Remove old columns and language if exists
            if (Schema::hasColumn('blogs', 'title')) {
                $table->dropColumn('title');
            }
            if (Schema::hasColumn('blogs', 'content')) {
                $table->dropColumn('content');
            }
            if (Schema::hasColumn('blogs', 'short_description')) {
                $table->dropColumn('short_description');
            }
            if (Schema::hasColumn('blogs', 'language')) {
                $table->dropColumn('language');
            }
        });
        
        // Migrate existing data
        \DB::table('blogs')->get()->each(function ($blog) {
            \DB::table('blogs')->where('id', $blog->id)->update([
                'title_en' => $blog->title ?? null,
                'content_en' => $blog->content ?? null,
                'short_description_en' => $blog->short_description ?? null,
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('title')->nullable()->after('id');
            $table->text('content')->nullable()->after('title');
            $table->text('short_description')->nullable()->after('content');
            $table->enum('language', ['en', 'de'])->default('en')->after('status');
            
            $table->dropColumn(['title_en', 'title_de', 'content_en', 'content_de', 'short_description_en', 'short_description_de']);
        });
        
        // Migrate data back
        \DB::table('blogs')->get()->each(function ($blog) {
            \DB::table('blogs')->where('id', $blog->id)->update([
                'title' => $blog->title_en ?? $blog->title_de ?? null,
                'content' => $blog->content_en ?? $blog->content_de ?? null,
                'short_description' => $blog->short_description_en ?? $blog->short_description_de ?? null,
            ]);
        });
    }
};
