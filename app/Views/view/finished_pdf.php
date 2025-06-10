<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= esc($tutorial['judul']) ?> - PDF</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            font-size: 20px;
            margin-bottom: 5px;
        }

        h4 {
            font-size: 16px;
            margin-top: 20px;
            margin-bottom: 5px;
        }

        p {
            margin: 5px 0;
        }

        .step {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            font-family: monospace;
            white-space: pre-wrap;
            word-break: break-all;
        }

        img {
            max-width: 100%;
            height: auto;
            margin: 10px 0;
        }

        a {
            color: #0066cc;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1><?= esc($tutorial['judul']) ?></h1>
    <p><strong>Kode Mata Kuliah:</strong> <?= esc($tutorial['kode_matkul']) ?></p>
    <hr>

    <?php if (!empty($details)): ?>
        <?php $i = 1; ?>
        <?php foreach ($details as $d): ?>
            <div class="step">
                <h4>Langkah <?= $i++ ?>.</h4>

                <?php if (!empty($d['text'])): ?>
                    <p><?= esc($d['text']) ?></p>
                <?php endif; ?>

                <?php if (!empty($d['url'])): ?>
                    <p><strong>Link:</strong> <?= esc($d['url']) ?></p>
                <?php endif; ?>

                <?php if (!empty($d['image'])): ?>
                    <img src="<?= base_url('uploads/images/' . $d['image']) ?>" alt="Gambar">
                <?php endif; ?>

                <?php if (!empty($d['code'])): ?>
                    <pre><?= esc($d['code']) ?></pre>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p><em>Tidak ada detail tutorial.</em></p>
    <?php endif; ?>
</body>
</html>
