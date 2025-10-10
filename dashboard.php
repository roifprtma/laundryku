<?php
include "serverLK.php";

$jml_layanan = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM layananlaundry"))['total'];
$jml_customer = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM customers"))['total'];
$jml_paket = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM paket_laundry"))['total'];
$jml_pemasukan = mysqli_fetch_assoc(mysqli_query($conn, "SELECT SUM(total) as total FROM layananlaundry"))['total'];

$result = mysqli_query($conn, "SELECT * FROM layananlaundry");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin LaundryKu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="admin.css">
  
</head>

<body>
  <div class="navbar">
    <span class="toggle-btn" onclick="toggleSidebar()">☰ Menu</span>
    <h5 class="mb-0">Dashboard Admin LaundryKu</h5>
  </div>

  <div class="sidebar" id="sidebar">
    <a href="LaundryKu.html">🏠 Home</a>
    <a href="pelanggan.php">👥 Data Pelanggan</a>
    <a href="transaksiadmin.php">💰 Data Transaksi</a>
    <a href="logout.php">🚪 Logout</a>
  </div>

  <div class="content" id="content">
    <div class="container py-4">
      <div class="row text-white mb-4">
        <div class="col-md-3">
          <div class="card bg-primary shadow rounded-3">
            <div class="card-body text-center">
              <h5>Layanan</h5>
              <h3><?= $jml_layanan ?></h3>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-success shadow rounded-3">
            <div class="card-body text-center">
              <h5>Pelanggan</h5>
              <h3><?= $jml_customer ?></h3>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-info shadow rounded-3">
            <div class="card-body text-center">
              <h5>Paket</h5>
              <h3><?= $jml_paket ?></h3>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-warning shadow rounded-3">
            <div class="card-body text-center">
              <h5>Pemasukan</h5>
              <h3>Rp <?= number_format($jml_pemasukan,0,',','.') ?></h3>
            </div>
          </div>
        </div>
      </div>

      <div class="card shadow rounded-3">
        <div class="card-header bg-dark text-white text-center">
          <h4 class="mb-0">Pesanan Terbaru</h4>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Pelanggan</th>
                <th>Layanan</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <?php while($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama_pelanggan'] ?></td>
                <td><?= $row['layanan'] ?></td>
                <td><?= $row['tgl_pesanan'] ?></td>
                <td>
                  <?php if($row['status'] == 'Selesai'){ ?>
                    <span class="badge bg-success">Selesai</span>
                  <?php } else { ?>
                    <span class="badge bg-secondary"><?= $row['status'] ?></span>
                  <?php } ?>
                </td>
                <td>Rp <?= number_format($row['total'],0,',','.') ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script>
    function toggleSidebar() {
      let sidebar = document.getElementById("sidebar");
      let content = document.getElementById("content");
      sidebar.classList.toggle("active");
      content.classList.toggle("shift");
    }
  </script>
</body>
</html>
