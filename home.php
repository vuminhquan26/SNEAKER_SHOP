<?php
include_once("header.php");
?>
<style>
    .text-center fw-bold fs-2 text {
        display: flex;
        justify-content: center;
    }

    .container {
        margin-top: 100px;
    }

    .showproduct {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        /* khoảng cách giữa các card */
    }

    .showproduct .card {
        width: 18rem;
    }

    .showbrand {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        /* khoảng cách giữa các card */
    }

    .showbrand .card {
        width: 18rem;
    }

    .feedback {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        /* khoảng cách giữa các card */
    }

    .feedback .card {
        max-width: 540px;
        width: 100%;
    }
</style>
<!-- Hero -->
<div class="p-5 text-center bg-image rounded-3" style="
        background-image: url('https://bizweb.dktcdn.net/100/458/331/themes/866920/assets/banner_product_noibat.jpg?1743156871883');
        height: 1000px;
    ">
</div>
<!-- Hero -->
<!-- Commit-->
<div class="container">
    <p class="text-center fw-bold fs-2 text-danger">CAM KẾT KHI MUA HÀNG</p>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">HOTLINE: 012345678</th>
                <th scope="col">CAM KẾT GIAO HÀNG ĐÚNG HẠN</th>
                <th scope="col">PHÍ SHIP RẺ NHẤT THỊ TRƯỜNG</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <a href="res.php" class="btn btn-primary">ĐĂNG KÍ</a>
                </td>
                <td>
                    <a href="login.php" class="btn btn-primary">ĐĂNG NHẬP</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Commit-->
<!--Product Hot-->
<div class="container">
    <p class="text-center fw-bold fs-2 text-danger">SẢN PHẨM BÁN CHẠY</p>
    <div class="showproduct">
        <div class="card" style="width: 18rem;">
            <img src="image/THETHAO/Adidas/images/adidas-adidas-samba-classic-white-800x650-1-247x247.jpg" class="card-img-top" alt="ẢNH GIÀY">
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">GIÁ 1.XXX.XXX</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image/THETHAO/Adidas/images/adidas-adidas-samba-classic-white-800x650-1-247x247.jpg" class="card-img-top" alt="ẢNH GIÀY">
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">GIÁ 1.XXX.XXX</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image/THETHAO/Adidas/images/adidas-adidas-samba-classic-white-800x650-1-247x247.jpg" class="card-img-top" alt="ẢNH GIÀY">
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">GIÁ 1.XXX.XXX</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image/THETHAO/Adidas/images/adidas-adidas-samba-classic-white-800x650-1-247x247.jpg" class="card-img-top" alt="ẢNH GIÀY">
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">GIÁ 1.XXX.XXX</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image/THETHAO/Adidas/images/adidas-adidas-samba-classic-white-800x650-1-247x247.jpg" class="card-img-top" alt="ẢNH GIÀY">
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">GIÁ 1.XXX.XXX</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image/THETHAO/Adidas/images/adidas-adidas-samba-classic-white-800x650-1-247x247.jpg" class="card-img-top" alt="ẢNH GIÀY">
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">GIÁ 1.XXX.XXX</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image/THETHAO/Adidas/images/adidas-adidas-samba-classic-white-800x650-1-247x247.jpg" class="card-img-top" alt="ẢNH GIÀY">
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">GIÁ 1.XXX.XXX</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="image/THETHAO/Adidas/images/adidas-adidas-samba-classic-white-800x650-1-247x247.jpg" class="card-img-top" alt="ẢNH GIÀY">
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">GIÁ 1.XXX.XXX</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image/THETHAO/Adidas/images/adidas-adidas-samba-classic-white-800x650-1-247x247.jpg" class="card-img-top" alt="ẢNH GIÀY">
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">GIÁ 1.XXX.XXX</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image/THETHAO/Adidas/images/adidas-adidas-samba-classic-white-800x650-1-247x247.jpg" class="card-img-top" alt="ẢNH GIÀY">
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">GIÁ 1.XXX.XXX</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image/THETHAO/Adidas/images/adidas-adidas-samba-classic-white-800x650-1-247x247.jpg" class="card-img-top" alt="ẢNH GIÀY">
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">GIÁ 1.XXX.XXX</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="image/THETHAO/Adidas/images/adidas-adidas-samba-classic-white-800x650-1-247x247.jpg" class="card-img-top" alt="ẢNH GIÀY">
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY</h5>
                <p class="card-text">GIÁ 1.XXX.XXX</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
    </div>
</div>
<!--Product Hot-->

