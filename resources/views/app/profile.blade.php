@extends('layouts.app')
@section('content')
    <!-- .site-mobile-menu -->

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{ asset('assets/images/himasti.JPG') }}')"
        data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white">About Us</h1>
                    <p class="text-white">Himpunan Mahasiswa Sarjana Informatika</p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/logohimasti.png') }}" alt="Image" class="img-fluid" />
                </div>
                <div class="col-lg-6">
                    <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                        <h2 class="mb-5">HIMASTI</h2>
                        <p>
                            Himpunan mahasiswa sarjana Informatika (HIMASTI) adalah salah
                            satu himpunan mahasiswa dari tiga himpunan yang berada di
                            Fakultas Informatika dan Teknik Elektro pada Institut Teknologi
                            Del
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                    <h2 class="mb-5">SEJARAH</h2>
                    <p>
                        Program Studi S1 Teknik Informatika merupakan salah satu dari 3
                        (empat) program studi di bawah Fakultas Teknik Informatika dan
                        Elektro di Institut Teknologi Del. Prodi S1 Informatika ini di
                        rancang sejak tahun 2013 dan beroperasi pada tahun 2014 bersama
                        dengan 2 prodi lainnya yaitu prodi S1 Teknik Elektro dan S1 Sistem
                        Informasi. Ketiga prodi ini tergabung dalam 1 fakultas yaitu FITE
                        (Fakultas Teknik Elektro dan Informatika). Fakultas ini berdiri
                        pada tahun 2013 seiring dengan perubahan Politeknik Informatika
                        Del (PI Del) menjadi Institut Teknologi Del (IT Del).
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"></div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"></div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"></div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"></div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"></div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="site-section-heading text-justify mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
                    <h2 class="mb-5">VISI</h2>
                    <p>
                        Menjadi program Teknik Informatika yang unggul yang berperan dalam
                        menghasilkan dan memanfaatkan teknologi untuk mengembangkan
                        potensi lokal bagi kemajuan bangsa pada tahun 2023.
                    </p>
                </div>
            </div>

            <div class="site-block-retro d-block d-md-flex"></div>
        </div>
    </div>

    <div class="site-section block-13 bg-light">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="site-section-heading text-justify mb-5 w-border col-md-6 mx-auto">
                    <h2 class="mb-5">MISI</h2>
                    <p>
                        <li>
                            Menyelenggarakan pendidikan teknik informatika yang bermutu,
                            profesional dan diperhitungkan secara nasional.
                        </li>
                        <li>
                            Menyelenggarakan penelitian yang menghasilkan dan memanfaatkan
                            teknologi untuk mengembangkan potensi lokal.
                        </li>
                        <li>
                            Melakukan pengabdian kepada masyarakat dalam bidang teknik
                            informatika.
                        </li>
                    </p>
                </div>
            </div>
        </div>
    </div>

    
@endsection
