<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$product = $conn->query("SELECT * FROM products WHERE id=$id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $price = $_POST['price'];

    // Ảnh mới (nếu có)
    if ($_FILES["image"]["name"] != "") {
        $image = $_FILES["image"]["name"];
        move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $image);
    } else {
        $image = $product["image"];
    }

    $sql = "UPDATE products SET 
            name='$name', price='$price', image='$image'
            WHERE id=$id";

    $conn->query($sql);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sửa sản phẩm</title>
</head>
<body>

<h2>Sửa sản phẩm</h2>

<form method="POST" enctype="multipart/form-data">
    Tên sản phẩm: <br>
    <input type="text" name="name" value="<?= $product['name'] ?>" required><br><br>

    Giá: <br>
    <input type="number" name="price" value="<?= $product['price'] ?>" required><br><br>

    Ảnh hiện tại: <br>
    <img src="uploads/<?= $product['image'] ?>" width="120"><br><br>

    Chọn ảnh mới (nếu đổi):  
    <input type="file" name="image"><br><br>

    <button type="submit">Cập nhật</button>
</form>

<a href="index.php">← Quay lại</a>

</body>
</html>
