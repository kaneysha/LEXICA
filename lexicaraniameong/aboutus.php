<?php
// aboutus.php
session_start();

// Contoh data user (nanti bisa disesuaikan dengan session login sesungguhnya)
$nama_user = isset($_SESSION['nama']) ? $_SESSION['nama'] : 'Rafi Natanginrat';
$email_user = isset($_SESSION['email']) ? $_SESSION['email'] : 'rafi@example.com';

// Data artikel terbaru
$latest_articles = [
  [
    "judul" => "WAJAH PEREMPUAN DALAM HARI PEREMPUAN INTERNASIONAL",
    "gambar" => "img/image 1.png"
  ],
  [
    "judul" => "INOVASI TEKNOLOGI RAMAH LINGKUNGAN UNTUK DUNIA LEBIH SEHAT",
    "gambar" => "img/download 4.png"
  ],
  [
    "judul" => "REVOLUSI ANGKUTAN UMUM BANDUNG DI UJUNG JARI?",
    "gambar" => "img/image 2.png"
  ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Tentang Kami</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: "Inter", sans-serif;
      overflow-x: hidden;
      margin: 0;
      padding: 0;
      background: #E9EBEC;
      color: #1A1A1A;
    }
    * { box-sizing: border-box; }
    nav {
      position: sticky;
      top: 0;
      z-index: 1000;
      background: #0B1E4F;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      color: white;
      border-bottom: 1px solid #1A2E6E;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    nav a {
      color: white;
      text-decoration: none;
      margin: 0 1rem;
      font-weight: 600;
      font-size: 0.75rem;
      letter-spacing: 0.05em;
      text-transform: uppercase;
    }
    .about-header {
      background-color: #0B1E4F;
      color: white;
      padding: 3rem 1rem;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .about-title {
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 1.5rem;
      text-transform: uppercase;
    }
    .about-description {
      max-width: 800px;
      line-height: 1.6;
      margin: 0 auto;
      font-size: 1rem;
    }
    .team-section {
      background-color: #F8F7F4;
      padding: 3rem 1rem;
      text-align: center;
    }
    .team-title {
      font-size: 1.5rem;
      font-weight: bold;
      color: #0B1E4F;
      margin-bottom: 0.5rem;
    }
    .team-subtitle {
      color: #6B7280;
      margin-bottom: 2rem;
      font-size: 0.9rem;
    }
    .team-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 1.5rem;
      max-width: 1200px;
      margin: 0 auto;
    }
    .team-card {
      background-color: #B7D1F8;
      border-radius: 0.5rem;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
    }
    .team-photo {
      height: 150px;
      background-color: #FFFFFF;
    }
    .team-info {
      padding: 1rem;
      text-align: left;
    }
    .team-info h4 {
      margin: 0 0 0.5rem;
      font-weight: bold;
      color: #0B1E4F;
    }
    .team-info p {
      margin: 0 0 1rem;
      font-size: 0.85rem;
      color: #1A1A1A;
    }
    .social-icons {
      display: flex;
      gap: 0.75rem;
    }
    .social-icons i {
      color: #0B1E4F;
      font-size: 1.2rem;
    }
    @media (max-width: 768px) {
      .about-title { font-size: 1.5rem; }
      .team-grid { grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); }
    }
  </style>
</head>

