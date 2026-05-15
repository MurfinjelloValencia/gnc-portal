<?php
include "../config.php";
include "../auth.php";

if(isset($_POST['submit'])){
    $file = $_FILES['file']['name'];
    $aid = $_POST['assignment_id'];

    move_uploaded_file($_FILES['file']['tmp_name'], "../uploads/".$file);

    $email = $_SESSION['user'];

    $conn->query("INSERT INTO submissions (assignment_id,student_email,file)
                  VALUES ('$aid','$email','$file')");
}
?>

<form method="POST" enctype="multipart/form-data">
<input name="assignment_id" placeholder="Assignment ID">
<input type="file" name="file">
<button name="submit">Submit</button>
</form>