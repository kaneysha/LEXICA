<?php
// Koneksi ke database
$host = "localhost";
$username = "root"; // Sesuaikan dengan username database Anda
$password = ""; // Sesuaikan dengan password database Anda
$database = "artikel_db";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk artikel terbaru (highlight)
$highlightQuery = "SELECT * FROM artikel ORDER BY id DESC LIMIT 1";
$highlightResult = $conn->query($highlightQuery);
$highlightArticle = $highlightResult->fetch_assoc();

// Query untuk artikel card (4 artikel)
$cardsQuery = "SELECT * FROM artikel ORDER BY id DESC LIMIT 4 OFFSET 1";
$cardsResult = $conn->query($cardsQuery);

// Query untuk artikel terbaru (3 artikel)
$latestQuery = "SELECT * FROM artikel ORDER BY id DESC LIMIT 3 OFFSET 5";
$latestResult = $conn->query($latestQuery);
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Artikel | Lexica</title>
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

  <body class="bg-[#E9EBEC] min-h-screen flex flex-col relative">
    <!-- Navbar - matching the updated style -->
    <nav class="bg-[#0B1E4F] flex items-center justify-between px-4 md:px-8 py-4 border-b border-[#1A2E6E] relative z-30">
      <div class="flex items-center space-x-4">
        <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
          <img
            alt="Icon of an open book"
            class="w-6 h-6"
            src="https://storage.googleapis.com/a1aa/image/cf704e49-7948-4f9c-cf4d-49a99f94ce81.jpg"
          />
        </div>
      </div>
      <div class="flex-1 flex justify-center space-x-8 text-white text-xs font-semibold tracking-widest">
        <a href="homepage.php" class="hover:underline nav-link">BERANDA</a>
        <a href="artikel.php" class="hover:underline nav-link active-link">ARTIKEL</a>
        <a href="aboutus.php" class="hover:underline nav-link">TENTANG KAMI</a>
      </div>
      <div class="flex items-center space-x-6 ml-auto">
        <img
          alt="User profile"
          class="w-8 h-8 rounded-full object-cover hidden sm:block"
          src="https://storage.googleapis.com/a1aa/image/a0344b43-aba6-4fc2-e4a7-c8f861a01589.jpg"
        />
        <button aria-label="Menu" id="menuButton" class="text-white text-2xl focus:outline-none">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow relative z-10">
      <!-- Search Section -->
      <section class="bg-[#0B1E4F] text-white py-8 px-4 md:px-8">
        <div class="max-w-4xl mx-auto text-center">
          <h2 class="text-xl md:text-2xl font-bold mb-4">CARI BACAAN FAVORITMU GRATIS!</h2>
          <div class="relative mb-6">
            <input type="text" placeholder="Cari artikel..." 
                  class="w-full md:w-4/5 mx-auto py-3 px-6 rounded-full border-none" />
          </div>
          <div class="flex flex-wrap justify-center gap-2">
            <button class="bg-gray-200 text-gray-800 font-semibold px-4 py-2 rounded-full text-sm hover:bg-gray-300">Hiburan</button>
            <button class="bg-gray-200 text-gray-800 font-semibold px-4 py-2 rounded-full text-sm hover:bg-gray-300">Olahraga</button>
            <button class="bg-gray-200 text-gray-800 font-semibold px-4 py-2 rounded-full text-sm hover:bg-gray-300">Pendidikan</button>
            <button class="bg-gray-200 text-gray-800 font-semibold px-4 py-2 rounded-full text-sm hover:bg-gray-300">Bisnis</button>
            <button class="bg-gray-200 text-gray-800 font-semibold px-4 py-2 rounded-full text-sm hover:bg-gray-300">Teknologi</button>
            <button class="bg-gray-200 text-gray-800 font-semibold px-4 py-2 rounded-full text-sm hover:bg-gray-300">Politik</button>
          </div>
        </div>
      
        <!-- Highlight Article -->
        <?php if ($highlightArticle): ?>
        <div class="max-w-4xl mx-auto bg-white text-gray-800 rounded-lg p-4 md:p-6 mt-8 flex flex-col md:flex-row gap-4 shadow-md">
          <img src="<?php echo htmlspecialchars($highlightArticle['gambar']); ?>" alt="<?php echo htmlspecialchars($highlightArticle['judul']); ?>" class="w-full md:w-64 h-48 object-cover rounded-lg" />
          <div class="flex flex-col">
            <span class="text-sm text-gray-500 mb-2">Terbaru · <?php echo htmlspecialchars($highlightArticle['tingkatan']); ?></span>
            <h3 class="text-lg font-bold mb-2"><?php echo htmlspecialchars($highlightArticle['judul']); ?></h3>
            <p class="text-gray-600"><?php echo substr(htmlspecialchars($highlightArticle['isi']), 0, 150) . '...'; ?></p>
          </div>
        </div>
        <?php endif; ?>
      </section>

      <!-- Article Cards -->
      <section class="py-8 px-4 md:px-8">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
          <?php 
          $counter = 0;
          while ($article = $cardsResult->fetch_assoc()): 
            $counter++;
          ?>
          <!-- Card <?php echo $counter; ?> -->
          <?php if ($counter === 1): ?>
          <a href="lanjutan.php?id=<?php echo $article['id']; ?>" class="block no-underline text-inherit hover:no-underline hover:shadow-lg transition-shadow">
          <?php endif; ?>
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow">
              <div class="p-4 flex gap-4">
                <img src="<?php echo htmlspecialchars($article['gambar']); ?>" alt="<?php echo htmlspecialchars($article['judul']); ?>" class="w-24 h-24 object-cover rounded-lg" />
                <div>
                  <span class="inline-block bg-gray-100 text-gray-800 text-xs font-semibold px-2 py-1 rounded-full"><?php echo htmlspecialchars($article['tingkatan']); ?></span>
                  <h4 class="font-bold text-gray-900 mt-2"><?php echo htmlspecialchars($article['judul']); ?></h4>
                </div>
              </div>
              <div class="p-4 pt-0">
                <p class="text-sm text-gray-600">
                  <?php echo substr(htmlspecialchars($article['isi']), 0, 200) . '...'; ?>
                </p>
              </div>
            </div>
          <?php if ($counter === 1): ?>
          </a>
          <?php endif; ?>
          <?php endwhile; ?>
        </div>
      </section>

      <!-- Latest Articles Section -->
      <section class="bg-[#0B1E4F] text-white py-8 px-4 md:px-8">
        <div class="max-w-6xl mx-auto">
          <h2 class="text-xl font-bold text-center mb-6">ARTIKEL TERBARU</h2>
          
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php while ($latest = $latestResult->fetch_assoc()): ?>
            <!-- Latest Article -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
              <img src="<?php echo htmlspecialchars($latest['gambar']); ?>" alt="<?php echo htmlspecialchars($latest['judul']); ?>" class="w-full h-48 object-cover" />
              <div class="p-4">
                <h4 class="font-bold text-gray-900"><?php echo htmlspecialchars($latest['judul']); ?></h4>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
          
          <div class="text-center mt-8">
            <button class="bg-[#5C6BC0] hover:bg-[#4a56a0] text-white font-bold py-2 px-8 rounded-full transition-colors">
              PORTFOLIO
            </button>
          </div>
        </div>
      </section>
    </main>

    <!-- Sidebar matching the updated style -->
    <aside id="sidebar" class="fixed top-0 right-0 h-full w-72 bg-white shadow-lg transform translate-x-full z-40 flex flex-col transition-transform duration-300" aria-hidden="true">
      <div class="px-6 py-5 border-b border-gray-300 flex items-center space-x-4">
        <img src="https://storage.googleapis.com/a1aa/image/a0344b43-aba6-4fc2-e4a7-c8f861a01589.jpg" class="w-12 h-12 rounded-full object-cover" alt="User avatar" />
        <div>
          <p class="font-bold text-gray-900">Rafi Natanginrat</p>
          <p class="text-xs text-gray-500">rafi@example.com</p>
        </div>
      </div>
      <nav class="flex flex-col mt-4 space-y-1 px-4">
        <button class="menu-item py-2 px-4 text-left hover:bg-gray-100 transition-colors rounded" data-menu="simpanan">Simpanan</button>
        <button class="menu-item py-2 px-4 text-left hover:bg-gray-100 transition-colors rounded" id="menuTeman" data-menu="teman">Teman</button>
        <button class="menu-item py-2 px-4 text-left hover:bg-gray-100 transition-colors rounded" data-menu="koleksi">Koleksi</button>
        <button class="menu-item py-2 px-4 text-left hover:bg-gray-100 transition-colors rounded" data-menu="performaku">Performaku</button>
        <button class="menu-item py-2 px-4 text-left hover:bg-gray-100 transition-colors rounded" data-menu="keluar">Keluar</button>
      </nav>
    </aside>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-30 opacity-0 pointer-events-none z-30 transition-opacity"></div>

    <script>
      // Sidebar functionality (matching updated style)
      const menuButton = document.getElementById('menuButton');
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('overlay');

      function toggleSidebar() {
        const isOpen = sidebar.classList.contains('translate-x-0');
        
        if (isOpen) {
          sidebar.classList.remove('translate-x-0');
          sidebar.classList.add('translate-x-full');
          overlay.classList.add('opacity-0', 'pointer-events-none');
          overlay.classList.remove('opacity-100', 'pointer-events-auto');
        } else {
          sidebar.classList.remove('translate-x-full');
          sidebar.classList.add('translate-x-0');
          overlay.classList.remove('opacity-0', 'pointer-events-none');
          overlay.classList.add('opacity-100', 'pointer-events-auto');
        }
      }

      menuButton.addEventListener('click', toggleSidebar);
      overlay.addEventListener('click', toggleSidebar);
    </script>
  </body>
</html>

<?php
// Menutup koneksi database
$conn->close();
?>