@extends('layouts.app')
@section('content')
    
    <!-- .site-mobile-menu -->

    <div class="site-blocks-cover overlay" style="background-image: url('{{ asset('assets/images/himasti.JPG') }}')" data-aos="fade"
        data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="mb-4">Himpunan Mahasiswa Sarjana Informatika</h1>
                    <p class="mb-5">Institut Teknologi Del</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="featured-property-half d-flex">
            <div class="image" style="background-image: url('{{ asset('assets/images/guntur.PNG') }}')"></div>
            <div class="text">
                <h2>Selamat!</h2>
                <p class="mb-5">
                    Mahasiswa Informatika Angkatan 2020, Guntur Augustin Sinaga lolos
                    dalam seleksi IISMA (Indonesian International Student Mobility
                    Awards) pada Western University of Ontario di Canada
                </p>

                <p><a href="#" class="btn btn-primary px-4 py-3">Selengkapnya</a></p>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
                    <h2 class="mb-5">Berita Acara</h2>
                    <p>Berikut merupakan beberapa kegiatan yang sudah dilaksanakan:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <a href="single.html"><img src="{{ asset('assets/images/meet23.jpg') }}" alt="Image" class="img-fluid" /></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">Oktober 28th, 2023</span>
                        <p class="h5 text-black mb-3">
                            <a href="single.html">
                                Acara Temu Ramah Angkatan 2023 dengan Angkatan 2021, 2020 dan
                                2019
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <a href="single.html"><img src="{{ asset('assets/images/temu 19 18 dan 21.jpg') }}" alt="Image" class="img-fluid" /></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">October 1st, 2022</span>
                        <p class="h5 text-black mb-3">
                            <a href="single.html">
                                Acara Temu Ramah Angkatan 2021 dengan Angkatan 2019, 2018 dan
                                2017
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <a href="single.html"><img src="{{ asset('assets/images/Welpar 2022.jpg') }}" alt="Image" class="img-fluid" /></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">Feb 11th, 2023</span>
                        <p class="h5 text-black mb-3">
                            <a href="single.html">
                                Kegiatan Welcoming Party Untuk Angkatan 2022
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    
@endsection
