@extends('layouts.admin')


@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Edit / Update Products</h2>
            <hr>
        </div>
        <div class="card-body">
            <form action="{{ url('update-products/'.$products->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select">
                            <option value="">{{ $products->category->name}}</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" class="form-control" value="{{ $products->name }}" name="name">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text"  class="form-control" value="{{ $products->slug }}" name="slug"> 
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Small Description</label>
                        <input type="text" rows="3" class="form-control" value="{{ $products->small_description }}" name="small_description">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <input type="text" rows="3" class="form-control" value="{{ $products->description }}" name="description">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Original Price</label>
                        <input type="number" class="form-control" value="{{ $products->original_price }}" name="original_price">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Selling Price</label>
                        <input type="number" class="form-control" value="{{ $products->selling_price }}" name="selling_price">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Tax</label>
                        <input type="number" class="form-control" rows="3" value="{{ $products->tax }}" name="tax">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Quantity</label>
                        <input type="number" class="form-control" value="{{ $products->qty }}" name="qty">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" value="{{ $products->status == "1" ? 'checked' : '' }}" name="status">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <input type="checkbox" value="{{ $products->trending == "1" ? 'checked' : '' }}" name="trending">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text"  class="form-control" value="{{ $products->meta_title }}" name="meta_title">
                    </div>
                    
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <input type="text" rows="3" class="form-control" value="{{ $products->meta_keywords }}" name="meta_keywords">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Meta Descriptions</label>
                        <input type="text" rows="3" class="form-control" value="{{ $products->meta_description }}" name="meta_description">
                        
                    </div>

                    @if ($products->image)
                        <img src="{{ asset('assets/uploads/products/'.$products->image) }}" alt="">
                    @endif
                    
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
@endsection 