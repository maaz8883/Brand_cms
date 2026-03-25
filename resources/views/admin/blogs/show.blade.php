@extends('admin.layout')

@section('title', 'View Blog')
@section('page-title', 'View Blog')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between mb-3">
            <div>
                <h3>{{ $blog->title_en ?? $blog->title_de }}</h3>
                @if($blog->title_de && $blog->title_en)
                    <p class="text-muted mb-0">{{ $blog->title_de }}</p>
                @endif
            </div>
            <div>
                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning">
                    <i class="bi bi-pencil"></i> Edit
                </a>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <div class="mb-2">
                    <span class="badge bg-{{ $blog->status === 'published' ? 'success' : 'warning' }}">
                        {{ ucfirst($blog->status) }}
                    </span>
                    <span class="badge bg-info ms-2">EN</span>
                    @if($blog->title_de || $blog->content_de)
                        <span class="badge bg-secondary ms-1">DE</span>
                    @endif
                    @if($blog->category)
                        <span class="badge bg-info ms-2">{{ $blog->category->name_en ?? $blog->category->name_de }}</span>
                    @endif
                </div>
                <div class="text-muted">
                    Created by {{ $blog->user->name }} on {{ $blog->created_at->format('M d, Y') }}
                </div>
            </div>
            <div class="col-md-6 text-end">
                @if($blog->author)
                    <div><strong>Author:</strong> {{ $blog->author }}</div>
                @endif
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                @if($blog->short_description_en)
                    <div class="mb-3 p-3 bg-light rounded">
                        <strong>Short Description (English):</strong><br>
                        {{ $blog->short_description_en }}
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                @if($blog->short_description_de)
                    <div class="mb-3 p-3 bg-light rounded">
                        <strong>Short Description (German):</strong><br>
                        {{ $blog->short_description_de }}
                    </div>
                @endif
            </div>
        </div>

        @if($blog->featured_image)
            <div class="mb-3">
                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="Featured Image" class="img-fluid rounded">
            </div>
        @endif

        <div class="mb-3">
            <div class="row">
                <div class="col-md-6">
                    <strong>Slug (English):</strong> {{ $blog->slug_en ?? '-' }}
                </div>
                <div class="col-md-6">
                    <strong>Slug (German):</strong> {{ $blog->slug_de ?? '-' }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                @if($blog->content_en)
                    <div class="mb-3">
                        <strong>Content (English):</strong>
                        <div class="mt-2 p-3 bg-light rounded">
                            {!! $blog->content_en !!}
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                @if($blog->content_de)
                    <div class="mb-3">
                        <strong>Content (German):</strong>
                        <div class="mt-2 p-3 bg-light rounded">
                            {!! $blog->content_de !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
