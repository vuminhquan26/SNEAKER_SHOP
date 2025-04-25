<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>F4 Sneaker</title>

  <!-- Bootstrap 5.3.4 + Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    /* Navbar links và brand */
    .navbar-dark .navbar-nav .nav-link,
    .navbar-dark .navbar-brand {
      color: white !important;
    }

    /* Fix navbar trên cùng */
    .navbar {
      position: fixed;
      /* Cố định navbar */
      top: 0;
      left: 0;
      width: 100%;
      z-index: 100;
      background-color: #343a40;
      padding: 10px 0;
    }

    /* Dropdown menu */
    .navbar .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 1050;
    }

    /* Khoảng cách cho body */
    body {
      padding-top: 70px;
    }

    /* Hiệu ứng hover */
    .navbar-dark .navbar-nav .nav-link:hover,
    .navbar-dark .navbar-brand:hover {
      color: #0d6efd !important;
    }

    /* Màu dropdown items */
    .navbar-dark .dropdown-menu a {
      color: white;
    }

    /* Hover dropdown item */
    .navbar-dark .dropdown-menu a:hover {
      background-color: #0d6efd;
      color: white !important;
    }

    /* Input và button */
    .navbar-dark .form-control {
      background-color: #495057;
      color: white;
      border: none;
    }

    /* Placeholder */
    .navbar-dark .form-control::placeholder {
      color: #ccc;
    }

    /* Button */
    .navbar-dark .btn {
      color: white;
      border: none;
    }

    /* Hover button */
    .navbar-dark .btn:hover {
      background-color: #0d6efd;
      color: white;
    }

    /* Hover success button */
    .btn-outline-success:hover {
      background-color: #198754;
      color: white;
    }

    /* Logo */
    .navbar-brand img {
      height: 40px;
      width: auto;
      object-fit: contain;
      margin-right: 10px;
    }

    /* Dropdown menu (nền và viền) */
    .navbar-dark .dropdown-menu {
      background-color: #343a40;
      border: none;
    }

    /* Padding cho dropdown item */
    .navbar-dark .dropdown-menu a {
      padding: 10px 20px;
    }

    /* Hover dropdown item */
    .navbar-dark .dropdown-menu a:hover {
      background-color: #0d6efd;
      color: white !important;
    }

    /* Dropdown toggle */
    .navbar-dark .nav-item .nav-link.dropdown-toggle {
      color: white;
    }

    /* Hover dropdown toggle */
    .navbar-dark .nav-item .nav-link.dropdown-toggle:hover {
      color: #0d6efd !important;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="home.php">
        <img src="image/logo/store_logo/F4-SNEAKER-4-15-2025.png" alt="F4 Sneaker Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="home.php">TRANG CHỦ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php">SNEAKER</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">THƯƠNG HIỆU</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="product.php?brand=adidas">ADIDAS</a></li>
              <li><a class="dropdown-item" href="product.php?brand=nike">NIKE</a></li>
              <li><a class="dropdown-item" href="product.php?brand=vans">VANS</a></li>
              <li><a class="dropdown-item" href="product.php?brand=converse">CONVERSE</a></li>
              <li><a class="dropdown-item" href="product.php?brand=mlb">MLB</a></li>
              <li><a class="dropdown-item" href="product.php?brand=nb">NEW BALANCE</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">GIỚI THIỆU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php"><i class="bi bi-person-circle"></i> CÁ NHÂN</a>
          </li>
        </ul>

        <form class="d-flex me-3" action="search.php" method="get">
          <input class="form-control me-2" type="search" name="q" placeholder="Tìm kiếm Sneaker...">
          <button class="btn btn-outline-success" type="submit">
            <i class="bi bi-search"></i>
          </button>
        </form>

        <div class="d-flex">
          <a href="login.php" class="btn btn-outline-light me-2">
            <i class="bi bi-box-arrow-in-right"></i> ĐĂNG NHẬP
          </a>
          <a href="res.php" class="btn btn-outline-light">
            <i class="bi bi-person-plus"></i> ĐĂNG KÝ
          </a>
        </div>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>