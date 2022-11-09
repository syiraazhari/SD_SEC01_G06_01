<main id="main" class="main">

    <div class="pagetitle">
        <h1>Home</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Cart</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            @if (Cart::instance('cart')->count() > 0)
                @if(Session::has('success_message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success</strong> {{Session::get('success_message')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(Cart::instance('cart')->count() > 0)
                    <div class="col-12">
                        <div class="card products-cart">
                            @foreach (Cart::instance('cart')->content() as $item)
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-10">
                                            <h6 class="card-title">Product Name </h6>
                                        </div>
                                        <div class="col-2">
                                            <a class="btn btn-outline-danger btn-sm" style="margin-top: 20px" wire:click.prevent="destroyAll()">Clear Cart</a>
                                        </div>
                                        
                                    </div>
                                    
                                    <hr>
                                    <div class="row" >
                                        <div class="col-2">
                                            <div>
                                                <figure><img src="{{ ('assets/images/products') }}/{{$item->model->image}}" alt="{{$item->model->name}}" width="100" height="100"></figure>
                                            </div>
                                        </div>
                                        
                                        <div class="col-2" style="margin-top: 35px">
                                            <div class="product-name">
                                                <a class="link-to-product" href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a>
                                            </div>
                                            
                                        </div>

                                        <div class="col-2" style="margin-top: 35px">
                                            <div class="price-field produtc-price">
                                                <p class="price">RM{{$item->model->regular_price}}</p>
                                            </div>
                                        </div>

                                        <div class="col-3" style="margin-top: 29px">
                                            <div class="quantity">
                                                <div class="quantity-input">
                                                    <input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >									
                                                    <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"></a>
                                                    <a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"></a>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="col-2" style="margin-top: 35px">
                                            <div class="price-field sub-total">
                                                <p class="price">RM{{$item->subtotal}}</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-1" style="margin-top: 30px">
                                            <div class="delete">
                                                <a href="#" wire:click.prevent="destroy('{{$item->rowId}}')" class="btn btn-delete" title="">
                                                    <i class="bi bi-x-circle" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach  
                        </div>
                    </div>
                @else 
                    <p>No item in cart</p>
                @endif
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h6 class="card-title">Order Summary</h6>
                                <hr>
                                {{-- Subtotal --}}
                                <div class="row">
                                    <div class="col-10">
                                        <p>Subtotal</p>
                                    </div>
                                    <div class="col-2">
                                        <span><b>RM{{Cart::instance('cart')->subtotal()}}</b></span>
                                    </div>
                                </div>
                                
                                @if (Session::has('coupon'))
                                    {{-- Discount --}}
                                    <div class="row">
                                        <div class="col-10">
                                            <p>Discount {{Session::get('coupon')['code']}} <a href="#" wire:click.prevent="removeCoupon"><i class="bi bi-x-circle"></i></a></p>
                                        </div>
                                        <div class="col-2">
                                            <span><b> - ${{number_format($discount,2)}}</b></span>
                                        </div>
                                    </div>
                                    {{-- Subtotal With Discount --}}
                                    <div class="row">
                                        <div class="col-10">
                                            <p>Subtotal with Discount</p>
                                        </div>
                                        <div class="col-2">
                                            <span><b>RM{{number_format($subtotalAfterDiscount,2)}}</b></span>
                                        </div>
                                    </div>
                                    {{-- Tax --}}
                                    <div class="row">
                                        <div class="col-10">
                                            <p>Tax (6%)</p>
                                        </div>
                                        <div class="col-2">
                                            <span><b>RM{{number_format($taxAfterDiscount,2)}}</b></span>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- Total --}}
                                    <div class="row">
                                        <div class="col-10">
                                            <p>Total</p>
                                        </div>
                                        <div class="col-2">
                                            <span><b>RM{{number_format($totalAfterDiscount,2)}}</b></span>
                                        </div>
                                    </div>
                                @else 
                                    {{-- Tax --}}
                                    <div class="row">
                                        <div class="col-10">
                                            <p>Tax (6%)</p>
                                        </div>
                                        <div class="col-2">
                                            <span><b>RM{{Cart::instance('cart')->tax()}}</b></span>
                                        </div>
                                    </div>
                                    {{-- Shipping --}}
                                    <div class="row">
                                        <div class="col-10">
                                            <p>Shipping</p>
                                        </div>
                                        <div class="col-2">
                                            <span><b>Free Shipping</b></span>
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- Total --}}
                                    <div class="row">
                                        <div class="col-10">
                                            <p>Total</p>
                                        </div>
                                        <div class="col-2">
                                            <span><b>RM{{Cart::instance('cart')->total()}}</b></span>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <hr>
                            <div>
                                @if ((!Session::has('coupon')))
                                    <div class="form-check">
                                        <input class="form-check-input" name="have-code" id="have-code" value="1" type="checkbox" wire:model="haveCouponCode">
                                        <label class="form-check-label" for="have-code">
                                            Have Coupon Code
                                        </label>
                                    </div>
                                    @if ($haveCouponCode == 1)
                                        <div class="col-md-6">
                                            <form wire:submit.prevent="applyCouponCode">
                                                <h5 class="card-title">Coupon Code</h5>
                                                @if (Session::has('coupon_message'))
                                                    <div class="alert alert-danger" role="danger">{{ Session::get('coupon_message') }}</div>
                                                @endif
                                                <p >
                                                    <input type="text" class="form-control" placeholder="Enter your coupon code" name="coupon-code" wire:model="couponCode">
                                                </p>
                                                <button type="submit" class="btn btn-primary">Apply</button>
                                            </form>
                                        </div>
                                    @endif
                                @endif
                            </div>
            
                            <div class="d-grid gap-2 mt-3">
                                <a class="btn btn-primary" href="#" wire:click.prevent="checkout">Check out</a>
                                <a class="btn btn-outline-success" href="/shop" >Continue Shopping<i class="bi bi-arrow-left-short"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-12">
                    <div class="card text-center" style="padding-block-start: 30px 0;">
                        <div class="card-body">
                            <h1 class="card-title">Your Cart is Empty</h1>
                            <p>Add Items to it now</p>
                            <a href="/shop" class="btn btn-success">Shop Now</a>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Most Viewed Products -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Most Viewed Products</h5>
                    </div>
                </div>
            </div>

            <div class="swiper mySwiper col-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide card">
                        <div class="card-header">

                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-header">

                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-header">

                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-header">

                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-header">

                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- End Most Viewed Products -->

        </div>
        </section>

</main>

@push('scripts')
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endpush
