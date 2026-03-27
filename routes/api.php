<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BlogApiController;
use App\Http\Controllers\Api\BrandServiceApiController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Blog API Routes (Public - Read Only)
Route::prefix('blogs')->group(function () {
    Route::get('/', [BlogApiController::class, 'index']);
    Route::get('/{slug}', [BlogApiController::class, 'show']);
    // Note: Store, Update, Delete operations are only available through admin panel
});

// Brand service landing pages (public read — for headless / external sites)
Route::prefix('v1')->group(function () {
    Route::get('brands/{brandSlug}/services', [BrandServiceApiController::class, 'index']);
    Route::get('brands/{brandSlug}/services/{servicePath}', [BrandServiceApiController::class, 'show'])
        ->where('servicePath', '.*');
});
