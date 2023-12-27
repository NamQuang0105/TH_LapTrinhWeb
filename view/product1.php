<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach san pham</title>
    <link rel="stylesheet" href="view/css/product.css">
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="view/font/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="view/css/style.css">

</head>

<body>
    <?php

?>
    <div id="warpper">
        <div class="headline">
            <h3 class="SpMeo">Sản phẩm mới</h3>
        </div>
    </div>
    <h3>Danh mục</h3>
    <ul class="list-danhmuc">
        <?php
        foreach ($dsdm as $dm) {
            echo' <li class="danhmuc">
                <input type="checkbox" class="checked">
                    <a href="index.php?action=product1&id='.$dm['id'].'">'.$dm['tendm'].'
                    </a>
                
        </li>';
        }
       ?>
    </ul>

    <ul class="products">
        <!-- product single -->
        <?php
        foreach ($dssp as $sp) {
            echo'<li class="product">
            <div class="product-item">
                <form action="index.php?action=addcart" method="post" >
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

        <!-- product single -->
    </ul>
    <?php

?>
</body>

</html>