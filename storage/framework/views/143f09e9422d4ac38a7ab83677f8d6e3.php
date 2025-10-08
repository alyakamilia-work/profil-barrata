
<?php $__env->startSection('title', 'Hubungi Kami'); ?>

<?php $__env->startSection('content'); ?>
  <div style="padding-top: 60px;">
    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Kontak</span>
        <h2>Hubungi Kami</h2>
        <p>Punya pertanyaan atau butuh penawaran? Tim kami siap membantu Anda.</p>
      </div>
      <div class="container">
        <div class="contact-wrapper">
          <div class="contact-info-panel">
            <div class="contact-info-header"><h3>Informasi Kontak</h3><p>Hubungi kami melalui detail di bawah ini selama jam kerja.</p></div>
            <div class="contact-info-cards">
              <div class="info-card"><div class="icon-container"><i class="bi bi-pin-map-fill"></i></div><div class="card-content"><h4>Lokasi Kami</h4><p>Jl. Asia Afrika No. 123, Bandung</p></div></div>
              <div class="info-card"><div class="icon-container"><i class="bi bi-envelope-open"></i></div><div class="card-content"><h4>Email</h4><p>info@barrataglobal.tech</p></div></div>
              <div class="info-card"><div class="icon-container"><i class="bi bi-telephone-fill"></i></div><div class="card-content"><h4>Telepon</h4><p>+62 22 1234 5678</p></div></div>
              <div class="info-card"><div class="icon-container"><i class="bi bi-clock-history"></i></div><div class="card-content"><h4>Jam Kerja</h4><p>Senin-Jumat: 08:00 - 17:00 WIB</p></div></div>
            </div>
          </div>
          <div class="contact-form-panel">
            <div class="contact-form-panel">
                <div class="map-container">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            <div class="form-container">
              <h3>Kirim Pesan kepada Kami</h3>
              <form action="#" method="post" class="php-email-form">
                <div class="form-floating mb-3"><input type="text" class="form-control" name="name" placeholder="Nama Lengkap" required=""><label>Nama Lengkap</label></div>
                <div class="form-floating mb-3"><input type="email" class="form-control" name="email" placeholder="Alamat Email" required=""><label>Alamat Email</label></div>
                <div class="form-floating mb-3"><input type="text" class="form-control" name="subject" placeholder="Subjek" required=""><label>Subjek</label></div>
                <div class="form-floating mb-3"><textarea class="form-control" name="message" rows="5" placeholder="Pesan Anda" style="height: 150px" required=""></textarea><label>Pesan Anda</label></div>
                <div class="d-grid"><button type="submit" class="btn-submit">Kirim Pesan <i class="bi bi-send-fill ms-2"></i></button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\ProjectMagang\profil-barrata\resources\views/contact.blade.php ENDPATH**/ ?>