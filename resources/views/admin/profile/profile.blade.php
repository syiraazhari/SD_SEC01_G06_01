@extends('layouts.front')

@section('title')
    Profile Info
@endsection

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ">
                <ul class="list-group profile-nav">
                    <li class="list-group-item"> <a href="{{ url('settings/dashboard') }}">Dashboard </a> </li>
                    <li class="list-group-item"> <a href="{{ url('settings/edit-profile') }}">Edit Profile </a> </li>
                    <li class="list-group-item"> <a href="{{ url('settings/changepassword') }}">Change Password </a> </li>
                </ul>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Update Profile
                    </div>
                    <div class="card-body">
                        <form action="{{ url('update-admin-profile'.$users->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mt-2 form-group">
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
                            </div>

                            <button type="submit" class="mt-4 btn btn-primary">Update</button>
                            <hr>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">Profile / {{ $user->name }} </h6>
    </div>
</div>

<div class="container">
    <div class="card shadow product_data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    @if ($user->profile->image)
                        <img src="{{ asset('assets/images/profile') }}/{{ $user->profile->image }}" width="100%" alt="Profile Image">
                    @else
                        <img src="{{ asset('assets/images/profile/avatar.png') }}" width="50%" alt="Profile Image">
                    @endif
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">

                        Profile Info
                            <button style="font-size: 16px;" class="float-end badge bg-danger"> Edit</button>

                    </h2>

                    <hr>
                    <p><b>Name : </b> {{ $user->name }}</p>
                    <p><b>Email : </b> {{ $user->email }}</p>
                    <p><b>Phone : </b> {{ $user->profile->mobile }}</p>
                    <hr>

                    <p><b>Line 1 : </b> {{ $user->profile->line1 }}</p>
                    <p><b>Line 2 : </b> {{ $user->profile->line2 }}</p>
                    <p><b>City : </b> {{ $user->profile->city }}</p>
                    <p><b>Province : </b> {{ $user->profile->province }}</p>
                    <p><b>Country : </b> {{ $user->profile->country }}</p>
                    <p><b>Zip Code : </b> {{ $user->profile->zipcode }}</p>

                    <hr>


                </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection
