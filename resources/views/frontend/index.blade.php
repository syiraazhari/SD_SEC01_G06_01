@extends('layouts.front')

@section('title')
    Welcome to ClassAct Tech
@endsection

@section('content')
    @include('layouts.inc.slider')

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Featured Products</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featured_products as $prod)
                        <div class="item">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product Image">
                                <div class="card-body">
                                    <h5>{{ $prod->name }}</h5>
                                    <span class="float-start">{{ $prod->selling_price }}</span>
                                    <span class="float-end"> <s> {{ $prod->original_price }} </s> </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Trending Category</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($trending_category as $tcategory)
                        <div class="item">
                            <a href="{{ url('category/'.$tcategory->slug) }}">
                                <div class="card">
                                    <img src="{{ asset('assets/uploads/category/'.$tcategory->image) }}" alt="Product Image">
                                    <div class="card-body">
                                        <h5>{{ $tcategory->name }}</h5>
                                        <p>
                                            {{ $tcategory->description}}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $('.featured-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
</script>
    
@endsection