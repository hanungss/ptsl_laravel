<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard Panitia</title>
    <link
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Kabupaten_Boyolali.png/529px-Kabupaten_Boyolali.png"" rel="
        icon">
</head>
<x-app-layout>
    <x-slot name="slot">
        <section id="hero" class="hero d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Halaman Admin PTSL Keposong 2021</h1>
                        <h2 data-aos="fade-up" data-aos-delay="400">Halaman ini merupakan halaman khusus untuk admin.
                            Pada
                            halaman ini admin bisa mengatur database sesuai kebutuhan.</h2>
                        <div data-aos="fade-up" data-aos-delay="600">
                        </div>
                    </div>
                    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/features-2.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Fungsi halaman admin</h2>
                    <p>Ketahui berbagai kegunaan dari navigasi yang khusus dimiliki oleh admin untuk mengolah data PTSL
                        ini.</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-team-line icon"></i>
                            <h3>Pengolahan data pemohon</h3>
                            <p>Anda dapat melihat, menambah, mengubah dan menghapus data pemohon yang tidak diperlukan.
                                Cukup langsung di aplikasi ini dan semua bisa dilakukan.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-map-2-line icon"></i>
                            <h3>Cetak data</h3>
                            <p>Anda dapat langsung melakukan pencetakan data sesuai yang anda butuhkan.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-checkbox-fill icon"></i>
                            <h3>Buat pemberitahuan</h3>
                            <p>Sebagai bentuk transparansi kepada pemohon, anda dapat memberi pemberitahuan melalui menu
                                pengumuman sehingga pemohon dapat mengetahui segala hal yang terjadi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->
    </x-slot>

</x-app-layout>