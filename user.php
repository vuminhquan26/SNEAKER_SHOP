<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Quản lý người dùng - F4 Sneaker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            overflow-x: hidden;
        }

        #wrapper {
            min-height: 100vh;
        }

        #sidebar {
            min-width: 250px;
        }

        .nav-link.active {
            background-color: #0d6efd;
            color: white !important;
        }
    </style>
</head>

<body>
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
        <!-- Main Content -->
        <div id="page-content" class="w-100">
            <nav class="navbar navbar-light bg-light px-4">
                <span class="navbar-brand mb-0 h1">Quản lý người dùng</span>
            </nav>

            <div class="container mt-4">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Họ tên</th>
                            <th>Email</th>
                            <th>SĐT</th>
                            <th>Vai trò</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody id="userTable">
                        <!-- Dữ liệu sẽ được JS render vào đây -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>