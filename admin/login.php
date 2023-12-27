<?php
session_start();
ob_start();
include "../model/connectdb.php";
include "../model/user.php";
if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $role=checkuser($user,$pass);
    $_SESSION['role']=$role;
    if ($role==1) header('location: index.php');
    else{
        $txt_erro="Username hoặc Password không tồn tại";
    } //header('location: login.php');

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN-ADMIN</title>
    <link rel="stylesheet" href="view/style.css">
</head>

<body>
    <h2>ADMIN-LOGIN</h2>
    <div class="login-box">

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <div class="user-box">
                <label>Username</label>
                <input type="text" name="user" required="">

            </div>
            <div class="user-box">
                <label>Password</label>
                <input type="password" name="pass" required="">

            </div>

            <input type="submit" name="dangnhap" value="ĐĂNG NHẬP">
            <?php
                if(isset($txt_erro)&&($txt_erro!="")){
                    echo "<font color='red'>".$txt_erro."</font>";
                    // echo $txt_erro;
                }
                ?>

        </form>
    </div>
</body>

</html>