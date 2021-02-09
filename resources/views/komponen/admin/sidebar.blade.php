<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{url('')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Rizal Rohman</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN MENU</li>
      <li><a href=""><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="{{url('admin')}}">
          <i class="fa fa-database"></i>
          <span>Data Master</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url('admin/data-admin')}}"><i class="fa fa-circle-o"></i> Data Admin</a></li>
          <li><a href="{{url('admin/data-petugas')}}"><i class="fa fa-circle-o"></i> Data Petugas</a></li>
          <li><a href="{{url('admin/data-masyarakat')}}"><i class="fa fa-circle-o"></i> Data Masyarakat</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="{{url('admin')}}">
          <i class="fa fa-newspaper-o"></i>
          <span>Pengaduan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url('admin/pengaduan/pengaduan-baru')}}"><i class="fa fa-circle-o"></i> Pengaduan Baru</a></li>
          <li><a href="{{url('admin/data-petugas')}}"><i class="fa fa-circle-o"></i> Riwayat</a></li>
        </ul>
      </li>

      <li><a href=""><i class="fa fa-print"></i> <span>Export</span></a></li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>