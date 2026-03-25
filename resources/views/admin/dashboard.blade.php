@extends('admin.layout')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('page-icon', 'speedometer2')

@section('content')
@php
    $totalBlogs = \App\Models\Blog::count();
    $publishedBlogs = \App\Models\Blog::where('status', 'published')->count();
    $draftBlogs = \App\Models\Blog::where('status', 'draft')->count();
    $recentBlogs = \App\Models\Blog::latest()->take(5)->get();
@endphp

<!-- Statistics Cards -->
<div class="row g-4 mb-4 fade-in">
    <div class="col-md-3">
        <div class="stat-card primary">
            <div class="stat-icon">
                <i class="bi bi-journal-text"></i>
            </div>
            <div class="stat-label">Total Blogs</div>
            <div class="stat-value">{{ $totalBlogs }}</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card success">
            <div class="stat-icon">
                <i class="bi bi-check-circle"></i>
            </div>
            <div class="stat-label">Published</div>
            <div class="stat-value">{{ $publishedBlogs }}</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card warning">
            <div class="stat-icon">
                <i class="bi bi-file-earmark-text"></i>
            </div>
            <div class="stat-label">Drafts</div>
            <div class="stat-value">{{ $draftBlogs }}</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card info">
            <div class="stat-icon">
                <i class="bi bi-people"></i>
            </div>
            <div class="stat-label">Authors</div>
            <div class="stat-value">{{ \App\Models\User::count() }}</div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="row g-4 mb-4 fade-in">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title mb-3" style="color: #1a4d3c;">
                    <i class="bi bi-lightning-charge text-warning"></i> Quick Actions
                </h5>
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary btn-lg">
                        <i class="bi bi-plus-circle"></i> Create New Blog
                    </a>
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-primary">
                        <i class="bi bi-list-ul"></i> View All Blogs
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title mb-3" style="color: #1a4d3c;">
                    <i class="bi bi-graph-up text-success"></i> Statistics
                </h5>
                <div class="row text-center">
                    <div class="col-6">
                        <div class="p-3">
                            <div class="h3 text-primary mb-1">{{ $publishedBlogs > 0 ? round(($publishedBlogs / max($totalBlogs, 1)) * 100) : 0 }}%</div>
                            <small class="text-muted">Published Rate</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">
                            <div class="h3 text-warning mb-1">{{ $draftBlogs > 0 ? round(($draftBlogs / max($totalBlogs, 1)) * 100) : 0 }}%</div>
                            <small class="text-muted">Draft Rate</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Blogs -->
<div class="row fade-in">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                    <i class="bi bi-clock-history"></i> Recent Blogs
                </h5>
                <a href="{{ route('admin.blogs.create') }}" class="btn btn-light btn-sm">
                    <i class="bi bi-plus-circle"></i> New Blog
                </a>
            </div>
            <div class="card-body p-0">
                @if($recentBlogs->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 5%">#</th>
                                    <th style="width: 35%">Title</th>
                                    <th style="width: 15%">Status</th>
                                    <th style="width: 20%">Author</th>
                                    <th style="width: 15%">Created</th>
                                    <th style="width: 10%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentBlogs as $index => $blog)
                                    <tr>
                                        <td class="fw-bold text-muted">{{ $index + 1 }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="fw-semibold">{{ Str::limit($blog->title, 40) }}</div>
                                                    <small class="text-muted">{{ Str::limit($blog->slug, 30) }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $blog->status === 'published' ? 'success' : 'warning' }} px-3 py-2">
                                                <i class="bi bi-{{ $blog->status === 'published' ? 'check-circle' : 'file-earmark-text' }}"></i>
                                                {{ ucfirst($blog->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; font-size: 0.85rem; font-weight: 600;">
                                                    {{ strtoupper(substr($blog->user->name, 0, 1)) }}
                                                </div>
                                                <span class="ms-2">{{ $blog->user->name }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <small class="text-muted">
                                                <i class="bi bi-calendar3"></i> {{ $blog->created_at->format('M d, Y') }}<br>
                                                <i class="bi bi-clock"></i> {{ $blog->created_at->format('h:i A') }}
                                            </small>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.blogs.show', $blog) }}" class="btn btn-sm btn-info" title="View">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-sm btn-warning" title="Edit">
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
                        <i class="bi bi-inbox" style="font-size: 3rem; color: #dee2e6;"></i>
                        <p class="text-muted mt-3 mb-4">No blogs found. Start by creating your first blog!</p>
                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
                            <i class="bi bi-plus-circle"></i> Create Your First Blog
                        </a>
                    </div>
                @endif
            </div>
            @if($recentBlogs->count() > 0)
                <div class="card-footer bg-light">
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-sm btn-outline-primary">
                        View All Blogs <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>

<style>
    .stat-card {
        position: relative;
    }
    
    .stat-card .stat-value {
        font-size: 2.5rem;
    }
    
    .card-body {
        background: #fff;
    }
    
    .card-body h5 {
        color: #1a4d3c;
    }
    
    .badge.bg-success {
        background-color: #1a4d3c !important;
    }
    
    .badge.bg-warning {
        background-color: #ffc107 !important;
        color: #000 !important;
    }
    
    @media (max-width: 768px) {
        main {
            margin-left: 0;
            padding: 1rem;
        }
        
        .sidebar {
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }
        
        .stat-card .stat-value {
            font-size: 2rem;
        }
    }
</style>
@endsection
