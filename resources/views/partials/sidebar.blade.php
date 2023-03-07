
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a target="_blank" href="{{ route('homepage') }}" class="brand-link text-center">
        <span class="brand-text font-weight-light">Homie</span>
    </a> -->
    <nav class="nav container">
        <a arget="_blank" href="{{ route('homepage') }}" class="brand-link text-center nav__logo">
          <img src="{{ asset('frontend/assets/images/Damcon-Png.png')}}" alt="logo" width="200"/>
        </a>
    </nav>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="{{ route('admin.dashboard') }}" class="d-block" style="margin-left: 10px"><i class="nav-icon fas fa-tachometer-alt"></i>Dashboard</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="{{ route('admin.categories.index')}}" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Category
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.properties.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Property
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.messages.index')}}" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Messages
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.subscribers.index')}}" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Subscriber
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a onclick="return document.getElementById('logout').submit();" href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Logout
              </p>
              <form id="logout" action="{{route('logout') }}" method="post">
                @csrf
              </form>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
