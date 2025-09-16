<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>
<body>
  
    <style>
        body {margin: 0; font-family: 'Poppins', sans-serif;}
        .navbar {
            background: #1b61b1; padding: 15px; color: white;
            display: flex; justify-content: space-between; align-items: center;
        }
        .sidebar {
            width: 220px; height: 100vh; background: #1b61b1;
            position: fixed; top: 0; left: -220px; transition: 0.4s;
            padding-top: 60px;
        }
        .sidebar.active {left: 0;}
        .sidebar a {
            display: block; padding: 15px; color: white; text-decoration: none;
            transition: 0.3s;
        }
        .sidebar a:hover {background: #1b61b1; padding-left: 25px;}
        .content {
            margin-left: 0; padding: 20px; transition: 0.4s;
        }
        .content.shift {margin-left: 220px;}
        .toggle-btn {cursor: pointer; font-size: 20px;}
    </style>
</head>
<body>
    <div class="navbar">
        <span class="toggle-btn" onclick="toggleSidebar()">☰ Menu</span>
      
    </div>
    <div class="sidebar" id="sidebar">
        <a href="LaundryKu.html">🏠 Home</a>
        <a href="pelanggan.php">👥 Data Pelanggan</a>
        <a href="transaksiadmin.php">💰 Data Transaksi</a>
        <a href="logout.php">🚪 Logout</a>
    </div>
    <div class="content" id="content">
        <h1>📊 Dashboard</h1>
        <p>Selamat datang di sistem manajemen LaundryKu. Gunakan menu di sebelah kiri untuk navigasi.</p>
    </div>

    <script>
        function toggleSidebar() {
            let sidebar = document.getElementById("sidebar");
            let content = document.getElementById("content");
            sidebar.classList.toggle("active");
            content.classList.toggle("shift");
        }
    </script>


    <h1><p>haloooooo</p></h1>
</body>
</html>
