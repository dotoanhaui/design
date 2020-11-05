<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-3.3.5.min.css">
    <link rel="stylesheet" href="fontAwesome/font-awesome-5.12.0.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="full-header">
    <!--desktop-->
    <div class="header-top">
        <img src="img/81728574_2473112746339080_1400096786592301056_o.jpg" alt="banner-top">
    </div>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="logo col-lg-3 col-md-3">
                    <span>MONO TALK</span>
                </div>
                <div class="menu-bar col-lg-6 col-md-6">
                    <ul>
                        <li><a href="#">SẢN PHẨM MỚI</a></li>
                        <li><a href="#">BỘ SƯU TẬP</a></li>
                        <li><a href="#">SẢN PHẨM</a></li>
                        <li><a href="#">PHỤ KIỆN</a></li>
                        <li><a href="#">DAILYSTORIES</a></li>
                        <li><a href="#">ABOUT US</a></li>
                    </ul>
                </div>
                <div class="header-cart col-lg-3 col-md-3">
                    <div class="search col-lg-4 col-md-4">
                        <button>
                            <i class="fas fa-search"></i>
                        </button>
                        <input type="text" name="search" placeholder="Tìm kiếm">
                    </div>
                    <div class="login col-lg-4 col-md-4">
                        <h5>Đăng nhập</h5>
                    </div>
                    <div class="icon-cart col-lg-2 col-md-2">
                        <i class="fal fa-shopping-bag"></i>
                    </div>
                    <div class="icon-heart col-lg-2 col-md-2">
                        <i class="far fa-heart"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="breadcrumb">
    <div class="container">
        <p>Trang chủ<span><b>&nbsp;/ Sản phẩm mới</b></span></p>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="tittle col-lg-12 col-md-12 col-sm-12">
                <h1>Sản phẩm mới</h1>
                <p>It All Arrived This Week</p>
            </div>
            <div class="sidebar col-lg-3 col-md-3 col-sm-12">
                <div class="sidebar-item">
                    <div class="title-sidebar">
                        <h5>Bộ sưu tập</h5>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div class="content-sidebar">
                        <ul>
                            <li><a href="#">All White</a></li>
                            <li><a href="#">The Coat Collection</a></li>
                            <li><a href="#">Summer Editor</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-item">
                    <div class="title-sidebar">
                        <h5>Categories</h5>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div class="content-sidebar">
                        <ul>
                            <?php for($i=1;$i<=7;$i++) {?>
                            <li><a href="#">Oversized Shirt<span>&nbsp;(94)</span></a></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-item">
                    <div class="title-sidebar">
                        <h5>Bộ lọc</h5>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div class="content-sidebar">
                        <ul>
                            <li><a href="#">All White</a></li>
                            <li><a href="#">The Coat Collection</a></li>
                            <li><a href="#">Summer Editor</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-item">
                    <div class="title-sidebar">
                        <h5>Kích cỡ</h5>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div class="content-sidebar size">
                        <ul>
                            <?php for($i=1;$i<=6;$i++) {?>
                                <label class="size">
                                    <input type="checkbox">
                                    <p>XS</p>
                                </label>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-item">
                    <div class="title-sidebar">
                        <h5>Bộ sưu tập</h5>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div class="content-sidebar">
                        <ul>
                            <li><a href="#">All White</a></li>
                            <li><a href="#">The Coat Collection</a></li>
                            <li><a href="#">Summer Editor</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script src="owlcarousel/jquery.min.js"></script>
<script src="js/bootstrap-3.3.5.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="js/main.js"></script>