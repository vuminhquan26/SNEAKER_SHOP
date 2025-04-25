<?php
include_once("header.php");
?>
<div class="container my-5 bg-white rounded shadow-sm">
  <div class="row">
    <!-- Sidebar -->
    <aside class="col-md-3 border-end">
      <h5 class="mt-4">Tài khoản của tôi</h5>
      <div class="list-group mt-3">
        <a href="profile.php" class="list-group-item list-group-item-action">Hồ sơ</a>
        <a href="order_history.php" class="list-group-item list-group-item-action">Lịch sử đơn hàng</a>
        <a href="change_password.php" class="list-group-item list-group-item-action active">Đổi mật khẩu</a>
        <a href="logout.php" class="list-group-item list-group-item-action">Đăng xuất</a>
      </div>
    </aside>

    <!-- Form Đổi mật khẩu -->
    <main class="col-md-9 p-4">
      <h2 class="text-success mb-4">Đổi mật khẩu</h2>
      <form method="post" action="process_change_password.php">
        <div class="mb-3">
          <label for="currentPassword" class="form-label">Mật khẩu hiện tại</label>
          <input type="password" id="currentPassword" name="current_password" class="form-control" placeholder="Nhập mật khẩu hiện tại" required>
        </div>
        <div class="mb-3">
          <label for="newPassword" class="form-label">Mật khẩu mới</label>
          <input type="password" id="newPassword" name="new_password" class="form-control" placeholder="Nhập mật khẩu mới" required>
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Xác nhận mật khẩu mới</label>
          <input type="password" id="confirmPassword" name="confirm_password" class="form-control" placeholder="Nhập lại mật khẩu mới" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật mật khẩu</button>
      </form>
    </main>
  </div>
</div>
<?php
include_once("footer.php");
?>
