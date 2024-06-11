<?php
include_once('./DBUtil.php');
include_once('./cart.php');
ini_set('display_errors', '1');

$dbHelper = new DBUntil();

$categories = $dbHelper->select("select * from product");
$errors = [];
$carts = new Cart();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>

    <div class="container mt-3">
        <h2>Sản Phẩm</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Hình Ảnh</th>
                    <th>Giá Bán</th>
                    <th>Mô Tả</th>
                    <th>Số lượng</th>
                    <th>Action</th>
                </tr>
            </thead>

            <?php
            foreach ($categories as $item) {
                echo "<tr>";
                echo "<td>$item[id]</td>";
                echo "<td>$item[name]</td>";
                echo "<td><img src='$item[img]' width='150px'/></td>";
                echo "<td>$item[price]</td>";
                echo "<td>$item[description]</td>";
                echo "<td>$item[stock]</td>";
                echo "<td> <a class='btn btn-primary' href='chitietsp.php?id=$item[id]&action=add'><i class='bi bi-eye'></i>Chi Tiết</a>
                </td>";
                echo "</tr>";
            }

            ?>

            </tr>
        </table>
    </div>

</body>

</html>