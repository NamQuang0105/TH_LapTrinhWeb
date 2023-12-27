<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZIMEW</title>

    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="view/font/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="view/css/product.css">
    <link rel="stylesheet" href="view/css/style.css">
</head>

<body class="bg-light">
    <!-- slider -->
    <section class="container-fluid banner">
        <div class="card">
            <div class="card-body">
                <img src="view/images/banner3.jpg" alt="">
            </div>
        </div>

        <!-- Carousel
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

          Indicators/dots -->
        <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div> -->

        <!-- The slideshow/carousel -->
        <!-- <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="view/images/banner1.jpg" alt="banner1" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="view/images/banner2.jpg" alt="banner2" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="view/images/banner3.jpg" alt="banner3" class="d-block w-100">
                </div>
            </div> -->

        <!-- Left and right controls/icons -->
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div> -->

    </section>
    <!-- slider -->


    <div id="warpper">
        <div class="headline">
            <h3 class="SpMeo">SẢN PHẨM MỚI</h3>
        </div>
    </div>
    <ul class="products">
        <!-- product single -->
        <?php
            foreach ($load_home as $sp) {
                echo' <li class="product">
                <div class="product-item">
                <form action="index.php?action=addcart" method="post">
                    <div class="product-top">
                        <a href="index.php?action=detail&id='.$sp['id'].'" class="product-thumb">
                            <img src="./uploaded/'.$sp['img'].'" alt="">
                        </a>
                        <a href="" class="buy-now">
                        <input type="submit" value="Mua ngay" name="addtocart">
                        </a>
                        <!-- mua ngay -->
                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat">'.$sp['soluong'].'</a>
                        <a href="index.php?action=detail&id='.$sp['id'].'" class="product-name">'.$sp['tensp'].'</a>
                        <div class="product-price">'.$sp['gia'].'</div>
                    </div>
                        <input type="hidden" value="'.$sp['id'].'" name="id">
                        <input type="hidden" value="'.$sp['tensp'].'" name="tensp">
                        <input type="hidden" value="'.$sp['gia'].'" name="gia">
                        <input type="hidden" value="'.$sp['img'].'" name="img">
                    </form>
                </div>
            </li>';
            }
        ?>

        <!-- product single -->
        <!-- <li>
            <div class="product-item">
                <div class="product-top">
                    <a href="" class="product-thumb">
                        <img src="view/images/spmeo2.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    
                </div>
                <div class="product-info">
                    <a href="" class="product-cat">Hat</a>
                    <a href="" class="product-name">Hat cho meo</a>
                    <div class="product-price">165500</div>
                </div>
            </div>
        </li> -->
        <!-- product single -->
        <!-- <li>
            <div class="product-item">
                <div class="product-top">
                    <a href="" class="product-thumb">
                        <img src="view/images/spmeo3.png" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    
                </div>
                <div class="product-info">
                    <a href="" class="product-cat">Hat</a>
                    <a href="" class="product-name">Hat cho meo</a>
                    <div class="product-price">165500</div>
                </div>
            </div>
        </li> -->
        <!-- product single -->
        <!-- <li>
            <div class="product-item">
                <div class="product-top">
                    <a href="" class="product-thumb">
                        <img src="view/images/spmeo4.png" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    
                </div>
                <div class="product-info">
                    <a href="" class="product-cat">Hat</a>
                    <a href="" class="product-name">Hat cho meo</a>
                    <div class="product-price">165500</div>
                </div>
            </div>
        </li> -->
        <!-- product single -->
        <!-- <li>
            <div class="product-item">
                <div class="product-top">
                    <a href="" class="product-thumb">
                        <img src="view/images/spmeo9.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    
                </div>
                <div class="product-info">
                    <a href="" class="product-cat">Hat</a>
                    <a href="" class="product-name">Hat cho meo</a>
                    <div class="product-price">165500</div>
                </div>
            </div>
        </li> -->
        <!-- product single -->
        <!-- <li>
            <div class="product-item">
                <div class="product-top">
                    <a href="" class="product-thumb">
                        <img src="view/images/spmeo5.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                    
                </div>
                <div class="product-info">
                    <a href="" class="product-cat">Hat</a>
                    <a href="" class="product-name">Hat cho meo</a>
                    <div class="product-price">165500</div>
                </div>
            </div>
        </li> -->
        <!-- product single -->
        <!-- <li>
            <div class="product-item">
                <div class="product-top">
                    <a href="" class="product-thumb">
                        <img src="view/images/spmeo7.webp" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                   
                </div>
                <div class="product-info">
                    <a href="" class="product-cat">Hat</a>
                    <a href="" class="product-name">Hat cho meo</a>
                    <div class="product-price">165500</div>
                </div>
            </div>
        </li> -->
        <!-- product single -->
        <!-- <li>
            <div class="product-item">
                <div class="product-top">
                    <a href="" class="product-thumb">
                        <img src="view/images/spmeo8.jpg" alt="">
                    </a>
                    <a href="" class="buy-now">Mua Ngay</a>
                   
                </div>
                <div class="product-info">
                    <a href="" class="product-cat">Hat</a>
                    <a href="" class="product-name">Hat cho meo</a>
                    <div class="product-price">165500</div>
                </div>
            </div>
        </li> -->
        <!-- product single -->
    </ul>
    <div id="warpper">
        <div class="headline">
            <h3 class="SpMeo">SẢN PHẨM HOT</h3>
        </div>
    </div>
    <ul class="products">
        <!-- product single -->
        <?php
            foreach ($load_homeview as $sp) {
                echo' <li class="product">
                <div class="product-item">
                    <form action="index.php?action=addcart" method="post">
                    <div class="product-top">
                        <a href="index.php?action=detail&id='.$sp['id'].'" class="product-thumb">
                            <img src="./uploaded/'.$sp['img'].'" alt="">
                        </a>
                        <a href="" class="buy-now">
                        <input type="submit" value="Mua ngay" name="addtocart">
                        </a>
                        <!-- mua ngay -->
                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat">'.$sp['soluong'].'</a>
                        <a href="index.php?action=detail&id='.$sp['id'].'" class="product-name">'.$sp['tensp'].'</a>
                        <div class="product-price">'.$sp['gia'].'</div>
                    </div>
                    <input type="hidden" value="'.$sp['id'].'" name="id">
                    <input type="hidden" value="'.$sp['tensp'].'" name="tensp">
                    <input type="hidden" value="'.$sp['gia'].'" name="gia">
                    <input type="hidden" value="'.$sp['img'].'" name="img">
                    </form>
                </div>
            </li>';
            }
        ?>
    </ul>
</body>

</html>