<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

function isAdmin(){
    return $_SESSION['role'] === 'admin';
}
?>