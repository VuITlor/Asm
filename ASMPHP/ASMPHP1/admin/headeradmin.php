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

    header nav img {
        position: absolute;
        width: 131px;
        height: 97px;
        left: 0px;
        top: 0px;
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
        left: 1370px;
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

</style>
<body>
    <header>
        <nav>
            <div class="menu">
                <a href="indexadmin.php?act=taikhoan">Tài khoản</a>
                <a href="indexadmin.php?act=danhmuc" class="v">Danh mục</a>
                <a href="indexadmin.php?act=qlsp">Sản phẩm</a>
                <a href="indexadmin.php?act=trangthai">Trạng thái</a>
                <a href="../index.php?act=dangnhap" class="dn">Thoát</a>
            </div>
        </nav>
    </header>