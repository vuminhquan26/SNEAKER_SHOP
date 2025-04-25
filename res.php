<?php include_once("header.php"); ?>
<link rel="stylesheet" href="style-auth.css">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
  <div class="card shadow p-4" style="width: 500px;">
    <h4 class="text-center mb-4">Đăng Ký</h4>
    <form method="post" action="xuly_dangky.php">
      <div class="mb-3">
        <label for="username" class="form-label">Tên đăng nhập</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Mật khẩu</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div><div class="mb-3">
        <label for="password" class="form-label">Nhập Lại Mật khẩu</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="mb-3">
        <label for="hoten" class="form-label">Họ tên</label>
        <input type="text" class="form-control" id="hoten" name="hoten" required>
      </div>
      <div class="mb-3">
        <label for="sdt" class="form-label">Số điện thoại</label>
        <input type="text" class="form-control" id="sdt" name="sdt" required>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-success">Đăng Ký</button>
      </div>
    </form>
    <p class="text-center mt-3">
      Đã có tài khoản? <a href="login.php">Đăng nhập</a>
    </p>
  </div>
</div>
<?php
include_once("footer.php");
?>