<link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">

<h2>Tambah Kategori</h2>

<form action="<?php echo site_url('kategori/save'); ?>" method="post">
  <input type="text" name="nama" placeholder="Nama Kategori" required>
  <input type="number" name="urutan" placeholder="Nomor Urut" required>
  <select name="status">
    <option value="aktif">Aktif</option>
    <option value="tidak_aktif">Tidak Aktif</option>
  </select>
  <button type="submit">Simpan</button>
</form>
