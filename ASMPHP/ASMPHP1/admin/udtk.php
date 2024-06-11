<style>
    .qldm {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    h2 {
        padding-top: 30px;
        text-align: center;
    }

    form {
        text-align: center;
    }

    input[type="text"],
    input[type="password"] {
        width: 300px;
        margin: 5px 0;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        border-radius: 5px;
        padding: 10px 20px;
        margin-top: 20px;
        font-family: inherit;
        cursor: pointer;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        transition: background-color 0.3s, color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: black;
        color: white;
    }

    table {
        width: 90%;
        border-collapse: collapse;
        border: 1px solid #ddd;
        margin: 30px auto;
    }

    th,
    td {
        text-align: center;
        padding: 16px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    table a {
        text-decoration: none;
        color: inherit;
    }

    table a:hover {
        color: red;
    }
</style>
<div class="qldm">
    <h2>Cập nhật Tài khoản</h2>
    <form action="indexadmin.php?act=udtk" method="post">
        <input type="hidden" name="id" value="<?=$tk1[0]['id']?>">
        <input type="text" name="username" id="username" value="<?=$tk1[0]['ten']?>" placeholder="Username">
        
        <input type="password" name="pass" id="password" value="<?=$tk1[0]['diachi']?>" placeholder="Password">

        <input type="text" name="email" id="email" value="<?=$tk1[0]['email']?>" placeholder="Email">

        <input type="text" name="sdt" id="sdt" value="<?=$tk1[0]['sdt']?>" placeholder="Số điện thoại">

        <input type="text" name="role" id="role" placeholder="Role">

        <input type="submit" value="Sửa tài khoản" name="addnew" id="sb">
    </form> 
    <br> <br>
    <table>
        <tr>
            <th>STT</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>SĐT</th>
            <th>Admin</th>
            <th>Sửa tài khoản</th>
            <th>Xóa tài khoản</th>
        </tr>
        <?php
            if (isset($tk) && count($tk) > 0) {
                $i = 1;
                foreach ($tk as $taikhoan) {
                    echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$taikhoan['username'].'</td>
                        <td>'.$taikhoan['pass'].'</td>
                        <td>'.$taikhoan['email'].'</td>
                        <td>'.$taikhoan['sdt'].'</td>
                        <td>'.$taikhoan['role'].'</td>
                        <td><a href="indexadmin.php?act=udtk&id='.$taikhoan['id'].'">Sửa</a></td>
                        <td><a href="indexadmin.php?act=deltk&id='.$taikhoan['id'].'">Xóa</a></td>
                    </tr>';
                    $i++;
                }
            }
        ?>
    </table>
</div>
