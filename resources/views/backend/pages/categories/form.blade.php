@extends('backend.layouts.master')
@section('title')
    New Categories
@endsection
@section('admin_content')
    <div class="card p-4">
        <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3"><label for="category_name">New Category</label>
                <input class="form-control" id="category_name" name="name" type="text" placeholder="Category Name">
            </div>
            {{-- <div class="mb-3">
                <select name="" id="">
                    <option value="">Item One</option>
                </select>
            </div>
            <div class="mb-3">
                <input class="form-control" type="file" name="logo" id="">
            </div> --}}
            <div class="mb-0"><label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>
            <div class="my-3">
                <a class="btn btn-dark text-white" href="{{ route('admin.category.index') }}">Cancel</a>
                <button class="btn btn-primary text-white" type="submit">Save</button>
            </div>
        </form>


    </div>
@endsection

@section('scripts')
    {{-- {{ $dataTable->scripts(attributes: ['type' => 'module']) }} --}}
@endsection
