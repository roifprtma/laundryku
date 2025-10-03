<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pemesanan Laundry</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <style>
    body {
      background: #95c2e9ff;
      font-family: serif, sans-serif;
    }
    .laundry-form {
      max-width: 600px;
      margin: 40px auto;
      padding: 25px;
      background: #6e70f0ff;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(253, 252, 252, 0.1);
    }
    .laundry-form h2 {
      text-align: center;
      color: #fefefeff;
      margin-bottom: 20px;
    }
    .btn-laundry {
      background: #1e90ff;
      color: #f6f6f6ff;
      border-radius: 8px;
      padding: 10px 20px;
    }
    .btn-laundry:hover {
      background: #4682b4;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="laundry-form">
      <h2>🧺 Pemesanan LaundryKu</h2>
      <form action="proses_pesanan.php" method="POST">
        
        <!-- Nama -->
        <div class="mb-3">
          <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
          <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Masukkan nama Anda" required>
        </div>

        <!-- Telepon -->
        <div class="mb-3">
          <label for="telepon" class="form-label">Nomor Telepon</label>
          <input type="tel" class="form-control" id="telepon" name="telepon" placeholder="0812-xxxx-xxxx" required>
        </div>

        <!-- Alamat -->
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat penjemputan/pengantaran" required></textarea>
        </div>

        <!-- Jenis Layanan -->
        <div class="mb-3">
          <label for="layanan" class="form-label">Jenis Layanan</label>
          <select class="form-select" id="layanan" name="layanan" required>
            <option value="">Pilih Layanan</option>
            <option value="Cuci Kering">Cuci Kering</option>
            <option value="Cuci Setrika">Cuci + Setrika</option>
            <option value="Setrika Saja">Setrika Saja</option>
            <option value="Express">Express (1 Hari)</option>
          </select>
        </div>

        <!-- Estimasi Berat -->
        <div class="mb-3">
          <label for="berat" class="form-label">Estimasi Berat Cucian (Kg)</label>
          <input type="number" class="form-control" id="berat" name="berat" placeholder="Masukkan berat cucian" min="1" required>
        <input type="hidden" name="tgl_pesanan" value="<?php echo date('Y-m-d'); ?>">
         <input type="hidden" name="status" value=" dalam proses">
       </div>

        <!-- Catatan tambahan -->
        <div class="mb-3">
          <label for="catatan" class="form-label">Catatan Tambahan</label>
          <textarea class="form-control" id="catatan" name="catatan" rows="2" placeholder="(Opsional) Contoh: pakaian berbahan halus, dll."></textarea>
        </div>

        <!-- Tombol Submit -->
        <div class="text-center">
          <button type="submit" class="btn btn-laundry">Kirim Pesanan</button>
        </div>

      </form>
    </div>
  </div>

</body>
</html>
