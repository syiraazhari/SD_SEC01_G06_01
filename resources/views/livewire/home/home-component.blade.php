<main id="main" class="main">

    <div class="pagetitle">
        <h1>Home</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Homepage</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <!-- Content -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Slider Card -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title"></h6>
                
                                <!-- Slides with controls -->
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/img/slides-1.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/img/slides-2.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/img/slides-3.jpg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                    
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                    
                                </div><!-- End Slides with controls -->
                
                            </div>
                        </div>
                    </div><!-- End Slider Card -->

                    <!-- OnSale Product -->
                    @if ($sproducts->count() > 0)
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">OnSale </h5>
                                </div>
                            </div>
                        </div>

                        <div class="swiper mySwiper col-4">
                            <div class="swiper-wrapper">
                                @foreach ($sproducts as $sproduct)
                                <div class="swiper-slide card">
                                    <div class="card-header">
                                        <h6 class="card-title">Jam Tangan <span>RM</span></h6>
                                        <div>
                                            <a href="{{ route('product.details',['slug'=>$sproduct->slug]) }}" title="{{ $sproduct->name }}">
                                                <figure><img src="{{ asset('assets/images/products') }}/{{ $sproduct->image }}" width="800" height="800" alt="{{ $sproduct->name }}"></figure>
                                            </a>
                                            <div>
                                                <h6 class="card-title">{{$product->name}} </h6>
                                                <h6 class="card-title"><ins><span>RM{{$product->regular_price}}</span></ins> <del><p>RM{{ $sproduct->regular_price }}</p></del></h6>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 mt-3">
                                            <button type="button" class="btn btn-outline-primary">View</button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    @endif

                    <!-- Latest Product -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Latest Products <span>/Today</span></h5>
                            </div>
                        </div>
                    </div>

                    <div class="swiper mySwiper col-4">
                        <div class="swiper-wrapper">
                            @foreach ($lproducts as $lproduct)
                                <div class="swiper-slide card">
                                    <div class="card-header">
                                        <h6 class="card-title">{{ $lproduct->name }} <span> RM{{ $lproduct->regular_price }}</span></h6>
                                        <div>
                                            <a href="{{ route('product.details',['slug'=>$lproduct->slug]) }}" title="{{ $lproduct->name }}">
                                                <figure><img src="{{ asset('assets/images/products') }}/{{ $lproduct->image  }}" width="800" height="800" alt="{{ $lproduct->name }}"></figure>
                                            </a>
                                        </div>
                                        <div class="d-grid gap-2 mt-3">
                                            <button type="button" class="btn btn-outline-primary">View</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <!-- End Latest Product -->

                    <!-- Product Categories -->
                    {{-- <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Product Categories</h5>
                    
                                <!-- Default Tabs -->
                                
                                    <div class="nav nav-tabs" id="myTab" role="tablist">
                                        @foreach ($categories as $key=>$category)
                                        <a class="nav-item {{ $key==0? 'active':'' }}">
                                            <button  class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#category_{{$category->id}}" type="button" role="tab" aria-controls="category_{{$category->id}}" aria-selected="true">{{ $category->name }}</button>
                                        </a>
                                        @endforeach
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-content pt-2" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="swiper mySwiper col-4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide card">
                                        <div class="card-header">
                                            <h6 class="card-title">Jam Tangan <span>RM</span></h6>
                                            <div>
                                                    <figure><img src="{{ asset('assets/images/products/digital_1.jpg') }}" width="800" height="800" alt=""></figure>
                                                
                                            </div>
                                            <div class="d-grid gap-2 mt-3">
                                                <button type="button" class="btn btn-outline-primary">View</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide card">
                                        <div class="card-header">
                                            <h6 class="card-title">Jam Tangan <span>RM</span></h6>
                                            <div>
                                                    <figure><img src="{{ asset('assets/images/products/digital_1.jpg') }}" width="800" height="800" alt=""></figure>
                                                
                                            </div>
                                            <div class="d-grid gap-2 mt-3">
                                                <button type="button" class="btn btn-outline-primary">View</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide card">
                                        <div class="card-header">
                                            <h6 class="card-title">Jam Tangan <span>RM</span></h6>
                                            <div>
                                                    <figure><img src="{{ asset('assets/images/products/digital_1.jpg') }}" width="800" height="800" alt=""></figure>
                                                
                                            </div>
                                            <div class="d-grid gap-2 mt-3">
                                                <button type="button" class="btn btn-outline-primary">View</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide card">
                                        <div class="card-header">
                                            <h6 class="card-title">Jam Tangan <span>RM</span></h6>
                                            <div>
                                                    <figure><img src="{{ asset('assets/images/products/digital_1.jpg') }}" width="800" height="800" alt=""></figure>
                                                
                                            </div>
                                            <div class="d-grid gap-2 mt-3">
                                                <button type="button" class="btn btn-outline-primary">View</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="swiper mySwiper col-4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide card">
                                        <div class="card-header">
                                            <h6 class="card-title">Jam Tangan <span>RM</span></h6>
                                            <div>
                                                    <figure><img src="{{ asset('assets/images/products/digital_1.jpg') }}" width="800" height="800" alt=""></figure>
                                                
                                            </div>
                                            <div class="d-grid gap-2 mt-3">
                                                <button type="button" class="btn btn-outline-primary">View</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide card">
                                        <div class="card-header">
                                            <h6 class="card-title">Jam Tangan <span>RM</span></h6>
                                            <div>
                                                    <figure><img src="{{ asset('assets/images/products/digital_1.jpg') }}" width="800" height="800" alt=""></figure>
                                                
                                            </div>
                                            <div class="d-grid gap-2 mt-3">
                                                <button type="button" class="btn btn-outline-primary">View</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide card">
                                        <div class="card-header">
                                            <h6 class="card-title">Jam Tangan <span>RM</span></h6>
                                            <div>
                                                    <figure><img src="{{ asset('assets/images/products/digital_1.jpg') }}" width="800" height="800" alt=""></figure>
                                                
                                            </div>
                                            <div class="d-grid gap-2 mt-3">
                                                <button type="button" class="btn btn-outline-primary">View</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide card">
                                        <div class="card-header">
                                            <h6 class="card-title">Jam Tangan <span>RM</span></h6>
                                            <div>
                                                    <figure><img src="{{ asset('assets/images/products/digital_1.jpg') }}" width="800" height="800" alt=""></figure>
                                                
                                            </div>
                                            <div class="d-grid gap-2 mt-3">
                                                <button type="button" class="btn btn-outline-primary">View</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="swiper mySwiper col-4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide card">
                                        <div class="card-header">
                                            <h6 class="card-title">Jam Tangan <span>RM</span></h6>
                                            <div>
                                                    <figure><img src="{{ asset('assets/images/products/digital_1.jpg') }}" width="800" height="800" alt=""></figure>
                                                
                                            </div>
                                            <div class="d-grid gap-2 mt-3">
                                                <button type="button" class="btn btn-outline-primary">View</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide card">
                                        <div class="card-header">
                                            <h6 class="card-title">Jam Tangan <span>RM</span></h6>
                                            <div>
                                                    <figure><img src="{{ asset('assets/images/products/digital_1.jpg') }}" width="800" height="800" alt=""></figure>
                                                
                                            </div>
                                            <div class="d-grid gap-2 mt-3">
                                                <button type="button" class="btn btn-outline-primary">View</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide card">
                                        <div class="card-header">
                                            <h6 class="card-title">Jam Tangan <span>RM</span></h6>
                                            <div>
                                                    <figure><img src="{{ asset('assets/images/products/digital_1.jpg') }}" width="800" height="800" alt=""></figure>
                                                
                                            </div>
                                            <div class="d-grid gap-2 mt-3">
                                                <button type="button" class="btn btn-outline-primary">View</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide card">
                                        <div class="card-header">
                                            <h6 class="card-title">Jam Tangan <span>RM</span></h6>
                                            <div>
                                                    <figure><img src="{{ asset('assets/images/products/digital_1.jpg') }}" width="800" height="800" alt=""></figure>
                                                
                                            </div>
                                            <div class="d-grid gap-2 mt-3">
                                                <button type="button" class="btn btn-outline-primary">View</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- End Product Categories -->

                </div>
            </div><!-- End Content -->


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

