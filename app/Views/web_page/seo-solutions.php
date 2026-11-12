<?php 
    $this->extend('web_page/layout');
    $this->section('content');
?>

<main class="main">

    <!-- Page Title -->
    <section class="page-title" data-aos="fade">
        <div class="heading py-5">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Top SEO Services in Kottayam</h1>
                        <p class="mb-0">Enhance your search engine visibility and drive organic traffic to your website.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Breadcrumbs -->
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li><a href="<?= base_url('custom-software-web-iOS-app-development-company-in-kottayam') ?>">Services</a></li>
                    <li class="current">SEO Solutions</li>
                </ol>
            </div>
        </nav>
    </section>
    <!-- End Page Title -->


    <!-- Service Details Section -->
    <section id="service-details" class="service-details section py-5">

        <div class="container">

            <!-- Section Heading -->
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="success_stories">Search Engine Optimization Solutions</h2>
            </div>

            <div class="row justify-content-center gy-4">

                <div class="col-lg-8 d-flex" data-aos="fade-up" data-aos-delay="100">

                    <div class="help-box glass-card p-4 w-100 d-flex flex-column">

                        <h3 class="success_stories mb-4">Rank Higher on Google</h3>

                        <p class="contents">
                            In today's competitive digital landscape, ranking on the first page of search results is crucial. Faith Infosoft provides specialized SEO services in Kottayam that help your website achieve top rankings and attract high-quality, targeted organic traffic.
                        </p>

                        <p class="contents">
                            Our SEO experts employ ethical, white-hat SEO techniques including comprehensive keyword research, on-page optimization, technical SEO, and high-quality link building. We ensure that your site is fully optimized for both search engine algorithms and human users.
                        </p>

                        <p class="contents">
                            We don't just focus on traffic; we focus on conversions. By targeting relevant search queries and optimizing the user journey on your site, our SEO strategies generate leads and maximize your return on investment over the long term.
                        </p>

                        <!-- CTA Button -->
                        <div class="text-center mt-auto pt-4">
                            <a href="<?= base_url('contact') ?>" class="btn btn-danger px-4 py-2">Contact Us</a>
                        </div>

                    </div>

                </div>
                
                <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">

                    <div class="help-box glass-card p-4 w-100 d-flex flex-column">

                        <h3 class="success_stories mb-4">Our SEO Process</h3>

                        <ul class="list-unstyled">
                            <li class="contents mb-3">
                                <i class="bi bi-search text-success me-2"></i> Keyword Research & Analysis
                            </li>
                            <li class="contents mb-3">
                                <i class="bi bi-layout-text-window text-success me-2"></i> On-Page Optimization
                            </li>
                            <li class="contents mb-3">
                                <i class="bi bi-gear text-success me-2"></i> Technical SEO Audits
                            </li>
                            <li class="contents mb-3">
                                <i class="bi bi-link-45deg text-success me-2"></i> Quality Link Building
                            </li>
                            <li class="contents mb-3">
                                <i class="bi bi-geo-alt text-success me-2"></i> Local SEO Integration
                            </li>
                            <li class="contents">
                                <i class="bi bi-journal-check text-success me-2"></i> SEO Performance Reporting
                            </li>
                        </ul>

                    </div>

                </div>
            </div>

        </div>

    </section>
    <!-- End Service Details Section -->

</main>

<?php $this->endSection() ?>
