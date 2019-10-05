<div class="container mt-3">
    <div class="row">
      <div class="col-lg-6">
       <?php Flasher::flash(); ?>
      </div>
    </div>
    <div class="row">
        <div class="col-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" 
        data-target="#formModal">
        Tambah Data
        </button> <br><br>
            <h3>Daftar Mahasiswa</h3><br>
            <ul class="list-group">
            <?php foreach( $data['mhs'] as $mhs ) : ?>
                <li class="list-group-item">
                <?= $mhs['nama']; ?>
                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?=$mhs['id']; ?>" class="btn btn-outline-danger btn-sm float-right ml-2"
                onclick="return confirm('yakin ?');">Hapus</a>
                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?=$mhs['id']; ?>" class="btn btn-outline-success btn-sm float-right ml-2
                tampilModalUbah" data-toggle="modal" 
                data-target="#formModal" data-id="<?= $mhs['id']; ?>">Edit</a>   
                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?=$mhs['id']; ?>" class="btn btn-outline-info btn-sm float-right ml-2">Detail</a>    </li>
                
            <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pelanggan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
        <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="number" class="form-control" id="nrp" name="nrp">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                    <option value = "Teknik Informatika">Teknik Informatika</option>
                    <option value = "Manajemen">Manajemen</option>
                    <option value = "Desain kominikasi Visual">Desain kominikasi Visual</option>
                </select>
            </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>