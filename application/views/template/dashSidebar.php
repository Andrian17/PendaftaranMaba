<?php 
  $con = mysqli_connect('localhost', 'root', '', 'db_web_lanjut'); 
  $prodi = mysqli_query($con,"select * from maba where confirm='0'");
  $key1 = mysqli_num_rows($prodi);
 // $db = $this->db->get_where('maba', ['confirm' => 0]);
 //  $db = num_rows();
 ?>


      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('admin') ?>">
            <div class="sidebar-brand-icon">
               <i class="fas fa-user-cog"></i>
           </div>
           <div class="sidebar-brand-text mx-3">Andrian</div>
        </a>

       <!-- Divider -->
       <hr class="sidebar-divider my-0">

       <!-- Nav Item - Dashboard -->
       <li class="nav-item active">
           <a class="nav-link" href="<?php echo site_url('admin') ?>">
              <i class="fas fa-laptop-house"></i>
              <span>Beranda</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
              Interface
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
              aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-users"></i>
              <span class="badge badge-danger"><?php echo $key1; ?></span>
              <span>Manajement Mahasiswa</span>


            </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Calon MABA:</h6>
                 <a class="collapse-item" href="<?php echo site_url('admin/add') ?>">Tambah Mahasiswa</a>
                 <a class="collapse-item" href="<?php echo site_url('admin/Home') ?>">Daftar Mahasiswa</a>
             </div>
         </div>
     </li>

     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
       aria-expanded="true" aria-controls="collapseUtilities">
       <i class="fas fa-project-diagram"></i>
       <span>Manajemen Jurusan</span>
   </a>
   <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
   data-parent="#accordionSidebar">
   <div class="bg-white py-2 collapse-inner rounded">
       <h6 class="collapse-header">Jurusan:</h6>
       <a class="collapse-item" href="<?php echo site_url('admin/mainProdi') ?>">Kelola Jurusan</a>
       <a class="collapse-item" href="<?php echo site_url('admin/prodi') ?>">ListBy Jurusan</a>
   </div>
</div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
  aria-expanded="true" aria-controls="collapsePages">
  <i class="fas fa-user-cog"></i>

  <span>Manajemen USER</span>
</a>
<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
     <h6 class="collapse-header">List user:</h6>
     <a class="collapse-item" href="<?php echo site_url('admin/users') ?>">users</a>
     <div class="collapse-divider"></div>
 </div>
</div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
       <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
   <!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <span class="mr-2 d-none d-lg-inline text-gray-600 small">Andrian</span>
                     <img class="img-profile rounded-circle"
                     src="<?php echo base_url() ?>assets/img/undraw_profile_3.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
<!-- End of Topbar -->