@extends('admin.layout')

@section('title', 'Brand')
@section('page-title', 'Brand Details')
@section('page-icon', 'award')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between mb-3">
            <div>
                <h3>{{ $brand->name }}</h3>
                <p class="text-muted mb-0">Slug: <code>{{ $brand->slug }}</code></p>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <a href="{{ route('admin.brands.services.index', $brand) }}" class="btn btn-primary">
                    <i class="bi bi-journal-richtext"></i> Service pages
                </a>
                <a href="{{ route('admin.brands.edit', $brand) }}" class="btn btn-warning">
                    <i class="bi bi-pencil"></i> Edit
                </a>
                <a href="{{ route('admin.brands.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>

        @if($brand->description)
            <div class="mb-3">
                <strong>Description</strong>
                <div class="mt-2 p-3 bg-light rounded">{{ $brand->description }}</div>
            </div>
        @endif

        <div class="mb-2">
            <strong>Created:</strong> {{ $brand->created_at->format('M d, Y H:i') }}
        </div>
        <div>
            <strong>Updated:</strong> {{ $brand->updated_at->format('M d, Y H:i') }}
        </div>

        <div class="mt-4">
            <h5>Blogs for this brand ({{ $brand->blogs->count() }})</h5>
            @if($brand->blogs->isNotEmpty())
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($brand->blogs as $blog)
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.blogs.show', $blog) }}">{{ $blog->title_en }}</a>
                                    </td>
                                    <td>
                                        <span class="badge bg-{{ $blog->status === 'published' ? 'success' : 'warning' }}">
                                            {{ ucfirst($blog->status) }}
                                        </span>
                                    </td>
                                    <td>{{ $blog->created_at->format('M d, Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-muted mb-0">No blogs linked to this brand yet.</p>
            @endif
        </div>
    </div>
</div>
@endsection
