<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != "user") {
    header("Location: LaundryKu.html");
    exit;
}
echo "Selamat datang User, " . $_SESSION['username'];
