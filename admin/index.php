<?php
    session_start();
    ob_start();
    if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
    include "../model/connectdb.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";

    //connectdb();
    include "view/header.php";
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'danhmuc':
                //nhận yêu cầu và xử lý
                //lấy ds danh mục
                $kq=getall_dm();
                include "view/danhmuc.php";
                break;
                //add danh muc
            case 'adddm':
                //nhận yêu cầu và xử lý
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $tendm=$_POST['tendm'];
                    themdm($tendm);
                }
                //lấy ds danh mục
                $kq=getall_dm();
                include "view/danhmuc.php";
                break;
                //delete danh muc
            case 'deletedm':
                if (isset($_GET['id'])) {
                    $id=$_GET['id'];
                    deletedm($id);
                }
                    $kq=getall_dm();
                include "view/danhmuc.php";
                break;
                // Danh mục end//

                //Update danh muc//
            case 'updatedmform':
                //Lấy 1 record đúng với id truyền vào
                if (isset($_GET['id'])) {
                    $id=$_GET['id'];
                    $kqone=getonedm($id);
                    //cần ds danh mục
                    $kq=getall_dm();
                    include "view/updatedmform.php";
                 }
                 if (isset($_POST['id'])) {
                    $id=$_POST['id'];
                    $tendm=$_POST['tendm'];
                    updatedm($id,$tendm);
                    $kq=getall_dm();
                    include "view/danhmuc.php";
                 }
                
                break;
                //Update danh muc//

                //Danh sach san pham
            case 'product1':
                $dsdm=getall_dm();
                $kq=getall_sanpham();
                include "view/product1.php";
                break;

            case 'updatesp1form':
                //lay danh muc
                $dsdm=getall_dm();
                //chi tiet theo getid
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $spct=getonesp($_GET['id']);
                    
                }
                //load san pham
                $kq=getall_sanpham();
                include "view/updatesp1form.php";
                break;

                case 'product1_update':
                    //lay danh muc
                    $dsdm=getall_dm();
                    //cap nhat san pham
                    if (isset($_POST['update'])&&($_POST['update'])) {
                        $id=$_POST['id'];
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['tensp'];
                        $gia=$_POST['gia'];
                        $soluong=$_POST['soluong'];
                        $id=$_POST['id'];
                        
                        if($_FILES["hinh"]["name"]!=""){
                            $target_dir = "../uploaded/";
                            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                            $img=$target_file;
                            $uploadOk = 1;
        
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            // Allow certain file formats
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif" ) {
                            //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                            }
                            if($uploadOk == 1){
                            move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                            
                        }
                        }else{
                            $img="";
                        }
                        updatesp1($id,$tensp,$img,$gia,$soluong,$iddm);
                    }
                    //load san pham
                    $kq=getall_sanpham();
                    include "view/product1.php";
                    break;

            case 'product1_add':
                if ((isset($_POST['themmoi']))&&(isset($_POST['themmoi']))) {
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $soluong=$_POST['soluong'];
                    $gia=$_POST['gia'];

                    $target_dir = "../uploaded/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    $img=$target_file;
                    $uploadOk = 1;

                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                    }
                    if($uploadOk == 1){
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                    insert_sanpham1($iddm,$tensp,$gia,$img,$soluong);
                }
                }
                $dsdm=getall_dm();
                $kq=getall_sanpham();
                include "view/product1.php";
                break;

                // Xoa san pham//
                case 'deletesp':
                    if (isset($_GET['id'])) {
                        $id=$_GET['id'];
                        del_sanpham($id);
                    }
                        $kq=getall_sanpham();
                    include "view/product1.php";
                    break;
                 // Xoa san pham//

                

            case 'product2':
                include "view/product2.php";
                break;
            case 'taikhoan':
                include "view/taikhoan.php";
                break;
            case 'donhang':
                include "view/donhang.php";
                break;
            case 'thoat':
                if(isset($_SESSION['role'])) unset($_SESSION['role']);
                header('location: login.php');
                
            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }
    

    include "view/footer.php";
}else{
    header('location: login.php');
}

?>