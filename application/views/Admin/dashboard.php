
<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
  </div>

  <div class="m-lg-5">
      <span class="fs-3 text-dark m-lg-5">SISTEM MANAJEMEN PENDFTARAN MAHASISWA BARU</span>
  </div>


  <div class="card card-primary m-5">
      <div class="card-header bg-primary">
        <span class="card-title text-light"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Quick View</span>
      </div>
      <div class="card-body">
        <div class="row">
          <!-- small box -->
          <!-- box card tambah mhs -->
          <div class="col-xl-4 col-md-6 mb-4">
            <a href="<?php echo site_url('admin/add') ?>" class="nav-link">
              <div class="card border-bottom-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <span class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Tambah Mahasiswa</span>
                      </div>
                        <div class="col-auto icon">
                          <i class="fas fa-user-plus fa-3x "></i>
                        </div>
                    </div>
                  </div>
              </div>
              </a>
          </div>
          <!-- list mhs  -->
          <div class="col-xl-4 col-md-6 mb-4">
            <a href="<?php echo site_url('admin/Home') ?>" class="nav-link">
              <div class="card border-bottom-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <span class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Daftar Mahasiswa</span>
                      </div>
                        <div class="col-auto icon">
                          <i class="fas fa-users fa-3x"></i>
                        </div>
                    </div>
                  </div>
              </div>
              </a>
          </div>
          <!-- jurusan -->
          <div class="col-xl-4 col-md-6 mb-4">
            <a href="<?php echo site_url('admin/prodi') ?>" class="nav-link">
              <div class="card border-bottom-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <span class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jurusan</span>
                      </div>
                        <div class="col-auto icon">
                          <i class="fas fa-project-diagram fa-3x"></i>
                        </div>
                    </div>
                  </div>
              </div>
              </a>
          </div>

        </div>
      </div>
    </div>


<!-- Footer -->
<footer class="sticky-footer bg-white">
   <div class="container my-auto">
      <div class="copyright text-center my-auto">
         <span>Copyright &copy; Andrian 2021</span>
     </div>
 </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
