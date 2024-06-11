<?php
    session_start();
    ob_start();
     include "admin/cndb.php";
     include "admin/danhmucfuction.php";
     include "admin/sanphamfuction.php";
     $dsdm = laydanhmuc();
    
    include "header.php";   
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'sanpham':
                include "sanpham.php";
                break;
            case 'sanpham1':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                }
                $dssp =laysanpham1($id,"");
                include "sanpham1.php";
                break;
            case 'ctsp':
                include "ctsp.php";
                break;
            // case 'dangnhap':
            //     include "dangnhap.php";
            //     break;
            case 'spc':
                include "spc.php";
                break;
            case 'dangky' :
                include "dangky.php";
                break;
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>