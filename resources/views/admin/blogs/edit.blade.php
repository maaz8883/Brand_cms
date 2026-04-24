@extends('admin.layout')

@section('title', 'Edit Blog')
@section('page-title', 'Edit Blog')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/JeremyFagis/dropify/dist/css/dropify.min.css">
@endpush

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title *</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $blog->title) }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="meta_title" class="form-label">Meta Title</label>
                <input type="text" class="form-control @error('meta_title') is-invalid @enderror" id="meta_title" name="meta_title" value="{{ old('meta_title', $blog->meta_title) }}">
                @error('meta_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="meta_description" class="form-label">Meta Description</label>
                <textarea class="form-control @error('meta_description') is-invalid @enderror" id="meta_description" name="meta_description" rows="3">{{ old('meta_description', $blog->meta_description) }}</textarea>
                @error('meta_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $blog->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="keywords" class="form-label">Keywords</label>
                <input type="text" class="form-control @error('keywords') is-invalid @enderror" id="keywords" name="keywords" value="{{ old('keywords', $blog->keywords) }}">
                @error('keywords')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content *</label>
                <div id="editor" class="quill-editor-host"></div>
                <input type="hidden" id="content" name="content" value="{{ old('content', $blog->content) }}" required>
                @error('content')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="brand_id" class="form-label">Brand</label>
                <select class="form-select @error('brand_id') is-invalid @enderror" id="brand_id" name="brand_id">
                    <option value="">Select Brand</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}" @selected((string) old('brand_id', $blog->brand_id) === (string) $brand->id)>
                            {{ $brand->name }}
                        </option>
                    @endforeach
                </select>
                @error('brand_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                @php
                    $existingImage = old('image') ?: $blog->image;
                    $existingImageUrl = null;
                    if (!empty($existingImage)) {
                        if (\Illuminate\Support\Str::startsWith($existingImage, ['http://', 'https://'])) {
                            $existingImageUrl = $existingImage;
                        } elseif (\Illuminate\Support\Facades\Storage::disk('public')->exists('blogs/' . $existingImage)) {
                            $existingImageUrl = asset('storage/blogs/' . $existingImage);
                        } elseif (\Illuminate\Support\Facades\Storage::disk('public')->exists($existingImage)) {
                            $existingImageUrl = asset('storage/' . $existingImage);
                        } else {
                            $existingImageUrl = asset($existingImage);
                        }
                    }
                @endphp
                <input
                    type="file"
                    class="dropify @error('image') is-invalid @enderror"
                    id="image"
                    name="image"
                    accept="image/*"
                    @if($existingImageUrl) data-default-file="{{ $existingImageUrl }}" @endif
                >
                @error('image')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image_alt_tag" class="form-label">Image Alt Tag</label>
                <input type="text" class="form-control @error('image_alt_tag') is-invalid @enderror" id="image_alt_tag" name="image_alt_tag" value="{{ old('image_alt_tag', $blog->image_alt_tag) }}">
                @error('image_alt_tag')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="card mb-4">
                <div class="card-header"><strong>Structured data (JSON-LD)</strong></div>
                <div class="card-body">
                    <p class="text-muted small mb-2">
                        Optional. Paste valid JSON-LD here to <strong>replace</strong> the auto-generated Organization / Service / Breadcrumb script on the public site for this page only.
                        Leave empty to keep the default generated schema. Typical shape: <code>{"@context":"https://schema.org","@graph":[...]}</code>
                    </p>
                    <label class="form-label">Manual JSON-LD</label>
                    <textarea
                        name="json_ld"
                        class="form-control font-monospace small @error('json_ld') is-invalid @enderror"
                        rows="10"
                        spellcheck="false"
                        placeholder='{ "@context": "https://schema.org", "@graph": [ ... ] }'
                    >{{ old('json_ld', $blog->json_ld) }}</textarea>
                    @error('json_ld')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Update Blog</button>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/JeremyFagis/dropify/dist/js/dropify.min.js"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    $(function () {
        $('#brand_id').select2({
            theme: 'bootstrap-5',
            placeholder: 'Select Brand',
            allowClear: true
        });

        $('.dropify').dropify();
    });

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
        quill.root.innerHTML = {!! json_encode(old('content')) !!};
    @else
        quill.root.innerHTML = {!! json_encode($blog->content ?? '') !!};
    @endif

    quill.on('text-change', function() {
        document.getElementById('content').value = quill.root.innerHTML;
    });

    document.querySelector('form').addEventListener('submit', function() {
        document.getElementById('content').value = quill.root.innerHTML;
    });
</script>
@endsection
