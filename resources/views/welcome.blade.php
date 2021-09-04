<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <!-- <link href="resources/css/assets/css/style.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

  <!-- =======================================================
  * Template Name: MyResume - v4.3.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Beranda</span></a></li> 
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Artikel</span></a></li>        
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Perguruan Tinggi</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Kriteria</span></a></li>
        <li><a href="{{ route('ambilKampus')}}" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Pilih Kampus Kamu !</span></a></li>
        <li><a href="{{ route('login') }}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Log in</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Pemilihan Pegururan Tinggi</h1>
      <p>Selamat Datang Di <span class="typed" data-typed-items="Collsect"></span></p>
      <div class="social-links">
        <a href="https://api.whatsapp.com/send?phone=6281245527645&text=Saya%20mau%20memberi%20masukan%20!!!" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
        <a href="https://www.facebook.com/Faizall07/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/mfzall_/" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Artikel</h2>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/artikel1.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>7 Fakta Unik UGM, Pernah Ngampus di Keraton hingga Punya Rumusan Jati Diri</h3>
            <p class="fst-italic">
            Universitas Gadjah Mada atau UGM Yogyakarta merupakan salah satu kampus terbaik di Indonesia saat ini. Menurut rilis terbaru lembaga pemeringkatan pendidikan tinggi QS WUR, UGM menempati 250 besar dunia dan nomor satu di Indonesia.
            </p>
            <p>
            Dikutip dari laman resminya, ternyata kampus UGM lahir dari kancah perjuangan revolusi kemerdekaan bangsa Indonesia. Pada periode awal kemerdekaan, UGM didaulat sebagai Balai Nasional Ilmu Pengetahuan dan Kebudayaan bagi penyelenggaraan pendidikan tinggi nasional.
            </p>
            <!-- <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>New York, USA</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>email@example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p> -->
            <div class="navbar nav-menu">
              <li><a href="https://www.detik.com/edu/perguruan-tinggi/d-5706080/7-fakta-unik-ugm-pernah-ngampus-di-keraton-hingga-punya-rumusan-jati-diri" class="nav-link"><i class="bx bx-search"></i> <span>Selengkapnya...</span></a></li> 
            </div>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/artikel2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>20 Daftar PTN dengan Peminat Tertinggi di SNMPTN 2021</h3>
            <p class="fst-italic">
            hasil SNMPTN 2021 sudah diumumkan. Banyak siswa kelas 12 SMA yang menyambut gembira. Namun tak banyak pula yang masih berjuang untuk mendapatkan kampus impian mereka. 
            </p>
            <p>
            Usut punya usut nih, kalau kamu gagal belum tentu kamu gak layak masuk PTN impian. Rupanya, ada juga faktor lain yang mempengaruhinya. Salah satunya PTN dengan peminat paling banyak di SNMPTN 2021. Nah, berikut adalah ulasannya. 
            </p>
            <div class="navbar nav-menu">
              <li><a href="https://maukuliah.id/blog/20-daftar-ptn-dengan-peminat-tertinggi-di-snmptn-2021/" class="nav-link"><i class="bx bx-search"></i> <span>Selengkapnya...</span></a></li> 
            </div>
          </div>
        </div>

        <br>
        <br>
        <br>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/artikel3.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Jurusan Favorit Pilihan Mahasiswa Baru 2021-2022</h3>
            <p class="fst-italic">
            Dari survei yang dilakukan Aku Pintar bersama Katadata Insight Center beberapa waktu lalu, ternyata banyak Sobat Pintar yang memilih suatu jurusan perkuliahan karena pilihan itulah yang sesuai dengan minatnya. Iya dong, Sobat Pintar pasti sudah mengikuti Tes Penjurusan, bukan?
            </p>
            <p>
            Selain minat, ternyata pilihan dan pengaruh teman juga punya peran penting pada keputusan yang kita buat. Kalaupun pilihan jurusan kuliah ternyata tak terpengaruh oleh pilihan teman, maka pertimbangan peluang kerja setelah lulus dan jenjang karier yang ditawarkan pada bidang suatu jurusan amat memengaruhi keputusan kita.
            </p>
            <div class="navbar nav-menu">
              <li><a href="https://akupintar.id/info-pintar/-/blogs/jurusan-favorit-pilihan-mahasiswa-baru-2021-2022" class="nav-link"><i class="bx bx-search"></i> <span>Selengkapnya...</span></a></li> 
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <!-- <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <!-- <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section> -->
    <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <!-- <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Analytical Hierarchy Process</h2>
          <p>Analytical Hierarchy Process merupakan salah satu metode yang tepat dalam proses pengambilan 
            keputusan dalam pemilihan perguruan tinggi, dengan peralatan utamanya 
            adalah sebuah hierarki fungsional dengan input persepsi manusia.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sejarah</h3>
            <div class="resume-item pb-0">
              <h4>Thomas L. Saaty</h4>
              <p align="justify">Metode Analytical Hierarchy Process (AHP) diciptakan oleh 
                Thomas L. Saaty yang berasal dari Pitssbutg University pada tahun 
                1970an dan beliau merupakan seorang ahli dalam bidang matematika.</p>
            </div>

            <h3 class="resume-title">Edukasi</h3>
            <div class="resume-item">
              <h4>Analytical Hierarchy Process</h4>
              <p align="justify">Metode Analytical Hierarchy Process ini memecahkan masalah 
                yang kompleks dengan memperhitungkan suatu hirarki kriteria, pihak 
                yang bersangkutan atau berkepentingan, hasil dan dengan menarik 
                berbagai pertimbangan untuk mengembangkan sebuah bobot atau 
                prioritas. Metode Analytical Hierarchy Process merupakan gabungan 
                dari kekuatan dari perasaan dan logika seseorang yang bersangkutan 
                untuk berbagai macam-macam permasalahan, kemudian menghitung 
                nilai akhir atau hasil akhir dengan beberapa pertimbangan yang 
                beragam sehingga menjadikan hasil yang cocok sebagaimana yang 
                dipresentasikan pada pertimbangan yang telah dibuat.</p>
            </div>
            <h3 class="resume-title">Struktur</h3>
            <div class="resume-item" "col-lg-12">
              <h4>Analytical Hierarchy Process</h4>
              <img src="{{asset('assets/img/AHP.png')}}">
            </div>
        </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Langkah-Langkah</h3>
            <div class="resume-item">
              <h4>Analytical Hierarchy Process</h4>
              <p align="justify">Menurut Kadarsyah dan Ali (1998), adapun tahapan atau 
                    langkah-langkah yang dilakukan metode AHP sebagai berikut:</p>
              <ul>
                <li align="justify">Mendefinisikan sebuah masalah dan menentukan solusi.</li>
                <li align="justify">Pembuatan struktur hierarki yang dimulai dengan tujuan utama.</li>
                <li align="justify">Membuat matrik perbandingan berpasangan yang menggambarkan kontribusi relatif.</li>
                <li align="justify">Mendefinisikan perbandingan berpasangan.</li>
                <li align="justify">Menguji nilai konsisten. Jika tidak konsisten maka pengambilan data akan diulang.</li>
                <li align="justify">Langkah ke 3 hingga 5 diulang untuk seluruh tingkat hierarki.</li>
                <li align="justify">Menghitung vektor eigen dari setiap matriks perbandingan berpasangan yang merupakan bobot setiap elemen untuk penentuan prioritas elemen-elemen pada tingkat hierarki terendah sampai mencapai tujuan.</li>
              </ul>
          
            </div>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End Resume Section -->


    <!-- ======= Services Section ======= -->

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-blue">
                <div class="icon">
                    <i style="width: 100px; height: 100px; " class="iconify" data-icon="ph:number-circle-six-fill" data-inline="false"></i>
                </div>
              <h4><b>Jabatan Fungsional</b> yang dimiliki setiap dosen Prodi Informatika.</h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
                <div class="icon">
                    <i style="width: 100px; height: 100px; " class="iconify" data-icon="ph:number-circle-seven-fill" data-inline="false"></i>
                </div>
              <h4>Dosen Prodi Informatika Yang Memiliki <b>Sertifikat Kompetensi</b></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
                <div class="icon">
                    <i style="width: 100px; height: 100px; " class="iconify" data-icon="ph:number-circle-eight-fill" data-inline="false"></i>
                </div>
              <h4>Dosen Prodi Informatika Yang Memiliki <b>Sertifikat Dosen</b></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
                <div class="icon">
                    <i style="width: 100px; height: 100px; " class="iconify" data-icon="ph:number-circle-nine-fill" data-inline="false"></i>
                </div>
              <h4>Dosen Prodi Informatika <b>Berpendidikan S3</b></h4>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Perguruan Tinggi</h2>
          <br><br><br><br>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/ump.png" class="testimonial-img" alt="">
                <h3>Universitas Muhammadiyah Purwokerto</h3>
                <h4>UMP</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Jl. KH. Ahmad Dahlan, Dusun III, Dukuhwaluh, Kec. Kembaran, Kabupaten Banyumas, Jawa Tengah 53182.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/unsoed.png" class="testimonial-img" alt="">
                <h3>Universitas Jenderal Soedirman</h3>
                <h4>UNSOED</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Jl. Profesor DR. HR Boenyamin No.708, Dukuhbandong, Grendeng, Kec. Purwokerto Utara, Kabupaten Banyumas, Jawa Tengah 53122.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/ittp.png" class="testimonial-img" alt="">
                <h3>Institut Teknologi Telkom Purwokerto</h3>
                <h4>ITTP</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kidul, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53147.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/amikom.png" class="testimonial-img" alt="">
                <h3>Universitas Amikom Purwokerto</h3>
                <h4>AMIKOM</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Jl. Letjend Pol. Soemarto No.126, Watumas, Purwanegara, Kec. Purwokerto Utara, Kabupaten Banyumas, Jawa Tengah 53127.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
      <br><br><br><br><br><br>
    </section>End Testimonials Section -->


