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
            <h1>Our Portfolio</h1>
            <p class="mb-0">A showcase of our most successful digital transformations and creative projects.</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li class="current">Portfolio</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Portfolio Section -->
  <section id="portfolio" class="portfolio section">

    <div class="container">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-web">Web Apps</li>
          <li data-filter=".filter-app">Mobile Apps</li>
          <li data-filter=".filter-software">Software</li>
          <li data-filter=".filter-marketing">Marketing</li>
        </ul><!-- End Portfolio Filters -->

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
            <div class="portfolio-content h-100 lift-3d glass-card">
              <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800" class="img-fluid" alt="">
              <div class="portfolio-info p-4">
                <h4>E-Commerce Platform</h4>
                <p>Advanced online shopping experience with seamless payments.</p>
                <a href="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800" title="Web 1" data-gallery="portfolio-gallery-web" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="<?= base_url('portfolio/details') ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <div class="portfolio-content h-100 lift-3d glass-card">
              <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&q=80&w=800" class="img-fluid" alt="">
              <div class="portfolio-info p-4">
                <h4>Health Tracker App</h4>
                <p>Personal health and fitness monitoring for iOS & Android.</p>
                <a href="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&q=80&w=800" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="<?= base_url('portfolio/details') ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-software">
            <div class="portfolio-content h-100 lift-3d glass-card">
              <img src="https://images.unsplash.com/photo-1551288049-bbbda536339a?auto=format&fit=crop&q=80&w=800" class="img-fluid" alt="">
              <div class="portfolio-info p-4">
                <h4>ERP System</h4>
                <p>Enterprise Resource Planning software for manufacturing.</p>
                <a href="https://images.unsplash.com/photo-1551288049-bbbda536339a?auto=format&fit=crop&q=80&w=800" title="Software 1" data-gallery="portfolio-gallery-software" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="<?= base_url('portfolio/details') ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
            <div class="portfolio-content h-100 lift-3d glass-card">
              <img src="https://images.unsplash.com/photo-1533750516457-a7f992034fce?auto=format&fit=crop&q=80&w=800" class="img-fluid" alt="">
              <div class="portfolio-info p-4">
                <h4>Social Media Campaign</h4>
                <p>Brand awareness campaign reaching 1M+ users.</p>
                <a href="https://images.unsplash.com/photo-1533750516457-a7f992034fce?auto=format&fit=crop&q=80&w=800" title="Marketing 1" data-gallery="portfolio-gallery-marketing" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="<?= base_url('portfolio/details') ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

        </div><!-- End Portfolio Container -->

      </div>

    </div>

  </section><!-- /Portfolio Section -->

</main>

<?php $this->endSection() ?>
