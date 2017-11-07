<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Manage Managers</span>
           
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('manager_list') }}"><i class="fa fa-file"></i> All</a></li>
            <li><a href="{{ route('manager_add') }}"><i class="fa fa-plus"></i> Create New </a></li>
          </ul>
        </li>
        <li>
          <a href="{{ route('logout') }}">
            <i class="fa fa-power-off"></i> <span>Logout</span>
           
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>