<!--Product Brand-->
<div class="container">
    <p class="text-center fw-bold fs-2 text-danger">HÃNG NỔI BẬT</p>
    <div class="showbrand">
        <a href="showproduct.php">
            <img src="image/THETHAO/NB/14845b86bbe8bd34dd8cd12afac5dd21-150x84.jpg" class="img-thumbnail" alt="Brand Logo">
        </a>
        <a href="product.php">
            <img src="image/THETHAO/NB/14845b86bbe8bd34dd8cd12afac5dd21-150x84.jpg" class="img-thumbnail" alt="Brand Logo">
        </a>
        <a href="product.php">
            <img src="image/THETHAO/NB/14845b86bbe8bd34dd8cd12afac5dd21-150x84.jpg" class="img-thumbnail" alt="Brand Logo">
        </a>
        <a href="product.php">
            <img src="image/THETHAO/NB/14845b86bbe8bd34dd8cd12afac5dd21-150x84.jpg" class="img-thumbnail" alt="Brand Logo">
        </a>
        <a href="product.php">
            <img src="image/THETHAO/NB/14845b86bbe8bd34dd8cd12afac5dd21-150x84.jpg" class="img-thumbnail" alt="Brand Logo">
        </a>
        <a href="product.php">
            <img src="image/THETHAO/NB/14845b86bbe8bd34dd8cd12afac5dd21-150x84.jpg" class="img-thumbnail" alt="Brand Logo">
        </a>
        <a href="product.php">
            <img src="image/THETHAO/NB/14845b86bbe8bd34dd8cd12afac5dd21-150x84.jpg" class="img-thumbnail" alt="Brand Logo">
        </a>
        <a href="product.php">
            <img src="image/THETHAO/NB/14845b86bbe8bd34dd8cd12afac5dd21-150x84.jpg" class="img-thumbnail" alt="Brand Logo">
        </a>
        <a href="product.php">
            <img src="image/THETHAO/NB/14845b86bbe8bd34dd8cd12afac5dd21-150x84.jpg" class="img-thumbnail" alt="Brand Logo">
        </a>
        <a href="product.php">
            <img src="image/THETHAO/NB/14845b86bbe8bd34dd8cd12afac5dd21-150x84.jpg" class="img-thumbnail" alt="Brand Logo">
        </a>
    </div>
