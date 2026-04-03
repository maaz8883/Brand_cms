@extends('admin.layout')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('page-icon', 'speedometer2')

@section('content')
@php
    $totalBrands = \App\Models\Brand::count();
    $totalServices = \App\Models\BrandService::count();
    $publishedServices = \App\Models\BrandService::where('is_published', true)->count();
    $rootServices = \App\Models\BrandService::whereNull('parent_id')->count();
    $recentBrands = \App\Models\Brand::withCount('services')->latest()->take(5)->get();
@endphp

<!-- Statistics Cards -->
<div class="row g-4 mb-4 fade-in">
    <div class="col-md-3">
        <div class="stat-card primary">
            <div class="stat-icon">
                <i class="bi bi-building"></i>
            </div>
            <div class="stat-label">Total Brands</div>
            <div class="stat-value">{{ $totalBrands }}</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card success">
            <div class="stat-icon">
                <i class="bi bi-diagram-3"></i>
            </div>
            <div class="stat-label">Total Services</div>
            <div class="stat-value">{{ $totalServices }}</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card warning">
            <div class="stat-icon">
                <i class="bi bi-check2-circle"></i>
            </div>
            <div class="stat-label">Published Services</div>
            <div class="stat-value">{{ $publishedServices }}</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card info">
            <div class="stat-icon">
                <i class="bi bi-layers"></i>
            </div>
            <div class="stat-label">Top-Level Services</div>
            <div class="stat-value">{{ $rootServices }}</div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="row g-4 mb-4 fade-in">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title mb-3 heading-urban">
                    <i class="bi bi-lightning-charge text-warning"></i> Quick Actions
                </h5>
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.brands.create') }}" class="btn btn-primary btn-lg">
                        <i class="bi bi-plus-circle"></i> Create New Brand
                    </a>
                    <a href="{{ route('admin.brands.index') }}" class="btn btn-outline-primary">
                        <i class="bi bi-list-ul"></i> View All Brands
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title mb-3 heading-urban">
                    <i class="bi bi-graph-up text-success"></i> Statistics
                </h5>
                <div class="row text-center">
                    <div class="col-6">
                        <div class="p-3">
                            <div class="h3 text-primary mb-1">{{ $totalServices > 0 ? round(($publishedServices / max($totalServices, 1)) * 100) : 0 }}%</div>
                            <small class="text-muted">Service Publish Rate</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">
                            <div class="h3 text-warning mb-1">{{ $totalBrands > 0 ? round(($totalServices / max($totalBrands, 1)), 1) : 0 }}</div>
                            <small class="text-muted">Avg Services / Brand</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Brands -->
<div class="row fade-in">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                    <i class="bi bi-clock-history"></i> Recent Brands
                </h5>
                <a href="{{ route('admin.brands.create') }}" class="btn btn-light btn-sm">
                    <i class="bi bi-plus-circle"></i> New Brand
                </a>
            </div>
            <div class="card-body p-0">
                @if($recentBrands->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th class="table-col-5">#</th>
                                    <th class="table-col-30">Brand Name</th>
                                    <th class="table-col-20">Slug</th>
                                    <th class="table-col-20">Services</th>
                                    <th class="table-col-15">Created</th>
                                    <th class="table-col-10">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentBrands as $index => $brand)
                                    <tr>
                                        <td class="fw-bold text-muted">{{ $index + 1 }}</td>
                                        <td>
                                            <div class="fw-semibold">{{ $brand->name }}</div>
                                        </td>
                                        <td><code>{{ $brand->slug }}</code></td>
                                        <td>
                                            <span class="badge bg-primary px-3 py-2">
                                                <i class="bi bi-diagram-3"></i>
                                                {{ $brand->services_count }}
                                            </span>
                                        </td>
                                        <td>
                                            <small class="text-muted">
                                                <i class="bi bi-calendar3"></i> {{ $brand->created_at->format('M d, Y') }}<br>
                                                <i class="bi bi-clock"></i> {{ $brand->created_at->format('h:i A') }}
                                            </small>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.brands.show', $brand) }}" class="btn btn-sm btn-info" title="View">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.brands.edit', $brand) }}" class="btn btn-sm btn-warning" title="Edit">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center p-5">
                        <i class="bi bi-inbox empty-state-icon"></i>
                        <p class="text-muted mt-3 mb-4">No brands found. Start by creating your first brand!</p>
                        <a href="{{ route('admin.brands.create') }}" class="btn btn-primary">
                            <i class="bi bi-plus-circle"></i> Create Your First Brand
                        </a>
                    </div>
                @endif
            </div>
            @if($recentBrands->count() > 0)
                <div class="card-footer bg-light">
                    <a href="{{ route('admin.brands.index') }}" class="btn btn-sm btn-outline-primary">
                        View All Brands <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
