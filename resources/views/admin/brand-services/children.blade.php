@extends('admin.layout')

@section('title', 'Sub-services')
@section('page-title', 'Sub-services: ' . $service->title)
@section('page-icon', 'diagram-3')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
    <div>
        <a href="{{ route('admin.brands.services.index', $brand) }}" class="btn btn-outline-secondary btn-sm mb-2">
            <i class="bi bi-arrow-left"></i> Back
        </a>
        <h3 class="mb-0">{{ $service->title }}</h3>
        <p class="text-muted mb-0 small">
            Parent slug: <code>{{ $service->slug }}</code>
        </p>
    </div>
    <a href="{{ route('admin.brands.services.create', $brand) }}?parent_id={{ $service->id }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Add new sub-service
    </a>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Order</th>
                        <th>Status</th>
                        <th>Updated</th>
                        <th>API</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($children as $child)
                        @php
                            $servicePath = collect($child->breadcrumbTrail())->pluck('slug')->implode('/');
                        @endphp
                        <tr>
                            <td><strong>{{ $child->title }}</strong></td>
                            <td><code>{{ $child->slug }}</code></td>
                            <td>{{ $child->sort_order }}</td>
                            <td>
                                @if($child->is_published)
                                    <span class="badge bg-success">Published</span>
                                @else
                                    <span class="badge bg-secondary">Draft</span>
                                @endif
                            </td>
                            <td>{{ $child->updated_at->format('M d, Y') }}</td>
                            <td>
                                <small class="text-muted">GET</small>
                                <code class="small d-block">/api/v1/brands/{{ $brand->slug }}/services/{{ $servicePath }}</code>
                            </td>
                            <td class="text-nowrap">
                                <a href="{{ route('admin.brands.services.children', [$brand, $child]) }}" class="btn btn-sm btn-outline-primary" title="Open child services">
                                    <i class="bi bi-diagram-3"></i> Sub
                                </a>
                                <a href="{{ route('admin.brands.services.edit', [$brand, $child]) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('admin.brands.services.destroy', [$brand, $child]) }}" method="POST" class="d-inline js-admin-delete-form" data-swal-title="Delete service page?" data-swal-text="This will remove the service page and all nested sub-services.">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                No sub-services yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-3">{{ $children->links() }}</div>
    </div>
</div>
@endsection
