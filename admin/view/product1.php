<div>
    <h2>Quản lý Sản Phẩm Cho MÈO</h2>
    <form action="index.php?act=product1_add" method="post" enctype="multipart/form-data">
        <p>Danh mục:</p>
        <select name="iddm" id="">
            <option value="0">chon danh muc</option>
            <?php
            if (isset($dsdm)) {
                foreach($dsdm as $dm){
                    echo ' <option value="'.$dm['id'].'">'.$dm['tendm'].'</option>';
                }
            }
            ?>
        </select>

        <p>Tên sản phẩm:</p><input type="text" name="tensp" id="">
        <p>Hình ảnh:</p><input type="file" name="hinh" id="">
        <?php
            if (isset($uploadOK)&&($uploadOK==0)) {
                echo "yeu cu nhap dung file hinh!!";
            }
        ?>
        <p>Giá:</p><input type="text" name="gia" id="">
        <p>Số Lượng:</p><input type="text" name="soluong" id="">
        <input type="submit" name="themmoi" value="Thêm mới">
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