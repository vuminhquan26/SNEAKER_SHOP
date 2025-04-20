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
        <a href="#" class="list-group-item list-group-item-action">Đổi mật khẩu</a>
        <a href="#" class="list-group-item list-group-item-action">Đăng xuất</a>
      </div>
    </aside>

    <!-- Form thông tin cá nhân -->
    <main class="col-md-9 p-4">
      <h2 class="text-success mb-4">Thông tin cá nhân</h2>
      <form method="post" action="#">
        <div class="mb-3">
          <label class="form-label">Họ và tên</label>
          <input type="text" name="hoten" class="form-control" placeholder="Nhập họ và tên">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" placeholder="example@gmail.com">
        </div>
        <div class="mb-3">
          <label class="form-label">Số điện thoại</label>
          <input type="text" name="sdt" class="form-control" placeholder="Nhập số điện thoại">
        </div>
        <div class="mb-3">
          <label class="form-label">Địa chỉ</label>
          <input type="text" name="diachi" class="form-control" placeholder="Nhập địa chỉ">
        </div>
        <div class="mb-3">
          <label class="form-label">Giới tính</label>
          <div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="gtNam" value="Nam" checked>
              <label class="form-check-label" for="gtNam">Nam</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="gtNu" value="Nữ">
              <label class="form-check-label" for="gtNu">Nữ</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="gtKhac" value="Khác">
              <label class="form-check-label" for="gtKhac">Khác</label>
            </div>
          </div>
        </div>
        <div class="mb-4">
          <label class="form-label">Ngày sinh</label>
          <input type="date" name="ngaysinh" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
      </form>
    </main>
  </div>
</div>
