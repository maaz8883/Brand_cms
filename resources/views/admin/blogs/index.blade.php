@extends('admin.layout')

@section('title', 'Blogs')
@section('page-title', 'Blogs Management')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h3>All Blogs</h3>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Create New Blog
    </a>
</div>

<div class="card">
    <div class="card-body">
        <div class="row g-2 align-items-end mb-3">
            <div class="col-md-4">
                <label for="filter_brand_id" class="form-label">Brand</label>
                <select id="filter_brand_id" class="form-select">
                    <option value="">All Brands</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label for="filter_date_from" class="form-label">Created From</label>
                <input type="date" id="filter_date_from" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="filter_date_to" class="form-label">Created To</label>
                <input type="date" id="filter_date_to" class="form-control">
            </div>
            <div class="col-md-2">
                <button type="button" id="filters_reset" class="btn btn-outline-secondary w-100">Reset</button>
            </div>
        </div>

        <div class="table-responsive">
            <table id="blogs-table" class="table table-striped table-hover w-100">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>Brand</th>
                        <th>Image</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(function () {
        $('#filter_brand_id').select2({
            theme: 'bootstrap-5',
            placeholder: 'All Brands',
            allowClear: true
        });

        const table = $('#blogs-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route('admin.blogs.index') }}',
                data: function (d) {
                    d.brand_id = $('#filter_brand_id').val();
                    d.date_from = $('#filter_date_from').val();
                    d.date_to = $('#filter_date_to').val();
                }
            },
            columns: [
                { data: 'serial', name: 'id' },
                { data: 'title', name: 'title' },
                { data: 'brand', name: 'brand' },
                { data: 'image', name: 'image', orderable: false, searchable: false },
                { data: 'created_at', name: 'created_at' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ],
            order: [[0, 'desc']],
            pageLength: 10,
            lengthMenu: [10, 25, 50, 100],
            columnDefs: [
                { targets: [4, 5], className: 'text-nowrap' }
            ],
            language: {
                emptyTable: 'No blogs found.'
            }
        });

        $('#filter_brand_id, #filter_date_from, #filter_date_to').on('change', function () {
            table.ajax.reload();
        });

        $('#filters_reset').on('click', function () {
            $('#filter_brand_id').val('').trigger('change');
            $('#filter_date_from').val('');
            $('#filter_date_to').val('');
            table.ajax.reload();
        });
    });
</script>
@endsection
