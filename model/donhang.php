<?php
    function taodonhang($madh,$tongdonhang,$pttt,$hoten,$address,$email,$tel){
        $conn = connectdb();
        $sql = "INSERT INTO tbl_order (madh,tongdonhang,pttt,hoten,address,email,tel)
        VALUES ('".$madh."', '".$tongdonhang."', '".$pttt."', '".$hoten."', '".$address."', '".$email."', '".$tel."')";
      // use exec() because no results are returned
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        return $last_id;
    }
    function addtocart($iddh,$idpro,$tensp,$img,$dongia,$soluongsp){
        $conn = connectdb();
        $sql = "INSERT INTO tbl_cart (iddh,idpro,tensp,img,dongia,soluongsp)
        VALUES ('".$iddh."', '".$idpro."', '".$tensp."', '".$img."', '".$dongia."', '".$soluongsp."')";
      // use exec() because no results are returned
        $conn->exec($sql);
    }
    function getshowcart($iddh){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_cart WHERE iddh=".$iddh);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
    function getorderinfo($iddh){
      $conn = connectdb();
      $stmt = $conn->prepare("SELECT * FROM tbl_order WHERE id=".$iddh);
      $stmt->execute();
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $kq = $stmt->fetchAll();
      return $kq;
  }
?>