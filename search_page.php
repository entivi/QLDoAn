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
    <title>Document</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/search_page.css">


</head>
<body>


    <?php
        include('includes/header.php');
    ?>
<div class="wrapper">
    <?php
     
        include('includes/navbar.php');
    ?>

    <div class="aside">

        <div class="row aside__margin-top">
                    <div class="col-md-12">
                        <div class="row aside__margin-left">
                            <div class="col-md-4 aside__header-list">
                            <select class="form-select aside__header-sl" aria-label="Default select example">
                              <option selected>&nbsp &nbsp Tất cả </option>
                              <option value="1">Hiển thị tất cả</option>
                              <option value="2">Khoa Công Nghệ thông tin</option>
                              <option value="3">Khoa Kinh Tế</option>
                              <option value="4">Hiển thị tên Khoa</option>
                              <option value="5">Hiển thị tên Khoa</option>
                              <option value="6">Hiển thị tên Khoa</option>
                              <option value="7">Hiển thị tên Khoa</option>
                              <option value="8">Hiển thị tên Khoa</option>
                              <option value="9">Hiển thị tên Khoa</option>
                              <option value="10">Hiển thị tên Khoa</option>
                              <option value="11">Hiển thị tên Khoa</option>
                              <option value="12">Hiển thị tên Khoa</option>
                            </select>
                            </div>
                
                            <div class="col-md-6 aside__header-search">
                            <div class="input-group">
                                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                <button type="button" class="btn btn-outline-primary">search</button>
                            </div>
                            </div>
    
                        </div>
                    
                    </div>
                
            
    
        </div>
<!-- aside__user -->
        <div class="aside__user">
            <div class="aside__user-list">

                <div class="aside__user-list-new">
                    <h2 class="user__list-txt">Tài liệu mới nhất</h2>
 
 <!-- information -->
                    <div class="user__list-info-new">
                        <div>

                            <img src="./img/Group.png" alt="" class="user__img">
                        </div>
                        <div class="around__margin-left">
                            <p class="user__txt-prj">Tên đồ án</p>
                            <p class="user__des">Mô tả liên quan</p>
<!-- interactive -->
                            <div class="interactive">
                                <div class="interactive__dl">
                                    <div class="interactive__img">
                                        <img src="./img/pdf.png" alt="" class="interactive__img-pdf">

                                    </div>
                                    <p class="dl">dl</p>
                                </div>
                                
                                <div class="interactive__dl">
                                    <div class="interactive__img">
                                        <img src="./img/date.png" alt="" class="interactive__img-pdf">

                                    </div>
                                    <p class="dl">d/m/y</p>
                                </div>

                                <div class="interactive__dl">
                                    <div class="interactive__img">
                                        <img src="./img/view.png" alt="" class="interactive__img-pdf">

                                    </div>
                                    <p class="dl">sl xem</p>
                                </div>

                                <div class="interactive__dl">
                                    <div class="interactive__img">
                                        <img src="./img/arrow_down.png" alt="" class="interactive__img-pdf">

                                    </div>
                                    <a href="#" class="interactive__btn-down-link">
                                        <button class="interactive__btn-down">
                                                <img src="./img/arrow_down.png" alt="" class="btn__down-icon">
                                                <span class="btn__down-txt">Tải xuống</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                
                </div>

            <div class="aside__user-list-popular">
                <h2 class="user__list-txt">Tài liệu phổ biến</h2>
                <div class="user__popular">
                    <ul class="user__popular-list">
                        <li class="user__popular-list-icon">
                        <div class="user__list-info">
                        <div>

                            <img src="./img/Group.png" alt="" class="user__img">
                        </div>
                        <div class="around__margin-left">
                            <p class="user__txt-prj">Tên đồ án</p>
                            <p class="user__des">Mô tả liên quan</p>
