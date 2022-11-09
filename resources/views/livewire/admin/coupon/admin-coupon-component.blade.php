<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manage Coupons</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin Panel</li>
            <li class="breadcrumb-item active">Coupons</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Coupons <a href="{{route('admin.add-coupons')}}" style="margin-left: 10px" type="button" class="btn btn-outline-success btn-sm">Add New</a></h5>
                        <!-- Active Table -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Coupon Code</th>
                                    <th scope="col">Coupon Type</th>
                                    <th scope="col">Coupon Value</th>
                                    <th scope="col">Cart Value</th>
                                    <th scope="col">Expired Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupons as $coupon)
                                    <tr>
                                        <th scope="row">{{$coupon->id}}</th>
                                        <td>{{$coupon->code}}</td>
                                        <td>{{$coupon->type}}</td>
                                        @if ($coupon->type == 'fixed')
                                            <td>${{$coupon->value}}</td>
                                        @else
                                            <td>{{$coupon->value}} %</td>
                                        @endif
                                        <td>{{$coupon->cart_value}}</td>
                                        <td>{{$coupon->expiry_date}}</td>
                                        <td>
                                            <a href="{{route('admin.edit-coupons',['coupon_id'=>$coupon->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteProduct">
                                                Delete
                                            </button>
                                            <div class="modal fade" id="deleteProduct" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Are you sure, you want to delete this coupon?</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                            <a 
                                                                href="#" 
                                                                wire:click.prevent="deleteCoupon({{$coupon->id}})" 
                                                                class="btn btn-primary"
                                                                data-bs-dismiss="modal">
                                                                Delete
                                                            </a>
    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- End Vertically centered Modal-->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Tables without borders -->
            
                    </div>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->