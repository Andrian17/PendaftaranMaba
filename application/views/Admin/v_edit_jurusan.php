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
                    <button type="button" class="badge badge-danger zi" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Edit
                    </button>
                  </div>

                </div>
              </div>
            </div>
          <?php endforeach; ?>

          <!-- modal -->
          <!-- Button trigger modal -->



          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
