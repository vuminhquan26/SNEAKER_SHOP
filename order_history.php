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
        <a href="order_history.php" class="list-group-item list-group-item-action active">Lịch sử đơn hàng</a>
        <a href="#" class="list-group-item list-group-item-action">Đổi mật khẩu</a>
        <a href="#" class="list-group-item list-group-item-action">Đăng xuất</a>
      </div>
    </aside>

    <!-- Nội dung chính: Lịch sử mua hàng -->
    <main class="col-md-9 p-4">
      <h2 class="text-success mb-4">Lịch sử đơn hàng</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Ngày đặt</th>
            <th>Mã đơn</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <!-- Lặp qua đơn hàng từ DB ở đây -->
          <tr>
            <td>2025-04-10</td>
            <td>DH123456</td>
            <td>₫1.250.000</td>
            <td><span class="badge bg-success">Hoàn thành</span></td>
            <td><a href="order_detail.php?id=DH123456" class="btn btn-sm btn-outline-primary">Xem</a></td>
          </tr>
          <tr>
            <td>2025-03-28</td>
            <td>DH123455</td>
            <td>₫850.000</td>
            <td><span class="badge bg-warning text-dark">Đang xử lý</span></td>
            <td><a href="order_detail.php?id=DH123455" class="btn btn-sm btn-outline-primary">Xem</a></td>
          </tr>
          <!-- ... -->
        </tbody>
      </table>
    </main>
  </div>
</div>
