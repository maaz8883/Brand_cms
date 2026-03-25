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
            <div>
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
    </div>
</div>
@endsection
