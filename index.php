<?php
session_start();
ob_start();
if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
//load du lieu sp trang chu
include "model/connectdb.php";
include "model/user.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/donhang.php";
include "view/header.php";
// $spview=get_sp_view();
$load_home = getall_spload(0,0);
$load_homeview = getall_spload(0,1);
// switch (isset($_GET['action'])) {
//     case 'product1':
//         include "view/product1.php";
//         break;
//     case 'product2':
//         include "view/product2.php";
//          break;
    
//     default:
//         include "view/home.php";
//         break;
// }
if(isset($_GET['action'])){
    switch ($_GET['action']) {
        case 'thoat':
            unset($_SESSION['role']);
            unset($_SESSION['iduser']);
            unset($_SESSION['username']);
            header('location: index.php');
            break;
        case 'login':
            if(isset($_POST['login'])&&($_POST['login'])){
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $kq=getuserinfo($user,$pass);
                $role=$kq[0]['role'];
                if($role == 1){
                      $_SESSION['role']=$role;
                    header('location: admin/index.php');
                }else{
                    $_SESSION['role']=$role;
                    $_SESSION['iduser']=$kq[0]['id'];
                    $_SESSION['username']=$kq[0]['user'];
                    header('location: index.php');
                    break;
                }
            }
            
            
            
        case 'dangnhap':
            include "view/dangnhap.php";
            break;
        case 'dangky':
            include "view/dangky.php";
            break;
        case 'register':
            //nhận yêu cầu và xử lý
            if (isset($_POST['register'])&&($_POST['register'])) {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                
                themuser($name,$email,$address,$user,$pass);
                $thongbao="Đã đăng ký thành công!!Vui lòng đến trang đăng nhập";
            }
            
            
            include "view/dangky.php";
            break;
          


        case 'detail':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                $kq=getonesp($id);
            }
            include "view/detail.php";
            break;
        case 'product1':
            if(isset($_POST['search'])&&($_POST['search']!="")){
                $search=$_POST['search'];
            }else{
                $search="";
            }
            $dsdm = getall_dm();
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                $iddm=$_GET['id'];
                $dssp=getall_spload($iddm,0);
            }else{
                $dssp = getall_spload(0,0);
            }
            
            include "view/product1.php";
            break;
        case 'thanhtoan':
            if((isset($_POST['thanhtoan']))&&($_POST['thanhtoan'])){
                 //lay du lieu
                $tongdonhang=$_POST['tongdonhang'];
                $hoten=$_POST['hoten'];
                $address=$_POST['address'];
                $email=$_POST['email'];
                $tel=$_POST['tel'];
                $pttt=$_POST['pttt'];
                // $iduser=$_POST['iduser'];
                $madh="MEOW".rand(0,999999);
                    //tao don hang
                    //tra ve 1 id don hang
                $iddh=taodonhang($madh,$tongdonhang,$pttt,$hoten,$address,$email,$tel);
                $_SESSION['iddh']=$iddh;
                if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0)){
                    foreach ($_SESSION['giohang'] as $item) {
                        addtocart($iddh,$item[0],$item[1],$item[2],$item[3],$item[4]);
                    }
                        unset($_SESSION['giohang']);
                    }
    
                }
                include 'view/donhang.php';
                break;
        case 'viewcart':
            include "view/viewcart.php";
            break;
        case 'addcart':
            //lay du lieu t form luu vao gio    
            if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                $id=$_POST['id'];
                $tensp=$_POST['tensp'];
                $img=$_POST['img'];
                $gia=$_POST['gia'];
                if(isset($_POST['sl'])&&($_POST['sl']>0)){
                    $sl= $_POST['sl'];
                }else{
                    $sl=1;
                }
                
                $fg=0;
                //Kiem tra san pham co ton tai ko 
                //neu co thi cap nhat soluong
                $i=0;
                foreach ($_SESSION['giohang'] as $item) {
                    if($item[1]===$tensp){
                        $slnew=$sl+$item[4];
                        $_SESSION['giohang'][$i][4]=$slnew;
                        $fg=1;
                        break;
                    }
                    $i++;
                }
                //nguoc lai thi add moi
                //khoi tao mang con truoc khi dua vao gio hang
                if ($fg==0) {
                    $item=array($id,$tensp,$img,$gia,$sl);
                    $_SESSION['giohang'][]=$item;
                }
                header("Location: index.php?action=viewcart");
            }
            //
            
            //view gio hang
            
            //include "view/viewcart.php";
            break;
        case 'delcart':
            if(isset($_GET['i'])&&($_GET['i']>0)){
                if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0))
                    array_splice($_SESSION['giohang'],$_GET['i'],1);
                
            }else{
                if (isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
            }
            
            if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0)){
                header('location: index.php?action=viewcart');
            }else{
                header('location: index.php');
            }
            
            break;
        
        
        default:
            include "view/home.php";
            break;
    }
}else{
    include "view/home.php";
}
include "view/blogs.php";
include "view/footer.php";

?>