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

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify/dist/simple-notify.css" />

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/simple-notify/dist/simple-notify.min.js"></script>
</head>

<body>
    <!-- Product Detail -->
    <div class="container my-5">
        <div class="row">
            <!-- Hình ảnh -->
            <div class="col-md-6">
                <img src="https://via.placeholder.com/500x350" class="main-image mb-3" alt="Giày chính">
                <div class="d-flex">
                    <img src="https://via.placeholder.com/80" class="product-thumbnail">
                    <img src="https://via.placeholder.com/80" class="product-thumbnail">
                    <img src="https://via.placeholder.com/80" class="product-thumbnail">
                </div>
            </div>

            <!-- Thông tin -->
            <div class="col-md-6">
                <h4>TÊN GIÀY</h4>
                <p><strong>Giá:</strong> 1.000.000đ</p>
                <p><strong>Trạng thái:</strong> Còn hàng</p>
                <p><strong>Mô tả:</strong> Mẫu giày sneaker phong cách thể thao, hot trend 2025.</p>
                <p><strong>Ngày cập nhật:</strong> 18/04/2025</p>
                <p><strong>Lượt bán:</strong> 128</p>

                <p><strong>Size:</strong></p>
                <div class="d-flex flex-wrap">
                    <button class="btn btn-outline-dark size-button" onclick="handleSelectSize(36)">36</button>
                    <button class="btn btn-outline-dark size-button" onclick="handleSelectSize(37)">37</button>
                    <button class="btn btn-outline-dark size-button" onclick="handleSelectSize(38)">38</button>
                    <button class="btn btn-outline-dark size-button" onclick="handleSelectSize()">39</button>
                    <button class="btn btn-outline-dark size-button">40</button>
                    <button class="btn btn-outline-dark size-button">41</button>
                    <button class="btn btn-outline-dark size-button">42</button>
                    <button class="btn btn-outline-dark size-button">43</button>
                </div>
                <a ><button class="btn btn-success mt-3" onclick="showOrder()">THÊM VÀO GIỎ HÀNG</button></a>
            </div>
        </div>

        <!-- Sản phẩm liên quan -->
        <h4 class="mt-5">SẢN PHẨM LIÊN QUAN</h4>
        <div class="row"></div>
</div>
</body>
<?php
include_once("footer.php");
?>