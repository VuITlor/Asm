<style>
    .qldm {
        font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        padding: 20px;
    }

    h2 {
        padding-top: 30px;
        text-align: center;
        color: #333;
    }

    form {
        text-align: center;
    }

    #text {
        width: 300px;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    #sb {
        border-radius: 5px;
        padding: 8px 16px;
        font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #sb:hover {
        background-color: #0056b3;
    }

    th,
    td {
        text-align: center;
        padding: 12px;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    table {
        width: 90%;
        border-collapse: collapse;
        border-spacing: 0;
        border: 1px solid #ddd;
        margin: auto;
    }

    table th {
        background-color: #007bff;
        color: #fff;
    }

    table tr td a {
        text-decoration: none;
        color: #007bff;
        transition: color 0.3s ease;
    }

    table tr td a:hover {
        color: #0056b3;
    }
</style>
<div class="qldm">
    <h2>Quản Lý Sản Phẩm</h2>
    <form action="indexadmin.php?act=addsp" method="post" enctype="multipart/form-data">
        <select name="iddm" id="">
            <option value="0">Chọn danh mục</option>
            <?php
            if (isset($dsdm)) {
                foreach ($dsdm as $dm) {
                    echo '<option value="' . $dm['id'] . '">' . $dm['ten'] . '</option>';
                }
            }
            ?>
        </select>
        <input type="text" name="ten" id="text" placeholder="Nhập tên"> <br>
        <input type="file" name="img" id=""> <br>
        <input type="text" name="gia" id="text" placeholder="Nhập giá"> <br>
        <input type="text" name="ma" id="text" placeholder="Nhập mã"> <br>
        <input type="text" name="dvt" id="text" placeholder="Nhập đơn vị tính"> <br>
        <input type="submit" value="Thêm sản phẩm" name="addnew" id="sb">
    </form>
    <br> <br>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Mã sản phẩm</th>
            <th>Giá</th>
            <th>Đơn vị tính</th>
            <th>Sửa sản phẩm</th>
            <th>Xóa sản phẩm</th>
        </tr>
        <?php
        if (isset($kq) && (count($kq) > 0)) {
            $i = 1;
            foreach ($kq as $sp) {
                echo '<tr>
                    <td>' . $i . '</td>
                    <td>' . $sp['ten'] . '</td>
                    <td><img src="' . $sp['img'] . '" width="150px"></td>
                    <td>' . $sp['ma'] . '</td>
                    <td>' . $sp['gia'] . '</td>
                    <td>' . $sp['dvt'] . '</td>
                    <td><a href="indexadmin.php?act=udsp&id=' . $sp['id'] . '">Sửa</a></td>
                    <td><a href="indexadmin.php?act=delsp&id=' . $sp['id'] . '">Xóa</a></td>
                    </tr>';
                $i++;
            }
        }
        ?>
    </table>
</div>