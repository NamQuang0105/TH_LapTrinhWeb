<div class="login">
    <div class="login-box">

        <form action="index.php?action=register" method="post">
            <h1>ĐĂNG KÝ</h1>
            <div class="user-box">
                <label>Tên người dùng</label>
                <input type="text" name="name" required="">

            </div><br>
            <div class="user-box">
                <label>Email</label>
                <input type="text" name="email" required="">
            </div><br>
            
            <div class="user-box">
                <label>Địa chỉ</label>
                <input type="text" name="address" required="">

            </div><br> 
            <div class="user-box">
                <label>Username</label>
                <input type="text" name="user" required="">

            </div><br>
            <div class="user-box">
                <label>Password</label>
                <input type="password" name="pass" required="">

            </div><br>

            <input type="submit" name="register" value="ĐĂNG KÝ">


        </form>
        <?php
        if(isset($thongbao)&&($thongbao!="")){
            echo "$thongbao";
        }
        ?>
    </div>
</div>