@extends('layouts.front')


@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Profile
                        </div>
                        <div class="card-body">
                            @foreach ($users as $item)
                            <form action="{{ url('update-profile/'.$item->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mt-2 form-group">
                                    <label for="">Name</label>
                                    <input type="text" value="{{ $item->name }}" class="form-control" name="name">
                                </div>
                                <div class="mt-3 form-group">
                                    <label for="email">Email</label>
                                    <input type="text" value="{{ $item->email }}" name="email" class="form-control">
                                </div>
                                <div class="mt-3 form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" value="{{ $item->phone }}" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number">
                                </div>
                                <hr>
                                <div class="mt-3 form-group">
                                    <label for="address">Address 1</label>
                                    <input type="text" value="{{ $item->address1 }}" name="address1" class="form-control" id="address1" placeholder=" ">
                                </div>
                                <div class="mt-3 form-group">
                                    <label for="address">Address 2</label>
                                    <input type="text" value="{{ $item->address2 }}" name="address2" class="form-control" id="address2" placeholder=" ">
                                </div>
                                <div class="mt-3 form-group">
                                    <label for="country">Country</label>
                                    <select class="form-select">
                                        @foreach ($countries as $country)
                                            <option value="{{$item->country}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mt-3 form-group">
                                    <label for="province">Province</label>
                                    <select class="form-select">
                                        @foreach ($provinces as $province)
                                            <option value="{{$item->province}}">{{$province->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mt-3 form-group">
                                    <label for="zipcode">Zipcode</label>
                                    <input type="text" value="{{ $item->zipcode }}" name="zipcode" class="form-control" id="zipcode" placeholder=" ">
                                </div>
                                <hr>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{{-- <div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ">
                <ul class="list-group profile-nav">
                    <li class="list-group-item"> <a href="{{ url('edit-profile/{id}') }}">Edit Profile </a> </li>
                    <li class="list-group-item"> <a href="{{ url('change-password/{id}') }}">Change Password </a> </li>
                </ul>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Dahsboard
                    </div>
                    <div class="card-body">
                        <p class="card-title">Welcome to your Dashboard</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection