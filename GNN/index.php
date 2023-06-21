<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mocool</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo-mocool-1.png" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body>

  <!-- 
    - HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo-mocool-1.png" width="150" height="40" alt="Landio logo">
      </a>

      <button class="menu-toggle-btn" data-nav-toggle-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar">
        <ul class="navbar-list">

          <li>
            <a href="#hero" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#features" class="navbar-link">Features</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Pricing</a>
          </li>

          <li>
            <a href="#blog" class="navbar-link">Blog</a>
          </li>

          <li>
            <a href="#contact" class="navbar-link">Contact Us</a>
          </li>

        </ul>

        <div class="header-actions">
          <a href="login.php" class="header-action-link">Log in</a>

          <a href="signup.php" class="header-action-link">Sign up</a>
        </div>
      </nav>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - HERO
      -->

      <section class="hero" id="hero">
        <div class="container">

          <div class="hero-content">
            <h1 class="h1 hero-title">Mocool Tennis Club</h1>

            <p class="hero-text">
              Mocool adalah sebuah wadah bagi para pecinta Tennis untuk berkumpul, bermain, belajar dan berbagi. Komunitas ini terbuka untuk umum dari semua kalangan yang memiliki hobi dan minat di bidang olahraga Tennis.
            </p>
          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-home.png" alt="Hero image">
          </figure>

        </div>
      </section>





     <!-- 
        - ABOUT
      -->

      <section class="about">
        <div class="container">

          <div class="about-content">

            <div class="about-icon">
              <ion-icon name="cube"></ion-icon>
            </div>

            <h2 class="h2 about-title">Why Choose Us ?</h2>

            <p class="about-text">
             Kami menyediakan berbagai program latihan yang dapat disesuaikan dengan kemampuan Anda. Tidak perlu ragu untuk bergabung Mocool karena di sini atlet belajar bersama-sama
            </p>
          </div>

          <ul class="about-list">

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="thumbs-up"></ion-icon>
                </div>

                <h3 class="h3 card-title">Beginner</h3>

                <p class="card-text">
                  Pada tingkat pemula pelatih memberikan kesempatan untuk belajar tenis dengan pendekatan yang berbeda dan lebih efektif.
                </p>

              </div>
            </li>

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="trending-up"></ion-icon>
                </div>

                <h3 class="h3 card-title">Intermediate</h3>

                <p class="card-text">
                  Tingkat menengah mulai mempelajari cara menerima dan menguasai bola pada pertandingan tenis.
                </p>

              </div>
            </li>

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="shield-checkmark"></ion-icon>
                </div>

                <h3 class="h3 card-title">Advanced</h3>

                <p class="card-text">
                  Tahap advanced atlet dilatih untuk rally bersama pelatih hingga bola mati.
                </p>

              </div>
            </li>

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="server"></ion-icon>
                </div>

                <h3 class="h3 card-title">Profesional Atlet </h3>

                <p class="card-text">
                  Program ini dikhususkan untuk persiapan mengikuti turnamen atau pertandingan baik tingkat daerah maupun nasional.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - FEATURES
      -->

      <section class="features" id="features">
        <div class="container">

          <h2 class="h2 section-title">Lapangan</h2>

          <p class="section-text">
            Informasi lapangan tennis 
          </p>

          <div class="features-wrapper">

            <figure class="features-banner">
              <img src="./assets/images/features-img-1.png" alt="illustration art">
            </figure>

            <div class="features-content">

              <p class="features-content-subtitle">
                <ion-icon name="sparkles"></ion-icon>

                <span>Penjelasan Lapangan</span>
              </p>

              <h3 class="features-content-title">
                Lapangan Tenis 
              </h3>

              <p class="features-content-text">
                Dalam ajang kejuaraan, ukuran lapangan sudah ditentukan dan bersifat tetap. Ukuran lapangan berbeda-beda tergantung pemain yang bertanding, apakah pemain tunggal atau ganda. Berikut detailnya: 
              </p>

              <ul class="features-list">

                <li class="features-list-item">
                  <ion-icon name="layers-outline"></ion-icon>

                  <p>Permainan tunggal
                    panjang 23,77 meter dengan lebar 8,23 meter.</p>
                </li>

                <li class="features-list-item">
                  <ion-icon name="megaphone-outline"></ion-icon>

                  <p>Permainan ganda
                    panjang 23,77 meter dengan lebar 10,97 meter.</p>
                </li>

              </ul>

            </div>

          </div>

          <div class="features-wrapper">

            <figure class="features-banner">
              <img src="./assets/images/features-img-2.png" alt="illustration art">
            </figure>

            <div class="features-content">

              <p class="features-content-subtitle">
                <ion-icon name="sparkles"></ion-icon>

                <span>Sesuaikan dengan jadwal Anda</span>
              </p>

              <h3 class="features-content-title">
                Jadwal
              </h3>

              <p class="features-content-text">
                Kami hadir pada weekdays dan weekend
                
              </p>

              <ul class="features-list">

                <li class="features-list-item">
                  <ion-icon name="rocket-outline"></ion-icon>

                  <p>weekdays: 9.00 AM - 22.00 PM</p>
                </li>

                <li class="features-list-item">
                  <ion-icon name="wifi-outline"></ion-icon>

                  <p>weekend: 8.00 AM - 22.00 PM</p>
                </li>

              </ul>

              <div class="btn-group">
                <button class="btn btn-primary">Pilih Jadwal Sekarang</button>

                <button class="btn btn-secondary">lorem</button>
              </div>

            </div>

          </div>

        </div>
      </section>





      <!-- 
        - BLOG
      -->

      <section class="blog" id="blog">
        <div class="container">

          <h2 class="h2 section-title">Coach</h2>

          <p class="section-text">
            Perkenalkan pelatih tenis terbaik kami
          </p>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="blog-banner">
                  <img src="./assets/images/blog-banner-4.jpg" alt="Best Traveling Place">
                </figure>

                <div class="blog-meta">

                  <span>
                    <ion-icon name="calendar-outline"></ion-icon>

                    <time datetime="2021-04-10">april 10 2021</time>
                  </span>

                  <span>
                    <ion-icon name="person-outline"></ion-icon>

                    <p>Pelatih</p>
                  </span>

                </div>

                <h3 class="blog-title">Tommy</h3>

                <p class="blog-text">
                  Integer ante arcu accumsan a consectetuer eget posuere mauris praesent adipiscing phasellus
                  ullamcorper ipsum rutrum
                  punc.
                </p>

                <a href="#" class="blog-link-btn">
                  <span>Learn More</span>

                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="blog-banner">
                  <img src="./assets/images/blog-banner-5.jpg" alt="Private Meeting Room">
                </figure>

                <div class="blog-meta">

                  <span>
                    <ion-icon name="calendar-outline"></ion-icon>

                    <time datetime="2021-04-10">april 10 2021</time>
                  </span>

                  <span>
                    <ion-icon name="person-outline"></ion-icon>

                    <p>Pelatih</p>
                  </span>

                </div>

                <h3 class="blog-title">Jerry</h3>

                <p class="blog-text">
                  Integer ante arcu accumsan a consectetuer eget posuere mauris praesent adipiscing phasellus
                  ullamcorper ipsum rutrum
                  punc.
                </p>

                <a href="#" class="blog-link-btn">
                  <span>Learn More</span>

                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="blog-banner">
                  <img src="./assets/images/blog-banner-6.webp" alt="The Best Business Ideas">
                </figure>

                <div class="blog-meta">

                  <span>
                    <ion-icon name="calendar-outline"></ion-icon>

                    <time datetime="2021-04-10">april 10 2021</time>
                  </span>

                  <span>
                    <ion-icon name="person-outline"></ion-icon>

                    <p>Pelatih</p>
                  </span>

                </div>

                <h3 class="blog-title">Merry</h3>

                <p class="blog-text">
                  Integer ante arcu accumsan a consectetuer eget posuere mauris praesent adipiscing phasellus
                  ullamcorper ipsum rutrum
                  punc.
                </p>

                <a href="#" class="blog-link-btn">
                  <span>Learn More</span>

                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - CONTACT
      -->

      <section class="contact" id="contact">
        <div class="container">

          <h2 class="h2 section-title">Contact Us</h2>

          <p class="section-text">
           Tunggu apa lagi segera daftarkan diri Anda
          </p>

          <div class="contact-wrapper">

            <form action="" class="contact-form " onsubmit =" return alert2()">

              <div class="wrapper-flex">

                <div class="input-wrapper">
                  <label for="name">Name</label>

                  <input type="text" name="name" id="name" required placeholder="Enter Your Name" class="input-field">
                </div>

                <div class="input-wrapper">
                  <label for="emai">Email</label>

                  <input type="text" name="email" id="email" required placeholder="Enter Your Email"
                    class="input-field">
                </div>

              </div>

              <label for="message">Harapan Anda masuk club ini</label>

              <textarea name="message" id="message" required placeholder="Type Your Message"
                class="input-field"></textarea>

              <button type="submit" class="btn btn-primary" >
                <span>Send Message</span>

                <ion-icon name="paper-plane-outline"></ion-icon>
              </button>

            </form>

            <ul class="contact-list">

              <li>
                <a href="mailto:support@website.com" class="contact-link">
                  <ion-icon name="mail-outline"></ion-icon>

                  <span>: mocool@gmail.com</span>
                </a>
              </li>

              <li>
                <a href="#" class="contact-link">
                  <ion-icon name="globe-outline"></ion-icon>

                  <span>: www.mocool.com</span>
                </a>
              </li>

              <li>
                <a href="tel:+0011234567890" class="contact-link">
                  <ion-icon name="call-outline"></ion-icon>

                  <span>: (+62) 098 765 4321</span>
                </a>
              </li>

              <li>
                <div class="contact-link">
                  <ion-icon name="time-outline"></ion-icon>

                  <span>: 8:00 AM - 22:00 PM</span>
                </div>
              </li>

              <li>
                <a href="#" class="contact-link">
                  <ion-icon name="location-outline"></ion-icon>

                  <address>: Tennis Indoor Stadium Senayan, Tanah Abang 10270</address>
                </a>
              </li>

            </ul>

          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - FOOTER
  -->

  <footer>

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo-mocool-1.png" width="150" height="40" alt="Landio logo">
          </a>

          <p class="footer-text">
            Sekarang belajar tennis cukup mudah. Gabung sekarang juga!
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-item-title">ABOUT US</p>
            </li>

            <li>
              <a href="#" class="footer-link">Siapa kami?</a>
            </li>

            <li>
              <a href="#" class="footer-link">Syarat dan ketentuan</a>
            </li>

            <li>
              <a href="#" class="footer-link">Teknik yang diajarkan</a>
            </li>

            <li>
              <a href="#" class="footer-link">Bergabung tennis club</a>
            </li>

            <li>
              <a href="#" class="footer-link">Kebijakan privasi</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-item-title">Atlet</p>
            </li>

            <li>
              <a href="#" class="footer-link">Nama</a>
            </li>

            <li>
              <a href="#" class="footer-link">Umur</a>
            </li>

            <li>
              <a href="#" class="footer-link">Tingkatan</a>
            </li>

            <li>
              <a href="#" class="footer-link">Features</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-item-title">SUPPORT</p>
            </li>

            <li>
              <a href="#" class="footer-link">Guide Bermain Tenis</a>
            </li>

            <li>
              <a href="#" class="footer-link">Customer Service</a>
            </li>

            <li>
              <a href="#" class="footer-link">Get Started</a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        
      </div>
    </div>

  </footer>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js">

    function alert2(){
      alert('berhasil');
    }
  </script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>