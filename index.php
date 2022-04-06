<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class = "Form my-4 mx-5">
        <div class="container">
            <div id="main1" class="row no-gutters">
                <img src="login_img.png" alt="" class="col-lg-6 col-md-6  ">
                <div class="col-lg-6 col-md-6  form-center ">
                    <form name="signin" method="post" action="#">
                        <div class="form-row m-3">
                            <div class="col-lg-12">
                                <label for="msv" class="label-form">
                                    Mã sinh viên
                                </label>
                                <input id="msv" name="msv" type="text" placeholder="Mã sinh viên" class="form-control">
                            </div>
                        </div>

                        <div class="form-row m-3">
                            <div class="col-lg-12">
                            <label for="pass" class="label-form">
                                    Mật khẩu
                                </label>
                                <input id="pass" name="pass" type="password" placeholder="Mật khẩu" class="form-control">
                            </div>
                        </div>

                        <div class="form-row m-3">
                            <div class="col-lg-12">
                                <input type="submit" name="signin" id="signin" value="Đăng nhập" class="form-control btn btn-primary">
                            </div>
                        </div>
                    </form>
                    <a class = "ml-4" href="">Quên mật khẩu?</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<style>
    body{
        background-color: beige;
    }

    .row{
        background-color: #fff;
    }
</style>

<?php
    // session_start();
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','aci_leave');
    $conn = mysqli_connect('localhost','root','','aci_leave') or die(mysqli_error());

    // Establish database connection.
    try
    {
        $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
    catch (PDOException $e)
    {
        exit("Error: " . $e->getMessage());
    }
    if(isset($_POST['signin']))
    {
        $username = $_POST['msv'];
        $password = md5($_POST['pass']);

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


