<?php
    include '../lib/session.php';
    Session::checkSession(); // ngắn chặn người lạ truy cập thẳng 
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý khách sạn</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="../CSS/footer.css">
</head>
<body>
    <div class="container-fluid">
        <!-- Header -->
        <div class="row bg-primary text-white py-2">
            <div class="col-md-6">
                <h3 class="logo">Quản lý khách sạn</h3>
            </div>
            <div class="col-md-4 text-end user-info">
                <i class="fas fa-user"></i>
                <span>Chào ADMIN </span>
            </div>
            <?php
            if ( isset($_GET['action']) && ($_GET['action']=='logout')) {
                session::destroy();
            }
            
            ?>
            <div class="col-md-2 text-end">
                <li><a class="btn btn-danger" href="?action=logout">Log out </a></li>
            </div>
        </div>

        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 bg-light p-3">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#">Quản lý Người Dùng</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Quản lý Phòng</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Quản lý </a></li>
                </ul>
            </div>

            <!-- Main Content -->

        <!-- Footer -->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>