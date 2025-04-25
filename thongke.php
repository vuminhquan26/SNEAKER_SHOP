<?php
include_once("header.php");
?>
<style>
    body {
        overflow-x: hidden;
    }

    #sidebar {
        min-height: 100vh;
    }

    .active {
        background-color: #495057;
        border-radius: 0.375rem;
    }

    #chartContainer {
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }
</style>

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

        <!-- Page content -->
        <div id="page-content" class="w-100">
            <!-- Top bar -->
            <nav class="navbar navbar-light bg-light px-4 shadow-sm">
                <span class="navbar-brand mb-0 h1">Thống kê doanh thu</span>
            </nav>

            <!-- Chart -->
            <div class="container mt-4">
                <div id="chartContainer">
                    <canvas id="revenueChart" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('revenueChart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Nike Air Max', 'Adidas Ultraboost', 'Vans Old Skool'],
                datasets: [{
                    label: 'Số lượng đã bán',
                    data: [3.5, 2.8, 5],
                    backgroundColor: '#f4a261'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>