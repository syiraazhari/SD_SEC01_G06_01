<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manage Home Categories</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin Panel</li>
            <li class="breadcrumb-item active">Home Categories</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">


                <div class="col-6">
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{Session::get('message')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <h5 class="card-title">Home Categories</h5>

                            <form wire:submit.prevent="updateHomeCategory">
                                <div class="col-md-6" wire:ignore>
                                    <label for="" class="form-label">Choose Categories</label>
                                    <select id="" class="form-select" name="categories[]" multiple="multiple" wire:model="selected_categories">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">No Of Products</label>
                                    <input type="text" class="form-control" wire:model="numberofproduct">
                                    @error('numberofproduct')
                                            <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="text-center " style="margin-top:20px">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                
                        </div>
                    </div>
                </div>

            

        </div>
    </section>

</main><!-- End #main -->

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.sel_categories').select2();
            $('.sel_categories').on('change',function(e){
                var data = $('.sel_categories').select2("val");
                @this.set('selected_categories',data);
            });
        });
    </script>
@endpush