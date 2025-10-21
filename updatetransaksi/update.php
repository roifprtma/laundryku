<?php
include "../serverLK.php"; // ganti path jika berbeda

// --- Ambil data berdasarkan ID ---
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM layananlaundry WHERE id='$id'");
    $data = mysqli_fetch_assoc($query);

    if (!$data) {
        die("Data tidak ditemukan!");
    }
}

// --- Proses Update ---
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $layanan = $_POST['layanan'];
    $berat = $_POST['berat'];
    $total = $_POST['total'];
    $tgl_pesanan = $_POST['tgl_pesanan'];
    $telepon = $_POST['telepon'];
    $status = $_POST['status'];

    $update = mysqli_query($conn, "UPDATE layananlaundry SET 
        nama_pelanggan='$nama_pelanggan',
        layanan='$layanan',
        berat='$berat',
        total='$total',
        tgl_pesanan='$tgl_pesanan',
        telepon='$telepon',
        status='$status'
        WHERE id='$id'");

    if ($update) {
        header("Location: ../transaksiadmin.php");
        exit;
    } else {
        echo "Gagal update data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Pesanan Laundry</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="transaksi.css">


</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
             Edit Pesanan Laundry
        </div>
        <div class="card-body">
            <form method="post">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">

                <div class="mb-3">
                    <label class="form-label">Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" class="form-control" value="<?= htmlspecialchars($data['nama_pelanggan']) ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Layanan</label>
                    <input type="text" name="layanan" class="form-control" value="<?= htmlspecialchars($data['layanan']) ?>" required>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Berat (Kg)</label>
                        <input type="number" step="0.1" name="berat" class="form-control" value="<?= $data['berat'] ?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Total (Rp)</label>
                        <input type="number" name="total" class="form-control" value="<?= $data['total'] ?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Tanggal Pesan</label>
                        <input type="date" name="tgl_pesanan" class="form-control" value="<?= $data['tgl_pesanan'] ?>" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Telepon</label>
                        <input type="text" name="telepon" class="form-control" value="<?= htmlspecialchars($data['telepon']) ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="dalam proses" <?= ($data['status'] == 'dalam proses') ? 'selected' : '' ?>>Dalam Proses</option>
                            <option value="selesai" <?= ($data['status'] == 'selesai') ? 'selected' : '' ?>>Selesai</option>
                            <option value="diambil" <?= ($data['status'] == 'diambil') ? 'selected' : '' ?>>Diambil</option>
                        </select>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" name="update" class="btn btn-primary px-4">Simpan</button>
                    <a href="../transaksiadmin.admin" class="btn btn-secondary px-4"> Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
