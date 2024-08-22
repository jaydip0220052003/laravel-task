<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{__('employelist')}}" class="brand-link">
    <img src="{{asset('../dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{__('employelist')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Employe
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-building"></i>
            <p>
              Department
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{__('departmentlist')}}" class="nav-link">
                <i class="far fa-copy nav-icon"></i>
                <p>List Of Department</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{__('addnewdep')}}" class="nav-link">
                <i class="fa fa-plus nav-icon"></i>
                <p>Add New Department</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{__('report')}}" class="nav-link">
            <i class="nav-icon fa fa-file"></i>
            <p>
              Report
            </p>
          </a>
        </li>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
