<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<style>
    .table-dark {
        background-color: #FFDBDB;
        color: white;
    }

    .btn-tambah {
        background-color: #F3C623;
        border-color: #FBDB93;
        color: black;
    }

    .btn-tambah:hover {
        background-color:rgb(188, 150, 56);
        border-color: #e6c87d;
        border: none;
        color: black;
    }
</style>

<div class="container mt-3">
    <h2>Daftar Tutorial</h2>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <a href="/tutorial/create" class="btn btn-tambah mb-3">+ Tambah Tutorial</a>
    
    <table class="table table-bordered" id="tutorialTable">
        <thead class="table-dark">
            <tr>
                <th class="text-center" style="width: 15%;">Judul</th>
                <th class="text-center" style="width: 15%;">Kode Matkul</th>
                <th class="text-center" style="width: 20%;">URL Presentasi</th>
                <th class="text-center" style="width: 20%;">URL Selesai</th>
                <th class="text-center" style="width: 15%;">Email</th>
                <th class="text-center" style="width: 15%;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tutorials as $t): ?>
            <tr>
                <td><?= esc($t['judul']) ?></td>
                <td><?= esc($t['kode_matkul']) ?></td>
                <td>
                    <a href="<?= base_url('/presentation/' . $t['url_presentation']) ?>" target="_blank">
                        <?= esc($t['url_presentation']) ?>
                    </a>
                </td>
                <td>
                    <a href="<?= base_url('/finished/' . $t['url_finished']) ?>" target="_blank">
                        <?= esc($t['url_finished']) ?>
                    </a>
                </td>
                <td><?= esc($t['creator_email']) ?></td>
                <td class="text-center">
                    <a href="/tutorial/<?= $t['id'] ?>/detail" class="btn btn-sm btn-warning">Detail</a>
                    <a href="/tutorial/delete/<?= $t['id'] ?>" onclick="return confirm('Yakin mau hapus?')" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
