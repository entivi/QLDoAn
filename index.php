<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login_style.css">
</head>
<body>
<div class="signup__container">
    <div class="container__child signup__thumbnail col-md-6">
      <div class="signup__overlay"></div>
    </div>
    <div class="container__child signup__form col-md-6">
      <form action="#" method="post" >
      <div class="form-group" style="margin-top:25px">
        <label for="username">Tên đăng nhập</label>
        <input   class="form-control form-control-solid" type="text"  placeholder="Tên đăng nhập" id="username" name="username">
          
      </div>
        
      <div class="form-group">
        <label for="password">Mật khẩu</label>
        <input  class="form-control form-control-solid" type="password" placeholder="Mật khẩu" id="password" name="password">
          
      </div>
        
          <div class="m-t-lg">
          <button name="signin" type="submit" class="btn btn--form" style="text-transform:uppercase;color:#fff">ĐĂNG NHẬP</button>
          </div>
        <div>
      </form>  
    </div>
    
  </div>



<!-- 
    <div class="signup__container">
        <div class="container__child signup__thumbnail col-md-6">
             <div class="signup__overlay"></div>
        </div>
        <div class="container__child signup__form col-md-6">
            <form  method="post" action="#">
                <div class="form-group" style="margin-top:25px">
                    <label for="username">Tên đăng nhập</label>
                    <input   class="form-control form-control-solid" type="text"  placeholder="Tên đăng nhập" id="username" name="username">
                </div>
                    
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input  class="form-control form-control-solid" type="password" placeholder="Mật khẩu" id="password" name="password">
                </div>
                <div class="m-t-lg">
                    <button type="submit" name="signin" class="btn btn--form" style="text-transform:uppercase;color:#fff">ĐĂNG NHẬP</button>
                </div>
            </form>  
        </div>
    </div> -->
</body>
</html>

<!-- <style>
    body {
    font: 100% / 1.414 "Open Sans", "Roboto", arial, sans-serif;
    background: #e9e9e9;
  }
  
  a,
  [type="submit"] {
    transition: all .25s ease-in;
  }
</style> -->

<?php
    // session_start();
    include('database/connect.php');
    if(isset($_POST['signin']))
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql ="SELECT * FROM tblemployees where EmailId ='$username' AND Password ='$password'";
        $query= mysqli_query($conn, $sql);
        $count = mysqli_num_rows($query);
        if($count > 0)
        {
            echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
        }
        else{
            echo "<script type='text/javascript'> const a  = document.getElementsByClassName('form-center'); a[0].innerHTML += '<p>Lỗi</p>'; </script>";
        }

    }
?>


