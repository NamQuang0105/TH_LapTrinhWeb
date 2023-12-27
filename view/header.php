<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZIMEW</title>

    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="view/font/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="view/css/style.css">
</head>

<body class="bg-light">
    <header>
        <div class="container-fluid p-3 header-top">
            <ul class="header-top__nav-list">
                <li class="header-top__nav-item header-top__nav-item--separate">
                    <a href="index.html" class="header-top__nav-link">Hệ thống cửa hàng thú cưng</a>
                </li>
                <li class="header-top__nav-item">
                    <span class="header-top__nav-item--tilte-no-pointer">Kết nối </span>
                    <a href="" class="header-top__nav-icon-link">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="" class="header-top__nav-icon-link">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
            </ul>
            <ul class="header-top__nav-list">
                <li class="header-top__nav-item">
                    <a href="" class="header-top__nav-link">
                        Thông báo
                    </a>
                </li>
                <li class="header-top__nav-item">
                    <a href="" class="header-top__nav-link">
                        Trợ giúp
                    </a>
                </li>
                <?php
                    if(isset($_SESSION['username'])&&($_SESSION['username']!="")){
                        echo'<li class="header-top__nav-item header-top__nav-item--strong header-top__nav-item--separate">
                        <a href="index.php?action=userinfo" class="header-top__nav-link" >'.$_SESSION['username'].'</a>
                     </li>';
                     echo'<li class="header-top__nav-item header-top__nav-item--strong">
                     <a href="index.php?action=thoat" class="header-top__nav-link" >Thoát</a>
                  </li>';
                    }else{
                ?>
                <li class="header-top__nav-item header-top__nav-item--strong header-top__nav-item--separate">
                    <a href="index.php?action=dangnhap" class="header-top__nav-link">Đăng nhập</a>
                </li>
                <li class="header-top__nav-item header-top__nav-item--strong">
                    <a href="index.php?action=dangky" class="header-top__nav-link">Đăng ký</a>
                </li>
                <?php 
                }
                ?>


            </ul>
        </div>
        <!-- logo seach gh -->
        <div class="container-fluid header-witch-seacrh">
            <div class="container">
                <div class="row p-3">
                    <div class="col-md-2 p-3 header-logo">
                        <img src="view/images/logo3.png" class="logo" alt="">
                    </div>
                    <div class="col-md-8 p-3 text-center header-search">
                        <div class="search">
                            <div class="h-search-input-wrap">
                                <input type="text" name="search" class="h-search-input" placeholder="Nhập thông tin cần tìm">

                                <div class="h-search-input-history">
                                    <h4 class="h-search-input-history-heading">lich su tim kiem</h4>
                                    <ul class="h-search-input-history-list">
                                        <li class="h-search-input-history-item">
                                            <a href="" class="h-search-input-history-item-a">cho</a>
                                        </li>
                                        <li class="h-search-input-history-item">
                                            <a href="" class="h-search-input-history-item-a">meo</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <button class="h-search-icon-btn">
                                <i class="h-search-icon fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>

                    </div>
                    <div class="col-md-2 p-3 header-cart">
                        <a href="index.php?action=viewcart"><i class="fa-solid fa-cart-shopping cart-link"></i></a>
                        <!-- <i class="fa-solid fa-cart-shopping cart-link">
                        
                        </i> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- logo seach gh -->
        <!-- menu -->
        <div class="menu">
            <div class="menu-header">
                <ul>
                    <li><a href="index.php">TRANG CHỦ</a></li>
                    <li><a href="index.php?action=product1">SẢN PHẨM </a>


                    </li>
                    <!-- <li><a href="index.php?action=product2">SẢN PHẨM CHO CHÓ</a></li> -->
                    <li><a href="">DỊCH VỤ</a></li>
                    <li><a href="">BLOGS</a></li>
                </ul>
            </div>
        </div>
        <!-- menu -->

    </header>
</body>

</html>