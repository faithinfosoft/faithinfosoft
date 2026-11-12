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
                        <h1>Professional Digital Marketing Services for Your Business in Kottayam</h1>
                        <p class="mb-0">Result-driven digital marketing strategies to grow your brand and boost ROI.</p>
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
                    <li class="current">Digital Marketing</li>
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
                <h2 class="success_stories">Comprehensive Digital Marketing Services</h2>
            </div>

            <div class="row justify-content-center gy-4">

                <div class="col-lg-8 d-flex" data-aos="fade-up" data-aos-delay="100">

                    <div class="help-box glass-card p-4 w-100 d-flex flex-column">

                        <h3 class="success_stories mb-4">Grow Your Brand Online</h3>

                        <p class="contents">
                            As a premier digital marketing agency in Kottayam, Faith Infosoft helps businesses of all sizes establish a powerful online presence. We create data-driven marketing campaigns designed to engage your target audience and convert leads into loyal customers.
                        </p>

                        <p class="contents">
                            Our team of digital marketing experts combines creativity with analytics to deliver campaigns across multiple channels, including search engines, social media, email, and content networks. We focus on measurable results and continuous optimization.
                        </p>

                        <p class="contents">
                            Whether you need to increase brand awareness, drive targeted website traffic, or improve your conversion rates, our customized digital marketing solutions ensure that you achieve your business goals effectively and efficiently.
                        </p>

                        <!-- CTA Button -->
                        <div class="text-center mt-auto pt-4">
                            <a href="<?= base_url('contact') ?>" class="btn btn-danger px-4 py-2">Contact Us</a>
                        </div>

                    </div>

                </div>
                
                <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">

                    <div class="help-box glass-card p-4 w-100 d-flex flex-column">

                        <h3 class="success_stories mb-4">Our Strategies</h3>

                        <ul class="list-unstyled">
                            <li class="contents mb-3">
                                <i class="bi bi-graph-up-arrow text-success me-2"></i> Search Engine Marketing (SEM)
                            </li>
                            <li class="contents mb-3">
                                <i class="bi bi-chat-square-text text-success me-2"></i> Social Media Marketing (SMM)
                            </li>
                            <li class="contents mb-3">
                                <i class="bi bi-envelope-paper text-success me-2"></i> Email Marketing Campaigns
                            </li>
                            <li class="contents mb-3">
                                <i class="bi bi-file-earmark-text text-success me-2"></i> Content Marketing
                            </li>
                            <li class="contents mb-3">
                                <i class="bi bi-badge-ad text-success me-2"></i> Pay-Per-Click (PPC) Advertising
                            </li>
                            <li class="contents">
                                <i class="bi bi-bar-chart text-success me-2"></i> Analytics & Reporting
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
