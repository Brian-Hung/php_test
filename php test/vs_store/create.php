<?php include 'db.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $price = $_POST['price'];

    // Upload ảnh
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $image);

    $sql = "INSERT INTO products (name, price, image)
            VALUES ('$name', '$price', '$image')";
    $conn->query($sql);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thêm sản phẩm</title>
</head>
<body>

<h2>Thêm sản phẩm</h2>

<form method="POST" enctype="multipart/form-data">
    Tên sản phẩm: <br>
    <input type="text" name="name" required><br><br>

    Giá: <br>
    <input type="number" name="price" required><br><br>

    Ảnh sản phẩm: <br>
    <input type="file" name="image" required><br><br>

    <button type="submit">Lưu</button>
</form>

<a href="index.php">← Quay lại</a>

</body>
</html>
