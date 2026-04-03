@extends('admin.layout')

@section('title', 'Create Blog')
@section('page-title', 'Create New Blog')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title *</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="short_description" class="form-label">Short description</label>
                <textarea class="form-control @error('short_description') is-invalid @enderror" id="short_description" name="short_description" rows="3" placeholder="Brief summary for listings">{{ old('short_description') }}</textarea>
                @error('short_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content *</label>
                <div id="editor" class="quill-editor-host"></div>
                <input type="hidden" id="content" name="content" value="{{ old('content') }}" required>
                @error('content')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="brand_id" class="form-label">Brand</label>
                        <select class="form-select @error('brand_id') is-invalid @enderror" id="brand_id" name="brand_id">
                            <option value="">Select brand</option>
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                                    {{ $brand->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('brand_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{ old('author') }}" placeholder="Author name">
                        @error('author')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="featured_image" class="form-label">Featured Image</label>
                <input type="file" class="form-control @error('featured_image') is-invalid @enderror" id="featured_image" name="featured_image" accept="image/*">
                @error('featured_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status *</label>
                <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                    <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Published</option>
                </select>
                @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Create Blog</button>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                ['bold', 'italic', 'underline', 'strike'],
                [{ 'color': [] }, { 'background': [] }],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'align': [] }],
                ['link', 'image', 'video'],
                ['blockquote', 'code-block'],
                ['clean']
            ]
        },
        placeholder: 'Write your blog content...'
    });

    @if(old('content'))
        quill.root.innerHTML = {!! json_encode(old('content', '')) !!};
    @endif

    quill.on('text-change', function() {
        document.getElementById('content').value = quill.root.innerHTML;
    });

    document.querySelector('form').addEventListener('submit', function() {
        document.getElementById('content').value = quill.root.innerHTML;
    });
</script>
@endsection
