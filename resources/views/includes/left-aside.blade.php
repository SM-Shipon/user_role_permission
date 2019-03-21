<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{ Auth::user()->name}}</p>
            <a href="#"><i class="fas fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fas fa-search"></i>
                </button>
              </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="{{ isActive(['/*']) }}">
            <a href="{{ url('/') }}">
                <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>

            </a>
        </li>

        <li class="treeview {{ isActive('role*') }}">
            <a href="#"1>
                <i class="fas fa-edit"></i> <span>Role Management</span>
                <span class="pull-right-container">
              <i class="fas fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ isActive('role-create') }}"><a href="{{ url('role-create') }}">Create role</a></li>
                <li class="{{ isActive('role-manage') }}"><a href="{{ url('role-manage') }}"> Manage Role</a></li>
            </ul>
        </li>
        <li class="treeview {{ isActive('user*') }}">
            <a href="#"1>
                <i class="fas fa-edit"></i> <span>User Management</span>
                <span class="pull-right-container">
              <i class="fas fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ isActive('user-create') }}"><a href="{{ url('user-create') }}">Create User</a></li>
                <li class="{{ isActive('user-manage') }}"><a href="{{ url('user-manage') }}"> Manage User</a></li>
            </ul>
        </li>

        <li class="treeview {{ isActive('permission*') }}">
            <a href="#"1>
                <i class="fas fa-edit"></i> <span>Permission Management</span>
                <span class="pull-right-container">
              <i class="fas fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ isActive('permission-create') }}"><a href="{{ url('permission-create') }}">Create Permission</a></li>
                <li class="{{ isActive('permission-manage') }}"><a href="{{ url('permission-manage') }}">Permission Manage</a></li>
            </ul>
        </li>
        <li class="treeview {{ isActive('form*') }}">
            <a href="#"1>
                <i class="fas fa-edit"></i> <span>Forms</span>
                <span class="pull-right-container">
              <i class="fas fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ isActive('form-general') }}"><a href="{{ url('form-general') }}"> General Elements</a></li>
                <li class="{{ isActive('form-advance') }}"><a href="{{ url('form-advance') }}">Advanced Elements</a></li>
                <li class="{{ isActive('form-editor') }}"><a href="{{ url('form-editor') }}"> Editors</a></li>
            </ul>
        </li>
        <li class="treeview {{ isActive('table*') }}">
            <a href="#">
                <i class="fas fa-table"></i> <span>Tables</span>
                <span class="pull-right-container">
              <i class="fas fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ isActive('table/simple') }}"><a href="{{ action('TableController@simple') }}"><i class="far fa-circle"></i> Simple tables</a></li>
                <li class="{{ isActive('table/data') }}"><a href="{{ action('TableController@data') }}"><i class="far fa-circle"></i> Data tables</a></li>
            </ul>
        </li>

    </ul>
</section>
<!-- /.sidebar -->