<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport">
    <title>Thông tin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/info_page.css">
</head>

<body>
    <?php
        include('includes/header.php');
    ?>
    <div class="wrapper">
        <?php
            include('includes/navbar.php');
        ?>

        <div class="main">
            <div class="title">
                <p>Thông tin sinh viên</p>
            </div>
            <div class="info">
                <div class="img">
                    <img src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?w=2000"
                        alt="">
                </div>

                <div class="fields">
                    <div class="item">
                        <label for="name">Họ và tên</label>
                        </br>
                        <input name="name" type="text">
                    </div>

                    <div class="item">
                        <label for="name">Mã sinh viên</label>
                        </br>
                        <input name="name" type="text">
                    </div>

                    <div class="item">
                        <label for="name">Số chứng minh thư</label>
                        </br>
                        <input name="name" type="text">
                    </div>

                    <div class="item">
                        <label for="sex">Giới tính</label>
                        </br>
                        <select style="width: 185px; height: 28px" name="sex" id="sex">
                            <option value="male">Nam</option>
                            <option value="female">Nữ</option>
                        </select>
                    </div>

                    <div class="item">
                        <label for="name">Số điện thoại</label>
                        </br>
                        <input name="name" type="text">
                    </div>

                    <div class="item">
                        <label for="name">Ngày sinh</label>
                        </br>
                        <input name="name" type="text">
                    </div>

                    <div class="item">
                        <label for="name">Lớp học</label>
                        </br>
                        <input name="name" type="text">
                    </div>

                    <div class="item">
                        <label for="name">Khóa</label>
                        </br>
                        <input name="name" type="text">
                    </div>

                    <div class="item">
                        <label for="name">Khoa</label>
                        </br>
                        <input name="name" type="text">
                    </div>

                    <div class="item">
                        <label for="name">Ngành</label>
                        </br>
                        <input name="name" type="text">
                    </div>

                    <div class="item">
                        <label for="name">Điểm trung bình hiện tại</label>
                        </br>
                        <input name="name" type="text">
                    </div>
                    
                </div>
            </div>
        </div>

        <script src="./js/javascript.js"></script>
</body>

</html>