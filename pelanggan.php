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
    </style>
</head>
<body>
    <h2>👥 Data Pelanggan</h2>
    <input type="text" id="search" placeholder="Cari nama pelanggan...">
    <table id="pelangganTable">
        <tr><th>ID</th><th>Nama</th><th>Alamat</th><th>No HP</th></tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td><?= $row['no_hp'] ?></td>
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
