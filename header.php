<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>F4 Sneaker</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>
    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu .dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -1px;
      display: none;
    }

    .dropdown-submenu:hover .dropdown-menu {
      display: block;
    }

    /* Đã bỏ mũi tên ▸ tránh bị double */
    /* .dropdown-menu > .dropdown-submenu > a::after {
      content: " ▸";
      float: right;
    } */
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">TRANG CHỦ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="about.php">GIỚI THIỆU</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownSanPham" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              SẢN PHẨM
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownSanPham">
              <li><a class="dropdown-item" href="product.php">GIÀY BÓNG ĐÁ</a></li>
              <li><a class="dropdown-item" href="product.php">GIÀY SNEAKER</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownHang" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              HÃNG
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownHang">
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">HÃNG SNEAKER</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="product.php">ADIDAS</a></li>
                  <li><a class="dropdown-item" href="product.php">CONVERSE</a></li>
                  <li><a class="dropdown-item" href="product.php">LV</a></li>
                  <li><a class="dropdown-item" href="product.php">MLB</a></li>
                  <li><a class="dropdown-item" href="product.php">NIKE</a></li>
                  <li><a class="dropdown-item" href="product.php">VANS</a></li>
                  <li><a class="dropdown-item" href="product.php">NB</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">HÃNG THỂ THAO</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="product.php">ADIDAS</a></li>
                  <li><a class="dropdown-item" href="product.php">MIZUNO</a></li>
                  <li><a class="dropdown-item" href="product.php">KAMITO</a></li>
                  <li><a class="dropdown-item" href="product.php">PUMA</a></li>
                  <li><a class="dropdown-item" href="product.php">NIKE</a></li>
                  <li><a class="dropdown-item" href="product.php">BITIS</a></li>
                  <li><a class="dropdown-item" href="product.php">WIKA</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <!-- ✅ THÔNG TIN CÁ NHÂN là 1 mục riêng -->
          <li class="nav-item">
            <a class="nav-link" href="profile.php">THÔNG TIN CÁ NHÂN</a>
          </li>
        </ul>

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="TÌM KIẾM SẢN PHẨM" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">TÌM</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>
