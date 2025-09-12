<?php
include "serverLK.php";
$result = mysqli_query($conn, "SELECT * FROM customers");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Pelanggan</title>
    <style>
        body {font-family: Arial; margin: 20px;}
        input {padding: 8px; width: 300px; margin-bottom: 10px;}
        table {border-collapse: collapse; width: 100%;}
        th, td {border: 1px solid #ccc; padding: 10px; text-align: center;}
        th {background: #1b61b1; color: white;}
        tr:hover {background: #f1f1f1;}
        a.btn {
            padding: 6px 12px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            margin: 2px;
        }
        .btn-update {background: #4CAF50; color: white;}
        .btn-delete {background: #e74c3c; color: white;}
    </style>
</head>
<body>
    <h2>👥 Data Pelanggan</h2>
    <a href="tambahdata.php" style="display:inline-block; margin-bottom:15px; 
   padding:10px 15px; background:#1b61b1; color:white; text-decoration:none; border-radius:5px;">
   ➕ Tambah Pelanggan
</a>
    <input type="text" id="search" placeholder="Cari nama pelanggan...">
    <table id="pelangganTable">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>pesanan</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['id_user'] ?></td>
                <td><?= $row['nama_user'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td><?= $row['no_hp'] ?></td>
                <td><?= $row['pesanan'] ?></td>
                <td>
                    <a href="update.php?id=<?= $row['id_user'] ?>" class="btn btn-update">Update</a>
                    <a href="delete.php?id=<?= $row['id_user'] ?>" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <script>
        document.getElementById("search").addEventListener("keyup", function() {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll("#pelangganTable tr:not(:first-child)");
            rows.forEach(row => {
                let nama = row.cells[1].textContent.toLowerCase();
                row.style.display = nama.includes(filter) ? "" : "none";
            });
        });
    </script>
</body>
</html>
