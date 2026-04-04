<h2>Dashboard Admin</h2>
<link rel="stylesheet" href="public/css/style.css">

<table border="1" cellpadding="5">
<tr>
    <th>Tanggal</th>
    <th>Siswa</th>
    <th>Kategori</th>
    <th>Judul</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

<?php foreach ($aspirasi as $a): ?>
<tr>
    <td><?= $a['tanggal']; ?></td>
    <td><?= $a['nama']; ?></td>
    <td><?= $a['nama_kategori']; ?></td>
    <td><?= $a['judul']; ?></td>
    <td><?= $a['status']; ?></td>
    <td>
        <a href="Index.php?controller=AdminController&action=detail&id=<?= $a['id_aspirasi']; ?>">
            Detail
        </a>
    </td>
</tr>
<?php endforeach; ?>
</table>
<h3>Filter Aspirasi</h3>

<form method="get" action="Index.php">
    <input type="hidden" name="controller" value="AdminController">
    <input type="hidden" name="action" value="dashboard">

    Tanggal:
    <input type="date" name="tanggal">

    Kategori:
    <select name="kategori">
        <option value="">-- Semua --</option>
        <?php foreach ($kategoriList as $k): ?>
            <option value="<?= $k['id_kategori']; ?>">
                <?= $k['nama_kategori']; ?>
            </option>
        <?php endforeach; ?>
    </select>

    Siswa:
    <select name="siswa">
        <option value="">-- Semua --</option>
        <?php foreach ($siswaList as $s): ?>
            <option value="<?= $s['id_user']; ?>">
                <?= $s['nama']; ?>
            </option>
        <?php endforeach; ?>
    </select>

    <div class="footer">
        <button class="btn btn-danger" type="submit">filter</button>
    </div>
<hr>


<br>
<a href="Index.php?controller=LoginController&action=logout">Logout</a>
