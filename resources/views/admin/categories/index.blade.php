@extends('admin.layout')

@section('title', 'Categories')
@section('page-title', 'Categories Management')
@section('page-icon', 'tags')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h3>All Categories</h3>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Create New Category
    </a>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Blogs Count</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>
                                <strong>{{ $category->name_en }}</strong>
                                @if($category->name_de)
                                    <br><small class="text-muted">{{ $category->name_de }}</small>
                                @endif
                            </td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                {{ Str::limit($category->description_en ?? '', 30) }}
                                @if($category->description_de)
                                    <br><small class="text-muted">{{ Str::limit($category->description_de, 30) }}</small>
                                @endif
                            </td>
                            <td>
                                <span class="badge bg-primary">{{ $category->blogs->count() }}</span>
                            </td>
                            <td>{{ $category->created_at->format('M d, Y') }}</td>
                            <td>
                                <a href="{{ route('admin.categories.show', $category) }}" class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure? This will not delete associated blogs.')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No categories found. <a href="{{ route('admin.categories.create') }}">Create one!</a></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            {{ $categories->links() }}
        </div>
    </div>
</div>
@endsection
