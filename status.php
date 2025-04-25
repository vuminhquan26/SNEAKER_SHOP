<?php
include_once("header.php");
?>
<body class="bg-light">

  <div class="container my-4">
    <h3 class="mb-4">Đơn hàng của tôi</h3>

    <!-- Tabs trạng thái đơn hàng -->
    <ul class="nav nav-tabs mb-3" id="orderTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab">Tất cả</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="processing-tab" data-bs-toggle="tab" data-bs-target="#processing" type="button" role="tab">Chờ thanh toán</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="shipping-tab" data-bs-toggle="tab" data-bs-target="#shipping" type="button" role="tab">Vận chuyển</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="delivered-tab" data-bs-toggle="tab" data-bs-target="#delivered" type="button" role="tab">Hoàn thành</button>
      </li>
    </ul>

    <!-- Nội dung tab -->
    <div class="tab-content" id="orderTabContent">
      <!-- Tất cả -->
      <div class="tab-pane fade show active" id="all" role="tabpanel">
        <!-- Đơn hàng mẫu -->
        <div class="card mb-3">
          <div class="card-header d-flex justify-content-between align-items-center">
            <strong>Hoco HN</strong>
            <span class="badge bg-success">Hoàn Thành</span>
          </div>
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-2">
                <img src="https://via.placeholder.com/80" class="img-fluid" alt="Sản phẩm">
              </div>
              <div class="col-7">
                <h6 class="mb-1">Dây sạc nhanh X88 60W Hoco</h6>
                <small>Phân loại: Trắng - x1</small>
              </div>
              <div class="col-3 text-end">
                <div class="mb-2 text-danger fw-bold">25.000₫</div>
                <button class="btn btn-outline-danger btn-sm">Mua lại</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Thêm đơn khác nếu muốn -->
      </div>

      <!-- Chờ thanh toán -->
      <div class="tab-pane fade" id="processing" role="tabpanel">
        <div class="alert alert-warning">Không có đơn hàng nào đang chờ thanh toán.</div>
      </div>

      <!-- Vận chuyển -->
      <div class="tab-pane fade" id="shipping" role="tabpanel">
        <div class="alert alert-info">Chưa có đơn hàng nào đang vận chuyển.</div>
      </div>

      <!-- Hoàn thành -->
      <div class="tab-pane fade" id="delivered" role="tabpanel">
        <div class="alert alert-success">Bạn đã hoàn tất 1 đơn hàng.</div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (bắt buộc để tabs hoạt động) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <?php
include_once("footer.php");
?>
