@extends('admin.layout')

@section('title', 'Brand services')
@section('page-title', 'Service pages: ' . $brand->name)
@section('page-icon', 'journal-richtext')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
    <div>
        <a href="{{ route('admin.brands.show', $brand) }}" class="btn btn-outline-secondary btn-sm mb-2">
            <i class="bi bi-arrow-left"></i> Brand
        </a>
        <h3 class="mb-0">Service landing pages</h3>
        <p class="text-muted mb-0 small">Brand: <strong>{{ $brand->name }}</strong> (<code>{{ $brand->slug }}</code>)</p>
    </div>
    <a href="{{ route('admin.brands.services.create', $brand) }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> New service page
    </a>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Path</th>
                        <th>Slug</th>
                        <th>Order</th>
                        <th>Status</th>
                        <th>Updated</th>
                        <th>API</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($services as $service)
                        @php
                            $servicePath = collect($service->breadcrumbTrail())->pluck('slug')->implode('/');
                        @endphp
                        <tr>
                            <td><strong>{{ $service->title }}</strong></td>
                            <td><code>{{ $service->slug }}</code></td>
                            <td>{{ $service->sort_order }}</td>
                            <td>
                                @if($service->is_published)
                                    <span class="badge bg-success">Published</span>
                                @else
                                    <span class="badge bg-secondary">Draft</span>
                                @endif
                            </td>
                            <td>{{ $service->updated_at->format('M d, Y') }}</td>
                            <td>
                                <small class="text-muted">GET</small>
                                <code class="small d-block">/api/v1/brands/{{ $brand->slug }}/services/{{ $servicePath }}</code>
                            </td>
                            <td class="text-nowrap">
                                <a href="{{ route('admin.brands.services.children', [$brand, $service]) }}" class="btn btn-sm btn-outline-primary" title="Open child services">
                                    <i class="bi bi-diagram-3"></i> Sub
                                </a>
                                <a href="{{ route('admin.brands.services.edit', [$brand, $service]) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('admin.brands.services.destroy', [$brand, $service]) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this service page and all nested sub-services?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No service pages yet. <a href="{{ route('admin.brands.services.create', $brand) }}">Create one</a> (top-level or nested under a parent).</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-3">{{ $services->links() }}</div>
    </div>
</div>
@endsection
