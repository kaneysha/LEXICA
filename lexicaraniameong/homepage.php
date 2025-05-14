<?php
// You can add PHP variables or logic here
$pageTitle = "Lexica - Literasi Remaja Indonesia";
$userEmail = "user@lexica.id";
$username = "Pengguna Lexica";
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title><?php echo $pageTitle; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="bg-[#E9EBEC] min-h-screen flex flex-col relative font-['Inter']">
    <!-- Navbar -->
    <nav class="bg-[#0B1E4F] flex items-center justify-between px-4 md:px-8 py-4 border-b border-[#1A2E6E] relative z-30">
      <div class="flex items-center space-x-4">
        <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
          <img
            alt="Logo"
            class="w-6 h-6"
            src="logo.png"
          />
        </div>
      </div>
      <div class="flex-1 flex justify-center space-x-8 text-white text-xs font-semibold tracking-widest">
        <a href="#" class="hover:underline nav-link active-link" data-page="beranda">BERANDA</a>
        <a href="artikel.php" class="hover:underline nav-link" data-page="artikel">ARTIKEL</a>
        <a href="aboutus.php" class="hover:underline nav-link" data-page="tentang">TENTANG KAMI</a>
      </div>
      <div class="flex items-center space-x-6 ml-auto">
        <img
          alt="User profile"
          class="w-8 h-8 rounded-full object-cover hidden sm:block"
          src="profile.jpg"
        />
        <button aria-label="Menu" id="menuButton" class="text-white text-2xl focus:outline-none">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </nav>

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed top-0 right-0 h-full w-72 bg-white shadow-lg transform translate-x-full z-40 flex flex-col" aria-hidden="true">
      <div class="px-6 py-5 border-b border-gray-300 flex items-center space-x-4">
        <img src="profile.jpg" class="w-12 h-12 rounded-full object-cover" alt="User avatar" />
        <div>
          <p class="font-bold text-gray-900"><?php echo $username; ?></p>
          <p class="text-xs text-gray-500"><?php echo $userEmail; ?></p>
        </div>
      </div>
      <nav class="flex flex-col mt-4 space-y-1 px-4">
        <button class="menu-item" data-menu="simpanan">Simpanan</button>
        <button class="menu-item" id="menuTeman" data-menu="teman">Teman</button>
        <button class="menu-item" data-menu="koleksi">Koleksi</button>
        <button class="menu-item" data-menu="performaku">Performaku</button>
        <button class="menu-item" data-menu="keluar">Keluar</button>
      </nav>
    </aside>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-30 opacity-0 pointer-events-none z-30 transition-opacity"></div>

    <!-- Main Content -->
    <main class="flex-grow relative z-10">
      <!-- Hero Section -->
      <section class="bg-[#0B1E4F] text-white py-20 px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">LEXICA</h1>
        <div class="relative w-64 h-64 mx-auto my-8">
          <div class="absolute top-4 left-2 w-14 h-14 text-4xl animate-bounce">💬</div>
          <div class="absolute top-4 right-2 w-14 h-14 text-4xl animate-bounce" style="animation-delay: 1s;">📝</div>
          <div class="absolute bottom-10 left-2 w-14 h-14 text-4xl animate-bounce" style="animation-delay: 2s;">💡</div>
          <div class="absolute bottom-10 right-2 w-14 h-14 text-4xl animate-bounce" style="animation-delay: 0.5s;">📚</div>
          <img src="img/Rectangle 10260.png" alt="Hero illustration" class="w-44 h-44 mx-auto object-contain">
        </div>
        <p class="text-lg max-w-2xl mx-auto">
          "Semakin banyak kamu membaca, semakin banyak hal yang akan kamu ketahui. Semakin banyak kamu belajar, semakin banyak tempat yang akan kamu kunjungi."
        </p>
      </section>

      <!-- Mission Section -->
      <section class="py-16 px-6 md:px-8">
        <div class="bg-[#E3EFFE] rounded-2xl p-8 max-w-4xl mx-auto">
          <h2 class="text-xl md:text-2xl font-bold mb-6 text-[#0B1E4F] text-center">LITERASI ADALAH HAK SEMUA ORANG</h2>
          <p class="text-gray-700 leading-relaxed text-justify">
            <?php
            $missionText = "Sebagai seorang kakak yang sangat peduli akan adik-adik yang tinggal di pedesaan dan terpencil, saya ingin menjembatani kesenjangan literasi mereka dengan memberikan dukungan agar dapat mengakses dan dapat memperoleh buku-buku, novel, dan sumber pengetahuan. Kami percaya bahwa setiap anak pantas mendapatkan pemahaman yang baik, tidak peduli dari mana mereka berasal, dan dengan tindakan sederhana ini, kami memberi peluang kepada mereka untuk memiliki masa depan yang lebih baik. Harapannya adalah dengan membaca, kita dapat ikut serta dalam meningkatkan daya saing mereka di masa yang akan datang serta menciptakan generasi yang kritis, kreatif, dan ingin tahu. Kami ingin membuat akses informasi lebih menyenangkan dan tidak membebani mereka yang kurang mampu, karena literasi adalah hak semua orang.";
            echo $missionText;
            ?>
          </p>
        </div>
      </section>

      <!-- Statistics Section -->
      <section class="py-16 px-6 md:px-8">
        <h2 class="text-lg font-bold mb-10 text-[#0B1E4F] text-center">BERDASARKAN RISET DITEMUKAN BAHWA</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 max-w-6xl mx-auto">
          <?php
          // Define stats array
          $stats = [
            [
              'title' => 'LITERASI BACA-TULIS',
              'value' => '49% responden aktif'
            ],
            [
              'title' => 'LITERASI NUMERASI',
              'value' => '34% responden aktif'
            ],
            [
              'title' => 'LITERASI DIGITAL',
              'value' => '72% responden aktif'
            ],
            [
              'title' => 'LITERASI FINANSIAL',
              'value' => 'Hanya 31% responden'
            ]
          ];
          
          // Generate stats boxes
          foreach ($stats as $stat) {
            echo '<div class="bg-[#E3EFFE] rounded-2xl p-6 text-center transform transition-transform hover:-translate-y-1">';
            echo '<h3 class="text-lg font-bold mb-3 text-[#0B1E4F]">' . $stat['title'] . '</h3>';
            echo '<p class="text-gray-700">' . $stat['value'] . '</p>';
            echo '</div>';
          }
          ?>
        </div>
      </section>

      <!-- Articles Section -->
      <section class="bg-[#0B1E4F] py-16 px-6 md:px-8">
        <h2 class="text-lg font-bold mb-10 text-white text-center">ARTIKEL TERBARU</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
          <?php
          // Define articles array
          $articles = [
            [
              'image' => 'img/Rectangle 10265.png',
              'title' => 'MAINAN',
              'description' => 'Yuk cek rekomendasi mainan yang cocok membantu perkembangan anak anak!'
            ],
            [
              'image' => 'img/Rectangle 10266.png',
              'title' => 'MUSIK',
              'description' => 'Kumpulan 10 lagu untuk anak yang pemula dan untuk anak berani musik!'
            ],
            [
              'image' => 'img/Rectangle 10267.png',
              'title' => 'PSIKOLOGI',
              'description' => 'Psikologi kembang ini recomend untuk membantu menjadi adik remaja Anda'
            ]
          ];
          
          // Generate article cards
          foreach ($articles as $article) {
            echo '<div class="bg-white rounded-2xl overflow-hidden transform transition-transform hover:-translate-y-1">';
            echo '<img src="' . $article['image'] . '" alt="' . $article['title'] . '" class="w-full h-48 object-cover">';
            echo '<div class="p-5">';
            echo '<h3 class="text-lg font-bold mb-2 text-[#0B1E4F]">' . $article['title'] . '</h3>';
            echo '<p class="text-gray-600 text-sm">' . $article['description'] . '</p>';
            echo '</div>';
            echo '</div>';
          }
          ?>
        </div>
      </section>

      <!-- Contact Section -->
      <section class="bg-[#0B1E4F] text-white text-center py-16 px-6 md:px-8">
        <h2 class="text-xl md:text-2xl font-bold mb-4">SIAPKAH ANDA UNTUK MEMBACA LEBIH BANYAK</h2>
        <p class="max-w-2xl mx-auto mb-8 text-sm md:text-base">
          <?php echo "Hubungi kami jika ingin menjadi donatur atau sponsor kami yang bersama-sama menguatkan generasi mendatang dengan memberdayakan mereka melalui program literasi yang terarah dan efektif."; ?>
        </p>
        <button class="bg-[#5C6BC0] text-white py-3 px-8 rounded-full font-bold hover:bg-opacity-90 transition-opacity">
          Hubungi Kami
        </button>
        <p class="mt-6 text-sm">Atau dapat telepon ke nomor hotline kami di 111 - 22222</p>
      </section>
    </main>

    <script>
      // Menu toggle functionality
      const menuButton = document.getElementById('menuButton');
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('overlay');
      
      menuButton.addEventListener('click', () => {
        sidebar.classList.toggle('translate-x-full');
        sidebar.setAttribute('aria-hidden', sidebar.classList.contains('translate-x-full'));
        
        if (sidebar.classList.contains('translate-x-full')) {
          overlay.classList.add('opacity-0', 'pointer-events-none');
        } else {
          overlay.classList.remove('opacity-0', 'pointer-events-none');
        }
      });
      
      overlay.addEventListener('click', () => {
        sidebar.classList.add('translate-x-full');
        sidebar.setAttribute('aria-hidden', 'true');
        overlay.classList.add('opacity-0', 'pointer-events-none');
      });
    </script>
  </body>
</html>