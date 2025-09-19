@extends('layouts.app')
@section('title', 'Tentang Kami')

@section('content')
  <div style="padding-top: 60px;">
    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Tentang Kami</span>
        <h2>Tentang PT Barrata Global Technology</h2>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gx-0 gx-lg-5 gy-5 align-items-center">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="200">
            <div class="image-wrapper">
              <div class="image-box">
                <img src="{{ asset('assets/img/about/about-square-15.webp') }}" class="img-fluid" alt="About Image" loading="lazy">
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="content">
              <div class="section-header">
                <h2>Mitra Teknologi Terpercaya untuk Masa Depan Digital Anda</h2>
              </div>
              <p class="highlight-text">Dengan pengalaman dan tim ahli yang berdedikasi, kami berkomitmen untuk memberikan solusi teknologi yang tidak hanya canggih, tetapi juga tepat sasaran dan memberikan nilai nyata bagi bisnis Anda.</p>
            </div>
          </div>
          
        </div>
      </div>
    </section>
  </div>
@endsection