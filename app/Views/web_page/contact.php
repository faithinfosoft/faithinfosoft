<?php 
    $this->extend('web_page/layout');
    $this->section('content');
?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Contact Us</h1>
            <p class="mb-0">Get in touch with us to discuss your next big project.</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li class="current">Contact</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Contact Section -->
  <section id="contact" class="contact section">
    
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      
      <div class="row gy-4">

        <div class="col-lg-4">
          <div class="info-item d-flex glass-card p-4 lift-3d mb-4" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0" style="color: #1e1f58;"></i>
            <div>
              <h3>Address</h3>
              <p>3rd Floor Marette Tower

Near No.1 Private Bus Stand

Palace Road, Changanacherry

Kottayam, Kerala

PIN : 686101

</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex glass-card p-4 lift-3d mb-4" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0" style="color: #1e1f58;"></i>
            <div>
              <h3>Call Us</h3>
              <p>+91 94951 12288</p>
              <p>0481 2411122</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex glass-card p-4 lift-3d mb-4" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0" style="color: #1e1f58;"></i>
            <div>
              <h3>Email Us</h3>
              <p>info@faithinfosoft.com</p>
              <p>faithinfosoftindia@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex glass-card p-4 lift-3d" data-aos="fade-up" data-aos-delay="500">
            <i class="bi bi-clock flex-shrink-0" style="color: #1e1f58;"></i>
            <div>
              <h3>Open Hours</h3>
              <p>Monday - Saturday: 9:00 AM - 7:30 PM</p>
              <p>Sunday: Closed</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="col-lg-8">
          <div class="glass-card p-5" data-aos="fade-up" data-aos-delay="200">
            <form action="<?= base_url('contact/send') ?>" method="post" class="php-email-form">
              <?= csrf_field() ?>
              <div class="loading" style="display:none;">Loading</div>
              <div class="error-message" style="display:none;"><?= session()->getFlashdata('error') ?? '' ?></div>
              <div class="sent-message" style="display:none;">Your message has been sent. Thank you!</div>
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?= old('name') ?>" required>
                </div>
                <div class="col-md-6">
                  <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?= old('email') ?>" required>
                </div>
                <div class="col-md-12">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" value="<?= old('subject') ?>" required>
                </div>
                <div class="col-md-12">
                  <textarea name="message" class="form-control" rows="6" placeholder="Message" required><?= old('message') ?></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-danger px-5 py-3">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div><!-- End Contact Form -->

      </div>

    </div>

    <!-- Google Map -->
    <div class="mt-5" data-aos="fade-up">
      <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3934.123!2d76.521!3d9.591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOcKwMzUnMjcuNiJOIDc2wrAzMScxNS42IkU!5e0!3m2!1sen!2sin!4v1600000000000!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
    </div><!-- End Google Map -->

  </section><!-- /Contact Section -->

</main>

<?php $this->endSection() ?>
