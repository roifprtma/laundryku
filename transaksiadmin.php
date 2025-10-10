<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "serverlk");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data pesanan
$query = "SELECT * FROM layananlaundry ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Pesanan Laundry</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar Admin -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LaundryKu - Admin</a>
    <div class="d-flex">
      <a href="tambah_pesanan.php" class="btn btn-success me-2">+ Tambah Pesanan</a>
      <a href="logout.php" class="btn btn-outline-light">Logout</a>
    </div>
  </div>
</nav>

<div class="container mt-5">
  <h2 class="mb-4 text-center">📋 Kelola Pesanan Laundry</h2>

  <div class="card shadow">
    <div class="card-body">
      <table class="table table-bordered table-striped text-center align-middle">
        <thead class="table-primary">
          <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Layanan</th>
            <th>Berat (Kg)</th>
            <th>Total (Rp)</th>
            <th>Tgl Pesan</th>
            <th>Telepon</th>
            <th>Status</th>
            <th>Update</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (mysqli_num_rows($result) > 0) {
              $no = 1;
              while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>".$no++."</td>";
                  echo "<td>".$row['nama_pelanggan']."</td>";
                  echo "<td>".$row['layanan']."</td>";
                  echo "<td>".$row['berat']."</td>";
                  echo "<td>".number_format($row['total'],0,',','.')."</td>";
                  echo "<td>".$row['tgl_pesanan']."</td>";
                  echo "<td>".$row['telepon']."</td>";
                  echo "<td>
                          <span class='badge ";
                          if($row['status'] == 'Proses'){ echo "bg-warning text-dark"; }
                          elseif($row['status'] == 'Selesai'){ echo "bg-success"; }
                          elseif($row['status'] == 'Diambil'){ echo "bg-primary"; }
                          else{ echo "bg-secondary"; }
                          echo "'>".$row['status']."</span>
                        </td>";
                  echo "<td>
                          <a href='detail.php?id=".$row['id']."' class='btn btn-sm btn-info'>Detail</a>
                          <a href='edit.php?id=".$row['id']."' class='btn btn-sm btn-warning'>Edit</a>
                          <a href='hapus.php?id=".$row['id']."' class='btn btn-sm btn-danger' onclick='return confirm(\"Yakin hapus pesanan ini?\")'>Hapus</a>
                        </td>";
                  echo "</tr>";
              }
          } else {
              echo "<tr><td colspan='9'>Belum ada pesanan</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>
