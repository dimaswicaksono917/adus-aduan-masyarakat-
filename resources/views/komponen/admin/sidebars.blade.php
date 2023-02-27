<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">PeMas</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Master Data</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{url('admin/data-admin')}}">Data Admin</a></li>
                    <li><a class="nav-link" href="{{url('admin/data-petugas')}}">Data Petugas</a></li>
                    <li><a class="nav-link" href="{{url('admin/data-masyarakat')}}">Data Masyarakat</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Pengaduan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{url('admin/pengaduan/pengaduan-baru')}}">Pengaduan Baru</a></li>
                    <li><a class="nav-link" href="{{url('admin/pengaduan/pengaduan-diproses')}}">Pengaduan Diproses</a></li>
                    <li><a class="nav-link" href="{{url('admin/pengaduan/data-petugas')}}">Riwayat</a></li>
                </ul>
            </li>

            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Export</span></a></li>
        </ul>
    </aside>
</div>
