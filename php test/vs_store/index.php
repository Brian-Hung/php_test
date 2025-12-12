<?php include 'db.php'; ?>

<?php 
$result = $conn->query("SELECT * FROM products ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h1>Danh sách sản phẩm (13 sản phẩm)</h1>
<a href="create.php" class="btn">+ Thêm sản phẩm</a>

<table>
    <tr>
        <th>ID</th>
        <th>Ảnh</th>
        <th>Tên</th>
        <th>Giá</th>
        <th>Chức năng</th>
    </tr>

    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>

        <td>
            <img src="uploads/<?= $row['image'] ?>" width="70">
        </td>

        <td><?= $row['name'] ?></td>
        <td><?= number_format($row['price']) ?> đ</td>

        <td>
            <a href="edit.php?id=<?= $row['id'] ?>" class="edit">Sửa</a>
            <a href="delete.php?id=<?= $row['id'] ?>"
               onclick="return confirm('Bạn có chắc chắn muốn xóa không?');"
               class="delete">Xóa</a>
        </td>
    </tr>
    <?php endwhile; ?>

</table>

</body>
</html>
