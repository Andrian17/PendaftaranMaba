<div class="jumbotron jumbotron-fluid">
<div class="container">
  <div class="card m-auto" style="width: 45%">
    <div class="card-body">
      <h5 class="card-title">Pendaftaran Mahasiswa Baru</h5>

      <form action="<?php echo site_url('admin/prosesAdd') ?>" method="post">
        <div class="mb-3">
          <label for="Nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="Nama" name="nama" autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="Jenis Kelamin" class="form-label">Jenis Kelamin</label>
          <select class="form-select form-select-sm" aria-label="Default select example" name="JenisKelamin">
            <option selected>Jenis Kelamin</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
            
          </select>
        </div>
        
        <div class="mb-3">
          <label for="Alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="Alamat" name="alamat" autocomplete="off">
        </div>
        <div class="mb-3">
          <label>Date</label>
          <input type="text" class="form-control" id="datepicker" name="tanggal" autocomplete="off">

        </div>
        <div class="mb-3">
          <label for="No HP" class="form-label">No HP</label>
          <input type="number" class="form-control" id="No HP" name="noHP" autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="Nama" class="form-label">Jurusan</label>
            <select class="form-select form-select-sm" aria-label="Default select example" name="Jurusan">
            <option selected>Jurusan</option>
            <?php foreach ($maba as $key) : ?>
              <option value="<?php echo $key->jurusan ?>"><?php echo $key->jurusan ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <button class="btn btn-success">simpan</button>
      </form>
      
      
    </div>
  </div>
</div>
</div>