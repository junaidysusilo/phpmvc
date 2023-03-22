<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>mahasiswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari mahasiswa" name="keyword" id="keyword" autocomplete="off">
                    <button class=" btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3 class="mt-3">Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span> <?= $mhs['nama']; ?></span>
                        <div>
                            <a class="badge bg-primary rounded-pill text-decoration-none" href="<?= BASEURL; ?>mahasiswa/detail/<?= $mhs['id']; ?>">Detail
                            </a>
                            <a href="<?= BASEURL; ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge bg-success rounded-pill text-decoration-none tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id'] ?>" data-url="<?= BASEURL; ?>">Ubah
                            </a>
                            <a class="badge bg-danger rounded-pill text-decoration-none" href="<?= BASEURL; ?>mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('Yakin?')">Delete
                            </a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL; ?>mahasiswa/tambah" id="form-mahasiswa" method="post">
                <input type="hidden" name="id" id="id">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="nama">Nama </label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group mb-3">
                        <label for="nim">NIM </label>
                        <input type="text" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="jurusan">Jurusan </label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option selected>Pilih</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>