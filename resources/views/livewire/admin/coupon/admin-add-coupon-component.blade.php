<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add New Coupons</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin Panel</li>
            <li class="breadcrumb-item active">Coupons</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">

            <div class="col-5">
                @if (Session::has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Coupon</h5>
            
                        <form class="row g-3" wire:submit.prevent="storeCoupon">
                            <div >
                                <label for="inputNanme4" class="form-label">Coupon Code</label>
                                <input type="text" class="form-control" placeholder="Coupon Code" wire:model="code"/>
                                @error('code')
                                        <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div >
                                <label for="inputNanme4" class="form-label">Coupon Type</label>
                                <select class="form-select" id="floatingSelect" wire:model="type">
                                    <option value="">Select</option>
                                    <option value="fixed">Fixed</option>
                                    <option value="percent">Percent</option>
                                </select>
                                @error('type')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                            </div>

                            <div >
                                <label for="inputNanme4" class="form-label">Coupon Value</label>
                                <input type="text" class="form-control" placeholder="Coupon Value" wire:model="value"/>
                                @error('value')
                                        <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div >
                                <label for="inputNanme4" class="form-label">Cart Value</label>
                                <input type="text" class="form-control" placeholder="Cart Value" wire:model="cart_value"/>
                                @error('cart_value')
                                        <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div >
                                <label for="inputNanme4" class="form-label">Expired Date</label>
                                <input type="text" id="expirydate" class="form-control" placeholder="Expired Date" wire:model="expiry_date"/>
                                @error('expiry_date')
                                        <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('admin.coupons') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

@push('scripts')
    <script>
        $(function(){
            $('#expirydate').datepicker({
                format: 'yyyy-mm-dd'

            })
            .on('dp.change', function(ev){
                var data = $('#expiry-date').val();
                $('#expiry-date').val(data);
            });
        });
    </script>
@endpush