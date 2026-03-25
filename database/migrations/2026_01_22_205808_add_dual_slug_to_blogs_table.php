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
            // Add new slug columns
            $table->string('slug_en')->nullable()->after('title_en');
            $table->string('slug_de')->nullable()->after('title_de');
            
            // Migrate existing slug data
            if (Schema::hasColumn('blogs', 'slug')) {
                \DB::table('blogs')->get()->each(function ($blog) {
                    \DB::table('blogs')->where('id', $blog->id)->update([
                        'slug_en' => $blog->slug ?? null,
                    ]);
                });
                
                // Drop old slug column
                $table->dropUnique(['slug']);
                $table->dropColumn('slug');
            }
            
            // Add unique constraints
            $table->unique('slug_en');
            $table->unique('slug_de');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('slug')->unique()->after('id');
            
            // Migrate data back
            \DB::table('blogs')->get()->each(function ($blog) {
                \DB::table('blogs')->where('id', $blog->id)->update([
                    'slug' => $blog->slug_en ?? $blog->slug_de ?? null,
                ]);
            });
            
            $table->dropUnique(['slug_en']);
            $table->dropUnique(['slug_de']);
            $table->dropColumn(['slug_en', 'slug_de']);
        });
    }
};
