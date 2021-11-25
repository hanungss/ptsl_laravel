<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi PTSL Desa Keposong</title>

    <!-- Favicons -->
    <link
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Kabupaten_Boyolali.png/529px-Kabupaten_Boyolali.png"" rel="
        icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js ') }}">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="#hero" class="logo d-flex align-items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Kabupaten_Boyolali.png/529px-Kabupaten_Boyolali.png"
                    alt="">
                <span>SIPRONA</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <!-- //<a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> -->
                    <li><a class="nav-link scrollto" href="#about">Apa itu PTSL?</a></li>
                    <li><a class="nav-link scrollto" href="#services">Alur PTSL</a></li>
                    <li><a class="nav-link scrollto" href="#team">Panitia</a></li>
                    <li><a href="{{ url('/home/pengumuman') }}">Pengumuman</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="getstarted scrollto" data-toggle="modal" href="#exampleModal">Login Panitia</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Sistem Informasi PTSL Desa Keposong 2021</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Aplikasi pembantu dan bentuk transparansi panitia kepada
                        pemohon PTSL Desa Keposong Tahun 2021</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#temukan"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Lihat Data Anda</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>Apa itu PTSL?</h3>
                            <h2>Pendafataran Tanah Sistematis Lengkap (PTSL)</h2>
                            <p>
                                adalah proses pendaftaran tanah untuk pertama kali, yang dilakukan secara serentak
                                dan meliputi semua obyek pendaftaran tanah yang belum didaftarkan di dalam suatu wilayah
                                desa atau kelurahan atau nama lainnya yang setingkat dengan itu. Melalui program ini,
                                pemerintah memberikan jaminan kepastian hukum atau hak atas tanah yang dimiliki
                                masyarakat.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="https://kominfo.go.id/content/detail/12924/program-ptsl-pastikan-penyelesaian-sertifikasi-lahan-akan-sesuai-target/0/artikel_gpr"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Pelajari lebih lanjut</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/ptsl.png" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Jumlah Panitia</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="826"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Jumlah Bidang</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-people" style="color: #bb0852;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="616"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Jumlah Pemohon</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Alur PTSL</h2>
                    <p>Ketahui bagaimana alur program PTSL berjalan</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-team-line icon"></i>
                            <h3>Sosialisasi awal dan pembentukan panitia</h3>
                            <p>Tahap pertama dari program PTSL adalah sosialisasi yang dilakukan oleh BPN kantah
                                Kabupaten Boyolali bersama dengan Pemerintah Desa Keposong.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-map-2-line icon"></i>
                            <h3>Penerimaan Berkas</h3>
                            <p>Panitia menerima berkas pemohon berupa foto copy KTP, Kartu Keluarga dan SPPT Pajak.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-checkbox-fill icon"></i>
                            <h3>Sidang dan Verifikasi Berkas</h3>
                            <p>Persidangan dan verifikasi berkas dilakukan untuk memastikan bahwa data yang diajukan
                                sudah benar sekaligus pemohon mendatangani berkas sebagai validasi bahwa data yang
                                diajukan sudah sesuai.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-box red">
                            <i class="ri-truck-fill icon"></i>
                            <h3>Pengiriman Berkas</h3>
                            <p>Berkas yang sudah terverivikasi akan diserahkan kepada BPN untuk diproses lebih lanjut.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box purple">
                            <i class="ri-pushpin-fill icon"></i>
                            <h3>Pengukuran Bidang Tanah.</h3>
                            <p>Dilakukan pengukuran dan pembuatan peta bidang tanah sesuai keadaan riil oleh petugas
                                pengukuran yang ditunjuk BPN.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-box pink">
                            <i class="ri-red-packet-line icon"></i>
                            <h3>Penerbitan Sertifikat</h3>
                            <p>Berkas permohonan yang sesuai, lengkap dan memenuhi persyaratan dapat diterbitkan
                                sertpikat hak milik untuk selanjutnya dapat dilakukan penyerahan kepada pemohon.</p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Services Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>F.A.Q</h2>
                    <p>Pertanyaan dan Jawaban</p>
                </header>

                <div class="row">
                    <div class="col-lg-6">
                        <!-- F.A.Q List 1-->
                        <div class="accordion accordion-flush" id="faqlist1">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        Apakah program PTSL ini memerlukan biaya?
                                    </button>
                                </h2>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        PTSL yang merupakan program sertifikasi gratis dari pemerintah, hal ini
                                        dikarenakan masih banyaknya tanah yang belum bersertifikat. Selain itu,
                                        lambatnya proses pembuatan sertifikat tanah selama ini menjadi perhatian
                                        pemerintah, sehingga melalui kementerian ATR/BPN diluncurkannya Program
                                        Prioritas Nasional yang berupa percepatan Pendaftaran Tanah Sistematis Lengkap
                                        tersebut.
                                        Pendaftaran Tanah Sistematis Lengkap atau PTSL adalah proses pendaftaran tanah
                                        pertama kali. Dilansir dari Kementerian Komunikasi dan Informatika RI, program
                                        tersebut dilakukan serentak di seluruh Indonesia bagi semua objek pendaftaran
                                        tanah yang belum terdaftar dalam suatu wilayah desa/kelurahan atau yang serentak
                                        dengan itu.
                                        PTSL yang begitu populer di masyarakat dengan istilah sertifikasi tanah ini,
                                        sepenuhnya dijamin oleh pemerintah mengenai kepastian hukum serta perlindungan
                                        hukumnya pada hak atas tanah yang dimiliki masyarakat.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        Jika program ini gratis kenapa saya masih dikenakan biaya?
                                    </button>
                                </h2>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Ya memang benar jika program ini gratis karena tidak dipungut pajak. Namun dalam
                                        hal ini biaya untuk persiapan berkas, patok ataupun operasional lainnya belum di
                                        sediakan oleh pemerintah karena itu pemohon dikenakan beban operasional sesuai
                                        dengan RAB terlampir <a href="{{ url('/home/rab') }}">berikut</a>.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        Apa manfaat yang saya peroleh dari program PTSL ini?
                                    </button>
                                </h2>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Lalu apakah manfaat PTSL bagi anda pemilik rumah yang belum bersertifikat?
                                        Tentunya program ini menguntungkan anda sebagai pemilik aset. Tanah yang tidak
                                        didaftarkan pada badan pertanahan beresiko akan bermasalah atau terjadi
                                        sengketa. Contoh paling jelas adalah perebutan lahan yang sering terjadi di
                                        berbagai wilayah Indonesia, baik sengketa antar keluarga maupun pengusaha, BUMN,
                                        dan pemerintah.

                                        Untuk menghindari sengketa yang tidak diinginkan ini, anda dapat mengklaim tanah
                                        yang dimiliki dengan surat-surat yang lengkap. Sehingga, anda sah dimata hukum
                                        sebagai pemilik tanah tersebut. Dengan kepemilikan sertifikat tanah juga
                                        mempermudah anda dalam perizinan usaha dan pembangunan di tanah tersebut. Jika
                                        anda ingin memiliki tanah dengan surat-surat yang aman. Tahukah anda bahwa
                                        metode PTSL ini merupakan inovasi pemerintah melalui Kementerian terkait untuk
                                        memenuhi kebutuhan dasar masyarakat yang berupa sandang, pangan, dan papan.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">

                        <!-- F.A.Q List 2-->
                        <div class="accordion accordion-flush" id="faqlist2">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-1">
                                        Apa saja syarat untuk ikut dalam program PTSL ini?
                                    </button>
                                </h2>
                                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Untuk pemohon syarat yang dibutuhkan sangat sederhana:
                                        1. Fotokopi KTP Pemohon yang dilegalisir
                                        2. Fotokopi KK Pemohon yang dilegalisir
                                        3. Fotokopi bukti SPPT untuk tahun berjalan.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-2">
                                        Jika tanah saya sebelumnya sudah bersertipikat apakah saya boleh ikut program
                                        PTSL?
                                    </button>
                                </h2>
                                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Karena tanah yang diajukan sudah ber-HM maka anda tidak bisa ikut dalam program
                                        ini. Anda dapat memanfaatkan fasilitas BPN untuk penerbitan sertipikat baru
                                        sesuai kebutuhan anda.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-3">
                                        Apakah prona berbeda dengan PTSL?
                                    </button>
                                </h2>
                                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Prona dan PTSL adalah sama-sama program sertifikasi tanah gratis yang diberikan
                                        oleh pemerintah kepada masyarakat. Namun, keduanya memiliki perbedaan. Jika
                                        anggaran Prona langsung disebar ke berbagai desa, kota dan kabupaten, pendekatan
                                        yang diterapkan pada PTSL adalah dari desa per desa, kota per kota dan kabupaten
                                        per kabupaten.

                                        Dalam Prona, hanya tanah yang terdaftar saja yang diukur dan dilakukan
                                        pendataan. Sedangkan perbedaan dalam PTSL, pemerintah fokus untuk mendata tanah
                                        secara sistematis. Jadi meskipun tanah tersebut tidak terdaftar dalam PTSL akan
                                        tetap dilakukan pengukuran demi kebutuhan pemetaan tanah..
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End F.A.Q Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Panitia</h2>
                    <p>Susunan Panitia PTSL Desa Keposong Tahun 2021</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/ava1.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Suyadi</h4>
                                <span>Ketua Panitia</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/ava1.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Wagino</h4>
                                <span>Wakil Ketua</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/ava1.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Hanung Setyo Sambudi</h4>
                                <span>Sekretaris</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/ava1.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sri Widodo</h4>
                                <span>Bendahara</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/ava1.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Suranto</h4>
                                <span>Satuan Tugas</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/ava1.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Bisono</h4>
                                <span>Anggota</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/ava1.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sumarwan</h4>
                                <span>Anggota</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/ava1.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Edy Santoso</h4>
                                <span>Anggota</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/ava1.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Daryanto</h4>
                                <span>Anggota</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/ava1.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sumarno</h4>
                                <span>Anggota</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/ava1.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Wignyo Arief Huddien</h4>
                                <span>Anggota</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/ava1.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Badiono</h4>
                                <span>Anggota</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Team Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <!-- <section id="recent-blog-posts" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Blog</h2>
                    <p>Recent posts form our Blog</p>
                </header>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
                            <span class="post-date">Tue, September 15</span>
                            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit
                            </h3>
                            <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
                            <span class="post-date">Fri, August 28</span>
                            <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
                            <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
                            <span class="post-date">Mon, July 11</span>
                            <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
                            <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </section>End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Kontak</h2>
                    <p>Hubungi Kami</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Sekretariat</h3>
                                    <p>Kantor Desa Keposong,<br>Keposong, Tamansari, Boyolali, 57361</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Telp</h3>
                                    <p><a href="https://wa.me/6285728782762">Whatsapp</a><br>+6285728782762</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>dskeposong@gmail.com<br>dskeposong@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Jam Kerja</h3>
                                    <p>Setiap Hari<br>13:00 - 21:00 WIB</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Nama anda"
                                        required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subjek"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Tulis Pesan"
                                        required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Kirim Pesan</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <section id="temukan" class="temukan">
        <footer id="footer" class="footer">
            <div class="footer-newsletter">
                <div data-aos="fade-up">
                    <header class="section-header">
                        <p>Temukan data anda</p>
                    </header>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <p>Silahkan masukkan nama anda sesuai dengan data di KTP</p>
                            </div>
                            <div class="col-lg-6">
                                <form action="" method="post">
                                    <input type="email" name="email"><input type="submit" value="Temukan">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Kabupaten_Boyolali.png/529px-Kabupaten_Boyolali.png"
                                alt="">
                            <span>SIPRONA</span>
                        </a>
                        <p>Aplikasi pembantu dan bentuk transparansi panitia kepada
                            pemohon PTSL Desa Keposong Tahun 2021.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Panitia PTSL Desa Keposong</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js ')}}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js ')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js ')}}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js ')}}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js ')}}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js ')}}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js ')}}"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

<script type="text/javascript">
window.onclick = function() {
    $('#exampleModal').modal('show');
};
window.onclick = function() {
    $('#exampleModal').modal('close');
};
</script>
<div iframe { display:block; width:100%; }></div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login Panitia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-6">
                    <form action="forms/login.php" method="post" class="php-email-form">
                        <div class="col-lg-12">
                            <div class="row gy-4 validate-input m-b-26" data-validate="Username is required">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>

                            <div class="row gy-4 validate-input m-b-18" data-validate="Password is required">
                                <input class="form-control" type="password" name="pass" placeholder="Enter password">
                            </div>

                            <div class="flex-sb-m w-full p-b-30">
                                <div>
                                    <a href="#" class="txt1">
                                        Lupa Password?
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</html>