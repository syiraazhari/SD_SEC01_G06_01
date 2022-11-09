<main id="main" class="main">
    <style>
        .regprice{
            font-weight: 300;
            font-size: 13px !important;
            color: #aaaaaa !important;
            text-decoration: line-through;
            padding-left: 10px; 
        }
    </style>
    <div class="pagetitle">
        <h1>Products</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Products</li>
                <li class="breadcrumb-item active">{{ $product->name }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <!-- Products Details -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Products Details</h5>
                        <hr>
                        <div class="row">
                            <div class="col-5">
                                <div class="swiper-slide card">
                                    <li data-thumb="{{ asset('assets/images/products/') }}/{{ $product->image }}">
                                        <img src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="{{ $product->name }}" />
                                    </li>
                                </div>
                            </div>
    
                            <div class="col-7">
                                <div class="product-rating">
                                    <i class="bi bi-star" aria-hidden="true"></i>
                                    <i class="bi bi-star" aria-hidden="true"></i>
                                    <i class="bi bi-star" aria-hidden="true"></i>
                                    <i class="bi bi-star" aria-hidden="true"></i>
                                    <i class="bi bi-star" aria-hidden="true"></i>
                                    <a href="#" class="count-review">(05 Review)</a>
                                </div>
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <div class="short-desc">
                                    {!! $product->short_description !!}
                                </div>
                                {{-- @if ($product->sale_price > 0) --}}
                                    {{-- <div>
                                        <h5 class="card-title">RM{{ $product->sale_price }}  <del><span>RM{{ $product->regular_price }}</span></del></h5>
                                        
                                    </div> --}}
                                {{-- @else --}}
                                    <div>
                                        <h5 class="card-title">RM{{ $product->regular_price }}</h5>
                                    </div>
                                {{-- @endif --}}

                                <div class="stock-info in-stock">
                                    <p class="availability">
                                        Availability: <b>{{ $product->stock_status  }}</b>
                                    </p>
                                </div>
                                <div class="quantity">
                                    <span>Quantity:</span>
                                    <div class="quantity-input">
                                        <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >
                                        <a class="btn btn-reduce" href="#"></a>
                                        <a class="btn btn-increase" href="#"></a>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 mt-3">
                                    <a href="#" class="btn btn-success" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">Add to Cart</a>
                                </div>
                            </div>

                            <div class="col-12">
                                <!-- Default Tabs -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="add_infomation-tab" data-bs-toggle="tab" data-bs-target="#add_infomation" type="button" role="tab" aria-controls="add_infomation" aria-selected="false">Additional Information</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Review</button>
                                    </li>
                                </ul>
                                <div class="tab-content pt-2" id="myTabContent">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                        {!! $product->description !!}
                                    </div>
                                    <div class="tab-pane fade" id="add_infomation" role="tabpanel" aria-labelledby="add_infomation-tab">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Weight</th>
                                                    <th scope="col">Dimensions</th>
                                                    <th scope="col">Color</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Brandon Jacob</td>
                                                    <td>Designer</td>
                                                    <td>28</td>

                                                </tr>
                                                <tr>
                                                    <td>Bridie Kessler</td>
                                                    <td>Developer</td>
                                                    <td>35</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
                                    </div>
                                </div><!-- End Default Tabs -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Products Details -->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Related Products</h5>
                    </div>
                </div>
            </div>

            
                    <div class="swiper mySwiper col-4">
                        <div class="swiper-wrapper">
                            @foreach ($related_products as $r_product)
                            <div class="swiper-slide card">
                                <div class="card-header">
                                    <a href="{{ route('product.details',['slug'=>$r_product->slug]) }}" title="{{ $r_product->name}}" title="{{$product->name}}">
                                        <div>
                                            <figure><img src="{{ asset('assets/images/products') }}/{{ $r_product->image }}" width="214" height="214" alt="{{ $r_product->name}}"></figure>
                                        </div>
                                        <div>
                                            <h6 class="card-title">{{$r_product->name}} </h6>
                                            <h6 class="card-title"><span>RM{{$r_product->regular_price}}</span></h6>
                                        </div>
                                    </a>
                                    <div class="d-grid gap-2 mt-3">
                                        {{-- <a href="#" class="btn btn-success" wire:click.prevent="store({{ $product->id}},'{{ $product->name }}', {{$product->regular_price}})">Add to Cart</a> --}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
            
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
