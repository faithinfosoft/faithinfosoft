  <?php 
    $this->extend('web_page/layout');
    $this->section('content');
    
?>
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/banner1.webp" alt="Faith Infosoft Software Development Firm" data-aos="fade-in">

      <div class="container">
        <h1 data-aos="fade-up" data-aos-delay="100">Leading Software, Web & App Development Company in Kottayam, Kerala</h1>
        <p data-aos="fade-up" data-aos-delay="200">We build intelligent, scalable, and secure digital solutions that drive real business results.</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="courses.html" class="btn-get-started">Get Started</a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/about_faith_infosoft.jpeg" class="img-fluid" alt="About Faith Infosoft Software Development Company">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
           <div class="container" data-aos="fade-up">
              <strong class="d-inline-block border-bottom border-5 strong-heading">About Faith Infosoft</strong>
               <p class="contents">
                We are a team of aspiring professionals who believes in quality, commitment and competency. We offer a wide variety of professional services, ranging from high quality application softwares to highly standard websites. We provide robust, scalable and reliable services to all our clients. Following services are provided to all our current and new clients
               </p>
            </div>
             <!-- <ul>
               <li><i class="bi bi-check-circle-fill" style="color: #dc1c27;"></i> <span><strong>Mission:</strong> To empower businesses with scalable and innovative technology.</span></li>
               <li><i class="bi bi-check-circle-fill" style="color: #dc1c27;"></i> <span><strong>Vision:</strong> To be a global leader in high-performance digital solutions.</span></li>
               <li><i class="bi bi-check-circle-fill" style="color: #dc1c27;"></i> <span><strong>Experience:</strong> 10+ years of excellence in software engineering.</span></li>
             </ul> -->
             <a href="<?= base_url('about') ?>" class="read-more" style="background: #003A66; color: #fff; padding: 10px 25px; border-radius: 5px; display: inline-block; margin-top: 20px;"><span>Learn More</span><i class="bi bi-arrow-right ms-2"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

   <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="features-item">
              
             <blockquote class="blockquotes">"Quality Assured Software Development"</blockquote>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-6 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="features-item">
              
             <blockquote class="blockquotes">"We Glance at a Well Crafted Mission"</blockquote>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-6 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="features-item">
                        
              <blockquote class="blockquotes">"Fullfill Your Dreams Is What We Do"</blockquote> 
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-6 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="features-item">
              
              <blockquote class="blockquotes">"Secure And Reliable Hosting At a Budget."</blockquote>
            </div>
          </div><!-- End Feature Item -->

          

          

         


        </div>

      </div>

    </section><!-- /Features Section -->
   





    <div class="text-center">
      <strong class="d-inline-block border-bottom border-5 strong-heading success_stories">Success Stories</strong>
    </div>

    <!-- Counts Section -->
    <section id="counts" class="section counts light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects Delivered</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Global Awards</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p>Years Experience</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Counts Section -->
 <div class="text-center">
      <h2 class="d-inline-block border-5 strong-heading success_stories">Professional ERP, Web Development & Mobile App Services</h2>
    </div>

     <section id="events" class="events section">

      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/events-item-1.jpg" alt="Web Development">
              </div>
              <div class="card-body">
                <h3 class="h3-headings"><a href="" class="h3-headings">Web Development</a></h3>
               
                <p class="contents">What about you personally/professionally sets you apart from other web developers</p>
               <a href="<?= base_url() ?>" class="more-btn"><span>Learn More</span> </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/events-item-2.jpg" alt="Application Software Development">
              </div>
              <div class="card-body">
                <h3 class="h3-headings"><a href="" class="h3-headings">Application Software</a></h3>
               
                <p class="contents">Before software can be reusable it first has to be usable</p>
               <a href="<?= base_url() ?>" class="more-btn"><span>Learn More</span> </a>
              </div>
            </div>

          </div>
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/events-item-2.jpg" alt="ERP Solutions Development">
              </div>
              <div class="card-body">
                <h3 class="h3-headings"><a href="" class="h3-headings">ERP Solutions</a></h3>
               
                <p class="contents">Think of ERP as the glue that binds the different computer systems for a large organization</p>
               <a href="<?= base_url() ?>" class="more-btn"><span>Learn More</span> </a>
              </div>
            </div>

          </div>
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/events-item-2.jpg" alt="Mobile Applications Development">
              </div>
              <div class="card-body">
                <h3 class="h3-headings"><a href="" class="h3-headings">Mobile Applications</a></h3>
               
                <p class="contents">Mobile entertainment is a huge opportunity. We are committed to mobile just as much as we are to PCs</p>
               <a href="<?= base_url() ?>" class="more-btn"><span>Learn More</span> </a>
              </div>
            </div>

          </div>
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/events-item-2.jpg" alt="Web Hosting Services">
              </div>
              <div class="card-body">
                <h3 class="h3-headings"><a href="" class="h3-headings">Web Hosting</a></h3>
               
                <p class="contents">You need a service provider who can really be a partner to navigate through the waters of growing your business on the internet</p>
               <a href="<?= base_url() ?>" class="more-btn"><span>Learn More</span> </a>
              </div>
            </div>

          </div>
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/events-item-2.jpg" alt="Search Engine Optimization">
              </div>
              <div class="card-body">
                <h3 class="h3-headings"><a href="" class="h3-headings">SEO</a></h3>
               
                <p class="contents">Building a werbsite without SEO is like building a road without direction</p>
               <a href="<?= base_url() ?>" class="more-btn"><span>Learn More</span> </a>
              </div>
            </div>

          </div>
        </div>

      </div>

    </section><!-- /Events Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box" style="background: #003A66;">
              <h2 class="h2-headings">Our Technology Stack for Web, Mobile & Software Development</h2>
              <p class="contents-tech">
                We leverage a diverse range of cutting-edge technologies to build future-ready solutions. From robust backend architectures and secure databases to dynamic frontend frameworks and mobile platforms, our tech stack is curated to deliver excellence across every digital touchpoint.
              </p>
              <div class="text-center">
                <a href="<?= base_url('about') ?>" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="marquee-wrapper w-100">
              <div class="marquee-content">
                <!-- Original Items -->
                <div class="marquee-item">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center h-100">
                    <i class="bi bi-code-square" style="color: #dc1c27;"></i>
                    <h4>Python</h4>
                    <p>Scalable AI solutions.</p>
                  </div>
                </div>
                <div class="marquee-item">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center h-100">
                    <i class="bi bi-filetype-php" style="color: #dc1c27;"></i>
                    <h4>PHP</h4>
                    <p>Dynamic web apps.</p>
                  </div>
                </div>
                <div class="marquee-item">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center h-100">
                    <i class="bi bi-layers" style="color: #dc1c27;"></i>
                    <h4>Laravel</h4>
                    <p>Modern frameworks.</p>
                  </div>
                </div>
                <div class="marquee-item">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center h-100">
                    <i class="bi bi-fire" style="color: #dc1c27;"></i>
                    <h4>CodeIgniter</h4>
                    <p>Fast & lightweight.</p>
                  </div>
                </div>
                <div class="marquee-item">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center h-100">
                    <i class="bi bi-database" style="color: #dc1c27;"></i>
                    <h4>MySQL</h4>
                    <p>Optimized databases.</p>
                  </div>
                </div>
                <!-- Duplicate Items for Seamless Loop -->
                <div class="marquee-item">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center h-100">
                    <i class="bi bi-code-square" style="color: #dc1c27;"></i>
                    <h4>Python</h4>
                    <p>Scalable AI solutions.</p>
                  </div>
                </div>
                <div class="marquee-item">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center h-100">
                    <i class="bi bi-filetype-php" style="color: #dc1c27;"></i>
                    <h4>PHP</h4>
                    <p>Dynamic web apps.</p>
                  </div>
                </div>
                <div class="marquee-item">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center h-100">
                    <i class="bi bi-layers" style="color: #dc1c27;"></i>
                    <h4>Laravel</h4>
                    <p>Modern frameworks.</p>
                  </div>
                </div>
                <div class="marquee-item">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center h-100">
                    <i class="bi bi-fire" style="color: #dc1c27;"></i>
                    <h4>CodeIgniter</h4>
                    <p>Fast & lightweight.</p>
                  </div>
                </div>
                <div class="marquee-item">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center h-100">
                    <i class="bi bi-database" style="color: #dc1c27;"></i>
                    <h4>MySQL</h4>
                    <p>Optimized databases.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Technologies Section -->
 <div class="text-center">
      <h2 class="d-inline-block border-5 strong-heading success_stories">Professional ERP, Web Development & Mobile App Services</h2>
    </div>
    <!-- Why Choose Us Section -->
    <section id="why-choose-us" class="why-us section">
      <div class="container section-title" data-aos="fade-up">
        
      </div>

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-people" style="color: #003A66;"></i>
              <h4>Expert Team</h4>
              <p class="contents">A dedicated group of professionals with deep technical expertise and industry knowledge.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-lightbulb" style="color: #dc1c27;"></i>
              <h4>Innovative Solutions</h4>
              <p class="contents">We provide cutting-edge solutions that keep your business ahead of the digital curve.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-chat-heart" style="color: #003A66;"></i>
              <h4>Client-Centric</h4>
              <p class="contents">Your goals are our priority. We work closely with you to ensure every project exceeds expectations.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-patch-check" style="color: #dc1c27;"></i>
              <h4>Quality Assurance</h4>
              <p class="contents">Rigorous testing and quality standards ensure robust, secure, and reliable software.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Why Choose Us Section -->

  <div class="text-center" data-aos="fade-up">
      <h2 class="d-inline-block border-5 strong-heading success_stories">Explore Our ERP, Web & Mobile App Development Projects</h2>
    </div>

    <!-- Courses Section -->
    <section id="courses" class="courses section">

      <!-- Section Title -->
      <div class="container section-title" >
       
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item w-100">
              <img src="assets/img/portfolio/animalplane.jpeg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <p class="category">Animal Planet Website</p>
                
                </div>

                
                
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="course-item w-100">
              <img src="assets/img/portfolio/archdiocesechanganacherr.jpeg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-center align-items-center mb-3">
                  <p class="category">Archdiocese of Changanacherry Website</p>
                </div>


              
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="course-item w-100">
              <img src="assets/img/portfolio/arisechil.jpeg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-center align-items-center mb-3">
                  <p class="category">AriseChild Website</p>
                </div>

               
              
              </div>
            </div>
          </div> <!-- End Course Item-->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item w-100">
              <img src="assets/img/portfolio/jeevakarunyanidhitru.jpeg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <p class="category">Jeeva Karunya Nidhi Trust</p>
                
                </div>

                
                
              </div>
            </div>
          </div> <!-- End Course Item-->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item w-100">
              <img src="assets/img/portfolio/multirehabilitationcentre.jpeg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <p class="category">Multi Rehabilitation Centre</p>
                
                </div>

                
                
              </div>
            </div>
          </div> <!-- End Course Item-->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item w-100">
              <img src="assets/img/portfolio/yuvadeept.jpeg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <p class="category">Yuvadeepti</p>
                
                </div>

                
                
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>

    </section><!-- /Courses Section -->


    <div class="text-center" data-aos="fade-up">
      <strong class="d-inline-block border-bottom border-5 strong-heading success_stories">Testimonials That Define Us</strong>
    </div>

    <section id="testimonials" class="testimonials section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper testimonials-swiper">
          <div class="swiper-wrapper">


            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="testimonial-img">
                  <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="testimonial-content">
                  <h3>Walter White</h3>
                  <h4>CEO, Heisenberg Tech</h4>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Faith Infosoft delivered an exceptional ERP solution that transformed our business operations. Their attention to detail and technical expertise is unmatched.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->


            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="testimonial-img">
                  <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="testimonial-content">
                  <h3>Sarah Jhonson</h3>
                  <h4>Marketing Director, NexGen</h4>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    The website they built for us is not only stunning but also incredibly fast and user-friendly. Highly recommend their web development services!
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->


            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="testimonial-img">
                  <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="testimonial-content">
                  <h3>William Anderson</h3>
                  <h4>Lead Developer, CloudSync</h4>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Their mobile app development team is top-notch. They understood our requirements perfectly and delivered a high-quality app on time.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->


             <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="testimonial-img">
                  <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                </div>
                <div class="testimonial-content">
                  <h3>Amanda Jepson</h3>
                  <h4>COO, GlobalLogics</h4>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Exceptional support and technical knowledge. They helped us scale our platform to thousands of users seamlessly.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->


          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- /Trainers Section -->

    <div class="text-center" data-aos="fade-up">
      <h2 class="d-inline-block border-bottom border-5 strong-heading success_stories">Our Management Team</h2>
    </div>

    <!-- Trainers Index Section -->
    <section id="trainers-index" class="section trainers-index">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member w-100">
              <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Alex Johnson</h4>
                <span>Lead Full Stack Developer</span>
                <p>Expert in Python, PHP, and modern frontend frameworks with over 10 years of experience.</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member w-100">
              <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jenkins</h4>
                <span>Senior Project Manager</span>
                <p>Dedicated to delivering high-quality projects on time and within budget.</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member w-100">
              <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>UI/UX Designer</span>
                <p>Crafting beautiful and intuitive user experiences for web and mobile platforms.</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Trainers Index Section -->

  </main>
  <?php $this->endSection() ?>