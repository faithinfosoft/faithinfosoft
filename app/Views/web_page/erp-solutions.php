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
                        <h1>Custom ERP Software Solutions in Kottayam</h1>
                        <p class="mb-0">Streamline your business operations with powerful Enterprise Resource Planning systems.</p>
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
                    <li class="current">ERP Solutions</li>
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
                <h2 class="success_stories">Enterprise Resource Planning (ERP) Solutions</h2>
            </div>

            <div class="row justify-content-center gy-4">

                <div class="col-lg-8 d-flex" data-aos="fade-up" data-aos-delay="100">

                    <div class="help-box glass-card p-4 w-100 d-flex flex-column">

                        <h3 class="success_stories mb-4">Optimize Core Business Processes</h3>

                        <p class="contents">
                            Faith Infosoft designs and implements scalable ERP software solutions tailored to the unique operational requirements of businesses in Kottayam and beyond. We help you integrate and manage your main business processes in real-time, all within a single unified system.
                        </p>

                        <p class="contents">
                            Our custom ERP systems cover essential business functions including Finance and Accounting, Human Resources, Supply Chain Management, Inventory, Sales, and Customer Relationship Management. Say goodbye to data silos and inefficient legacy systems.
                        </p>

                        <p class="contents">
                            By leveraging advanced technologies, our ERP applications offer robust security, intuitive dashboards, and deep analytics. This enables business leaders to make informed, data-driven decisions while maximizing productivity and reducing operational costs.
                        </p>

                        <!-- CTA Button -->
                        <div class="text-center mt-auto pt-4">
                            <a href="<?= base_url('contact') ?>" class="btn btn-danger px-4 py-2">Contact Us</a>
                        </div>

                    </div>

                </div>
                
                <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">

                    <div class="help-box glass-card p-4 w-100 d-flex flex-column">

                        <h3 class="success_stories mb-4">Core ERP Modules</h3>

                        <ul class="list-unstyled">
                            <li class="contents mb-3">
                                <i class="bi bi-box-seam text-success me-2"></i> Inventory & Supply Chain
                            </li>
                            <li class="contents mb-3">
                                <i class="bi bi-people text-success me-2"></i> HR & Payroll Management
                            </li>
                            <li class="contents mb-3">
                                <i class="bi bi-cash-coin text-success me-2"></i> Finance & Accounting
                            </li>
                            <li class="contents mb-3">
                                <i class="bi bi-briefcase text-success me-2"></i> Sales & CRM
                            </li>
                            <li class="contents mb-3">
                                <i class="bi bi-tools text-success me-2"></i> Manufacturing & Production
                            </li>
                            <li class="contents">
                                <i class="bi bi-bar-chart-line text-success me-2"></i> Reporting & Analytics
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
