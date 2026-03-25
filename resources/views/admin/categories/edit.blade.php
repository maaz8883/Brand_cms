@extends('admin.layout')

@section('title', 'Edit Category')
@section('page-title', 'Edit Category')
@section('page-icon', 'tags')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- Name Fields -->
            <div class="card mb-3">
                <div class="card-header bg-light">
                    <h6 class="mb-0"><i class="bi bi-translate"></i> Category Name</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name_en" class="form-label">Name (English) *</label>
                                <input type="text" class="form-control @error('name_en') is-invalid @enderror" id="name_en" name="name_en" value="{{ old('name_en', $category->name_en) }}" required>
                                @error('name_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name_de" class="form-label">Name (German / Deutsch)</label>
                                <input type="text" class="form-control @error('name_de') is-invalid @enderror" id="name_de" name="name_de" value="{{ old('name_de', $category->name_de) }}">
                                @error('name_de')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description Fields -->
            <div class="card mb-3">
                <div class="card-header bg-light">
                    <h6 class="mb-0"><i class="bi bi-card-text"></i> Description</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="description_en" class="form-label">Description (English)</label>
                                <textarea class="form-control @error('description_en') is-invalid @enderror" id="description_en" name="description_en" rows="4" placeholder="Category description in English">{{ old('description_en', $category->description_en) }}</textarea>
                                @error('description_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="description_de" class="form-label">Description (German / Deutsch)</label>
                                <textarea class="form-control @error('description_de') is-invalid @enderror" id="description_de" name="description_de" rows="4" placeholder="Category description in German">{{ old('description_de', $category->description_de) }}</textarea>
                                @error('description_de')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Update Category</button>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
