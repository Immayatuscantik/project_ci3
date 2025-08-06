<link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">

<h2>Daftar Kategori Promo</h2>

<a href="<?php echo site_url('admin/kategori/create'); ?>">+ Tambah Kategori</a>

<table border="1" cellpadding="5">
  <tr>
    <th>No</th>
    <th>Nama Kategori</th>
    <th>Urutan</th>
    <th>Status</th>
    <th>Aksi</th>
  </tr>
  <?php if (!empty($kategori)) : ?>
    <?php $no = 1; foreach ($kategori as $k) : ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo htmlspecialchars($k['nama_kategori']); ?></td>
      <td><?php echo htmlspecialchars($k['nomor_urut']); ?></td>
      <td><?php echo htmlspecialchars($k['status']); ?></td>
      <td>
        <a href="<?php echo site_url('admin/kategori/edit/'.$k['id']); ?>">Edit</a>
        <form action="<?php echo site_url('admin/kategori/delete/'.$k['id']); ?>" method="post" style="display:inline">
          <button type="submit" onclick="return confirm('Hapus kategori ini?')">Hapus</button>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
  <?php endif; ?>
</table>

<!-- Header Banner -->
<div class="header-banner">
    <div>
        <h1>Manajemen Kategori</h1>
        <p>Kelola kategori layanan dengan mudah dan cepat.</p>
    </div>
    <img src="<?php echo base_url('public/images/undraw_medicine_hqqg.svg'); ?>" alt="Ilustrasi">
</div>

<!-- Jika tidak ada data -->
<?php if (empty($kategori)) : ?>
    <div class="empty-data">
        <img src="<?php echo base_url('images/empty.svg'); ?>" alt="No Data">
        <p>Belum ada data kategori</p>
    </div>
<?php endif; ?>
