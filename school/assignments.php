<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Assignments</title>
    <link rel="stylesheet" href="style.css?v=2">
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

                <button onclick="location.href='announcement.php'">
                    Announcement
                </button>

                <button class="active">
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

                <h2 class="assignment-title">
                    ASSIGNMENTS
                </h2>

                <!-- ASSIGNMENT 1 -->
                <div class="assignment-card">

                    <div class="assignment-left">
                        <div class="assignment-icon">
                            📄
                        </div>
                    </div>

                    <div class="assignment-details">
                        <h3>Web Development Activity</h3>

                        <p>
                            Create a responsive student dashboard using HTML and CSS.
                        </p>

                        <span>Due Date: May 10, 2026</span>
                    </div>

                    <div class="assignment-status pending">
                        Pending
                    </div>

                </div>

                <!-- ASSIGNMENT 2 -->
                <div class="assignment-card">

                    <div class="assignment-left">
                        <div class="assignment-icon">
                            💻
                        </div>
                    </div>

                    <div class="assignment-details">
                        <h3>PHP CRUD System</h3>

                        <p>
                            Develop a CRUD system with login authentication.
                        </p>

                        <span>Due Date: May 12, 2026</span>
                    </div>

                    <div class="assignment-status ongoing">
                        Ongoing
                    </div>

                </div>

                <!-- ASSIGNMENT 3 -->
                <div class="assignment-card">

                    <div class="assignment-left">
                        <div class="assignment-icon">
                            📝
                        </div>
                    </div>

                    <div class="assignment-details">
                        <h3>Research Documentation</h3>

                        <p>
                            Submit Chapter 1 and Chapter 2 of your capstone project.
                        </p>

                        <span>Due Date: May 15, 2026</span>
                    </div>

                    <div class="assignment-status done">
                        Completed
                    </div>

                </div>

                <!-- ASSIGNMENT 4 -->
                <div class="assignment-card">

                    <div class="assignment-left">
                        <div class="assignment-icon">
                            📊
                        </div>
                    </div>

                    <div class="assignment-details">
                        <h3>Database Design</h3>

                        <p>
                            Create an ERD and relational schema for the enrollment system.
                        </p>

                        <span>Due Date: May 18, 2026</span>
                    </div>

                    <div class="assignment-status pending">
                        Pending
                    </div>

                </div>

            </div>

        </main>

    </div>

</body>

</html>