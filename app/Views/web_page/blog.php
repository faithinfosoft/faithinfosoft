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
            <h1>Our Blog</h1>
            <p class="mb-0">Insights on Technology, Web Development, Digital Marketing &amp; More.</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li class="current">Blog</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Blog Posts Section -->
  <section id="blog-posts" class="blog-posts section light-background">
    <div class="container">

      <!-- Section Header -->
      <div class="section-title text-center mb-5" data-aos="fade-up">
        <h2>Latest Articles</h2>
        <p>Stay informed with expert insights from our team</p>
      </div>

      <div class="row gy-4">

        <!-- Post 1 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <article class="blog-card h-100">
            <div class="blog-card-img">
              <div class="blog-img-bg blog-img-web">
                <i class="bi bi-code-slash"></i>
              </div>
              <span class="blog-category-badge">Web Development</span>
            </div>
            <div class="blog-card-body">
              <h2 class="blog-card-title">Why Your Business Needs a Responsive Website in 2026</h2>
              <p class="blog-card-excerpt">Mobile-first indexing is now standard. We explore why a responsive, fast-loading website is no longer optional — and how Faith Infosoft can help you get there.</p>
              <div class="blog-card-meta">
                <div class="blog-author-info">
                  <div class="blog-author-avatar">FI</div>
                  <div>
                    <p class="blog-author-name">Faith Infosoft Team</p>
                    <p class="blog-post-date"><time datetime="2026-10-15">Oct 15, 2026</time></p>
                  </div>
                </div>
                <a href="<?= base_url('contact') ?>" class="blog-read-btn">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </article>
        </div><!-- End Post 1 -->

        <!-- Post 2 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <article class="blog-card h-100">
            <div class="blog-card-img">
              <div class="blog-img-bg blog-img-mobile">
                <i class="bi bi-phone"></i>
              </div>
              <span class="blog-category-badge">Mobile Apps</span>
            </div>
            <div class="blog-card-body">
              <h2 class="blog-card-title">Android vs iOS: Which Platform Should You Build First?</h2>
              <p class="blog-card-excerpt">Choosing the right platform for your first app can shape your business trajectory. Our experts break down the pros, cons, and cost considerations for businesses in Kerala.</p>
              <div class="blog-card-meta">
                <div class="blog-author-info">
                  <div class="blog-author-avatar">FI</div>
                  <div>
                    <p class="blog-author-name">Faith Infosoft Team</p>
                    <p class="blog-post-date"><time datetime="2026-09-28">Sep 28, 2026</time></p>
                  </div>
                </div>
                <a href="<?= base_url('contact') ?>" class="blog-read-btn">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </article>
        </div><!-- End Post 2 -->

        <!-- Post 3 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <article class="blog-card h-100">
            <div class="blog-card-img">
              <div class="blog-img-bg blog-img-seo">
                <i class="bi bi-graph-up-arrow"></i>
              </div>
              <span class="blog-category-badge">Digital Marketing</span>
            </div>
            <div class="blog-card-body">
              <h2 class="blog-card-title">10 SEO Strategies That Actually Work for Kerala Businesses</h2>
              <p class="blog-card-excerpt">Local SEO is a game changer for small and medium businesses. Discover actionable tips that have helped our clients rank higher on Google and attract more customers.</p>
              <div class="blog-card-meta">
                <div class="blog-author-info">
                  <div class="blog-author-avatar">FI</div>
                  <div>
                    <p class="blog-author-name">Faith Infosoft Team</p>
                    <p class="blog-post-date"><time datetime="2026-09-10">Sep 10, 2026</time></p>
                  </div>
                </div>
                <a href="<?= base_url('contact') ?>" class="blog-read-btn">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </article>
        </div><!-- End Post 3 -->

        <!-- Post 4 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <article class="blog-card h-100">
            <div class="blog-card-img">
              <div class="blog-img-bg blog-img-erp">
                <i class="bi bi-diagram-3"></i>
              </div>
              <span class="blog-category-badge">ERP Solutions</span>
            </div>
            <div class="blog-card-body">
              <h2 class="blog-card-title">How Custom ERP Software Can Transform Your Business Operations</h2>
              <p class="blog-card-excerpt">Off-the-shelf ERP doesn't fit every business. We explain why custom ERP development tailored to your workflow delivers better ROI and streamlines operations.</p>
              <div class="blog-card-meta">
                <div class="blog-author-info">
                  <div class="blog-author-avatar">FI</div>
                  <div>
                    <p class="blog-author-name">Faith Infosoft Team</p>
                    <p class="blog-post-date"><time datetime="2026-08-20">Aug 20, 2026</time></p>
                  </div>
                </div>
                <a href="<?= base_url('contact') ?>" class="blog-read-btn">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </article>
        </div><!-- End Post 4 -->

        <!-- Post 5 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <article class="blog-card h-100">
            <div class="blog-card-img">
              <div class="blog-img-bg blog-img-software">
                <i class="bi bi-cpu"></i>
              </div>
              <span class="blog-category-badge">Software Development</span>
            </div>
            <div class="blog-card-body">
              <h2 class="blog-card-title">Why CodeIgniter 4 is Still a Top Choice for Business Web Apps</h2>
              <p class="blog-card-excerpt">Fast, lightweight, and powerful — CodeIgniter 4 remains a preferred PHP framework for building secure business applications. Here's why we use it and what it offers.</p>
              <div class="blog-card-meta">
                <div class="blog-author-info">
                  <div class="blog-author-avatar">FI</div>
                  <div>
                    <p class="blog-author-name">Faith Infosoft Team</p>
                    <p class="blog-post-date"><time datetime="2026-08-05">Aug 5, 2026</time></p>
                  </div>
                </div>
                <a href="<?= base_url('contact') ?>" class="blog-read-btn">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </article>
        </div><!-- End Post 5 -->

        <!-- Post 6 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <article class="blog-card h-100">
            <div class="blog-card-img">
              <div class="blog-img-bg blog-img-ecomm">
                <i class="bi bi-cart3"></i>
              </div>
              <span class="blog-category-badge">E-Commerce</span>
            </div>
            <div class="blog-card-body">
              <h2 class="blog-card-title">Building a Successful E-Commerce Store: A Step-by-Step Guide</h2>
              <p class="blog-card-excerpt">Launching an online store requires more than just a website. From payment gateways to inventory management, we walk you through everything you need for success.</p>
              <div class="blog-card-meta">
                <div class="blog-author-info">
                  <div class="blog-author-avatar">FI</div>
                  <div>
                    <p class="blog-author-name">Faith Infosoft Team</p>
                    <p class="blog-post-date"><time datetime="2026-07-18">Jul 18, 2026</time></p>
                  </div>
                </div>
                <a href="<?= base_url('contact') ?>" class="blog-read-btn">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </article>
        </div><!-- End Post 6 -->

      </div><!-- End Row -->

      <!-- CTA Banner -->
      <div class="blog-cta-banner mt-5" data-aos="fade-up">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <h3>Have a project in mind?</h3>
            <p>Let's discuss how Faith Infosoft can help grow your business with the right technology.</p>
          </div>
          <div class="col-lg-4 text-lg-end text-center mt-3 mt-lg-0">
            <a href="<?= base_url('contact') ?>" class="btn blog-cta-btn">Get Free Consultation</a>
          </div>
        </div>
      </div>

    </div>
  </section><!-- /Blog Posts Section -->

