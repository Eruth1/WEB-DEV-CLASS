<?php
session_start();
include 'header.php';

if (isset($_SESSION['user'])) {
    echo "<h2>Welcome, " . htmlspecialchars($_SESSION['user']) . "</h2>";
} else {
    header('Location: login.php');
    exit();
}

include 'footer.php';
?>