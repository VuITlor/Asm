<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <title>Trang chủ</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .menu {
        background-color: black;
        width: 100%;
        height: 97px;
        text-align: center;
        padding-top: 40px;
    }

    .menu>a {
        text-decoration: none;
        transition: all 0.3s;
        color: white;
        font-weight: bolder;
        font-size: large;
        margin: 0 30px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .menu>a:hover {
        color: #777879;
        transition: all 0.3s;
    }

    .a {
        position: absolute;
        width: 126px;
        height: 33px;
        left: 700px;
        top: 39px;
    }

    .b {
        position: absolute;
        width: 126px;
        height: 33px;
        left: 1240px;
        top: 39px;
    }
    .dn{
        position: absolute;
        width: 126px;
        height: 33px;
        left: 1340px;
        top: 39px;
    }
    .drop{
        position: absolute;
        width: 126px;
        height: 33px;
        left: 1150px;
        top: 39px;
    }  
    .drop>a{
        text-decoration: none;
        transition: all 0.3s;
        color: white;
        font-weight: bolder;
        font-size: large;
        margin: 0 30px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .drop>a:hover {
        color: #777879;
        transition: all 0.3s;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
        }

        .dropdown-content a:hover {
        background-color: #ddd;
        }

        .drop:hover .dropdown-content {
        display: block;
    }

</style>
<body>
    <header>
        <nav>
            <div class="menu">
                <a href="index.php?act=gioithieu">Giới thiệu</a>
                <a href="index.php" class="v">Trang chủ</a>
                <a href="index.php?act=sanpham">Sản phẩm</a>
                <div class="drop">
                    <a href="">Danh mục <i class="fa fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <?php
                            foreach ($dsdm as $danhmuc) {
                                echo '<a href="index.php?act=sanpham1&id='.$danhmuc['id'].'">'.$danhmuc['ten'].'</a>';
                            }
                        ?>
                    </div>
                </div>
                <a href="index.php?act=spc" class="b"><i class="fa fa-shopping-cart" style="font-size: 26px;"></i></a>
                <a href="dangnhap.php" class="dn">Đăng nhập</a>
            </div>
        </nav>
    </header>