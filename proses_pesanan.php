<?php
// Koneksi ke database
$result = mysqli_connect("localhost", "root", "", "serverlk");

if (!$result) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari form
$layanan  = $_POST['layanan'];
$tgl_pesanan = $_POST['tgl_pesanan'];
$status = $_POST['status'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$berat    = $_POST['berat'];
$telepon    = $_POST['telepon'];
// $total    = $_POST['total'];

// Simpan ke tabel pesanan
$sql = "INSERT INTO layananlaundry (layanan, tgl_pesanan, status, nama_pelanggan, berat,  telepon)
        VALUES ('$layanan', '$tgl_pesanan', '$status', '$nama_pelanggan', '$berat',  '$telepon')";

if (mysqli_query($result, $sql)) {
    echo "Pesanan berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($result);
?>