<!Doctype html>
<html lang="en">
  <head>
    <title>Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <script src="javascript.js"></script> -->
  </head>
<body>
<div class="header navbar navbar-expand-lg">

  <!-- the right of header -->
  <div class="logo mr-auto ml-3">
        <a href="">
          <img src="img/logo.png" alt="">
        </a>
        <a  class="ml-3 bars bars-left">
          <i class="fa fa-bars"></i>
        </a>
  </div>

  <!-- user_name - left of header -->
  <div class="dropdown mr-3"> 
    <button class="btn"  data-toggle="dropdown" >
          <i class="fas fa-user-circle"></i>
            Ngô Thị Tâm
          <i class="fa fa-angle-down"></i>
    </button>
       
    <ul class="user-info dropdown-menu">
      <li>
          <a class="dropdown-item" href="#">
            <i class="fas fa-user-circle"></i>
            Thông tin tài khoản
          </a>
      </li>
      
      <li>
          <a class="dropdown-item" href="#">
            <i class="fas fa-user-circle"></i>
            Đổi mật khẩu
          </a>
      </li>

      <li>
          <a class="dropdown-item" href="#">
            <i class="fas fa-user-circle"></i>
            Đăng xuất
          </a>
      </li>
    </ul>
  </div>

  <button class="navbar-toggler bg-light">
      <!-- <span class="navbar-toggler-icon "></span> -->
      <a class="bars">
          <i class="fa fa-bars"></i>
        </a>
  </button>

</div>

<div class="vertical-nav" id="navbarSupportedContent">
    <ul class="nav flex-column">
      <li class="nav-item">
          <a class="nav-link active" href="#">
          <i class="fas fa-home"></i>
            Trang chủ
          </a>
      </li>

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#">
              <i class="fas fa-home"></i>
              Đăng ký đồ án
          </a>
          <div class="navItem dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
          </div>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="#">
            <i class="fas fa-home"></i>
            Tìm kiếm tài liệu
        </a>
      </li>

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button">
              <i class="fas fa-home"></i>
              Nộp đồ án
          </a>
          <div class="navItem dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
          </div>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="#">
          <i class="fas fa-home"></i>
          Thông tin sinh viên
        </a>
      </li>

    
    </ul>
</div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="javascript.js"></script>
  </body>
</html>

