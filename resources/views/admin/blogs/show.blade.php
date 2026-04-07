@extends('admin.layout')

@section('title', 'View Blog')
@section('page-title', 'View Blog')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between mb-3">
            <div>
                <h3>{{ $blog->title }}</h3>
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
                <div class="text-muted">
                    Created on {{ $blog->created_at ? $blog->created_at->format('M d, Y') : '-' }}
                </div>
            </div>
            <div class="col-md-6 text-end">
                @if($blog->brand)
                    <div><strong>Brand:</strong> {{ $blog->brand }}</div>
                @endif
            </div>
        </div>

        @if($blog->meta_title || $blog->meta_description || $blog->keywords)
            <div class="mb-3 p-3 bg-light rounded">
                @if($blog->meta_title)
                    <div><strong>Meta title:</strong> {{ $blog->meta_title }}</div>
                @endif
                @if($blog->meta_description)
                    <div class="mt-2"><strong>Meta description:</strong> {{ $blog->meta_description }}</div>
                @endif
                @if($blog->keywords)
                    <div class="mt-2"><strong>Keywords:</strong> {{ $blog->keywords }}</div>
                @endif
            </div>
        @endif

        @if($blog->image)
            @php
                $imageUrl = null;
                if (\Illuminate\Support\Str::startsWith($blog->image, ['http://', 'https://'])) {
                    $imageUrl = $blog->image;
                } elseif (\Illuminate\Support\Facades\Storage::disk('public')->exists('blogs/' . $blog->image)) {
                    $imageUrl = asset('storage/blogs/' . $blog->image);
                } elseif (\Illuminate\Support\Facades\Storage::disk('public')->exists($blog->image)) {
                    $imageUrl = asset('storage/' . $blog->image);
                } else {
                    $imageUrl = asset($blog->image);
                }
            @endphp
            <div class="mb-3">
                <strong>Image:</strong>
                <div class="mt-2">
                    <img src="{{ $imageUrl }}" alt="{{ $blog->title }}" class="img-fluid rounded" style="max-height: 320px;">
                </div>
            </div>
        @endif

        <div class="mb-3">
            <strong>Slug:</strong> {{ $blog->slug ?? '-' }}
        </div>

        @if($blog->content)
            <div class="mb-3">
                <strong>Content</strong>
                <div class="mt-2 p-3 bg-light rounded">
                    {!! $blog->content !!}
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
