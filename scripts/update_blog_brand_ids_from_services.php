<?php

use Illuminate\Support\Facades\DB;

$updated = DB::update("
    UPDATE blogs bl
    INNER JOIN services s
        ON LOWER(s.slug) COLLATE utf8mb4_general_ci = LOWER(bl.slug_en) COLLATE utf8mb4_general_ci
    INNER JOIN brands br
        ON LOWER(TRIM(br.name)) COLLATE utf8mb4_general_ci = LOWER(TRIM(s.brand)) COLLATE utf8mb4_general_ci
    SET bl.brand_id = br.id
    WHERE TRIM(COALESCE(s.brand, '')) <> ''
      AND (bl.brand_id IS NULL OR bl.brand_id <> br.id)
");

echo "Blog brand_id sync completed. Updated rows: {$updated}" . PHP_EOL;
