<?php
session_start();

include "config.php";
include "auth.php";

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

/* ADD ANNOUNCEMENT */
if(isset($_POST['add'])){

    $title = $_POST['title'];
    $content = $_POST['content'];

    $conn->query("
        INSERT INTO announcements(title, content)
        VALUES('$title','$content')
    ");
}

/* FETCH */
$res = $conn->query("
    SELECT * FROM announcements
    ORDER BY created_at DESC
");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Announcements</title>
    <link rel="stylesheet" href="style.css?v=5">
</head>

<body>

<div class="layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="icons">
            <span>☰</span>
            <span>🔔</span>
        </div>

        <nav>
            <button onclick="location.href='index.php'">
                Dashboard
            </button>

            <button class="active">
                Announcement
            </button>

            <button onclick="location.href='assignment.php'">
                Assignment
            </button>

            <button>
                Materials
            </button>

            <button>
                Calendar
            </button>

            <button>
                Profile
            </button>

            <button onclick="location.href='logout.php'">
                Logout
            </button>
        </nav>

    </aside>

    <!-- MAIN -->
    <main class="main">

        <!-- TOPBAR -->
        <div class="topbar">
            <input type="text" placeholder="Search...">
            <img src="https://i.pravatar.cc/40">
        </div>

        <!-- CONTENT -->
        <div class="content">

            <h2 class="announcement-title">
                ANNOUNCEMENTS
            </h2>

            <!-- FORM -->
            <form method="POST" class="announcement-form">

                <input
                    type="text"
                    name="title"
                    placeholder="Announcement Title"
                    required
                >

                <textarea
                    name="content"
                    placeholder="Announcement Content"
                    required
                ></textarea>

                <button name="add">
                    Post Announcement
                </button>

            </form>

            <!-- ANNOUNCEMENTS -->
            <?php while($row = $res->fetch_assoc()): ?>

                <div class="announcement">

                    <div class="left"></div>

                    <div class="right">

                        <strong>
                            <?php echo $row['title']; ?>
                        </strong>

                        <small>
                            <?php echo date("M d, Y", strtotime($row['created_at'])); ?>
                        </small>

                        <p>
                            <?php echo $row['content']; ?>
                        </p>

                    </div>

                </div>

            <?php endwhile; ?>

        </div>

    </main>

</div>

</body>
</html>