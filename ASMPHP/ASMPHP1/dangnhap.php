<?php
    session_start();
    ob_start();
    include "./admin/cndb.php";
    include "./admin/user.php";
    if(isset($_POST['lg'])&&($_POST['lg'])){
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $role = checkuser($username,$pass);
        $_SESSION['role']=$role;
        if($role==1){
            header ('location: ./admin/indexadmin.php');
        }elseif($role==0){
            header ('location: index.php');
        }else{
            $error = "Username hoặc pass sai";
        }
    }
?>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
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
    

    section {
        position: relative;
        width: 100%;
        height: 100vh;
        display: flex;
        background-image: url(./img/excited-woman-wearing-vr-virtual-reality-headset-isolated-white-background_100800-10113.jpg);
        
    }

    section .img-bg {
        position: relative;
        width: 50%;
        height: 100%;
    }



    section .img-bg img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    section .noi-dung {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50%;
        height: 100%;
    }

    section .noi-dung .form {
        width: 50%;
    }


    section .noi-dung .form h2 {
        color: #607d8b;
        font-weight: 500;
        font-size: 1.5em;
        text-transform: uppercase;
        margin-bottom: 20px;
        border-bottom: 4px solid black;
        display: inline-block;
        letter-spacing: 1px;
    }

    section .noi-dung .form .input-form {
        margin-bottom: 20px;
    }

    section .noi-dung .form .input-form span {
        font-size: 16px;
        margin-bottom: 5px;
        display: inline-block;
        color: #607db8;
        letter-spacing: 1px;
    }

    section .noi-dung .form .input-form input {
        width: 100%;
        padding: 10px 20px;
        outline: none;
        border: 1px solid #607d8b;
        font-size: 16px;
        letter-spacing: 1px;
        color: #607d8b;
        background: transparent;
        border-radius: 30px;
    }

    section .noi-dung .form .input-form input[type="submit"] {
        background: black;
        color: #fff;
        outline: none;
        border: none;
        font-weight: 500;
        cursor: pointer;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.12),
            0 2px 2px rgba(0, 0, 0, 0.12),
            0 4px 4px rgba(0, 0, 0, 0.12),
            0 8px 8px rgba(0, 0, 0, 0.12),
            0 16px 16px rgba(0, 0, 0, 0.12);
    }

    section .noi-dung .form .input-form input[type="submit"]:hover {
        background: #fff;
        color: black;
    }

    section .noi-dung .form .nho-dang-nhap {
        margin-bottom: 10px;
        color: #607d8b;
        font-size: 14px;
    }

    section .noi-dung .form .input-form p {
        color: #607d8b;
    }

    section .noi-dung .form .input-form p a {
        color: black;
        transition: all 0.3s;
    }
    section .noi-dung .form .input-form p a:hover{
        text-decoration: none;
        font-size: x-large;
        transition: all 0.3s;
    }

    section .noi-dung .form h3 {
        color: #607d8b;
        text-align: center;
        margin: 80px 0 10px;
        font-weight: 500;
    }

    section .noi-dung .form .icon-dang-nhap {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    section .noi-dung .form .icon-dang-nhap li {
        list-style: none;
        cursor: pointer;
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .s {
    background-color: black;
    position: absolute;
    width: 100%;
    height: 260px;
    top: 850px;
    }

    .z {
        position: absolute;
        color: white;
        top: 50px;
        left: 310px;
        font-size: 18pt;
        font-weight: bold;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .y {
        position: absolute;
        color: white;
        top: 120px;
        left: 280px;
        font-size: 18pt;
        font-weight: 300;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .x {
        position: absolute;
        color: white;
        top: 155px;
        left: 220px;
        font-size: 18pt;
        font-weight: 300;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .p {
        position: absolute;
        color: white;
        top: 120px;
        left: 1000px;
        font-size: 18pt;
        font-weight: bold;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
</style>
<section>
        </div>
        <div class="noi-dung">
            <div class="form">
                <h2>Đăng Nhập</h2>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="input-form">
                        <span>Tên Người Dùng</span>
                        <input type="text" name="username">
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu</span>
                        <input type="password" name="pass">
                    </div>
                    <div class="nho-dang-nhap">
                        <label><input type="checkbox" name=""> Nhớ Đăng Nhập</label>
                    </div>
                    <div class="input-form">
                        <input type="submit" name="lg" value="Đăng Nhập">
                    </div>
                    <div class="input-form">
                        <p>Bạn Chưa Có Tài Khoản? <a href="index.php?act=dangky"> ĐĂNG KÝ NGAY</a></p>
                    </div>
                    <?php
                        if(isset($error)&&($error!="")){
                            echo $error;
                        }
                    ?>
                </form>
            </div>
        </div>
    </section>
    