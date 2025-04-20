<?php
include_once("header.php");
?>

<div class="d-flex" id="wrapper">
    <div class="bg-dark text-white p-3" id="sidebar">
        <h4 class="text-center">👟 F4 Sneaker</h4>
        <ul class="nav flex-column mt-4">
            <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-home me-2"></i>Trang Chủ</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-shoe-prints me-2"></i>Sản phẩm</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-box me-2"></i>Đơn hàng</a>
            </li>
            <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-users me-2"></i>Người dùng</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-chart-line me-2"></i>Thống kê</a></li>
        </ul>
    </div>

    <div id="page-content" class="w-100">

        <nav class="navbar navbar-light bg-light px-4">
            <span class="navbar-brand mb-0 h1">Quản lý sản phẩm</span>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">+ Thêm sản phẩm</button>
        </nav>


        <div class="container mt-4">
            <div class="row" id="product-list">

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addProductModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="productForm">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm sản phẩm mới</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control mb-2" placeholder="Tên giày" id="productName" required>
                    <input type="text" class="form-control mb-2" placeholder="Giá" id="productPrice" required>
                    <input type="text" class="form-control mb-2" placeholder="URL Ảnh" id="productImage" required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Thêm</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                </div>
            </form>
        </div>
    </div>
</div>