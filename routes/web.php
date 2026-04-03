<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\BrandServiceController;
use App\Http\Controllers\Admin\ProfileController;

Route::get('/', function () {
    return redirect()->route('admin.login');
});

// Admin Authentication Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    
    // Protected Admin Routes
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        
        // Profile Routes
        Route::get('/profile', [ProfileController::class, 'show'])->name('admin.profile.show');
        Route::put('/profile', [ProfileController::class, 'updateProfile'])->name('admin.profile.update');
        Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('admin.profile.password');
        
        // Brands Routes
        Route::resource('brands', BrandController::class)->names([
            'index' => 'admin.brands.index',
            'create' => 'admin.brands.create',
            'store' => 'admin.brands.store',
            'show' => 'admin.brands.show',
            'edit' => 'admin.brands.edit',
            'update' => 'admin.brands.update',
            'destroy' => 'admin.brands.destroy',
        ]);

        Route::resource('brands.services', BrandServiceController::class)
            ->except(['show'])
            ->names([
                'index' => 'admin.brands.services.index',
                'create' => 'admin.brands.services.create',
                'store' => 'admin.brands.services.store',
                'edit' => 'admin.brands.services.edit',
                'update' => 'admin.brands.services.update',
                'destroy' => 'admin.brands.services.destroy',
            ]);
        Route::get('brands/{brand}/services/{service}/children', [BrandServiceController::class, 'children'])
            ->name('admin.brands.services.children');

        Route::resource('blogs', BlogController::class)->names([
            'index' => 'admin.blogs.index',
            'create' => 'admin.blogs.create',
            'store' => 'admin.blogs.store',
            'show' => 'admin.blogs.show',
            'edit' => 'admin.blogs.edit',
            'update' => 'admin.blogs.update',
            'destroy' => 'admin.blogs.destroy',
        ]);
    });
});
