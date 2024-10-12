<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="shortcut icon" href="../img/logohkt.png" />
  <link rel="stylesheet" href="../CSS/main.css" />
  <link rel="stylesheet" href="../CSS/header.css" />
  <script>
      function checkLoginForBooking() {
        <?php if (!Session::get('login')): ?>
          alert("Bạn phải đăng nhập để vào được Booking!");
          return false;
        <?php else: ?>
          return true;
        <?php endif; ?>
      }
</script>

  
</head>

<body>
<header id="header">
        <div class="menu_top">
          <!-- Logo -->
          <a href="main1.php">
            <img src="img/logohkt.png" alt="Good to HKT"  />
          </a>
          <!-- Navigation -->
          <ul id="nav">
            <li><a href="../main1.php">Trang chủ</a></li>
            <li>
              <a href="#">Tìm kiếm</a>
              <div class="container-1">
                <input class="subnav timkiem" type="search" placeholder="Tìm kiếm..." />
              </div>
            </li>
            <li>
              <li><a href="customer/Shop.php" onclick="return checkLoginForBooking();">Booking</a></li>
            </li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="hotro.html">Hỗ trợ</a></li>
          </ul>  
        </div>
      </header>
</body>
</html>