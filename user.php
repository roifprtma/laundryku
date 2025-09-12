<<<<<<< HEAD
<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != "user") {
    header("Location: LaundryKu.html");
    exit;
}
echo "Selamat datang User, " . $_SESSION['username'];
=======
<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != "user") {
    header("Location: LaundryKu.html");
    exit;
}
echo "Selamat datang User, " . $_SESSION['username'];
>>>>>>> c69c8760651cd7f3727bc202db41c311aa6e8aad
