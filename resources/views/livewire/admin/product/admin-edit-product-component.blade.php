<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Products</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin Panel</li>
            <li class="breadcrumb-item active">Products</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">

            <div class="col-9">
                @if (Session::has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Products</h5>
            
                        <form class="g-3 " enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                            <div class="col-md-7">
                                <label for="" class="form-label">Product Name</label>
                                <input type="text" class="form-control" wire:model="name" wire:keyup="generateSlug">
                                @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-7">
                                <label for="" class="form-label">Product Slug</label>
                                <input type="text" class="form-control" wire:model="slug">
                                @error('slug')
                                        <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-7">
                                <label for="" class="form-label">Short Description</label>
                                <textarea type="text" id="short_description" class="form-control" wire:model="short_description"></textarea>
                                @error('short_description')
                                        <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-7">
                                <label for="" class="form-label">Description</label>
                                <textarea type="text" id="description" class="form-control" wire:model="description"></textarea>
                                @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-7">
                                <label for="" class="form-label">Regular Price</label>
                                <input type="text" class="form-control" wire:model="regular_price">
                                @error('regular_price')
                                        <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-7">
                                <label for="" class="form-label">Sale Price</label>
                                <input type="text" class="form-control" wire:model="sale_price">
                            </div>
                            <div class="col-md-7">
                                <label for="" class="form-label">SKU</label>
                                <input type="text" class="form-control" wire:model="SKU">
                                @error('SKU')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                            </div>
                            <div class="col-md-7">
                                <label for="" class="form-label">Stock</label>
                                <select id="" class="form-select" wire:model="stock_status">
                                    <option value="instock">InStock</option>
                                    <option value="outofstock">Out of Stock</option>
                                </select>
                                @error('stock_status')
                                        <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-7">
                                <label for="" class="form-label">Featured</label>
                                <select id="" class="form-select" wire:model="featured">
                                    <option value="0">No</option>
                                        <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="col-md-7">
                                <label for="" class="form-label">Quantity</label>
                                <input type="text" class="form-control" wire:model="quantity">
                                @error('quantity')
                                        <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="col-md-7">
                                <label for="" class="form-label">Category</label>
                                <select id="" class="form-select" wire:model="category_id">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                        <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-7">
                                <label for="" class="form-label">Link</label>
                                <input type="text" class="form-control" placeholder="Link" wire:model="link">
                                @error('link')
                                        <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-7">
                                <label for="" class="form-label">Product Image</label>
                                <input type="file" class="form-control" wire:model="newimage">
                                @if ($newimage)
                                        <img src="{{ $newimage->temporaryUrl() }}" width="120" alt="">
                                    @else
                                        <img src="{{ asset('assets/images/products') }}/{{$image}}" width="120" alt="">
                                    @endif

                            </div>

                            <div class="text-center " style="margin-top:20px">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('admin.products') }}" class="btn btn-secondary">Back</a>
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
            tinymce.init({
                selector: '#short_description',
                setup:function(editor){
                    editor.on('Change', function(e){
                        tinyMCE.triggerSave();
                        var sd_data = $('#short_description').val();
                        @this.set('short_description', sd_data);
                    });
                }
            });

            tinymce.init({
                selector: '#description',
                setup:function(editor){
                    editor.on('Change', function(e){
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val();
                        @this.set('description', d_data);
                    });
                }
            });
        });
    </script>
@endpush