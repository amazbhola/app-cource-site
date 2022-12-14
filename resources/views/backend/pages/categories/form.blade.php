@extends('backend.layouts.master')
@section('title')
    New Categories
@endsection
@section('bradcrumb')
    @include('backend.components.bradcrump')
@endsection
@section('admin_content')
    <div class="card p-4">
        <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="category_name">New Category</label>
            <div class="row">
                <div class="col-12 col-md-6">
                    <label for="">Cateogry Name <span class="text-danger">*</span></label>
                    <input class="form-control" id="category_name" name="name" type="text" placeholder="Category Name"
                        required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="">Parent Category <span class="text-info">(Optional)</span></label><br>
                    <select name="parent_id" id="parent_id">
                        <option value="">Select Parent Category</option>
                        {!! $printableCategory !!}
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <label for="file">Upload Image</label>
                    <input class="form-control" type="file" name="logo" id="logo">
                </div>
                <div class="col-12 col-md-6">
                    <label for="priority">Priority<span class="text-info">(Optional)</span></label>
                    <input class="form-control" type="number" name="priority" id="priority">
                </div>
            </div>
            <div class="form-check form-switch my-3">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"
                    name="enable_homepage" checked>
                <label class="form-check-label" for="flexSwitchCheckDefault">Unable Homepage</label>
            </div>
            <div class="mb-0"><label for="editor">Description <span class="text-info">(Optional)</span></label>
                <textarea class="form-control" id="editor" rows="3" name="description"></textarea>
            </div>
            <div class="my-3">
                <a class="btn btn-dark text-white" href="{{ route('admin.category.index') }}">Cancel</a>
                <button class="btn btn-primary text-white" type="submit">Save</button>
            </div>
        </form>


    </div>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
