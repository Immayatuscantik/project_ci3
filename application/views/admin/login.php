<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
</head>
<body>
  <h2>Login Admin</h2>

  <form method="post" action="<?php echo site_url('admin/doLogin'); ?>">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
  </form>

  <?php if ($this->session->flashdata('error')): ?>
    <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
  <?php endif; ?>
</body>
</html>
