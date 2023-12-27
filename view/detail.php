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
    <div id="warpper">
        <div class="headline">
            <h3 class="SpMeo">
                <?php
                if(isset($kq) && count($kq)>0){
                    echo $kq[0]['tensp'];
                }else{
                    echo "Sản phẩm chi tiet";
                }
                ?>

            </h3>
        </div>
    </div>
    <div class="row">

        <div class="row">
            <div class="col-sm-5">
                <img src="./uploaded/<?=$kq[0]['img']?>" width="400" style="margin-left: 100px;" alt="">
            </div>
            <div class="col-sm-6">
                <ul>
                    <h3><?=$kq[0]['tensp']?></h3>
                    <h5><?=$kq[0]['gia']?></h5>
                    <form action="index.php?action=addcart" method="post">
                        <input type="number" value="1" min="1" max="10" required="" name="sl">
                        <input type="hidden" value="<?=$kq[0]['id']?>" name="id">
                        <input type="hidden" value="<?=$kq[0]['tensp']?>" name="tensp">
                        <input type="hidden" value="<?=$kq[0]['gia']?>" name="gia">
                        <input type="hidden" value="<?=$kq[0]['img']?>" name="img">
                        <input type="submit" value="Dat hang" name="addtocart">
                    </form>

                </ul>
            </div>
        </div>

    </div>


</body>

</html>