<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Perguruan Tinggi</h2>
          <p>Perguruan Tinggi adalah lembaga ilmiah yang mempunyai tugas menyelenggarakan pendidikan dan pengajaran di atas perguruan tingkat menengah, dan yang memberikan pendidikan dan pengajaran berdasarkan kebudayaan kebangsaan Indonesia dan dengan cara ilmiah.</p>
        </div>

        <!-- <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Universitas Gadjah Mada</h4>
                <p>UGM</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="UGM"><i class="bx bx-plus"></i></a>
                  <a href="https://www.ugm.ac.id/" target="_blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Universitas Sebelas Maret</h4>
                <p>UNS</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="UNS"><i class="bx bx-plus"></i></a>
                  <a href="https://uns.ac.id/id/" target="_blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Universitas Jenderal Soedirman</h4>
                <p>UNSOED</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="UNSOED"><i class="bx bx-plus"></i></a>
                  <a href="https://unsoed.ac.id/id/beranda" target="_blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Universitas Muhammadiyah Purwokerto</h4>
                <p>UMP</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="UMP"><i class="bx bx-plus"></i></a>
                  <a href="https://ump.ac.id/" target="_blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Institut Teknologi Telkom Purwokerto</h4>
                <p>ITTP</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="ITTP"><i class="bx bx-plus"></i></a>
                  <a href="https://ittelkom-pwt.ac.id/" target="_blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Universitas Diponegoro</h4>
                <p>UNDIP</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="UNDIP"><i class="bx bx-plus"></i></a>
                  <a href="https://www.undip.ac.id/" target="_blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Universitas Negeri Semarang</h4>
                <p>UNNES</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="UNNES"><i class="bx bx-plus"></i></a>
                  <a href="https://unnes.ac.id/" target="_blank" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Universitas Ahmad Dahlan</h4>
                <p>UAD</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="UAD"><i class="bx bx-plus"></i></a>
                  <a href="https://uad.ac.id/id/" target="_blank" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Universitas Dian Nuswantoro</h4>
                <p>UDINUS</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="UDINUS"><i class="bx bx-plus"></i></a>
                  <a href="https://www.dinus.ac.id/" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Portfolio Section -->

    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kriteria</h2>
          <p>Kriteria merupakan hal yang penting dalam menentukan pemilihan perguruan tinggi dengan menggunakan metode sistem pendukung keputusan Analytical Hierarchy Process (AHP), kriteria yang digunakan yaitu Akreditasi Perguruan Tinggi , Akreditasi Program Studi, Biaya, Peringkat Webometric serta Klaster Pergurun Tinggi yang telah ditetapkan dan didiskusikan dengan seorang pakar. list perguruan tinggi yang ada pada aplikasi ini hanya perguruan tinggi yang ada di daerah Jawa Tengah dan Yogyakarta yang memiliki program studi informatika.</p>
        </div>

        <div class="row">

          <div class="align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <i style="width: 100px; height: 100px; " class="iconify" data-icon="ph:number-circle-one-fill" data-inline="false"></i>
              </div>
              <h4><b>Akreditasi Perguruan Tinggi</b></h4> 
              <p>Merupakan salah satu bentuk sistem jaminan mutu eksternal yaitu suatu proses yang digunakan lembaga yang berwenang dalam memberikan pengakuan formal bahwa suatu institusi mempunyai kemampuan untuk melakukan kegiatan tertentu. Data Akreditasi perguruan tinggi dapat dilihat diwebsite kemendikbud pddikti.</p>
              <p>Penetapan kriteria akreditasi perguruan tinggi merupakan salah satu hal penting yang dapat dilihat bagi calon mahasiswa baru karena akreditas perguruan tinggi sebagai cerminan kualitas pendidikan, persyaratan bekerja diinstitusi pemerintah, melamar pekerjaan, mahasiswa akan terbaiasa dengan standar pendidikan berkualitas, dan mampu bersain dengan mahasiswa perguruan tinggi lain. </p>
            </div>
          </div>

          <div class="align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red ">
              <div class="icon">
                <div class="icon">
                    <i style="width: 100px; height: 100px; " class="iconify" data-icon="ph:number-circle-two-fill" data-inline="false"></i>
                </div>
              </div>
              <h4><b>Akreditasi Program Studi</b></h4> 
              <p>Merupakan kegiatan penilaian untuk menentukan kelayakan Program Studi. Akreditasi Program Studi hampir sama saja dengan akreditasi perguruan tinggi akan tetapi untuk akreditasi program studi dilihat dari jurusan masing-masing perguruan tinggi. </p>
              <p>Akreditasi Program Studi merupakan hal yang penting untuk dilihat calon mahasiswa baru dalam memilih program studi. Data Akreditasi program studi dapat dilihat diwebsite kemendikbud pddikti</p>
            </div>
          </div>

          <div class="align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <div class="icon">
                    <i style="width: 100px; height: 100px; " class="iconify" data-icon="ph:number-circle-three-fill" data-inline="false"></i>
                </div>
              </div>
              <h4><b>Biaya</b></h4> 
              <p>Kuliah tunggal merupakan keseluruhan biaya operasional per mahasiswa per semester pada program studi di perguruan tinggi. biaya setiap perguruan tinggi dapat dilihat disetiap website pmb perguruan tinggi </p>
            </div>
          </div>
          <div class="align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-teal">
                <div class="icon">
                    <i style="width: 100px; height: 100px; " class="iconify" data-icon="ph:number-circle-four-fill" data-inline="false"></i>
                </div>
              <h4><b>Peringkat Webometric</b></h4> 
              <p>Pada aplikasi ini sistem perankingan perguruan tinggi berbasis website yang dirangking Se-Indonesia. Peringkat webomertic merupakan hal yang penting untuk dipertimbangkan bagi jurusan setiap program studi informatika karena program studi teknik informatika memiliki kaitan dengan sebuah website.</p>
              <p>Pemeringkatan Webometrics dilakukan oleh Cybermetric Lab yang merupakan kelompok penelitian milik Consejo Superior de Investigaciones Científicas (CSIC), badan penelitian publik terbesar di Spanyol, terhadap lebih dari 31.000 Institusi Pendidikan Tinggi di dunia. Sistem pemeringkatan Webometrics bertujuan untuk mempromosikan publikasi Web, mendukung inisiatif Open Access, mendukung akses elektronik untuk publikasi ilmiah, dan materi akademik lainnya. Pengumuman Webometrics Ranking of World Universities</p>
            </div>
          </div>

          <div class="align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
                <div class="icon">
                    <i style="width: 100px; height: 100px; " class="iconify" data-icon="ph:number-circle-five-fill" data-inline="false"></i>
                </div>
              <h4><b>Klaster Perguruan Tinggi</b></h4> 
              <p>Klasterisasi perguruan tinggi adalah pengelompokan perguruan tinggi oleh Direktorat Jenderal Pendidikan Tinggi (Ditjen Dikti) Kemdikbud yang dilakukan setiap tahun. Pengelompokan perguruan tinggi yang disusun menggunakan data-data penyusun indikator penciri kualitas kinerja perguruan tinggi yang tersedia di PD DIKTI</p>
              <p>Tujuan Klaster Perguruan Tinggi yaitu Membangun landasan bagi Kemendikbud dan perguruan tinggi untuk melakukan perbaikan terus-menerus dalam rangka meningkatkan performa dan kesehatan organisasi. Data setiap perguruan tinggi dapat dilihat website kemendikbud</p>
            </div>
          </div>

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section> -->
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>COLLSECT</h3>
      <p>"Aplikasi Pemilihan Perguruan Tinggi Menggunakan Metode Analytical Hierarchy Process"</p>
      <p>Contact Me If U Have A Problem</p>
      <div class="social-links">
        <a href="https://api.whatsapp.com/send?phone=6281245527645&text=Saya%20mau%20memberi%20masukan%20!!!" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
        <a href="https://www.facebook.com/Faizall07/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/mfzall_/" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Zall</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>