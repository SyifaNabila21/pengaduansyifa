<link rel="stylesheet" href="public/css/style.css">

<div class="container">

    <div class="header">
        <h2>Histori Aspirasi</h2>
        <a href="Index.php?controller=SiswaController&action=dashboard" 
           class="btn btn-secondary">
            ← Kembali
        </a>
    </div>

    <div class="card">

        <table>
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Kategori</th>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>Umpan Balik</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($histori as $h): ?>
                <tr>
                    <td><?= $h['tanggal']; ?></td>
                    <td><?= $h['nama_kategori']; ?></td>
                    <td><?= $h['judul']; ?></td>
                    <td>
                        <span class="status <?= strtolower($h['status']); ?>">
                            <?= $h['status']; ?>
                        </span>
                    </td>
                    <td>
                        <?php
                        $fb = (new AspirasiModel())->getFeedback($h['id_aspirasi']);
                        echo $fb ? $fb['pesan'] : '-';
                        ?>
                    </td>
                    <td>
                        <a href="Index.php?controller=SiswaController&action=edit&id=<?= $h['id_aspirasi']; ?>" 
                           class="btn btn-secondary">
                            ✏️ Ubah
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</div>