<?php
// Nomor WhatsApp dalam format internasional
$nomor = "6288222401356";

// Pesan otomatis (tanpa spasi langsung, nanti kita encode)
$pesan = "Halo saya ingin bertanya mengenai produk Anda";

// Encode pesan agar aman di URL
$pesan_encoded = urlencode($pesan);

// Buat URL WhatsApp
$link_wa = "https://wa.me/$nomor?text=$pesan_encoded";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tombol WhatsApp</title>
    <style>
        .whatsapp-button {
            display: inline-block;
            background-color: #25D366;
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }
        .whatsapp-button:hover {
            background-color: #1ebe5d;
        }
    </style>
</head>
<body>

    <a href="<?php echo $link_wa; ?>" class="whatsapp-button" target="_blank">
        Chat via WhatsApp
    </a>

    <h2>Selamat datang Admin, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="logout.php">Logout</a>

</body>
</html>