</main>

<style>
/* ===== Blog Page Styles ===== */
.blog-posts.section {
  padding: 60px 0 80px;
}

.section-title h2 {
  font-size: 2rem;
  font-weight: 700;
  color: #1e1f58;
  margin-bottom: 10px;
}

.section-title p {
  color: #666;
  font-size: 1rem;
}

/* Blog Card */
.blog-card {
  background: #fff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 20px rgba(0,0,0,0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
}

.blog-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 35px rgba(0,0,0,0.15);
}

/* Card Image Area */
.blog-card-img {
  position: relative;
  height: 190px;
  overflow: hidden;
}

.blog-img-bg {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 4rem;
  color: rgba(255,255,255,0.9);
}

.blog-img-web      { background: linear-gradient(135deg, #1e1f58, #3a3d9e); }
.blog-img-mobile   { background: linear-gradient(135deg, #c00000, #e84444); }
.blog-img-seo      { background: linear-gradient(135deg, #0a7c4f, #15b87a); }
.blog-img-erp      { background: linear-gradient(135deg, #5a2d8c, #9b59b6); }
.blog-img-software { background: linear-gradient(135deg, #b05000, #e08020); }
.blog-img-ecomm    { background: linear-gradient(135deg, #006b8c, #00aacc); }

.blog-category-badge {
  position: absolute;
  bottom: 12px;
  left: 15px;
  background: rgba(255,255,255,0.95);
  color: #c00000;
  font-size: 0.72rem;
  font-weight: 700;
  padding: 4px 12px;
  border-radius: 20px;
  letter-spacing: 0.5px;
  text-transform: uppercase;
}

/* Card Body */
.blog-card-body {
  padding: 22px 22px 18px;
  flex: 1;
  display: flex;
  flex-direction: column;
}

.blog-card-title {
  font-size: 1.05rem;
  font-weight: 700;
  color: #1e1f58;
  line-height: 1.4;
  margin-bottom: 10px;
  font-family: var(--heading-font);
}

.blog-card-excerpt {
  font-size: 0.875rem;
  color: #666;
  line-height: 1.6;
  flex: 1;
  margin-bottom: 16px;
}

/* Card Meta */
.blog-card-meta {
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-top: 1px solid #f0f0f0;
  padding-top: 14px;
  margin-top: auto;
  gap: 10px;
}

.blog-author-info {
  display: flex;
  align-items: center;
  gap: 10px;
}

.blog-author-avatar {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: linear-gradient(135deg, #1e1f58, #c00000);
  color: #fff;
  font-size: 0.7rem;
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  letter-spacing: 0.5px;
}

.blog-author-name {
  font-size: 0.8rem;
  font-weight: 600;
  color: #333;
  margin: 0;
  line-height: 1.3;
}

.blog-post-date {
  font-size: 0.75rem;
  color: #999;
  margin: 0;
  line-height: 1.3;
}

.blog-read-btn {
  font-size: 0.8rem;
  font-weight: 600;
  color: #c00000;
  white-space: nowrap;
  display: flex;
  align-items: center;
  gap: 4px;
  transition: gap 0.2s, color 0.2s;
  text-decoration: none;
}

.blog-read-btn:hover {
  color: #a00000;
  gap: 8px;
}

/* CTA Banner */
.blog-cta-banner {
  background: linear-gradient(135deg, #1e1f58, #2d2f8e);
  border-radius: 14px;
  padding: 40px 50px;
  color: #fff;
}

.blog-cta-banner h3 {
  font-size: 1.6rem;
  font-weight: 700;
  color: #fff;
  margin-bottom: 8px;
}

.blog-cta-banner p {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.8);
  margin: 0;
}

.blog-cta-btn {
  background: #c00000;
  color: #fff !important;
  padding: 12px 30px;
  border-radius: 50px;
  font-weight: 600;
  font-size: 0.95rem;
  text-decoration: none;
  transition: background 0.2s, transform 0.2s;
  display: inline-block;
}

.blog-cta-btn:hover {
  background: #a00000;
  transform: translateY(-2px);
  color: #fff;
}

/* Responsive */
@media (max-width: 767px) {
  .blog-cta-banner {
    padding: 30px 25px;
    text-align: center;
  }

  .blog-card-meta {
    flex-direction: column;
    align-items: flex-start;
    gap: 12px;
  }
}
</style>

<?php $this->endSection() ?>
