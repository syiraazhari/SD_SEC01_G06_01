<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ClassAct - Technology Market</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

    @livewireStyles
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
                <span class="d-none d-lg-block">ClassAct</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                {{-- <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li> --}}

                {{-- <li class="nav-item dropdown" style="margin-right: 20px">
                    
                    <a class="nav-link nav-icon" href="{{ route('product.cart')}}">
                        <i class="bi bi-bag"></i>
                        @if (Cart::count() > 0)
                            <span class="badge bg-primary badge-number">{{Cart::instance('cart')->count()}}</span>
                        @else 
                            <i class="bi bi-bag"></i>
                            <span class="badge bg-primary badge-number">0</span>
                        @endif
                    </a>
                </li> --}}

                @if (Route::has('login'))
                    @auth
                        <li class="nav-item dropdown pe-3" style="margin-right: 20px">

                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                <img src="{{ asset('assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
                                <span class="d-none d-md-block dropdown-toggle ps-2">Welcome, {{Auth::user()->name}} </span>
                            </a><!-- End Profile Iamge Icon -->
        
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li class="dropdown-header">
                                    <h6>{{Auth::user()->name}} </h6>
                                </li>
                                
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
        
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="/profile">
                                        <i class="bi bi-person"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
        
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
        
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="/faq">
                                        <i class="bi bi-question-circle"></i>
                                        <span>Need Help?</span>
                                    </a>
                                </li>
        
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit(); " role="button">
                                            <i class="bi bi-box-arrow-right"></i>
                                            <span>Sign Out</span>
                                        </a>
                                </form>
        
                            </ul><!-- End Profile Dropdown Items -->
                        </li><!-- End Profile Nav -->
                    
                    @endif
                @endif

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="/">
                    <i class="bi bi-grid"></i>
                    <span>Home</span>
                </a>
            </li><!-- End Home Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/shop">
                    <i class="bi bi-cart2"></i>
                    <span>Shop</span>
                </a>
            </li><!-- End Shop Nav -->
 

            <li class="nav-item">
                <a class="nav-link collapsed" href="/about">
                    <i class="bi bi-journal-minus"></i>
                    <span>About</span>
                </a>
            </li><!-- End About Us Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/contact">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/faq">
                    <i class="bi bi-question-circle"></i>
                    <span>F.A.Q</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->

            <li class="nav-heading">Settings</li>

            
            @if (Route::has('login'))
                @auth
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ route('profile')}}">
                            <i class="bi bi-person"></i>
                            <span>Profile</span>
                        </a>
                    </li><!-- End Profile Page Nav -->

                    @if (Auth::user()->utype === 'ADM')
                        <li class="nav-item">
                            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                                <i class="bi bi-menu-button-wide"></i><span>Admin Panel</span><i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                <li>
                                    <a href="{{ route('admin.dashboard') }}">
                                    <i class="bi bi-circle"></i><span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.categories') }}">
                                    <i class="bi bi-circle"></i><span>Categories</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.products') }}">
                                    <i class="bi bi-circle"></i><span>Products</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.coupons') }}">
                                    <i class="bi bi-circle"></i><span>Coupons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.home-slider') }}">
                                    <i class="bi bi-circle"></i><span>Home Slider</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-buttons.html">
                                    <i class="bi bi-circle"></i><span>Home OnSale</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.home-category') }}">
                                    <i class="bi bi-circle"></i><span>Home Category</span>
                                    </a>
                                </li>
                                
                                
                            </ul>
                        </li><!-- End Admin Nav -->
                    @else
                        <li class="nav-item">
                            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                                <i class="bi bi-menu-button-wide"></i><span>User Panel</span><i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                <li>
                                    <a href="{{ route('user.dashboard') }}">
                                    <i class="bi bi-circle"></i><span>Dashboard</span>
                                    </a>
                                </li>
                            </ul>
                        </li><!-- End User Nav -->
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{route('register')}}">
                            <i class="bi bi-card-list"></i>
                            <span>Register</span>
                        </a>
                    </li><!-- End Register Page Nav -->
                    
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{route('login')}}">
                            <i class="bi bi-box-arrow-in-right"></i>
                            <span>Login</span>
                        </a>
                    </li><!-- End Login Page Nav -->
                @endif
            
            @endif

            
            

            

        </ul>

    </aside><!-- End Sidebar-->

    {{$slot}}

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
        &copy; Copyright <strong><span>ClassAct Tech</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        Designed by <a href="#">(Group 6)</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.tiny.cloud/1/89vms5ca0029b0cjhx9updasdsxqy59wg60adr9f2cem2da4/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

    @livewireScripts
    @stack('scripts')
</body>

</html>