<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Promo</title>
  <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
</head>
<body>
  <h2>Daftar Promo</h2>
  <a href="<?php echo site_url('promo/create'); ?>" class="btn">Tambah Promo</a>

  <table>
    <thead>
      <tr>
        <th>Kategori</th>
        <th>Judul</th>
        <th>Periode</th>
        <th>Status</th>
        <th>Flyer</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($promo as $p): ?>
        <tr>
          <td><?php echo $p['nama_kategori']; ?></td>
          <td><?php echo $p['judul']; ?></td>
          <td><?php echo $p['tanggal_mulai']; ?> - <?php echo $p['tanggal_akhir']; ?></td>
          <td><?php echo ucfirst($p['status']); ?></td>
          <td>
            <?php if (!empty($p['flyer'])): ?>
              <img src="<?php echo base_url('uploads/' . $p['flyer']); ?>" width="100">
            <?php else: ?>
              Tidak ada
            <?php endif; ?>
          </td>
          <td>
            <a href="<?php echo site_url('promo/edit/' . $p['id']); ?>">Edit</a>
            <a href="<?php echo site_url('promo/delete/' . $p['id']); ?>" onclick="return confirm('Hapus data?')">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
