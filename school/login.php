<?php
session_start();
include "config.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $res = $conn->query("SELECT * FROM users WHERE email='$email'");

    if ($res && $res->num_rows > 0) {
        $row = $res->fetch_assoc();

        if (password_verify($pass, $row['password'])) {
            $_SESSION['user'] = $row['email'];
            $_SESSION['role'] = $row['role'];
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid login";
        }
    } else {
        $error = "Invalid login";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f3f3f3;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 340px;
        }

        /* INPUTS */
        input[type="email"],
        input[type="password"] {
            width: 92%;
            padding: 14px;
            margin-bottom: 14px;
            border-radius: 12px;
            border: 1px solid #999;
            background: #dbe4f0;
            font-size: 14px;
        }

        /* OPTIONS */
        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
            font-size: 13px;
        }

        .options label {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* BUTTONS */
        .btn {
            width: 100%;
            padding: 14px;
            border-radius: 12px;
            border: 1px solid #999;
            background: #e5e5e5;
            font-size: 15px;
            cursor: pointer;
        }

        /* BLACK LOGIN BUTTON */
        .btn.dark {
            background: black;
            color: white;
            border: none;
        }

        .btn.dark:hover {
            background: #222;
        }

        /* DIVIDER */
        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #aaa;
        }

        .divider span {
            margin: 0 10px;
            font-size: 13px;
            color: #555;
        }

        /* ERROR */
        .error {
            color: red;
            font-size: 13px;
            margin-bottom: 10px;
            text-align: center;
        }
    </style>

</head>

<body>

    <div class="container">

        <?php if (isset($error)) echo "<div class='error'>$error</div>"; ?>

        <form method="POST">

            <input type="email" name="email" placeholder="Email or user name" required>
            <input type="password" name="password" placeholder="Password" required>

            <div class="options">
                <label><input type="checkbox"> Remember me</label>
                <span>Forgot password?</span>
            </div>

            <!-- ✅ BLACK BUTTON -->
            <button name="login" class="btn dark">Log in</button>

        </form>

        <div class="divider"><span>Or</span></div>

        <button class="btn" onclick="location.href='register.php'">
            Create Account
        </button>

    </div>

</body>

</html>