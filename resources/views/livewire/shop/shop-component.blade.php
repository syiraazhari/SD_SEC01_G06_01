<main id="main" class="main">

    <div class="pagetitle">
        <h1>Shop</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Shop</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Product -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Products</h5>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-4">
                                <div class="swiper-slide card">
                                    <div class="card-header">
                                        <a href="{{ route('product.details',['slug'=>$product->slug]) }}" title="{{$product->name}}">
                                            <div>
                                                <figure><img src="{{ asset('assets/images/products') }}/{{$product->image}}" alt="{{$product->name}}"></figure>
                                            </div>
                                            <div>
                                                <h6 class="card-title">{{$product->name}} </h6>
                                                <h6 class="card-title"><span>RM{{$product->regular_price}}</span></h6>
                                            </div>
                                        </a>
                                        <div class="d-grid gap-2 mt-3">
                                            <a href="#" class="btn btn-success" wire:click.prevent="store({{ $product->id}},'{{ $product->name }}', {{$product->regular_price}})">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- EndProduct -->

                    <!-- Pagination with icons -->

                    {{-- {{ $products->links('pagination::default') }} --}}
                </div>
            </div><!-- End Left side columns -->


        </div>
        </section>

</main>