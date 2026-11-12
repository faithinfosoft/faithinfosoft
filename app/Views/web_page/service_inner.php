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
            <h1>Service Details</h1>
            <p class="mb-0">Deep dive into our specialized digital solutions and development processes.</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li><a href="<?= base_url('services') ?>">Services</a></li>
          <li class="current">Service Details</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Service Details Section -->
  <section id="service-details" class="service-details section">
    <div class="container">
      <div class="row gy-4">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="services-list glass-card p-4">
            <a href="<?= base_url('service/web-development') ?>" class="active">Web Development</a>
            <a href="<?= base_url('service/app-development') ?>">App Development</a>
            <a href="<?= base_url('service/software-development') ?>">Software Development</a>
            <a href="<?= base_url('service/digital-marketing') ?>">Digital Marketing</a>
          </div>

          <div class="help-box glass-card p-4 mt-4 text-center">
            <h4 class="mb-3">Need Help?</h4>
            <p>Speak with our experts to find the right solution for your business.</p>
            <a href="<?= base_url('contact') ?>" class="btn btn-danger w-100 mt-2">Contact Us</a>
          </div>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
          <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=1000" alt="" class="img-fluid rounded-4 mb-4">
          <h3>Advanced Web Development Solutions</h3>
          <p>
            We deliver high-performance web applications that are scalable, secure, and built using the latest industry standards. Our approach focuses on creating intuitive user experiences that drive business results.
          </p>
          
          <h4 class="mt-5 mb-3">Our Development Process</h4>
          <div class="row gy-4">
            <div class="col-md-6">
              <div class="process-item d-flex align-items-center mb-4">
                <div class="number me-3">01</div>
                <div>
                  <h5 class="mb-1">Analysis & Planning</h5>
                  <p class="mb-0">Defining project goals and architecture.</p>
                </div>
              </div>
              <div class="process-item d-flex align-items-center">
                <div class="number me-3">02</div>
                <div>
                  <h5 class="mb-1">Design & Prototyping</h5>
                  <p class="mb-0">Creating interactive UI/UX designs.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="process-item d-flex align-items-center mb-4">
                <div class="number me-3">03</div>
                <div>
                  <h5 class="mb-1">Development & Testing</h5>
                  <p class="mb-0">Clean coding and rigorous QA.</p>
                </div>
              </div>
              <div class="process-item d-flex align-items-center">
                <div class="number me-3">04</div>
                <div>
                  <h5 class="mb-1">Deployment & Support</h5>
                  <p class="mb-0">Going live and continuous maintenance.</p>
                </div>
              </div>
            </div>
          </div>

          <h4 class="mt-5 mb-3">Key Technologies</h4>
          <p>
            We leverage a modern tech stack to ensure your product is future-proof.
          </p>
          <div class="tech-tags mt-3">
            <span class="badge bg-light text-dark p-2 me-2 mb-2">PHP / Laravel</span>
            <span class="badge bg-light text-dark p-2 me-2 mb-2">React.js</span>
            <span class="badge bg-light text-dark p-2 me-2 mb-2">Node.js</span>
            <span class="badge bg-light text-dark p-2 me-2 mb-2">MySQL</span>
            <span class="badge bg-light text-dark p-2 me-2 mb-2">AWS / Azure</span>
          </div>
        </div>

      </div>
    </div>
  </section><!-- /Service Details Section -->

</main>

<?php $this->endSection() ?>
