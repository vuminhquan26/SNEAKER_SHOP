<?php
include_once("header.php");
?>
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
<!-- Cart Section -->
<div class="container mt-4">
    <h2 class="text-center">Giỏ Hàng</h2>
    <table class="table table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>Hình ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tổng</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="https://via.placeholder.com/80" alt="Product Image" class="product-thumbnail"></td>
                <td>Giày Sneaker A</td>
                <td>
                    <input type="number" class="form-control" value="1" min="1">
                </td>
                <td>500,000 VND</td>
                <td>500,000 VND</td>
                <td>
                    <button class="btn btn-danger btn-sm">Xóa</button>
                </td>
            </tr>
            <tr>
                <td><img src="https://via.placeholder.com/80" alt="Product Image" class="product-thumbnail"></td>
                <td>Giày Sneaker B</td>
                <td>
                    <input type="number" class="form-control" value="2" min="1">
                </td>
                <td>700,000 VND</td>
                <td>1,400,000 VND</td>
                <td>
                    <button class="btn btn-danger btn-sm">Xóa</button>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="text-end">
        <h4>Tổng cộng: 1,900,000 VND</h4>
        <button class="btn btn-success">Thanh toán</button>
    </div>
</div>
<?php
include_once("footer.php");
?>