<?php
//Trang san pham//
function getall_spload($iddm,$view){
    $conn = connectdb();
    $sql = "SELECT * FROM tbl_sanpham WHERE 1";
    if ($iddm>0) {
        $sql.=" AND iddm=".$iddm;
    }
    if($view == 1){
        $sql.=" order by view DESC";
    }else{
        $sql.=" order by id DESC";
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
// function get_sp_view(){
//     $conn = connectdb();
//     $sql = "SELECT * FROM tbl_sanpham WHERE view=1 order by id DESC";
//     $stmt = $conn->prepare();
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq = $stmt->fetchAll();
//     return $kq;
// }

// admin//
function getall_sanpham(){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_sanpham");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function del_sanpham($id){
    $conn = connectdb();
    // sql to delete a record
    $sql = "DELETE FROM tbl_sanpham WHERE id=".$id;
  // use exec() because no results are returned
    $conn->exec($sql);
}

function insert_sanpham1($iddm,$tensp,$gia,$img,$soluong){
    $conn = connectdb();
    $sql = "INSERT INTO tbl_sanpham (iddm, tensp, gia, img, soluong)VALUES ('$iddm', '$tensp', '$gia', '$img', '$soluong')";
    // use exec() because no results are returned
    $conn->exec($sql);
}
function getonesp($id){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_sanpham WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function updatesp1($id,$tensp,$img,$gia,$soluong,$iddm){
    $conn = connectdb();
    if($img == ""){
        $sql = "UPDATE tbl_sanpham SET tensp='".$tensp."', gia='".$gia."', soluong='".$soluong."', iddm='".$iddm."' WHERE id=".$id;
    }else{
        $sql = "UPDATE tbl_sanpham SET tensp='".$tensp."', gia='".$gia."', soluong='".$soluong."', iddm='".$iddm."', img='".$img."' WHERE id=".$id;
    }
    // Prepare statement
  $stmt = $conn->prepare($sql);
  // execute the query
  $stmt->execute();
}
?>