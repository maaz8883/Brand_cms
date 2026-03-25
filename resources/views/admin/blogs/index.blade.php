@extends('admin.layout')

@section('title', 'Blogs')
@section('page-title', 'Blogs Management')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h3>All Blogs</h3>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Create New Blog
    </a>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Language</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($blogs as $blog)
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td>
                                <strong>{{ $blog->title_en ?? $blog->title_de }}</strong>
                                @if($blog->title_de && $blog->title_en)
                                    <br><small class="text-muted">{{ $blog->title_de }}</small>
                                @endif
                            </td>
                            <td>
                                @if($blog->category)
                                    <span class="badge bg-info">{{ $blog->category->name_en ?? $blog->category->name_de }}</span>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td>{{ $blog->author ?? $blog->user->name }}</td>
                            <td>
                                <span class="badge bg-info">EN</span>
                                @if($blog->title_de || $blog->content_de)
                                    <span class="badge bg-secondary ms-1">DE</span>
                                @endif
                            </td>
                            <td>
                                <span class="badge bg-{{ $blog->status === 'published' ? 'success' : 'warning' }}">
                                    {{ ucfirst($blog->status) }}
                                </span>
                            </td>
                            <td>{{ $blog->created_at->format('M d, Y') }}</td>
                            <td>
                                <a href="{{ route('admin.blogs.show', $blog) }}" class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">No blogs found. <a href="{{ route('admin.blogs.create') }}">Create one!</a></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            {{ $blogs->links() }}
        </div>
    </div>
</div>
@endsection
