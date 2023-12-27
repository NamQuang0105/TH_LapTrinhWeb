<div>
    <h2>IUPDATE Sản Phẩm Cho MÈO</h2>
    <form action="index.php?act=product1_update" method="post" enctype="multipart/form-data">
        <select name="iddm" id="">
            <option value="0">chon danh muc</option>
            <?php
            $iddmcur=$spct[0]['iddm'];
            if (isset($dsdm)) {
                foreach($dsdm as $dm){
                    if($dm['id']==$iddmcur)
                        echo ' <option value="'.$dm['id'].'" selected>'.$dm['tendm'].'</option>';
                    else
                    echo ' <option value="'.$dm['id'].'">'.$dm['tendm'].'</option>';

                }
            }
            ?>
        </select>

        <p>Tên sản phẩm:</p><input type="text" name="tensp" id="" value="<?=$spct[0]['tensp']?>">
        <input type="file" name="hinh" id=""><p>Hình ảnh:</p>
        <?php
            if (isset($uploadOK)&&($uploadOK==0)) {
                echo "yeu cu nhap dung file hinh!!";
            }
        ?>
        <img src="<?=$spct[0]['img']?>" width=80 alt="">
        <p>Giá:</p><input type="text" name="gia" id="" value="<?=$spct[0]['gia']?>">
        <p>Số lượng:</p><input type="text" name="soluong" id="" value="<?=$spct[0]['soluong']?>">
        <input type="hidden" name="id" value="<?=$spct[0]['id']?>">
        <input type="submit" name="update" value="Cap Nhat">
    </form>
    <br>
    <table border="3" cellpadding="1" cellspacing="0" width="100%">
        <tr>
            <th>STT</th>
            <th>Tene sản phẩm</th>
            <th>Hình</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Hành động</th>
        </tr>
        <?php
        //var_dump($kq);
        if(isset($kq)&&(count($kq)>0)){
            $i=1;
            foreach ($kq as $item) {
                echo' <tr>
                        <td>'.$i.'</td>
                        <td>'.$item['tensp'].'</td>
                        <td><img src="'.$item['img'].'" width="80px"</td>
                        <td>'.$item['gia'].'</td>
                        <td>'.$item['soluong'].'</td>
                        <td><a href="index.php?act=updatesp1form&id='.$item['id'].'">Sửa</a> | <a href="index.php?act=deletesp&id='.$item['id'].'">Xóa</a></td>
                    </tr>';
                    $i++;
                        # code...   
            }
        }
        ?>
    </table>
</div>