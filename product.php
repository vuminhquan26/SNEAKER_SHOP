<?php
include_once("header.php");
?>
    <style>
        .carousel-item img {
            width: 100%;
            height: 60vh;
            object-fit: cover;
            object-position: center;
        }

        .container {
            margin-top: 100px;
        }

        .showproduct {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .card {
            width: 18rem;
            height: 25rem;
            border: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
            display: flex;
            flex-direction: column;
        }

        .image-wrapper {
            position: relative;
            width: 100%;
            height: 75%;
            overflow: hidden;
        }

        .image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.5s ease-in-out;
            position: absolute;
            top: 0;
            left: 0;
        }

        .image-wrapper img.card-img-top-hover {
            opacity: 0;
            z-index: 1;
        }

        .card:hover .card-img-top-hover {
            opacity: 1;
        }

        .card:hover .card-img-top {
            opacity: 0;
        }

        .card-body {
            height: 25%;
            background: white;
            text-align: center;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .card-body h5 {
            font-size: 1.1rem;
            margin-bottom: .5rem;
        }

        .card-body p {
            color: #dc3545;
            font-weight: bold;
            margin-bottom: .5rem;
        }
    </style>
<div class="container">
    <table class="table text-center">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th>HOTLINE: 012345678</th>
                <th>CAM KẾT GIAO HÀNG ĐÚNG HẠN</th>
                <th>PHÍ SHIP RẺ NHẤT THỊ TRƯỜNG</th>
            </tr>
        </thead>
    </table>
</div>

<div class="container">
    <p class="text-center fw-bold fs-2 text-danger">SẢN PHẨM BÁN CHẠY</p>
    <div class="showproduct">

        <!-- SP 1: có hiệu ứng hover -->
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">1.000.000 VND</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">1.000.000 VND</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">1.000.000 VND</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">1.000.000 VND</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">1.000.000 VND</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">1.000.000 VND</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">1.000.000 VND</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">1.000.000 VND</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">1.000.000 VND</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">1.000.000 VND</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">1.000.000 VND</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">1.000.000 VND</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
    </div>
</div>
<?php
include_once("footer.php");
?>
