<?php
session_start();
session_unset();  // hapus semua session
session_destroy(); // destroy session
header("Location: formlogin.php"); // kembali ke halaman login
exit();