@extends('backend.layouts.master')
@section('title')
    Categories
@endsection
@section('admin_content')
    {{ $dataTable->table() }}
@endsection

@section('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endsection
