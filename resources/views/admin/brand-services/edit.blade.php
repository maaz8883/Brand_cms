@extends('admin.layout')

@section('title', 'Edit service page')
@section('page-title', 'Edit service page')
@section('page-icon', 'journal-richtext')

@section('content')
@php
    $raw = old('content', $service->content ?? []);
    $c = \App\Support\BrandServicePageDefaults::merge(
        \App\Support\BrandServicePageDefaults::all(),
        is_array($raw) ? $raw : []
    );
    $c = \App\Support\BrandServicePageDefaults::stripLayoutOnlyKeys($c);
@endphp

<form action="{{ route('admin.brands.services.update', [$brand, $service]) }}" method="POST" enctype="multipart/form-data" class="brand-service-form">
    @csrf
    @method('PUT')
    @include('admin.brand-services.partials.form-body', ['c' => $c, 'brand' => $brand, 'service' => $service, 'parentOptions' => $parentOptions ?? []])
</form>
@endsection
