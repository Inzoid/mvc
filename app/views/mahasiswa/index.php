<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h3>Daftar Mahasiswa</h3><br>

        <?php foreach( $data['mhs'] as $mhs ) : ?>
            <ul>
                <li><?= $mhs ['nama'] ?></li>
                <li><?= $mhs ['nrp'] ?></li>
                <li><?= $mhs ['email'] ?></li>
                <li><?= $mhs ['jurusan'] ?></li>
            </ul>
        <?php endforeach; ?>
        </div>
     
    </div>

</div>