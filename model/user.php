<?php
function themuser($name,$email,$address,$user,$pass){
    $conn = connectdb();
    $sql = "INSERT INTO tbl_user (name, email, address, user, pass)VALUES ('$name', '$email', '$address', '$user', '$pass')";
  // use exec() because no results are returned
    $conn->exec($sql);
}

// function updatedm($id,$tendm){
//     $conn = connectdb();
//     $sql = "UPDATE tbl_danhmuc SET tendm='".$tendm."' WHERE id=".$id;
//     // Prepare statement
//     $stmt = $conn->prepare($sql);
//     // execute the query
//     $stmt->execute();
// }
// function getonedm($id){
//     $conn = connectdb();
//     $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE id=".$id);
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq = $stmt->fetchAll();
//     return $kq;
// }
// function deletedm($id){
//     $conn = connectdb();
//     // sql to delete a record
//   $sql = "DELETE FROM tbl_danhmuc WHERE id=" .$id;

//   // use exec() because no results are returned
//   $conn->exec($sql);
// }

function checkuser($user,$pass){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user='".$user."' AND pass='".$pass."'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    if (count($kq)>0) return $kq[0]['role'];
    else{
       echo "Sai tai khoan/matkhau";
    }
     return 0;
}



function getuserinfo($user,$pass){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user='".$user."' AND pass='".$pass."'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
    
}
?>