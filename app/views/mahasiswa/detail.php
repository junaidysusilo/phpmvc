<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nim']; ?></h6>
            <p><?= $data['mhs']['email'] ?></p>
            <p><?= $data['mhs']['jurusan'] ?></p>
            <a href="<?= BASEURL; ?>mahasiswa">Back</a>
        </div>
    </div>
</div>