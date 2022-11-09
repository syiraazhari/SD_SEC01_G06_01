<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manage Categories</h1>
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


                <div class="col-12">
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{Session::get('message')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">All Categories <a href="{{route('admin.add-categories')}}" style="margin-left: 10px" type="button" class="btn btn-outline-success btn-sm">Add New</a></h5>
                            
                            
                            <!-- Active Table -->
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Categories Name</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <th>{{$category->id}}</th>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->slug}}</td>
                                            <td>
                                                <a href="{{route('admin.edit-categories',['category_slug'=>$category->slug])}}" class="btn btn-primary btn-sm">Edit</a>
                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteCategory">
                                                    Delete
                                                </button>
                                                <div class="modal fade" id="deleteCategory" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Are you sure, You want to delete this category?'</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <a 
                                                                    href="#" 
                                                                    wire:click.prevent="deleteCategory({{$category->id}})" 
                                                                    class="btn btn-primary"
                                                                    data-bs-dismiss="modal">
                                                                    Save changes
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
                    {{ $categories->links('pagination::default') }}
                </div>

            

        </div>
    </section>

</main><!-- End #main -->