<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RsudKabta</title>
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
      integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <!-- header -->
    <header class="header bg-white">
      <nav class="navbar navbar-top bg-white">
        <div class="container flex">
         <div class="navbar-brand">
            <img src="images/logo.png" alt="site logo" />
</div>
          <div class="navbar-info flex">
            <div class="info-item">
              <i class="fas fa-phone-alt"></i>
              <span>Emergency: (123) 456-7890</span>
            </div>
            <div class="info-item">
              <i class="fas fa-clock"></i>
              <span>Work Hours: 8 AM - 5 PM</span>
            </div>
            <div class="info-item">
              <i class="fas fa-map-marker-alt"></i>
              <span>Location: Tangerang, Indonesia</span>
            </div>
          </div>
        </div>
      </nav>
      <nav class="navbar navbar-bottom bg-green">
        <div class="container flex">
          <button type="button" class="navbar-show-btn">
            <img src="images/ham-menu-icon.png" />
          </button>
          <div class="navbar-collapse bg-white">
            <button type="button" class="navbar-hide-btn">
              <img src="images/close-icon.png" />
            </button>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="/" class="nav-link">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link">Profil</a>
                <ul class="dropdown-menu">
                  <li><a href="/sejarah">Sejarah</a></li>
                  <li><a href="#">Visi Misi</a></li>
                  <li><a href="#">Struktur Organisasi</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link">Layanan</a>
                <ul class="dropdown-menu">
                  <li><a href="#">Layanan Unggulan</a></li>
                  <li><a href="#">Pelayanan Medis</a></li>
                  <li><a href="#">Pelayanan Penunjang Medis</a></li>
                  <li><a href="#">Pelayanan Penunjang Non Medis</a></li>
                  <li><a href="#">Diklat dan Litbang</a></li>
                  <li><a href="#">Fasilitas Umum</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link">Informasi</a>
                <ul class="dropdown-menu">
                  <li><a href="#">Alur Pelayanan</a></li>
                  <li><a href="#">Tarif</a></li>
                  <li><a href="#">Jadwal Klinik</a></li>
                  <li><a href="#">Tenaga Dokter</a></li>
                  <li><a href="#">Jumlah Tempat Tidur</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Berita</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
              </li>
            </ul>
            <div class="search-bar">
              <form>
                <div class="search-bar-box flex">
                  <span class="search-icon flex">
                    <img src="images/search-icon-dark.png" />
                  </span>
                  <input
                    type="search"
                    class="search-control"
                    placeholder="Search here"
                  />
                </div>
              </form>
            </div>
          </div>
        </div>
      </nav>
    </header>
</head>
</html>