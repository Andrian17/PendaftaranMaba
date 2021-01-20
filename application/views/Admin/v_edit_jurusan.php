<div class="container container-fluid">
  <style>
    .zi{
      position: absolute;
      z-index: 0;
      top: 27px;
      right: 45px;
      font-size: 16px;
      width: 50px;
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
      <div class="row">
        <!-- small box -->
        <?php foreach ($jur as $key): ?>

          <div class="col-xl-4 col-md-4 mb-3">
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
                    <a href="<?php echo site_url('admin/update/'.$key->id) ?>" class="btn btn-info vi zi">edit</a>
                  </div>

                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
