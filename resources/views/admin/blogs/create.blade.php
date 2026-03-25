@extends('admin.layout')

@section('title', 'Create Blog')
@section('page-title', 'Create New Blog')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Title Fields -->
            <div class="card mb-3">
                <div class="card-header bg-light">
                    <h6 class="mb-0"><i class="bi bi-translate"></i> Title</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title_en" class="form-label">Title (English) *</label>
                                <input type="text" class="form-control @error('title_en') is-invalid @enderror" id="title_en" name="title_en" value="{{ old('title_en') }}" required>
                                @error('title_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title_de" class="form-label">Title (German / Deutsch)</label>
                                <input type="text" class="form-control @error('title_de') is-invalid @enderror" id="title_de" name="title_de" value="{{ old('title_de') }}">
                                @error('title_de')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Short Description Fields -->
            <div class="card mb-3">
                <div class="card-header bg-light">
                    <h6 class="mb-0"><i class="bi bi-card-text"></i> Short Description</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="short_description_en" class="form-label">Short Description (English)</label>
                                <textarea class="form-control @error('short_description_en') is-invalid @enderror" id="short_description_en" name="short_description_en" rows="3" placeholder="Brief description in English">{{ old('short_description_en') }}</textarea>
                                @error('short_description_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="short_description_de" class="form-label">Short Description (German / Deutsch)</label>
                                <textarea class="form-control @error('short_description_de') is-invalid @enderror" id="short_description_de" name="short_description_de" rows="3" placeholder="Brief description in German">{{ old('short_description_de') }}</textarea>
                                @error('short_description_de')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Fields -->
            <div class="card mb-3">
                <div class="card-header bg-light">
                    <h6 class="mb-0"><i class="bi bi-file-text"></i> Content</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="content_en" class="form-label">Content (English) *</label>
                                <div id="editor_en" style="min-height: 300px;"></div>
                                <input type="hidden" id="content_en" name="content_en" value="{{ old('content_en') }}" required>
                                @error('content_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="content_de" class="form-label">Content (German / Deutsch)</label>
                                <div id="editor_de" style="min-height: 300px;"></div>
                                <input type="hidden" id="content_de" name="content_de" value="{{ old('content_de') }}">
                                @error('content_de')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name_en }} @if($category->name_de) / {{ $category->name_de }} @endif
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
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

<!-- Quill.js CSS -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<!-- Quill.js JS -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
    // Initialize Quill editor for English
    var quill_en = new Quill('#editor_en', {
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
        placeholder: 'Write your blog content in English...'
    });

    // Initialize Quill editor for German
    var quill_de = new Quill('#editor_de', {
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
        placeholder: 'Write your blog content in German...'
    });

    // Set initial content if exists
    @if(old('content_en'))
        quill_en.root.innerHTML = {!! json_encode(old('content_en', '')) !!};
    @endif

    @if(old('content_de'))
        quill_de.root.innerHTML = {!! json_encode(old('content_de', '')) !!};
    @endif

    // Update hidden inputs on text change
    quill_en.on('text-change', function() {
        document.getElementById('content_en').value = quill_en.root.innerHTML;
    });

    quill_de.on('text-change', function() {
        document.getElementById('content_de').value = quill_de.root.innerHTML;
    });

    // Also update on form submit
    document.querySelector('form').addEventListener('submit', function(e) {
        document.getElementById('content_en').value = quill_en.root.innerHTML;
        document.getElementById('content_de').value = quill_de.root.innerHTML;
    });
</script>

<style>
    .ql-container {
        font-size: 16px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    .ql-editor {
        min-height: 300px;
    }
    
    .ql-toolbar {
        border-top: 1px solid #ccc;
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
        border-radius: 8px 8px 0 0;
        background: #f8f9fa;
    }
    
    .ql-container {
        border-bottom: 1px solid #ccc;
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
        border-radius: 0 0 8px 8px;
    }
    
    .ql-toolbar .ql-stroke {
        stroke: #1a4d3c;
    }
    
    .ql-toolbar .ql-fill {
        fill: #1a4d3c;
    }
    
    .ql-toolbar button:hover,
    .ql-toolbar button.ql-active {
        color: #1a4d3c;
    }
    
    .ql-toolbar button:hover .ql-stroke,
    .ql-toolbar button.ql-active .ql-stroke {
        stroke: #1a4d3c;
    }
    
    .ql-toolbar button:hover .ql-fill,
    .ql-toolbar button.ql-active .ql-fill {
        fill: #1a4d3c;
    }
</style>
@endsection
