<?php include_once("header.php"); ?>
<link rel="stylesheet" href="style-auth.css">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
  <div class="card shadow p-4" style="width: 400px;">
    <h4 class="text-center mb-4">Đăng Nhập</h4>
    <form method="post" action="xuly_dangnhap.php">
      <div class="mb-3">
        <label for="username" class="form-label">Tên đăng nhập</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Mật khẩu</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Đăng Nhập</button>
      </div>
    </form>
    <p class="text-center mt-3">
      Chưa có tài khoản? <a href="res.php">Đăng ký</a>
    </p>
  </div>
</div>
<?php
include_once("footer.php");
?>