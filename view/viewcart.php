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
            <h3 class="SpMeo">Giỏ hàng của bạn</h3>
        </div>
    </div>
    <div class="container py-3">
        <div class="row contact-main-info mt-5">
            <div class="col-md-6 contact-right-content">
            <h3>Thông tin sản phẩm</h3>
                
                    <?php
                // echo var_dump($_SESSION['giohang']);
                if((isset($_SESSION['giohang']))&&(count($_SESSION['giohang'])>0)){
                    echo'<table>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền </th>
                        <th>Hành động</th>
                    </tr>';
                    $i=0;
                    $tong=0;
                    foreach ($_SESSION['giohang'] as $item) {
                        $tt=$item[3]*$item[4];
                        $tong+=$tt;
                        echo'<tr>
                        <td>'.($i+1).'</td>
                        <td>'.$item[1].'</td>
                        <td><img src="./uploaded/'.$item[2].'" width=80></td>
                        <td>'.$item[3].'</td>
                        <td>'.$item[4].'</td>
                        <td>'.$tt.'</td>
                        <td><a href="index.php?action=delcart&i='.$i.'">Xoa</a></td>
                    </tr>';
                    $i++;
                    }
                    echo'<tr><td style="background-color:#CCF381" colspan="5" >Tổng giá trị của đơn hàng</td><td>'.$tong.'</td><td></td></tr>';
                    echo'</table>';
                }
                ?>
                    <br>
                    <a href="index.php?action=delcart">Xóa giỏ hàng</a> | <a href="index.php">Tiếp tục mua</a>
            </div>
            <div class="col-md-4 contact-left-content ">
                <h3>Thông tin đặt hàng</h3>
                <form action="index.php?action=thanhtoan" method="post">
                    
                    <table>
                        <tr>
                            <td><input type="text" name="hoten" placeholder="Nhập họ và tên"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="address" placeholder="Nhập địa chỉ"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="email" placeholder="Nhập email"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="tel" placeholder="Nhập số điện thoại"></td>
                        </tr>
                        <tr>
                            <td>Phương thức thanh toán<br>
                                <input type="radio" name="pttt" value="1"> Thanh toán khi nhận hàng<br>
                                <input type="radio" name="pttt" value="2"> Thanh toán chuyển khoản
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="Thanh Toán" name="thanhtoan">
                            </td>
                        </tr>
                    </table>
                    <input type="hidden" name="tongdonhang" value="<?=$tong?>">
                </form>
            </div>
        </div>
    </div>
</body>

</html>