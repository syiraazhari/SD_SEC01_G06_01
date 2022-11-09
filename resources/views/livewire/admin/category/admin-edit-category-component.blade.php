<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Category</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin Panel</li>
            <li class="breadcrumb-item active">Categories</li>
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
                        <h5 class="card-title">Edit Categories</h5>
            
                        <form class="row g-3" wire:submit.prevent="updateCategory">
                            <div >
                                <label for="inputNanme4" class="form-label">Category Name</label>
                                <input type="text" class="form-control" placeholder="Category Name" wire:model="name" wire:keyup="generateSlug">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div >
                                <label for="inputNanme4" class="form-label">Category Slug</label>
                                <input type="text" class="form-control" placeholder="Category Slug" wire:model="slug">
                                @error('slug')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('admin.categories') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->