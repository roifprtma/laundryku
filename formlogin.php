

    <!DOCTYPE html>

    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LaundryKu</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background: linear-gradient(135deg, #1b4188, #1080e9);
            }
            
            .login-box {
                background: rgb(253, 254, 255);
                padding: 40px;
                border-radius: 15px;
                box-shadow: 0px 8px 20px rgba(255, 247, 247, 0.3);
                width: 350px;
                text-align: center;
                opacity: 0;
                transform: translateY(50px);
                animation: fadeUp 1s forwards;
            }
            
            @keyframes fadeUp {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            .login-box h2 {
                margin-bottom: 30px;
                color: #333;
            }
            
            .login-box input {
                width: 100%;
                padding: 12px;
                margin: 10px 0;
                border: 1px solid #2a5298;
                border-radius: 8px;
                font-size: 15px;
                transition: 0.5s;
            }
            
            .login-box input:focus {
                border-color: #2a5298;
                box-shadow: 0 0 8px rgba(4, 40, 102, 0.5);
                outline: none;
            }
            
            .login-box button {
                width: 100px;
                padding: 12px;
                background: linear-gradient(to right, #1e3c72, #2a5298);
                color: #fff;
                border: none;
                border-radius: 8px;
                font-size: 16px;
                cursor: pointer;
                transition: transform 0.2s, background 0.3s;
            }
            
            .login-box button:hover {
                transform: scale(1.1);
                background: linear-gradient(to right, #2a5298, #1e3c72);
            }
        </style>
    </head>

    <body>
        <div class="login-box">
            <h2>Sign In</h2>
            <form action="fungsilogin.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Masuk</button>
            </form>
            <p>Belum punya akun? <a href="daftar.php">Segera daftar</a></p>
        </div>
    </body>

    </html>