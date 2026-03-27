@extends('admin.layout')

@section('title', 'Brands')
@section('page-title', 'Brands')
@section('page-icon', 'award')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h3>All Brands</h3>
    <a href="{{ route('admin.brands.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Create Brand
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
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($brands as $brand)
                        <tr>
                            <td>{{ $brand->id }}</td>
                            <td><strong>{{ $brand->name }}</strong></td>
                            <td>{{ $brand->slug }}</td>
                            <td>{{ Str::limit($brand->description ?? '', 40) }}</td>
                            <td>{{ $brand->created_at->format('M d, Y') }}</td>
                            <td>
                                <a href="{{ route('admin.brands.services.index', $brand) }}" class="btn btn-sm btn-primary" title="Service pages">
                                    <i class="bi bi-journal-richtext"></i>
                                </a>
                                <a href="{{ route('admin.brands.show', $brand) }}" class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('admin.brands.edit', $brand) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('admin.brands.destroy', $brand) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this brand?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No brands yet. <a href="{{ route('admin.brands.create') }}">Create one</a>.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            {{ $brands->links() }}
        </div>
    </div>
</div>
@endsection
