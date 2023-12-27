<?php
// $host = "localhost";
// $user = "root";
// $password = "";
// $database = "petshop_demo";
// $con = mysqli_connect($host, $user, $password, $database);
// if (mysqli_connect_errno()) {
//     # code...
//     echo " Connect Fail: ".mysql_connect_errno();exit;
// }
function connectdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=petshop_demo", $username, $password);
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
    } catch (PDOException $e) {
        //echo "Connected faile: " . $e->getMessage();
    }
    return $conn;

}

?>