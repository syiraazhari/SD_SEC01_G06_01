<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add New Slides</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin Panel</li>
            <li class="breadcrumb-item active">Home Slider</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

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
                        <h5 class="card-title">Add Slides</h5>
            
                        <form class="row g-3" wire:submit.prevent="addSlide">
                            <div >
                                <label for="inputNanme4" class="form-label">Title</label>
                                <input type="text" class="form-control" placeholder="Title" wire:model="title">
                                @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div >
                                <label for="inputNanme4" class="form-label">Subtitle</label>
                                <input type="text" class="form-control" placeholder="Subtitle" wire:model="subtitle">
                                @error('subtitle')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                            </div>
                            <div >
                                <label for="inputNanme4" class="form-label">Price</label>
                                <input type="text" class="form-control" placeholder="Subtitle" wire:model="price">
                                @error('price')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                            </div>
                            <div >
                                <label for="inputNanme4" class="form-label">Link</label>
                                <input type="text" class="form-control" placeholder="Subtitle" wire:model="link">
                                @error('link')
                                        <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div >
                                <label for="inputNanme4" class="form-label">Image</label>
                                <input type="file" class="form-control" placeholder="Subtitle" wire:model="image">
                                @if ($image)
                                        <img src="{{ $image->temporaryUrl() }}" width="120"/>
                                @endif

                                @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div >
                                <label for="inputNanme4" class="form-label">Status</label>
                                <select id="" class="form-select" wire:model="status">
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                </select>
                                @error('status')
                                        <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('admin.home-slider') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->