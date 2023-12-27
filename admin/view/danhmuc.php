<div>
    <h2>Quản lý danh mục</h2>

    <form action="index.php?act=adddm" method="post">
        <input type="text" name="tendm" id="">
        <input type="submit" name="themmoi" value="Thêm mới">
    </form>
    <br>
    <table border="2" cellpadding="5">
        <tr>
            <th>STT</th>
            <th>Tên Danh mục</th>
            <th>Ưu tiên</th>
            <th>Hiển thị</th>
            <th>Hành động</th>
        </tr>
        <?php
        //var_dump($kq);
        if(isset($kq)&&(count($kq)>0)){
            $i=1;
            foreach ($kq as $dm) {
                echo' <tr>
                        <td>'.$i.'</td>
                        <td>'.$dm['tendm'].'</td>
                        <td>'.$dm['uutien'].'</td>
                        <td>'.$dm['hienthi'].'</td>
                        <td><a href="index.php?act=updatedmform&id='.$dm['id'].'">Sửa</a> | <a href="index.php?act=deletedm&id='.$dm['id'].'">Xóa</a></td>
                    </tr>';
                    $i++;
                        # code...   
            }
        }
        ?>

    </table>
</div>