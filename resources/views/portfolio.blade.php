@extends('layouts.app')
@section('title', 'Portfolio Proyek')

@section('content')
    <div style="padding-top: 60px;">
        <section id="portfolio" class="portfolio section">

            <div class="container section-title" data-aos="fade-up">
              <span class="description-title">Dokumentasi</span>
              <h2>Dokumentasi Proyek Kami</h2>
              <p>Berikut adalah beberapa proyek yang telah berhasil kami kerjakan untuk klien dari berbagai industri.</p>
            </div><div class="container" data-aos="fade-up" data-aos-delay="100">
          
              <div class="isotope-layout" data-default-filter="*" data-layout="fitRows" data-sort="original-order">
          
                <div class="portfolio-filters-wrapper" data-aos="fade-up" data-aos-delay="100">
                    <ul class="portfolio-filters isotope-filters">
                        <li data-filter="*" class="filter-active">Semua Proyek</li>
                        <li data-filter=".filter-webdev">Web Development</li>
                        <li data-filter=".filter-mobile">Aplikasi Mobile</li>
                        <li data-filter=".filter-infra">Infrastruktur IT</li>
                      </ul>
                </div>
          
                <div class="row gy-4 portfolio-grid isotope-container" data-aos="fade-up" data-aos-delay="200">
          
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-webdev">
                        <div class="portfolio-card">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/portfolio/project-web-1.jpg') }}" class="img-fluid" alt="Website PT Maju Jaya" loading="lazy">
                            <div class="overlay">
                              <div class="overlay-content">
                                <a href="{{ asset('assets/img/portfolio/project-web-1.jpg') }}" class="glightbox zoom-link" title="Website Company Profile PT. Maju Jaya"><i class="bi bi-zoom-in"></i></a>
                                <a href="#services" class="details-link" title="Lihat Layanan Terkait"><i class="bi bi-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="content">
                            <h3>Website PT. Maju Jaya</h3>
                            <p>Pengembangan company profile modern & responsif</p>
                          </div>
                        </div>
                      </div><div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-mobile">
                        <div class="portfolio-card">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/portfolio/project-mobile-1.jpg') }}" class="img-fluid" alt="Aplikasi Kasir TokoKita" loading="lazy">
                            <div class="overlay">
                              <div class="overlay-content">
                                <a href="{{ asset('assets/img/portfolio/project-mobile-1.jpg') }}" class="glightbox zoom-link" title="Aplikasi Kasir Android 'TokoKita'"><i class="bi bi-zoom-in"></i></a>
                                <a href="#services" class="details-link" title="Lihat Layanan Terkait"><i class="bi bi-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="content">
                            <h3>Aplikasi Kasir 'TokoKita'</h3>
                            <p>Aplikasi Point of Sale (POS) berbasis Android untuk UMKM</p>
                          </div>
                        </div>
                      </div><div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-infra">
                        <div class="portfolio-card">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/portfolio/project-infra-1.jpg') }}" class="img-fluid" alt="Jaringan Kantor Bank ABC" loading="lazy">
                            <div class="overlay">
                              <div class="overlay-content">
                                <a href="{{ asset('assets/img/portfolio/project-infra-1.jpg') }}" class="glightbox zoom-link" title="Instalasi Jaringan Kantor Pusat Bank ABC"><i class="bi bi-zoom-in"></i></a>
                                <a href="#services" class="details-link" title="Lihat Layanan Terkait"><i class="bi bi-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="content">
                            <h3>Jaringan Kantor Bank ABC</h3>
                            <p>Instalasi dan konfigurasi jaringan untuk 5 lantai gedung</p>
                          </div>
                        </div>
                      </div></div></div>
            </div>
          </section>
@endsection