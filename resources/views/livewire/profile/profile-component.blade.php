<main id="main" class="main">

    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="{{ asset('assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
                <h6>{{$user->name}}</h6>
                <h7>{{$user->email}}</h7>
                <div class="social-links mt-2">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
                </div>
            </div>

            </div>

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">About</h5>
                                <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                    <div class="col-lg-9 col-md-8">{{$user->name}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{$user->email}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                    <div class="col-lg-9 col-md-8">{{$user->profile->mobile}}</div>
                                </div>              

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Address</div>
                                    <div class="col-lg-9 col-md-8">{{$user->profile->line1}}</div>
                                    <div class="col-lg-9 col-md-8">{{$user->profile->line2}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">City</div>
                                    <div class="col-lg-9 col-md-8">{{$user->profile->city}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Province</div>
                                    <div class="col-lg-9 col-md-8">{{$user->profile->province}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Country</div>
                                    <div class="col-lg-9 col-md-8">{{$user->profile->country}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Zip Code</div>
                                    <div class="col-lg-9 col-md-8">{{$user->profile->zipcode}}</div>
                                </div>

                                
                            </div>
                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert" >{{ Session::get('message') }}</div>
                                @endif
                                <!-- Profile Edit Form -->
                                <form action="" wire:submit.prevent="updateProfile">
                                    <div class="row mb-3">
                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                        <div class="col-md-8 col-lg-9">
                                            @if ($user->profile->image)
                                                <img src="{{$newimage->temporaryUrl()}}" alt="Profile">
                                            @elseif($image)
                                                <img src="{{ asset('assets/images/profile')}}/{{$user->profile->image}}" alt="Profile">
                                            @else
                                                <img src="{{ asset('assets/img/profile-img.jpg')}}" alt="Profile">
                                            @endif
                                            <div class="pt-2">
                                                <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                
                                                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="fullName" type="text" class="form-control" id="fullName" value="{{$user->name}}" wire:model="name">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="email" type="email" class="form-control" id="Email" value="{{$user->email}}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="company" type="text" class="form-control" id="company" value="{{$user->profile->mobile}}" wire:model="mobile">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Line 1</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="job" type="text" class="form-control" id="Job" value="{{$user->profile->line1}}" wire:model="line1">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Line 2</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="job" type="text" class="form-control" id="Job" value="{{$user->profile->line2}}" wire:model="line2">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">City</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="country" type="text" class="form-control" id="Country" value="{{$user->profile->city}}" wire:model="city">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Province</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="address" type="text" class="form-control" id="Address" value="{{$user->profile->province}}" wire:model="province">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Country</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="phone" type="text" class="form-control" id="Phone" value="{{$user->profile->country}}" wire:model="country">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Zip Code</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="email" type="email" class="form-control" id="Email" value="{{$user->profile->zipcode}}" wire:model="zipcode">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->

                            </div>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>

                <div class="card">
                    <div class="card-body pt-3">
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-change-password" id="profile-change-password">
                                <br>
                                @if (Session::has('password_success'))
                                    <div class="alert alert-success" role="alert" >{{Session::get('password_success')}}</div>
                                @endif
                                @if (Session::has('password_error'))
                                    <div class="alert alert-danger" role="alert" >{{Session::get('password_error')}}</div>
                                @endif
                                <!-- Change Password Form -->
                                <form wire:submit.prevent="changePassword">
                                    <div class="row mb-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password" type="password" class="form-control" name="current_password" id="currentPassword" wire:model="current_password">
                                            @error('current_password')
                                                    <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="newpassword" type="password" class="form-control" name="password" id="newPassword" wire:model="password">
                                            @error('password')
                                                    <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="renewpassword" type="password" class="form-control" name="password_confirmation" id="renewPassword" wire:model="password_confirmation">
                                            @error('password_confirmation')
                                                    <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </form><!-- End Change Password Form -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->