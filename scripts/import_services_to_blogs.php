<?php

DB::statement("
    INSERT IGNORE INTO blogs (
        title_en,
        slug_en,
        content_en,
        short_description_en,
        featured_image,
        status,
        user_id,
        brand_id,
        created_at,
        updated_at,
        author
    )
    SELECT
        s.title,
        s.slug,
        s.content,
        s.meta_description,
        s.image,
        'published',
        1,
        (
            SELECT b.id
            FROM brands b
            WHERE LOWER(b.name) COLLATE utf8mb4_general_ci = LOWER(s.brand)
            LIMIT 1
        ),
        COALESCE(s.created_at, NOW()),
        COALESCE(s.updated_at, NOW()),
        NULL
    FROM services s
");
