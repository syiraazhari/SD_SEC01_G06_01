@extends('layouts.admin')


@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Add Category</h2>
            <hr>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                        {{-- value="{{ $category->name }}" --}}
                    </div>

                    <div class="col-md-6">
                        <label for="">Slug</label>
                        <input type="text"  class="form-control" name="slug">
                        {{-- value="{{ $category->slug }}" --}}
                    </div>

                    <div class="col-md-6">
                        <label for="">Description</label>
                        <input type="text" rows="3" class="form-control" name="description">
                        {{-- {{ $category->description }} --}}
                    </div>

                    <div class="col-md-6">
                        <label for="">Meta Title</label>
                        <input type="text"  class="form-control" name="meta_title">
                        {{-- value="{{ $category->meta_title }}" --}}
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="">Meta Keywords</label>
                        <input type="text" rows="3" class="form-control" name="meta_keywords">
                        {{-- {{ $category->meta_keywords }} --}}
                    </div>

                    <div class="col-md-6 ">
                        <label for="">Meta Descriptions</label>
                        <input type="text" rows="3" class="form-control" name="meta_description">
                        {{-- {{ $category->meta_descrip }} --}}
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status">
                        {{-- {{ $category->status == "1" ? 'checked':'' }} --}}
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox"  name="popular">
                        {{-- {{ $category->popular == "1" ? 'checked':'' }} --}}
                    </div>
                    
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