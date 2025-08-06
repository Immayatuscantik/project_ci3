<h2>Tambah/Edit Promo</h2>

<form method="post" enctype="multipart/form-data" action="<?php echo site_url('admin/promo/save'); ?>">
  <input type="hidden" name="id" value="<?php echo isset($promo['id']) ? $promo['id'] : ''; ?>">

  <input type="text" name="judul" placeholder="Judul Promo" value="<?php echo isset($promo['judul']) ? $promo['judul'] : ''; ?>" required>

  <textarea name="deskripsi" placeholder="Deskripsi Promo"><?php echo isset($promo['deskripsi']) ? $promo['deskripsi'] : ''; ?></textarea>

  <select name="kategori_id" required>
    <?php foreach ($kategori as $kat): ?>
      <option value="<?php echo $kat['id']; ?>" <?php echo (isset($promo['kategori_id']) && $promo['kategori_id'] == $kat['id']) ? 'selected' : ''; ?>>
        <?php echo $kat['nama_kategori']; ?>
      </option>
    <?php endforeach; ?>
  </select>

  <input type="date" name="mulai" value="<?php echo isset($promo['mulai']) ? $promo['mulai'] : ''; ?>"> hingga 
  <input type="date" name="berakhir" value="<?php echo isset($promo['berakhir']) ? $promo['berakhir'] : ''; ?>">

  <?php if (!empty($promo['flyer'])): ?>
    <div>
      <img src="<?php echo base_url('uploads/' . $promo['flyer']); ?>" alt="Flyer" width="150">
    </div>
  <?php endif; ?>

  <input type="file" name="flyer">

  <label>Status:
    <select name="status">
      <option value="aktif" <?php echo (isset($promo['status']) && $promo['status'] == 'aktif') ? 'selected' : ''; ?>>Aktif</option>
      <option value="nonaktif" <?php echo (isset($promo['status']) && $promo['status'] == 'nonaktif') ? 'selected' : ''; ?>>Tidak Aktif</option>
    </select>
  </label>

  <button type="submit">Simpan</button>
</form>
