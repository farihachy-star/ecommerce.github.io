<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{Route('admin.index')}}">
        <div class="sidebar-brand-icon">
          <img src="{{asset('img/Go Fresh Logo.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route ('admin.index') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
     
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Examples
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#general_pages" data-toggle="collapse" data-target="#general_pages" aria-expanded="true"
          aria-controls="general_pages">
          <i class="fas fa-fw fa-columns"></i>
          <span> General Pages</span>
        </a>
        <div id="general_pages" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
      
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#product_pages" data-toggle="collapse" data-target="#product_pages" aria-expanded="true"
          aria-controls="product_pages">
          <i class="fas fa-fw fa-columns"></i>
          <span> Products</span>
        </a>
        <div id="product_pages" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="{{route('admin.products')}}">Manage Products</a>
            <a class="collapse-item" href="{{route('admin.product.create')}}">Create Product</a>
            
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#category_pages" data-toggle="collapse" data-target="#category_pages" aria-expanded="true"
          aria-controls="category_pages">
          <i class="fas fa-fw fa-columns"></i>
          <span> Category</span>
        </a>
        <div id="category_pages" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="{{route('admin.categories')}}">Manage Category</a>
            <a class="collapse-item" href="{{route('admin.category.create')}}">Create Category</a>
            
          </div>
        </div>
      </li>
   
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->