<?php include_once("header.php"); ?>
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

    .showproduct .card {
        width: 18rem;
        height: 25rem;
        display: flex;
        flex-direction: column;
        border: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
    }

    .image-wrapper {
        position: relative;
        width: 100%;
        height: 75%;
        overflow: hidden;
    }

    .card-img-top,
    .card-img-top-hover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
    }

    .card-img-top-hover {
        opacity: 0;
        z-index: 1;
    }

    .card:hover .card-img-top {
        transform: scale(1.1);
        opacity: 0;
    }

    .card:hover .card-img-top-hover {
        opacity: 1;
    }

    .card-body {
        flex: 1;
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

    .featured-brands {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-top: 50px;
    }

    .brand-card {
        width: 12rem;
        height: 12rem;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #fff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        transition: transform 0.3s;
    }

    .brand-card:hover {
        transform: scale(1.1);
    }

    .brand-card img {
        max-width: 80%;
        max-height: 80%;
        object-fit: contain;
    }
</style>

<!-- Hero Carousel -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://bizweb.dktcdn.net/100/458/331/themes/866920/assets/banner_product_noibat.jpg?1743156871883" class="d-block w-100" alt="Hero Image">
        </div>
        <div class="carousel-item">
            <img src="https://bizweb.dktcdn.net/100/108/842/themes/775959/assets/slide-img2.jpg?1744885252868" class="d-block w-100" alt="Hero Image">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Hot Products -->
<div class="container">
    <p class="text-center fw-bold fs-2 text-danger">SẢN PHẨM BÁN CHẠY</p>
    <div class="showproduct">
        <!-- 7 thẻ sản phẩm, mỗi thẻ là 1 card -->
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Nike/nike_air_jordan_1_low_true_blue_cement_like_auth/nike_air_jordan_1_low_true_blue_cement_like_auth_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY 1</h5>
                <p class="card-text">1.200.000₫</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/MLB/mlb_chunky_liner_mid_classic_monogram_new_york_yankees_black_like_auth/mlb_chunky_liner_mid_classic_monogram_new_york_yankees_black_like_auth.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/MLB/mlb_chunky_liner_mid_classic_monogram_new_york_yankees_black_like_auth/mlb_chunky_liner_mid_classic_monogram_new_york_yankees_black_like_auth_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY 2</h5>
                <p class="card-text">1.450.000₫</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Nike/air_force_1_global_sail_game_royal_white_best_quality/air_force_1_global_sail_game_royal_white_best_quality.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Nike/air_force_1_global_sail_game_royal_white_best_quality/air_force_1_global_sail_game_royal_white_best_quality_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY 3</h5>
                <p class="card-text">1.300.000₫</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/VANS/giay_vans_old_skool_classic_black_white/giay_vans_old_skool_classic_black_white.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/VANS/giay_vans_old_skool_classic_black_white/giay_vans_old_skool_classic_black_white_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY 4</h5>
                <p class="card-text">1.000.000₫</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Converse/giay_converse_run_star_hike_black_high_top_sieu_cap/giay_converse_run_star_hike_black_high_top_sieu_cap.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Converse/giay_converse_run_star_hike_black_high_top_sieu_cap/giay_converse_run_star_hike_black_high_top_sieu_cap_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY 5</h5>
                <p class="card-text">980.000₫</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>

        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Converse/giay_converse_chuck_taylor_1970s_all_star_black_white_co_cao/giay_converse_chuck_taylor_1970s_all_star_black_white_co_cao.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Converse/giay_converse_chuck_taylor_1970s_all_star_black_white_co_cao/giay_converse_chuck_taylor_1970s_all_star_black_white_co_cao_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY 6</h5>
                <p class="card-text">1.500.000₫</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Converse/giay_converse_x_dior_b23_low_top_sneaker_black_dior_oblique_like_auth/giay_converse_x_dior_b23_low_top_sneaker_black_dior_oblique_like_auth.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Converse/giay_converse_x_dior_b23_low_top_sneaker_black_dior_oblique_like_auth/giay_converse_x_dior_b23_low_top_sneaker_black_dior_oblique_like_auth_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY 6</h5>
                <p class="card-text">1.500.000₫</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
        <div class="card">
            <div class="image-wrapper">
                <img src="image/product/Nike/giay_nike_air_force_1_low_panda_best_quality/giay_nike_air_force_1_low_panda_best_quality.jpg" class="card-img-top" alt="ẢNH GIÀY">
                <img src="image/product/Nike/giay_nike_air_force_1_low_panda_best_quality/giay_nike_air_force_1_low_panda_best_quality_1.jpg" class="card-img-top-hover" alt="ẢNH GIÀY hover">
            </div>
            <div class="card-body">
                <h5 class="card-title">TÊN GIÀY 6</h5>
                <p class="card-text">1.500.000₫</p>
                <a href="showproduct.php" class="btn btn-primary">XEM CHI TIẾT</a>
            </div>
        </div>
    </div>
</div>

<!-- Featured Brands -->
<div class="container">
    <p class="text-center fw-bold fs-2 text-dark mt-5">CÁC HÃNG NỔI BẬT</p>
    <div class="featured-brands">
        <a href="product.php" class="brand-card">
            <img src="image/logo/brand_logo/MLB.png" alt="MLB Brand Logo">
        </a>
        <a href="product.php" class="brand-card">
            <img src="image/logo/brand_logo/ADIDAS.png" alt="Adidas">
        </a>
        <a href="product.php" class="brand-card">
            <img src="image/logo/brand_logo/NIKE.png" alt="Nike">
        </a>
        <a href="product.php" class="brand-card">
            <img src="image/logo/brand_logo/CONVERSE.png" alt="Converse">
        </a>
        <a href="product.php" class="brand-card">
            <img src="image/logo/brand_logo/NB.png" alt="New Balance">
        </a>
        <a href="product.php" class="brand-card">
            <img src="image/logo/brand_logo/VANS.png" alt="Vans">
        </a>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<?php
include_once("footer.php");
?>