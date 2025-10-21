<?php
include "../serverLK.php"; // sesuaikan path

// Pastikan ID dikirim melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Cek apakah data dengan ID itu ada
    $cek = mysqli_query($conn, "SELECT * FROM layananlaundry WHERE id='$id'");
    $data = mysqli_fetch_assoc($cek);

    if (!$data) {
        die("❌ Data tidak ditemukan!");
    }

    // Hapus data dari tabel
    $hapus = mysqli_query($conn, "DELETE FROM layananlaundry WHERE id='$id'");

    if ($hapus) {
        // Redirect kembali ke daftar transaksi
        header("Location: ../transaksiadmin.php?status=deleted");
        exit;
    } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }
} else {
    echo "ID tidak ditemukan!";
}
?>
