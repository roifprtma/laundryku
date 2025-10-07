
<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "serverlk");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data pesanan
$query = "SELECT * FROM layananlaundry ";
$result = mysqli_query($conn, $query);
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Pesanan Laundry</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <h2 class="mb-4 text-center">📋 Daftar Pesanan Laundry</h2>

  <table class="table table-bordered table-striped text-center align-middle">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>Nama Pelanggan</th>
        <th>Layanan</th>
        <th>Berat (Kg)</th>
        <th>Total (Rp)</th>
        <th>Tgl Pesan</th>
        <th>no telepon</th>
        <th>Status</th>
    
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
              echo "<td>".$row['status']."</td>";
             
          }
      } else {
          echo "<tr><td colspan='9'>Belum ada pesanan</td></tr>";
      }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
