<?php
include "../config.php";
include "../auth.php";

if(!isAdmin()) die("Access denied");

if(isset($_POST['add'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $conn->query("INSERT INTO announcements (title,content) VALUES ('$title','$content')");
}

$res = $conn->query("SELECT * FROM announcements");
?>

<h2>Announcements</h2>

<form method="POST">
<input name="title" placeholder="Title">
<textarea name="content"></textarea>
<button name="add">Post</button>
</form>

<?php while($row = $res->fetch_assoc()): ?>
<p><?php echo $row['title']; ?></p>
<?php endwhile; ?>