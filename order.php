<?php
include_once("header.php");
?>
<div class="d-flex" id="wrapper">


    <!-- Sidebar -->
    <div class="bg-dark text-white p-3" id="sidebar">
        <h4 class="text-center">👟 F4 Sneaker</h4>
        <ul class="nav flex-column mt-4">
            <li class="nav-item">
                <a href="admin.php" class="nav-link text-white"><i class="fas fa-home me-2"></i>Trang Chủ</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white"><i class="fas fa-shoe-prints me-2"></i>Sản phẩm</a>
            </li>
            <li class="nav-item">
                <a href="order.php" class="nav-link text-white"><i class="fas fa-box me-2"></i>Đơn hàng</a>
            </li>
            <li class="nav-item">
                <a href="user.php" class="nav-link text-white"><i class="fas fa-users me-2"></i>Người dùng</a>
            </li>
            <li class="nav-item">
                <a href="thongke.php" class="nav-link text-white"><i class="fas fa-chart-line me-2"></i>Thống kê</a>
            </li>
        </ul>
    </div>


    <div id="page-content" class="w-100">
        <nav class="navbar navbar-light bg-light px-4">
            <span class="navbar-brand mb-0 h1">Quản lý đơn hàng</span>
        </nav>

        <div class="container mt-4">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Khách hàng</th>
                        <th>Ngày đặt</th>
                        <th>Trạng thái</th>
                        <th>Tổng tiền</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody id="orderTable">

                </tbody>
            </table>
        </div>
    </div>
</div>