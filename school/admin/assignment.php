<?php
include "../config.php";
include "../auth.php";

if (!isAdmin()) die("Access denied");

if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $due = $_POST['due'];
    $conn->query("INSERT INTO assignments (title,due_date) VALUES ('$title','$due')");
}

$res = $conn->query("SELECT * FROM assignments");
?>

<h2>Assignments</h2>

<form method="POST">
    <input name="title">
    <input type="date" name="due">
    <button name="add">Add</button>
</form>

<?php while ($row = $res->fetch_assoc()): ?>
    <p><?php echo $row['title']; ?></p>
<?php endwhile; ?>