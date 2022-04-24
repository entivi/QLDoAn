<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/dashboard.css">



</head>

<body>
    <?php
        include('includes/header.php');
    ?>

    <div class="wrapper">
        <?php include('includes/navbar.php'); ?>

        <div class="main">
            <div class="row">
                <div class="col-md-4 col-sm-3 col-xs-12 margin-top-10">
                    <div class="dash-let">
                        <a href="info_page.php" style="display:flex; justify-content: center;" class="dki">

                            <span class="iconify" data-icon="ph:student-fill" style="color: #fefefe; font-size: 150px; "
                                data-flip="horizontal"></span>
                            <span>Thông tin sinh viên</span>
                        </a>
                    </div>
                </div>

                <div class=" col-md-4 col-sm-3 col-xs-12 margin-top-10">
                    <div class="  dash-let">
                        <a href="#" style="display:flex; justify-content: center;" class="dki">
                            <span class="iconify" data-icon="ph:student-fill" style="color: #fefefe; font-size: 150px; "
                                data-flip="horizontal"></span>

                            <span>Đăng ký học</span>
                        </a>
                    </div>
                </div>
                <div class=" col-md-4 col-sm-3 col-xs-12 margin-top-10">
                    <div class="dash-let">
                        <a href="#" style="display:flex; justify-content: center;" class="dki">
                            <span class="iconify" data-icon="ph:student-fill" style="color: #fefefe; font-size: 150px; "
                                data-flip="horizontal"></span>

                            <span>Kết quả đăng ký học</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3 col-xs-12 margin-top-10">
                    <div class="dash-let">
                        <a href="# " style="display:flex; justify-content: center;" class="dki">
                            <span class="iconify" data-icon="ph:student-fill" style="color: #fefefe; font-size: 150px; "
                                data-flip="horizontal"></span>

                            <span>Tra cứu điểm</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3 col-xs-12 margin-top-10">
                    <div class="dash-let">
                        <a href="#" style="display:flex; justify-content: center;" class="dki">
                            <span class="iconify" data-icon="ph:student-fill" style="color: #fefefe; font-size: 150px; "
                                data-flip="horizontal"></span>

                            <span>Rèn luyện, học vụ, tốt nghiệp</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="./js/javascript.js"></script>
</body>

</html>