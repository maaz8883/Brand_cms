<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BlogApiController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Blog API Routes (Public - Read Only)
Route::prefix('blogs')->group(function () {
    Route::get('/', [BlogApiController::class, 'index']);
    Route::get('/{slug}', [BlogApiController::class, 'show']);
    // Note: Store, Update, Delete operations are only available through admin panel
});
