<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
      <div class="sidebar-brand-icon">
        <img src="admin_asset/img/logo/logo2.png">
      </div>
      <div class="sidebar-brand-text mx-3">RuangAdmin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="{{route('home')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Features
    </div>
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('classify_list')}}" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
        aria-controls="collapseForm">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Classify</span>
      </a>
      <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Forms</h6>
          <a class="collapse-item" href="{{route('classify_add')}}">Add</a>
          <a class="collapse-item" href="{{route('classify_list')}}">List</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('blogs_list')}}" data-toggle="collapse" data-target="#collapseForm1" aria-expanded="true"
        aria-controls="collapseForm1">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Blogs</span>
      </a>
      <div id="collapseForm1" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Forms</h6>
          <a class="collapse-item" href="{{route('blogs_add')}}">Add</a>
          <a class="collapse-item" href="{{route('blogs_list')}}">List</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
        aria-expanded="true" aria-controls="collapseBootstrap">
        <i class="far fa-fw fa-window-maximize"></i>
        <span>Categories</span>
      </a>
      <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Categories</h6>
          <a class="collapse-item" href="{{route('categories_add')}}">Add</a>
          <a class="collapse-item" href="{{route('categories_list')}}">List</a>

        </div>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
        aria-controls="collapsePage">
        <i class="fas fa-fw fa-columns"></i>
        <span>Products</span>
      </a>
      <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Form</h6>
          <a class="collapse-item" href="{{route('products_add')}}">Add</a>
          <a class="collapse-item" href="{{route('products_list')}}">List</a>

        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('users_list')}}" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
        aria-controls="collapseTable">
        <i class="fas fa-fw fa-table"></i>
        <span>Users</span>
      </a>
      <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Tables</h6>
          <a class="collapse-item" href="{{route('users_add')}}">Add</a>

          <a class="collapse-item" href="{{route('users_list')}}">List</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('oder_details_list')}}">
        <i class="fas fa-fw fa-palette"></i>
        <span>Oder Details</span>
      </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        properties
    </div>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brand" aria-expanded="true"
        aria-controls="brand">
        <i class="fas fa-fw fa-columns"></i>
        <span>Brand</span>
      </a>
      <div id="brand" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Example Pages</h6>
          <a class="collapse-item" href="{{route('brands_add')}}">Add</a>
          <a class="collapse-item" href="{{route('brands_list')}}">List</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#color" aria-expanded="true"
        aria-controls="color">
        <i class="fas fa-fw fa-columns"></i>
        <span>Color</span>
      </a>
      <div id="color" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Example Pages</h6>
          <a class="collapse-item" href="{{route('colors_add')}}">Add</a>
          <a class="collapse-item" href="{{route('colors_list')}}">List</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#size" aria-expanded="true"
        aria-controls="size">
        <i class="fas fa-fw fa-columns"></i>
        <span>Size</span>
      </a>
      <div id="size" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Example Pages</h6>
          <a class="collapse-item" href="login.html">Add</a>
          <a class="collapse-item" href="register.html">List</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span>
      </a>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
  </ul>