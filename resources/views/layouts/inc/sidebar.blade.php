<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link href="{{ asset('frontend/css/sidebar.css') }}" rel="stylesheet">

<div class="sidebar">
  <div class="logo-details">
    <a href="/dashboard">
      <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">ClassAct Tech</span>
    </a>
  </div>

    <ul class="nav-links">
      <li>
        <a href="./dashboard">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
      </li>

      <li>
        <div class="iocn-link">
          <a href="{{ url('categories') }}">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Category</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>

        <ul class="sub-menu">
          <li>
            <a class="link_name" href="{{ url('categories') }}">
              Category
            </a>
          </li>

          <li>
            <a href="{{ url('add-category') }}">
              Add Category
            </a>
          </li>
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="{{ url('products') }}">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Products</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>

        <ul class="sub-menu">
          <li>
            <a class="link_name" href="{{ url('products') }}">
              Products
            </a>
          </li>

          <li>
            <a href="{{ url('add-products') }}">
              Add Products
            </a>
          </li>
        </ul>
      </li>

      <li>
        <a href="{{ url('users') }}">
          <i class='bx bx-plug' ></i>
          <span class="link_name">Users</span>
        </a>
        <ul class="sub-menu blank">
          <li>
            <a class="link_name" href="{{ url('users') }}">
              Users
            </a>
          </li>
        </ul>
      </li>

      {{-- <li>
        <div class="iocn-link">
          <a href="{{ url('staff') }}">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Staff</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>

        <ul class="sub-menu">
          <li>
            <a class="link_name" href="{{ url('staff') }}">
              Staff
            </a>
          </li>
        </ul>
      </li> --}}

      {{-- <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li>
            <a class="link_name" href="#">
              Analytics
            </a>
          </li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li>
            <a class="link_name" href="#">
              Chart
            </a>
          </li>
        </ul>
      </li>
      
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Explore</span>
        </a>
        <ul class="sub-menu blank">
          <li>
            <a class="link_name" href="#">
              Explore
            </a>
          </li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li>
            <a class="link_name" href="#">
              History
            </a>
          </li>
        </ul>
      </li> --}}

      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li>
            <a class="link_name" href="#">
              Setting
            </a>
          </li>
        </ul>
      </li>

      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="{{ asset('assets/images/profile/avatar.png') }}" alt="profileImg">
          </div>

          <div class="name-job">
            <div class="profile_name">
              {{ Auth::user()->name }}
            </div>

            <div class="job">
              Web Desginer
            </div>
          </div>

          <a class="link_name" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class='bx bx-log-out' ></i>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>   
        </div>
      </li>
    </ul>
  </div>

  <script>
  let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e)=>{
      let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
      });
    }
  </script>