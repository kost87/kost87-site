  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.main.index') }}" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Blog Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('admin.user.index') }}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Users
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.post.index') }}" class="nav-link">
            <i class="nav-icon far fa-clipboard"></i>
            <p>
              Posts
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.category.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th-list"></i>
            <p>
              Catigories
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.tag.index') }}" class="nav-link">
            <i class="nav-icon fas fa-tags"></i>
            <p>
              Tags
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.contact.index') }}" class="nav-link">
            <i class="nav-icon fas fa-envelope"></i>
            <p>
              Messsages
            </p>
          </a>
        </li>
      </ul>
    </nav>

    </div>
    <!-- /.sidebar -->
  </aside>