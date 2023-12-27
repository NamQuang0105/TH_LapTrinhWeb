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
    <style>
    table {
        width: 600px;
        border-collapse: collapse;
        padding-top: 10px;
    }

    table,
    td,
    th {
        border: 5px solid #CCC;
        text-align: left;
        padding: 8px;
    }
    </style>
    <div id="warpper">
        <div class="headline">
            <h3 class="SpMeo">Thông tin đặt hàng</h3>
        </div>
    </div>
    <div class="container py-3">
        <div class="row contact-main-info mt-5">
            <div class="col-md-6 contact-right-content">
                <?php
                // echo var_dump($_SESSION['giohang']);
                if(isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)){
                    $getshowcart=getshowcart($_SESSION['iddh']);
                    if((isset($getshowcart))&&(count($getshowcart)>0)){
                        echo'<table>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền </th>
                        </tr>';
                    $i=0;
                    $tong=0;
                    foreach ($getshowcart as $item) {
                        $tt=$item['soluongsp'] * $item['dongia'];
                        $tong+=$tt;
                        echo'<tr>
                        <td>'.($i+1).'</td>
                        <td>'.$item['tensp'].'</td>
                        <td><img src="./uploaded/'.$item['img'].'" width=80></td>
                        <td>'.$item['dongia'].'</td>
                        <td>'.$item['soluongsp'].'</td>
                        <td>'.$tt.'</td>
                        
                    </tr>';
                    $i++;
                    }
                    echo'<tr><td style="background-color:#CCF381" colspan="5" >Tổng giá trị của đơn hàng</td><td>'.$tong.'</td><td></td></tr>';
                    echo'Đặt hàng thành công!! Cảm ơn quý khách';
                    echo'</table>';
                }
            }else{
                echo"Giỏ hàng trống. <a href='index.php'>Tiếp tục đặt hàng</a>";
            }
                ?>

            </div>
            <div class="col-md-4 contact-left-content">
                <!-- <h3>Thông tin đặt hàng</h3> -->
                <?php
                if(isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)){
                    $orderinfo=getorderinfo($_SESSION['iddh']);
                    if(count($orderinfo)>0){
                ?>
                <h3>Mã đơn hàng: <?=$orderinfo[0]['madh'];?> </h3>
                <table>
                    <tr>
                        <td><strong>Tên người nhận: </strong><br><?=$orderinfo[0]['hoten'];?></td>
                    </tr>
                    <tr>
                        <td><strong>Địa chỉ người nhận:  </strong><br><?=$orderinfo[0]['address'];?></td>
                    </tr>
                    <tr>
                        <td><strong>Email người nhận:  </strong><br><?=$orderinfo[0]['email'];?></td>
                    </tr>
                    <tr>
                        <td><strong>Điện thoại người nhận:  </strong><br><?=$orderinfo[0]['tel'];?></td>
                    </tr>
                    <tr>
                        <td><strong>Phương thức thanh toán  </strong><br>
                        <?php
                            switch ($orderinfo[0]['pttt']) {
                                case '1':
                                    $txtmess="Thanh toán khi nhận hàng";
                                    break;
                                case '2':
                                    $txtmess="Thanh toán chuyển khoản";
                                    break;
                                default:
                                    $txtmess="Quý khách chưa chọn phương thức thanh toán";
                                    break;
                            }
                            echo $txtmess;
                        ?>
                            
                        </td>
                    </tr>

                </table>
                <?php
                    }
                }
                ?>

            </div>
        </div>
    </div>
</body>

</html>