@extends('layouts.admin')


@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Edit / Update Staff</h2>
            <hr>
        </div>
        <div class="card-body">
            <form action="{{ url('update-staff/'.$users->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Id</label>
                        <input type="number" value="{{ $users->id }}" class="form-control" name="id">
                    </div>

                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" value="{{ $users->name }}" class="form-control" name="name">
                    </div>

                    <div class="col-md-6">
                        <label for="">Email</label>
                        <input type="email" value="{{ $users->email }}" rows="3" class="form-control" name="email">
                    </div>

                    <div class="col-md-6">
                        <label for="">Role As</label>
                        <input type="number" value="{{ $users->role_as }}" class="form-control" name="role_as">
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
@endsection 