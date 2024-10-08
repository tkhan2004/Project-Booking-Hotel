<!-- @format -->
<?php 
    include 'classes/adminlogin.php';
    $class = new Adminlogin();
    if($_SERVER['REQUEST_METHOD']==='POST'){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $login_check = $class->Login_admin($username,$password);
    };
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="icon/themify-icons/themify-icons.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="shortcut icon" href="img/logohkt.png" />
    <link rel="stylesheet" href="CSS/main.css" />
    <link rel="stylesheet" href="CSS/header.css" />
    <link rel="stylesheet" href="CSS/login.css" />
    <title>| Login</title>
  </head>
  <?php
    include'inc/header.php'
  ?>
  <body>
      <!-- LOGIN -->
      <div id="login">
        <div class="login-banner">
          <div class="uilogin">
            <div class="login-top">
              <img src="img/logohkt.png" alt="Logo" />
              <h1>
                ĐĂNG NHẬP VÀO <span style="color: #06aa2a">HKT</span>
              </h1>
              <span><?php
              if(isset($login_check)){ echo $login_check;}
              ?></span>
            </div>
            <section id="login-mid">
             <form action="UIlogin.php" method="post" class="login-mid">
              <div>
                <input type="index" placeholder="Tài khoản" required="" name="username">;
              </div>
              <div>
              <input type="password" placeholder="Mật khẩu" required="" name="password">;
              </div>
              <div>
                <button type="submit" name="login">Đăng nhập</button>
              </div>
             </form>
          </div>
        </div>
      </div>
      <!-- END LOGIN -->
    </div>
  </body>
</html>
