<style>
    .qldm{
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    h2{
        padding-top: 30px;
        text-align: center;
    }
    form{
        text-align: center;
    }
    #text{
        width: 300px;
    }
    #sb{
        border-radius: 5px;
        padding: 5px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    #sb:hover{
        background-color: black;
        color: white;
    }
    th, td{
        text-align: center;
        padding: 16px;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    table{
        width:90%;
        border-collapse: collapse;
        border-spacing: 0;
        border: 1px solid #ddd;
        margin-left: auto;
        margin-right: auto;
    }
    table tr td a{
        text-decoration: none;
    }
    table tr td a:hover{
        color: red;
    }
</style>
<div class="qldm">
    <h2>Cập nhật Danh Mục</h2>
    <form action="indexadmin.php?act=uddmform" method="post">
        <input type="text" name="ten" id="text" value="<?=$kq1[0]['ten']?>">
        <input type="hidden" name="id" value="<?=$kq1[0]['id']?>">
        <input type="submit" value="Thêm danh mục" name="addnew" id="sb">
    </form> 
    <br> <br>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên danh mục</th>
            <th>Hiển thị danh mục</th>
            <th>Sửa danh mục</th>
            <th>Xóa danh mục</th>
        </tr>
        <?php
            if(isset($kq)&&(count($kq)>0)){
                $i=1;
                foreach ($kq as $danhmuc) {
                    echo '<tr>
                    <td>'.$i.'</td>
                    <td>'.$danhmuc['ten'].'</td>
                    <td>'.$danhmuc['visible'].'</td>
                    <td><a href="indexadmin.php?act=uddmform&id='.$danhmuc['id'].'">Sửa</a></td>
                    <td><a href="indexadmin.php?act=deldm&id='.$danhmuc['id'].'">Xóa</a></td>
                    </tr>';
                        $i++;
                }
            }
        ?>
    </table>
</div>