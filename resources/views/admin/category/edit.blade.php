@extends('layouts.admin')


@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Edit / Update Category</h2>
            <hr>
        </div>
        <div class="card-body">
            <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" value="{{ $category->name }}" class="form-control" name="name">
                        {{-- value="{{ $category->name }}" --}}
                    </div>

                    <div class="col-md-6">
                        <label for="">Slug</label>
                        <input type="text" value="{{ $category->slug }}" class="form-control" name="slug">
                        {{-- value="{{ $category->slug }}" --}}
                    </div>

                    <div class="col-md-6">
                        <label for="">Description</label>
                        <input type="text" value="{{ $category->description }}" rows="3" class="form-control" name="description">
                        {{-- {{ $category->description }} --}}
                    </div>

                    <div class="col-md-6">
                        <label for="">Meta Title</label>
                        <input type="text" value="{{ $category->meta_title }}" class="form-control" name="meta_title">
                        {{-- value="{{ $category->meta_title }}" --}}
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="">Meta Keywords</label>
                        <input type="text" value="{{ $category->meta_keywords }}" rows="3" class="form-control" name="meta_keywords">
                        {{-- {{ $category->meta_keywords }} --}}
                    </div>

                    <div class="col-md-6 ">
                        <label for="">Meta Descriptions</label>
                        <input type="text" value="{{ $category->meta_descrip }}" rows="3" class="form-control" name="meta_description">
                        {{-- {{ $category->meta_descrip }} --}}
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" {{ $category->status == "1" ? 'checked':'' }} name="status">
                        {{-- {{ $category->status == "1" ? 'checked':'' }} --}}
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox" {{ $category->popular == "1" ? 'checked':'' }} name="popular">
                        {{-- {{ $category->popular == "1" ? 'checked':'' }} --}}
                    </div>
                    @if ($category->image)
                        <img src="{{ asset('assets/uploads/category/'.$category->image) }}" class="cate-image" alt="Category Image">
                    @endif
                    
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
@endsection 