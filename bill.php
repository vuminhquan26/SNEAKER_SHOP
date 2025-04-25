<?php include_once("header.php"); ?>

<style>
    .product-thumbnail {
        width: 80px;
        height: 80px;
        object-fit: cover;
        margin-right: 5px;
    }

    .main-image {
        width: 100%;
        max-height: 350px;
        object-fit: contain;
        border: 1px solid #ccc;
    }

    .size-button {
        margin: 5px;
        width: 40px;
        height: 40px;
    }

    .related-product img {
        height: 200px;
        object-fit: cover;
    }
</style>

<div class="container my-5">
    <h2 class="text-center mb-4">Thanh Toán Sản Phẩm</h2>
    <form id="checkoutForm" action="thankyou.php">
        <!-- Thông tin giao hàng -->
        <div class="mb-4">
            <h4>Thông Tin Giao Hàng</h4>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="fullName" class="form-label">Họ và Tên</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Nhập họ và tên" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="phoneNumber" class="form-label">Số Điện Thoại</label>
                    <input type="tel" class="form-control" id="phoneNumber" placeholder="Nhập số điện thoại" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Địa Chỉ</label>
                <input type="text" class="form-control" id="address" placeholder="Nhập địa chỉ giao hàng" required>
            </div>
            <div class="mb-3">
                <label for="note" class="form-label">Ghi Chú (Tùy chọn)</label>
                <textarea class="form-control" id="note" rows="3" placeholder="Nhập ghi chú nếu có"></textarea>
            </div>
        </div>

        <!-- Tóm tắt đơn hàng -->
        <div class="mb-4">
            <h4>Tóm Tắt Đơn Hàng</h4>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sản phẩm A <span>500,000 VND</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sản phẩm B <span>300,000 VND</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Phí vận chuyển <span>50,000 VND</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center fw-bold">
                    Tổng cộng <span>850,000 VND</span>
                </li>
            </ul>
        </div>

        <!-- Phương thức thanh toán -->
        <div class="mb-4">
            <h4>Phương Thức Thanh Toán</h4>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="cod" value="cod" checked>
                <label class="form-check-label" for="cod">Thanh toán khi nhận hàng (COD)</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="bankTransfer" value="bankTransfer">
                <label class="form-check-label" for="bankTransfer">Chuyển khoản ngân hàng</label>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-100">Đặt Hàng :33</button>
    </form>
</div>
<?php
include_once("footer.php");
?>