<body class="bg-[#E9EBEC] min-h-screen flex flex-col relative font-['Inter']">
  <!-- Navbar -->
  <nav>
    <div class="flex items-center space-x-4">
      <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
        <img alt="Logo" class="w-6 h-6" src="logo.png" />
      </div>
    </div>
    <div class="flex-1 flex justify-center space-x-8 text-white text-xs font-semibold tracking-widest">
      <a href="homepage.php">BERANDA</a>
      <a href="artikel.php">ARTIKEL</a>
      <a href="aboutus.php" class="underline">TENTANG KAMI</a>
    </div>
    <div class="flex items-center space-x-6 ml-auto">
      <img alt="User profile" class="w-8 h-8 rounded-full object-cover hidden sm:block" src="profile.jpg" />
      <button id="menuButton" class="text-white text-2xl"><i class="fas fa-bars"></i></button>
    </div>
  </nav>

  <main class="flex-grow relative z-10">
    <div class="about-header">
      <h2 class="about-title">TENTANG KAMI</h2>
      <p class="about-description">
        Selamat datang di [Nama Website], tempat di mana materi pembelajaran dirancang untuk meningkatkan literasi digital 
        berdasarkan untuk memahami solusi terbaik di bidang [Industri atau layanan yang Anda tawarkan], matematika dalam grafik, 
        perhitungan angka, teknologi, dan pembelajaran bahasa secara interaktif. Platform kami juga menawarkan perencanaan keuangan 
        dengan menggunakan seni dan pengetahuan yang tepat.
      </p>
    </div>

    <div class="team-section">
      <h3 class="team-title">Kelompok Spongebob</h3>
      <p class="team-subtitle">Lihat siapa saja yang bergabung bersama kami</p>
      <div class="team-grid">
        <?php
        $anggota = [
          ['nama' => 'Squidward', 'deskripsi' => 'Seseorang yang ahli dalam bidang seni musik, sangat senang bermain klarinet'],
          ['nama' => 'Sandy', 'deskripsi' => 'Ilmuwan cerdas dari Texas yang menemukan banyak hal bermanfaat'],
          ['nama' => 'Patrick', 'deskripsi' => 'Bintang laut yang suka bersenang-senang dan selalu mendukung sahabatnya'],
          ['nama' => 'Spongebob', 'deskripsi' => 'Spons yang selalu ceria dan rajin bekerja, koki terbaik di Krusty Krab'],
        ];
        foreach ($anggota as $anggota) {
          echo '
          <div class="team-card">
            <div class="team-photo"></div>
            <div class="team-info">
              <h4>' . $anggota['nama'] . '</h4>
              <p>' . $anggota['deskripsi'] . '</p>
              <div class="social-icons">
                <i class="fab fa-twitter"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
              </div>
            </div>
          </div>';
        }
        ?>
      </div>
    </div>

    <!-- Artikel Terbaru -->
    <section class="bg-[#0B1E4F] text-white py-8 px-4 md:px-8">
      <div class="max-w-6xl mx-auto">
        <h2 class="text-xl font-bold text-center mb-6">ARTIKEL TERBARU</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
          <?php foreach ($latest_articles as $artikel): ?>
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
              <img src="<?= $artikel['gambar'] ?>" alt="<?= $artikel['judul'] ?>" class="w-full h-48 object-cover" />
              <div class="p-4">
                <h4 class="font-bold text-gray-900"><?= $artikel['judul'] ?></h4>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="text-center mt-8">
          <button class="bg-[#5C6BC0] hover:bg-[#4a56a0] text-white font-bold py-2 px-8 rounded-full transition-colors">
            PORTFOLIO
          </button>
        </div>
      </div>
    </section>
  </main>

  <!-- Sidebar -->
  <aside id="sidebar" class="fixed top-0 right-0 h-full w-72 bg-white shadow-lg transform translate-x-full z-40 flex flex-col transition-transform duration-300 ease-in-out">
    <div class="px-6 py-5 border-b border-gray-300 flex items-center space-x-4">
      <img src="profile.jpg" class="w-12 h-12 rounded-full object-cover" alt="User avatar" />
      <div>
        <p class="font-bold text-gray-900"><?= $nama_user ?></p>
        <p class="text-xs text-gray-500"><?= $email_user ?></p>
      </div>
    </div>
    <nav class="flex flex-col mt-4 space-y-1 px-4">
      <button class="menu-item">Simpanan</button>
      <button class="menu-item">Teman</button>
      <button class="menu-item">Koleksi</button>
      <button class="menu-item">Performaku</button>
      <button class="menu-item">Keluar</button>
    </nav>
  </aside>
  <div id="overlay" class="fixed inset-0 bg-black bg-opacity-30 opacity-0 pointer-events-none z-30 transition-opacity duration-300"></div>

  <script>
    const menuButton = document.getElementById('menuButton');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    function toggleSidebar() {
      const isOpen = sidebar.classList.contains('translate-x-0');
      if (isOpen) {
        sidebar.classList.replace('translate-x-0', 'translate-x-full');
        overlay.classList.add('opacity-0', 'pointer-events-none');
      } else {
        sidebar.classList.replace('translate-x-full', 'translate-x-0');
        overlay.classList.remove('opacity-0', 'pointer-events-none');
      }
    }

    menuButton.addEventListener('click', toggleSidebar);
    overlay.addEventListener('click', toggleSidebar);
  </script>
</body>
</html>
