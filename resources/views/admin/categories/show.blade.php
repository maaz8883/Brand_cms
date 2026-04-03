@extends('admin.layout')

@section('title', 'View Category')
@section('page-title', 'View Category')
@section('page-icon', 'tags')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between mb-3">
            <div>
                <h3>{{ $category->name_en }}</h3>
                @if($category->name_de)
                    <p class="text-muted mb-0">{{ $category->name_de }}</p>
                @endif
            </div>
            <div>
                <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-warning">
                    <i class="bi bi-pencil"></i> Edit
                </a>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>

        <div class="mb-3">
            <strong>Slug:</strong> {{ $category->slug }}
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                @if($category->description_en)
                    <div class="mb-3">
                        <strong>Description (English):</strong>
                        <div class="mt-2 p-3 bg-light rounded">
                            {{ $category->description_en }}
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                @if($category->description_de)
                    <div class="mb-3">
                        <strong>Description (German):</strong>
                        <div class="mt-2 p-3 bg-light rounded">
                            {{ $category->description_de }}
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <strong>Created:</strong> {{ $category->created_at->format('M d, Y') }}
        </div>

        <div class="mb-3">
            <strong>Updated:</strong> {{ $category->updated_at->format('M d, Y') }}
        </div>

        <div class="mt-4">
            <h5>Blogs in this Category ({{ $category->blogs->count() }})</h5>
            @if($category->blogs->count() > 0)
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
                            @foreach($category->blogs as $blog)
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
                <p class="text-muted">No blogs in this category yet.</p>
            @endif
        </div>
    </div>
</div>
@endsection
