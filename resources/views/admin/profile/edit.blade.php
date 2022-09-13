@extends('layouts.front')


@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Edit / Update Profile
            </div>
            <div class="card-body">
                <form action="{{ url('edit-profile/'.$users->id) }}" method="POST" enctype="multipart/form-data">
                    {{-- <div class="mt-2 form-group">
                        <label for="">Name</label>
                        <input type="text" value="{{ $users->name }}" class="form-control" name="name">
                    </div>
                    <div class="mt-3 form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
                    </div>
                    <div class="mt-3 form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number">
                    </div>
                    <hr>
                    <div class="mt-3 form-group">
                        <label for="address">Address 1</label>
                        <input type="text" name="address1" class="form-control" id="address1" placeholder=" ">
                    </div>
                    <div class="mt-3 form-group">
                        <label for="address">Address 2</label>
                        <input type="text" name="address2" class="form-control" id="address2" placeholder=" ">
                    </div>
                    <div class="mt-3 form-group">
                        <label for="country">Country</label>
                        <select class="form-select">
                            @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3 form-group">
                        <label for="province">Province</label>
                        <select class="form-select">
                            @foreach ($provinces as $province)
                                <option value="{{$province->id}}">{{$province->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3 form-group">
                        <label for="zipcode">Zipcode</label>
                        <input type="text" name="zipcode" class="form-control" id="zipcode" placeholder=" ">
                    </div> --}}
            </div>
        </div>
    </div>
@endsection