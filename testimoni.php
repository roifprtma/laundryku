
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimoni Pelanggan</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: #9cb5e7ff;
      color: #333;
    }

    h2 {
      text-align: center;
      margin-top: 40px;
      font-size: 2em;
      color: #2d3436;
    }

    .testimoni-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      padding: 40px;
      max-width: 1200px;
      margin: auto;
    }

    .testimoni-card {
      background: #fff;
      padding: 25px;
      border-radius: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      position: relative;
    }

    .testimoni-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 20px rgba(46, 1, 1, 0.15);
    }

    .profile {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }

    .profile img {
      width: 55px;
      height: 55px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 15px;
      border: 3px solid #23139cff;
    }

    .profile h3 {
      margin: 0;
      font-size: 1.1em;
      color: #2d3436;
    }

    .profile span {
      font-size: 0.9em;
      color: #002efcff;
    }

    .testimoni-card p {
      font-style: italic;
      line-height: 1.6;
      color: #555;
    }

    .quote {
      position: absolute;
      top: 15px;
      right: 20px;
      font-size: 3em;
      color: #6c5ce7;
      opacity: 0.2;
    }
  </style>
</head>
<body>
  <h2>✨ Testimoni Pelanggan ✨</h2>

  <div class="testimoni-container">
    <!-- Testimoni 1 -->
    <div class="testimoni-card">
      <span class="quote">“</span>
      <div class="profile">
        <img src="image/wulandari.jpg" alt="Foto Pelanggan">
        <div>
          <h3>Sinta Wulandari</h3>
          <span>Mahasiswa</span>
        </div>
      </div>
      <p>
        "Pelayanan laundry di sini sangat cepat dan hasilnya bersih wangi. 
        Saya tidak pernah kecewa, pokoknya recommended banget!"
      </p>
    </div>

    <!-- Testimoni 2 -->
    <div class="testimoni-card">
      <span class="quote">“</span>
      <div class="profile">
        <img src="image/BudiSantoso.jpg" alt="Foto Pelanggan">
        <div>
          <h3>Budi Santoso</h3>
          <span>Karyawan Swasta</span>
        </div>
      </div>
      <p>
        "Hemat waktu dan tenaga, tinggal antar jemput pakaian langsung rapi. 
        Pelayanan ramah dan profesional. Sangat puas!"
      </p>
    </div>

    <!-- Testimoni 3 -->
    <div class="testimoni-card">
      <span class="quote">“</span>
      <div class="profile">
        <img src="image/dewi.jpeg" alt="Foto Pelanggan">
        <div>
          <h3>Dewi Anggraini</h3>
          <span>Wirausaha</span>
        </div>
      </div>
      <p>
        "Harga terjangkau dengan kualitas premium. Pakaian jadi lebih awet 
        dan wangi tahan lama. Pasti langganan terus!"
      </p>
    </div>
    <!-- Testimoni 4 -->
    <div class="testimoni-card">
      <span class="quote">“</span>
      <div class="profile">
        <img src="image/maharani.jpg" alt="Foto Pelanggan">
        <div>
          <h3>SandiMaharani</h3>
          <span>Mahasiswa</span>
        </div>
      </div>
      <p>
        "Pelayanan laundry di sini sangat cepat dan hasilnya bersih wangi. 
        Saya tidak pernah kecewa, pokoknya recommended banget!"
      </p>
    </div>
    <!-- Testimoni 1 -->
    <div class="testimoni-card">
      <span class="quote">“</span>
      <div class="profile">
        <img src="image/megawati.jpg" alt="Foto Pelanggan">
        <div>
          <h3>Megawati</h3>
          <span>Ketua partai PDIP</span>
        </div>
      </div>
      <p>
        "Pelayanan laundry di sini sangat cepat dan hasilnya bersih wangi. 
        Saya tidak pernah kecewa, pokoknya recommended banget!"
      </p>
    </div>
 
    <!-- Testimoni 1 -->
    <div class="testimoni-card">
      <span class="quote">“</span>
      <div class="profile">
        <img src="image/PuanMaharani.jpg" alt="Foto Pelanggan">
        <div>
          <h3>Puan Maharani</h3>
          <span>Ketua DPR Ri </span>
        </div>
      </div>
      <p>
        "Pelayanan laundry di sini sangat cepat dan hasilnya bersih wangi. 
        Saya tidak pernah kecewa, pokoknya recommended banget!"
      </p>
    </div>

  </div>
</body>
</html>
