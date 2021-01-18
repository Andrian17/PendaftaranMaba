<?php $con = mysqli_connect('localhost', 'root', '', 'db_web_lanjut'); ?>



<div class="container container-fluid">
  <style>
    .zi{
      position: absolute;
      z-index: 0;
      top: 27px;
      right: 45px;
      opacity: 0.7;
      font-size: 75px;
    }
    .vi{
      font-size: 14px;
    }

  </style>


  <div class="card card-primary m-5">
    <div class="card-header bg-primary">
      <span class="card-title text-light"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Jurusan</span>
    </div>
    <div class="card-body">
      <div class="col">
        <!-- small box -->
        <?php foreach ($jur as $key): ?>
          <?php 
            $prodi = mysqli_query($con,"select * from maba where id_jurusan='$key->id_jurusan'");
            $key1 = mysqli_num_rows($prodi);
          ?>

          <div class="col-xl-8 col-md-6 mb-3">
            <a href="<?php echo site_url('admin/listMabaByJur/'.$key->id_jurusan) ?>" class="nav-link">
              <div class="card border-bottom-success shadow py-1">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <span class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            <?php echo $key->jurusan ?></span>
                      </div>
                        <div class="m-auto icon">
                          <i class="fas fa-user-check fa-4x"></i>
                        </div>
                        
                    </div>
                    <span class="zi" ><?php echo $key1 ?></span>
                  </div>
              </div>
              </a>
          </div>
        <?php endforeach; ?>

        

      </div>
    </div>
  </div>
</div>
