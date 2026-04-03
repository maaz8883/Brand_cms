@extends('admin.layout')

@section('title', 'View Blog')
@section('page-title', 'View Blog')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between mb-3">
            <div>
                <h3>{{ $blog->title_en }}</h3>
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
                    @if($blog->brand)
                        <span class="badge bg-info ms-2">{{ $blog->brand->name }}</span>
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

        @if($blog->short_description_en)
            <div class="mb-3 p-3 bg-light rounded">
                <strong>Short description</strong><br>
                {{ $blog->short_description_en }}
            </div>
        @endif

        @if($blog->featured_image)
            <div class="mb-3">
                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="Featured Image" class="img-fluid rounded">
            </div>
        @endif

        <div class="mb-3">
            <strong>Slug:</strong> {{ $blog->slug_en ?? '-' }}
        </div>

        @if($blog->content_en)
            <div class="mb-3">
                <strong>Content</strong>
                <div class="mt-2 p-3 bg-light rounded">
                    {!! $blog->content_en !!}
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
