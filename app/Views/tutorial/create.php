<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<style>
    .btn-maroon {
        background-color: #850E35;
        color: white;
        border: none;
    }

    .btn-maroon:hover {
        background-color:rgb(87, 8, 34);
        color: white;
    }

    .custom-select-wrapper {
        position: relative;
    }

    .custom-select-wrapper::after {
        content: "▾";
        position: absolute;
        top: 50%;
        right: 12px;
        transform: translateY(-50%);
        pointer-events: none;
        font-size: 16px;
        color: #555;
    }

    .custom-select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        padding-right: 30px;
    }
</style>

<div class="container mt-4">
    <h2>Tambah Tutorial</h2>
    <form action="/tutorial/save" method="post">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Tutorial</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="kode_matkul" class="form-label">Mata Kuliah</label>
            <div class="custom-select-wrapper">
                <select name="kode_matkul" id="kode_matkul" class="form-control custom-select" required>
                    <option value="">-- Pilih Mata Kuliah --</option>
                    <?php if (!empty($matkuls)): ?>
                        <?php foreach ($matkuls as $matkul): ?>
                            <option value="<?= esc($matkul['kdmk']) ?>">
                                <?= esc($matkul['kdmk']) ?> - <?= esc($matkul['nama']) ?>
                            </option>
                        <?php endforeach ?>
                    <?php else: ?>
                        <option value="">Data mata kuliah tidak tersedia</option>
                    <?php endif ?>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-maroon">Simpan</button>
    </form>
</div>

<?= $this->endSection() ?>
