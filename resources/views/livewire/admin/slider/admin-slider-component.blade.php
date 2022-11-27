<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manage Slider</h1>
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


                <div class="col-12">
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{Session::get('message')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">All Slides <a href="{{route('admin.add-home-slider')}}" style="margin-left: 10px" type="button" class="btn btn-outline-success btn-sm">Add New</a></h5>
                            
                            <!-- Active Table -->
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Subtitle</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Link</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider)
                                        <tr>
                                            <td>{{ $slider->id }}</td>
                                            <td><img src="{{ asset('assets/images/sliders') }}/{{ $slider->image }}" width="120" alt=""/></td>
                                            <td>{{ $slider->title }}</td>
                                            <td>{{ $slider->subtitle }}</td>
                                            <td>{{ $slider->price }}</td>
                                            <td>{{ $slider->link }}</td>
                                            <td>{{ $slider->status == 1 ? 'Active':'Inactive'}}</td>
                                            <td>{{ $slider->created_at }}</td>
                                            <td>
                                                <a href="{{route('admin.edit-home-slider',['slide_id'=>$slider->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteCategory">
                                                    Delete
                                                </button>
                                                <div class="modal fade" id="deleteSlide" tabindex="-1">
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
                                                                    wire:click.prevent="deleteSlide({{$slider->id}})" 
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
                </div>

            

        </div>
    </section>

</main><!-- End #main -->