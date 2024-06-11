<?php
    session_start();
    ob_start();
    if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
        include "cndb.php";
        include "danhmucfuction.php";
        include "sanphamfuction.php";
        include "taikhoanfuction.php";
        cndb();
        include "headeradmin.php";   
        if(isset($_GET['act'])){
            $act = $_GET['act'];
            switch($act){
                case 'taikhoan':
                    $tk=laytaikhoan();
                    include "taikhoan.php";
                    break;
                case 'addtk':
                    if(isset($_POST['addnew'])&&($_POST['addnew'])){
                        $username = $_POST['username'];
                        $pass = $_POST['pass'];
                        $email = $_POST['email'];
                        $sdt = $_POST['sdt'];
                        $role = $_POST['role'];
                        addtk($username,$pass,$email,$sdt,$role);
                    }
                    $tk = laytaikhoan();
                    include "taikhoan.php";
                    break;
                case 'deltk':
                        if(isset($_GET['id'])){
                            $id=$_GET['id'];
                            deltk($id);
                        }
                        $tk = laytaikhoan();
                        include "taikhoan.php";
                        break;
                case 'udtk':
                    if(isset($_GET['id'])){
                            $id=$_GET['id'];
                            $tk1 = get1tk($id);
                            $tk = laytaikhoan();
                            include "udtk.php";
                            }
                
                    if(isset($_POST['id'])){
                            $id=$_POST['id'];
                            $username=$_POST['username'];
                            $pass=$_POST['pass'];
                            $email=$_POST['email'];
                            $sdt=$_POST['sdt'];
                            $role=$_POST['role'];
                            
                            udtk($id,$username);
                            udtkps($id,$pass);
                            udtkemail($id,$email);
                            udtksdt($id,$sdt);
                            udtkrole($id,$role);

                            $tk = laytaikhoan();
                            include "taikhoan.php";
                        }
                        break;
                case 'danhmuc':
                    $kq = laydanhmuc();
                    include "danhmucadmin.php";
                    break;
                case 'adddm':
                    if(isset($_POST['addnew'])&&($_POST['addnew'])){
                        $ten = $_POST['ten'];
                        themdm($ten);
                    }
                    $kq = laydanhmuc();
                    include "danhmucadmin.php";
                    break;
                case 'deldm':
                        if(isset($_GET['id'])){
                            $id=$_GET['id'];
                            deldm($id);
                        }
                        $kq = laydanhmuc();
                        include "danhmucadmin.php";
                        break;
                case 'uddmform':
                    if(isset($_GET['id'])){
                            $id=$_GET['id'];
                            $kq1 = get1dm($id);
                            $kq = laydanhmuc();
                            include "uddmformadmin.php";
                            }
            
                    if(isset($_POST['id'])){
                                $id=$_POST['id'];
                                $ten=$_POST['ten'];
                                uddm($id,$ten);
                                $kq = laydanhmuc();
                                include "danhmucadmin.php";
                            }
                            break;
                case 'qlsp':
                    $dsdm = laydanhmuc();
                    $kq = laysanpham();
                    include "sanphamadmin.php";
                    break;
                case 'addsp':
                    if(isset($_POST['addnew'])&&($_POST['addnew'])){
                        $iddm=$_POST['iddm'];
                        $ten=$_POST['ten'];
                        $gia=$_POST['gia'];
                        $ma=$_POST['ma'];
                        $dvt=$_POST['dvt'];

                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        $img=$target_file;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                            $uploadOk = 0;
                        }
                        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

                        addsp($iddm,$ten,$gia,$ma,$dvt,$img);
                    }
                    $dsdm = laydanhmuc();
                    $kq = laysanpham();
                    include "sanphamadmin.php";
                    break;
                case 'udsp':
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $kq1 = get1sp($id);
                        $kq = laysanpham();
                        include "udsp.php";
                        }
            
                    if(isset($_POST['id'])){
                            $iddm=$_POST['iddm'];
                            $id=$_POST['id'];
                            $ten=$_POST['ten'];
                            $gia=$_POST['gia'];
                            $img=$_POST['img'];
                            $ma=$_POST['ma'];
                            $dvt=$_POST['dvt'];
                            
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES["img"]["name"]);
                            $img=$target_file;
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                                $uploadOk = 0;
                            }
                            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

                        
                            udsp($id,$ten);
                            udspgia($id,$gia);
                            udspimg($id,$img);
                            udspma($id,$ma);
                            udspdvt($id,$dvt);
                            udspiddm($id,$iddm);

                            $kq = laysanpham();
                            include "sanphamadmin.php";
                        }
                    break;
                case 'delsp':
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        delsp($id);
                    }
                    $kq = laysanpham();
                    include "sanphamadmin.php";
                    break;
                case 'trangthai':
                    include "trangthai.php";
                    break;
                default:
                    include "homeadmin.php";
                    break;
            }
        }else{
            include "homeadmin.php";
        }           
    }else{
        header ('location: ../index.php');
    }
?>