<!-- interactive -->
                            <div class="interactive">
                                <div class="interactive__dl">
                                    <div class="interactive__img">
                                        <img src="./img/pdf.png" alt="" class="interactive__img-pdf">

                                    </div>
                                    <p class="dl">dl</p>
                                </div>
                                
                                <div class="interactive__dl">
                                    <div class="interactive__img">
                                        <img src="./img/date.png" alt="" class="interactive__img-pdf">

                                    </div>
                                    <p class="dl">d/m/y</p>
                                </div>

                                <div class="interactive__dl">
                                    <div class="interactive__img">
                                        <img src="./img/view.png" alt="" class="interactive__img-pdf">

                                    </div>
                                    <p class="dl">sl xem</p>
                                </div>

                                <div class="interactive__dl">
                                    <div class="interactive__img">
                                        <img src="./img/arrow_down.png" alt="" class="interactive__img-pdf">

                                    </div>
                                    <a href="#" class="interactive__btn-down-link">
                                        <button class="interactive__btn-down">
                                                <img src="./img/arrow_down.png" alt="" class="btn__down-icon">
                                                <span class="btn__down-txt">Tải xuống</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                        </li>

                        <li class="user__popular-list-icon">
                        <div class="user__list-info">
                        <div>

                            <img src="./img/Group.png" alt="" class="user__img">
                        </div>
                        <div class="around__margin-left">
                            <p class="user__txt-prj">Tên đồ án</p>
                            <p class="user__des">Mô tả liên quan</p>
<!-- interactive -->
                            <div class="interactive">
                                <div class="interactive__dl">
                                    <div class="interactive__img">
                                        <img src="./img/pdf.png" alt="" class="interactive__img-pdf">

                                    </div>
                                    <p class="dl">dl</p>
                                </div>
                                
                                <div class="interactive__dl">
                                    <div class="interactive__img">
                                        <img src="./img/date.png" alt="" class="interactive__img-pdf">

                                    </div>
                                    <p class="dl">d/m/y</p>
                                </div>

                                <div class="interactive__dl">
                                    <div class="interactive__img">
                                        <img src="./img/view.png" alt="" class="interactive__img-pdf">

                                    </div>
                                    <p class="dl">sl xem</p>
                                </div>

                                <div class="interactive__dl">
                                    <div class="interactive__img">
                                        <img src="./img/arrow_down.png" alt="" class="interactive__img-pdf">

                                    </div>
                                    <a href="#" class="interactive__btn-down-link">
                                        <button class="interactive__btn-down">
                                                <img src="./img/arrow_down.png" alt="" class="btn__down-icon">
                                                <span class="btn__down-txt">Tải xuống</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                        </li>

                        <li class="user__popular-list-icon">
                        <div class="user__list-info">
                        <div>

                            <img src="./img/Group.png" alt="" class="user__img">
                        </div>
                        <div class="around__margin-left">
                            <p class="user__txt-prj">Tên đồ án</p>
                            <p class="user__des">Mô tả liên quan</p>
<!-- interactive -->
                            <div class="interactive">
                                <div class="interactive__dl">
                                    <div class="interactive__img">
                                        <img src="./img/pdf.png" alt="" class="interactive__img-pdf">

                                    </div>
                                    <p class="dl">dl</p>
                                </div>
                                
                                <div class="interactive__dl">
                                    <div class="interactive__img">
                                        <img src="./img/date.png" alt="" class="interactive__img-pdf">

                                    </div>
                                    <p class="dl">d/m/y</p>
                                </div>

                                <div class="interactive__dl">
                                    <div class="interactive__img">
                                        <img src="./img/view.png" alt="" class="interactive__img-pdf">

                                    </div>
                                    <p class="dl">sl xem</p>
                                </div>

                                <div class="interactive__dl">
                                    <div class="interactive__img">
                                        <img src="./img/arrow_down.png" alt="" class="interactive__img-pdf">

                                    </div>
                                    <a href="#" class="interactive__btn-down-link">
                                        <button class="interactive__btn-down">
                                                <img src="./img/arrow_down.png" alt="" class="btn__down-icon">
                                                <span class="btn__down-txt">Tải xuống</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                        </li>
                    </ul>

                    <div class="aside__footer">
                        <ul class="aside__next">
                            <li class="aside__next-icon">
                                <button class="next__icon-btn">1</button>
                            </li>
                            <li class="aside__next-icon">
                                <button class="next__icon-btn">2</button>
                            </li>
                            <li class="aside__next-icon">
                                <button class="next__icon-btn">3</button>
                            </li>
                            <li class="aside__next-icon">
                                <button class="next__icon-btn">...</button>
                            </li>
                            <li class="aside__next-icon">
                                <button class="next__icon-btn">
                                    <img src="./img/next.png" alt="" class="next__icon-btn-img">
                                </button>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
 
            </div>
        </div>
    </div>
</body>

<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</html>