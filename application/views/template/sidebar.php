<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?=base_url('assets/')?>dist/img/logo.jpg" alt="AdminLTELogo" height="60" >
  </div>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="fas fa-user-tie"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?=base_url('master/index')?>" class="brand-link text-center mb-3">
    <span class="brand-text font-weight-light text-center">Sistem Pakar</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="text-center">
      <div class="text-center">
        <img width="200" src="<?= base_url('assets') ?>/dist/img/logo.jpg?>" class="rounded mb-2" alt="User Image">
      </div>
    </div>

    <!-- SidebarSearch Form -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?=base_url('dashboard')?>" class="nav-link <?=$aktif==='home' ? 'active' : ''  ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dasboard Admin
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=base_url('datagejala')?>" class="nav-link <?=$aktif==='datagejala' ? 'active' : ''  ?>">
            <i class="nav-icon fas fa-wallet"></i>
            <p>
              Form Data Gejala
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=base_url('datapenyakit')?>" class="nav-link <?=$aktif==='datapenyakit' ? 'active' : ''  ?>">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Form Data Penyakit
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=base_url('basispengetahuan')?>" class="nav-link <?=$aktif==='basispengetahuan' ? 'active' : ''  ?>">
            <i class="nav-icon fas fa-user-graduate"></i>
            <p>
              Form Basis Pengetahuan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=base_url('datapasien')?>" class="nav-link <?=$aktif==='datapasien' ? 'active' : ''  ?>">
            <i class="nav-icon fas fa-user-injured"></i>
            <p>
              Data Pasien
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