</div>
<!--Product Brand-->


    <!--Feed Back-->
    <div class="container">
        <p class="text-center fw-bold fs-2 text-danger">PHẢN HỒI CỦA KHÁCH HÀNG</p>
        <div class="feedback">

            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://scontent.fhan2-5.fna.fbcdn.net/v/t39.30808-6/481248842_2301623373544556_6996918353748216704_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=_vUUeN1_CnsQ7kNvwFJ81UW&_nc_oc=AdnpAbypatLVc88QSuDCg3HUVnptXhRvzEDjNP4Lrf44eHq_H2IjYiMFjCZogT7iDIg&_nc_zt=23&_nc_ht=scontent.fhan2-5.fna&_nc_gid=fHXHzgtcFOJBWwaa8IQiGw&oh=00_AfF3Egw1sBF9r7LuYOKuFOySSpnVVPLxzTTUq6htWS-TzA&oe=6807B1D8" class="img-fluid rounded-start" alt="avtfeedback">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">FeedBack 1</h5>
                            <p class="card-text">Nội Dung FeedBack</p>
                            <p class="card-text"><small class="text-muted">Ngày Đăng</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://scontent.fhan2-5.fna.fbcdn.net/v/t39.30808-6/481248842_2301623373544556_6996918353748216704_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=_vUUeN1_CnsQ7kNvwFJ81UW&_nc_oc=AdnpAbypatLVc88QSuDCg3HUVnptXhRvzEDjNP4Lrf44eHq_H2IjYiMFjCZogT7iDIg&_nc_zt=23&_nc_ht=scontent.fhan2-5.fna&_nc_gid=fHXHzgtcFOJBWwaa8IQiGw&oh=00_AfF3Egw1sBF9r7LuYOKuFOySSpnVVPLxzTTUq6htWS-TzA&oe=6807B1D8" class="img-fluid rounded-start" alt="avtfeedback">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">FeedBack 2</h5>
                            <p class="card-text">Nội Dung FeedBack</p>
                            <p class="card-text"><small class="text-muted">Ngày Đăng</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://scontent.fhan2-5.fna.fbcdn.net/v/t39.30808-6/481248842_2301623373544556_6996918353748216704_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=_vUUeN1_CnsQ7kNvwFJ81UW&_nc_oc=AdnpAbypatLVc88QSuDCg3HUVnptXhRvzEDjNP4Lrf44eHq_H2IjYiMFjCZogT7iDIg&_nc_zt=23&_nc_ht=scontent.fhan2-5.fna&_nc_gid=fHXHzgtcFOJBWwaa8IQiGw&oh=00_AfF3Egw1sBF9r7LuYOKuFOySSpnVVPLxzTTUq6htWS-TzA&oe=6807B1D8" class="img-fluid rounded-start" alt="avtfeedback">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">FeedBack 2</h5>
                            <p class="card-text">Nội Dung FeedBack</p>
                            <p class="card-text"><small class="text-muted">Ngày Đăng</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://scontent.fhan2-5.fna.fbcdn.net/v/t39.30808-6/481248842_2301623373544556_6996918353748216704_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=_vUUeN1_CnsQ7kNvwFJ81UW&_nc_oc=AdnpAbypatLVc88QSuDCg3HUVnptXhRvzEDjNP4Lrf44eHq_H2IjYiMFjCZogT7iDIg&_nc_zt=23&_nc_ht=scontent.fhan2-5.fna&_nc_gid=fHXHzgtcFOJBWwaa8IQiGw&oh=00_AfF3Egw1sBF9r7LuYOKuFOySSpnVVPLxzTTUq6htWS-TzA&oe=6807B1D8" class="img-fluid rounded-start" alt="avtfeedback">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">FeedBack 2</h5>
                            <p class="card-text">Nội Dung FeedBack</p>
                            <p class="card-text"><small class="text-muted">Ngày Đăng</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://scontent.fhan2-5.fna.fbcdn.net/v/t39.30808-6/481248842_2301623373544556_6996918353748216704_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=_vUUeN1_CnsQ7kNvwFJ81UW&_nc_oc=AdnpAbypatLVc88QSuDCg3HUVnptXhRvzEDjNP4Lrf44eHq_H2IjYiMFjCZogT7iDIg&_nc_zt=23&_nc_ht=scontent.fhan2-5.fna&_nc_gid=fHXHzgtcFOJBWwaa8IQiGw&oh=00_AfF3Egw1sBF9r7LuYOKuFOySSpnVVPLxzTTUq6htWS-TzA&oe=6807B1D8" class="img-fluid rounded-start" alt="avtfeedback">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">FeedBack 2</h5>
                            <p class="card-text">Nội Dung FeedBack</p>
                            <p class="card-text"><small class="text-muted">Ngày Đăng</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://scontent.fhan2-5.fna.fbcdn.net/v/t39.30808-6/481248842_2301623373544556_6996918353748216704_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=_vUUeN1_CnsQ7kNvwFJ81UW&_nc_oc=AdnpAbypatLVc88QSuDCg3HUVnptXhRvzEDjNP4Lrf44eHq_H2IjYiMFjCZogT7iDIg&_nc_zt=23&_nc_ht=scontent.fhan2-5.fna&_nc_gid=fHXHzgtcFOJBWwaa8IQiGw&oh=00_AfF3Egw1sBF9r7LuYOKuFOySSpnVVPLxzTTUq6htWS-TzA&oe=6807B1D8" class="img-fluid rounded-start" alt="avtfeedback">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">FeedBack 2</h5>
                            <p class="card-text">Nội Dung FeedBack</p>
                            <p class="card-text"><small class="text-muted">Ngày Đăng</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://scontent.fhan2-5.fna.fbcdn.net/v/t39.30808-6/481248842_2301623373544556_6996918353748216704_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=_vUUeN1_CnsQ7kNvwFJ81UW&_nc_oc=AdnpAbypatLVc88QSuDCg3HUVnptXhRvzEDjNP4Lrf44eHq_H2IjYiMFjCZogT7iDIg&_nc_zt=23&_nc_ht=scontent.fhan2-5.fna&_nc_gid=fHXHzgtcFOJBWwaa8IQiGw&oh=00_AfF3Egw1sBF9r7LuYOKuFOySSpnVVPLxzTTUq6htWS-TzA&oe=6807B1D8" class="img-fluid rounded-start" alt="avtfeedback">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">FeedBack 2</h5>
                            <p class="card-text">Nội Dung FeedBack</p>
                            <p class="card-text"><small class="text-muted">Ngày Đăng</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://scontent.fhan2-5.fna.fbcdn.net/v/t39.30808-6/481248842_2301623373544556_6996918353748216704_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=_vUUeN1_CnsQ7kNvwFJ81UW&_nc_oc=AdnpAbypatLVc88QSuDCg3HUVnptXhRvzEDjNP4Lrf44eHq_H2IjYiMFjCZogT7iDIg&_nc_zt=23&_nc_ht=scontent.fhan2-5.fna&_nc_gid=fHXHzgtcFOJBWwaa8IQiGw&oh=00_AfF3Egw1sBF9r7LuYOKuFOySSpnVVPLxzTTUq6htWS-TzA&oe=6807B1D8" class="img-fluid rounded-start" alt="avtfeedback">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">FeedBack 2</h5>
                            <p class="card-text">Nội Dung FeedBack</p>
                            <p class="card-text"><small class="text-muted">Ngày Đăng</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Feed Back-->