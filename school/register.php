<?php
include "config.php";

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $conn->query("INSERT INTO users (email,password) VALUES ('$email','$password')");
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>

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
        input {
            width: 100%;
            padding: 14px;
            margin-bottom: 14px;
            border-radius: 12px;
            border: 1px solid #999;
            background: #dbe4f0;
            font-size: 14px;
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

        /* BLACK REGISTER BUTTON */
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
    </style>

</head>

<body>

    <div class="container">

        <form method="POST">

            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>

            <!-- ✅ BLACK BUTTON -->
            <button name="register" class="btn dark">Create Account</button>

        </form>

        <div class="divider"><span>Or</span></div>

        <button class="btn" onclick="location.href='login.php'">
            Back to Login
        </button>

    </div>

</body>

</html>