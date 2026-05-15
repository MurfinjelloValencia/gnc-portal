<?php
include "../config.php";
include "../auth.php";

if (!isAdmin()) die("Access denied");

if (isset($_POST['upload'])) {
    $file = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], "../uploads/" . $file);

    $conn->query("INSERT INTO materials (filename) VALUES ('$file')");
}
?>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button name="upload">Upload</button>
</form>