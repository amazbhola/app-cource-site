@extends('backend.layouts.master')
@section('title')
    New Categories
@endsection
@section('admin_content')
    <div class="card p-4">
        <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3"><label for="category_name">New Category</label>
                <label for="">Cateogry Name <span class="text-danger">*</span></label>
                <input class="form-control" id="category_name" name="name" type="text" placeholder="Category Name"
                    required>
            </div>
            <div class="mb-3">
                <label for="">Parent Category <span class="text-info">(Optional)</span></label><br>
                <select name="parent_id" id="parent_id">
                    <option value="">Select Parent Category</option>
                    {!! $printableCategory !!}
                </select>
            </div>
            <div class="mb-3">

                <div class="col-md-3">
                    <label for="file">Upload Image</label>
                </div>
                <div class="col-md-3">
                    <input class="form-control" type="file" name="logo" id="logo">
                </div>

            </div>
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
