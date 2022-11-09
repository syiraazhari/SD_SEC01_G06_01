<main id="main" class="main">

    <div class="pagetitle">
        <h1>Home</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Checkout</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <form wire:submit.prevent="placeOrder">
            <div class="row">
                
                <!-- Billing Address -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Billing Address</h5>
                            <hr>
                            <!-- Floating Labels Form -->
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="First Name" wire:model="firstname">
                                        <label for="floatingName">First Name</label>
                                        @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Last Name" wire:model="lastname">
                                        <label for="floatingName">Last Name</label>
                                        @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" placeholder="Your Email" wire:model="email">
                                        <label for="floatingEmail">Your Email</label>
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" placeholder="Mobile Phone | 10 Digits" wire:model="mobile">
                                        <label for="floatingMobile">Mobile Phone</label>
                                        @error('mobile') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Line 1" wire:model="line1">
                                        <label for="floatingLine1">Line 1</label>
                                        @error('line1') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  placeholder="Line 2" >
                                        <label for="floatingLine2">Line 2</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Country" wire:model="country">
                                        <label for="floatingCountry">Country</label>
                                        @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Province" wire:model="province">
                                        <label for="floatingProvince">Province</label>
                                        @error('province') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" placeholder="City" wire:model="city">
                                        <label for="floatingCity">City</label>
                                        @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Zip" wire:model="zipcode">
                                        <label for="floatingZip">Zipcode</label>
                                        @error('zipcode') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                
                            </div>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="toDiff" value="1" wire:model="shipToDifferent">
                                <label class="form-check-label" for="toDiff">
                                    Ship to a different address?
                                </label>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- End Billing Address -->

                <!-- Shipping Address -->
                @if ($shipToDifferent == 1)
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Shipping Address</h5>
                                <hr>
                                <!-- Floating Labels Form -->
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingName" placeholder="First Name" wire:model="s_firstname">
                                            <label for="floatingName">First Name</label>
                                            @error('s_firstname') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingName" placeholder="Last Name" wire:model="s_lastname">
                                            <label for="floatingName">Last Name</label>
                                            @error('s_lastname') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="floatingEmail" placeholder="Your Email" wire:model="s_email">
                                            <label for="floatingEmail">Your Email</label>
                                            @error('s_email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="floatingMobile" placeholder="Mobile Phone | 10 Digits" wire:model="s_mobile">
                                            <label for="floatingMobile">Mobile Phone</label>
                                            @error('s_mobile') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingLine1" placeholder="Line 1" wire:model="s_line1">
                                            <label for="floatingLine1">Line 1</label>
                                            @error('s_line1') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingLine2" placeholder="Line 2">
                                            <label for="floatingLine2">Line 2</label>
                                            @error('s_zipcode') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingCountry" placeholder="Country" wire:model="s_country">
                                            <label for="floatingCountry">Country</label>
                                            @error('s_country') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingProvince" placeholder="Province" wire:model="s_province">
                                            <label for="floatingProvince">Province</label>
                                            @error('s_province') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingCity" placeholder="City" wire:model="s_city">
                                            <label for="floatingCity">City</label>
                                            @error('s_city') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingZip" placeholder="Zip" wire:model="s_zipcode">
                                            <label for="floatingZip">Zipcode</label>
                                            @error('s_zipcode') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <hr>
                                </div><!-- End floating Labels Form -->
                            </div>
                        </div>
                    </div>
                @endif
                <!-- End Shipping Address -->

                <!-- Payment Method -->
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Payment Method</h5>
                            <hr>
                            @if ($paymentMode == 'card')
                                <div class="row g-3">
                                    @if (Session::has('stripe_error'))
                                        <div class="col-6"> <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{Session::get('stripe_error')}}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div >
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingCardNumber" placeholder="Card Number" wire:model="card_no">
                                            <label for="floatingCardNumber">Card Number</label>
                                            @error('card_no') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingExpiryMonth" placeholder="MM" wire:model="exp_month">
                                            <label for="floatingExpiryMonth">Expiry Month</label>
                                            @error('exp_month') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingExpiryYear" placeholder="YYYY" wire:model="exp_year">
                                            <label for="floatingExpiryYear">Expiry Year</label>
                                            @error('exp_year') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingCVC" placeholder="CVC" wire:model="cvc">
                                            <label for="floatingCardNumber">CVC</label>
                                            @error('cvc') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <hr>
                            <p>Check / Money order</p>
                            <p>Credit Cart (saved)</p>
                            <hr>

                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="cod" id="cod" value="cod" wire:model="paymentMode">
                                    <label class="form-check-label" for="cod">
                                        Cash On Delivery
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="card" id="card" value="card" wire:model="paymentMode">
                                    <label class="form-check-label" for="card">
                                        Debit / Credit Card
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paypal" id="paypal" value="paypal" wire:model="paymentMode">
                                    <label class="form-check-label" for="paypal">
                                        Paypal
                                    </label>
                                </div>
                            </div>
                            


                            @error('paymentMode') <span class="text-danger">{{ $message }}</span> @enderror
                            <hr>
                            <h3 class="card-title">Grand Total <span>RM{{Session::get('checkout')['total']}}</span></h3>
                            <div class="d-grid gap-2 mt-3">
                                <button class="btn btn-primary" type="submit">Place order now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Payment Method -->

                <!-- Shipping Method -->
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Shipping Method</h5>
                            <hr>
                            <p>Flat Rate</p>
                            <p>Fixed $0</p>
                            <hr>

                        </div>
                    </div>
                </div>
                <!-- End Shipping Method -->
                

            </div>
        </form>
    </section>

</main>
