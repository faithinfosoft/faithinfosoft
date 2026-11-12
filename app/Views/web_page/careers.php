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
            <h1>CAREER</h1>
            <p class="mb-0">Build your future with Faith Infosoft — where talent meets opportunity.</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li class="current">Careers</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Career Section -->
  <section id="careers" class="section career-section">
    <div class="container" data-aos="fade-up">

      <div class="row g-0 career-wrapper">

        <!-- Left Panel -->
        <div class="col-lg-4 col-md-5 career-left-panel d-flex flex-column align-items-center justify-content-center" data-aos="fade-right" data-aos-delay="100">

          <!-- Career Newspaper Image -->
          <div class="career-img-box mb-4">
            <img src="<?= base_url('assets/img/careers-newspaper.png') ?>" 
                 alt="Careers at Faith Infosoft" 
                 class="img-fluid career-newspaper-img"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
            <div class="career-img-placeholder" style="display:none;">
              <i class="bi bi-newspaper"></i>
              <span>CAREERS</span>
              <small>Employment Opportunities</small>
            </div>
          </div>

          <!-- Open Positions -->
          <div class="career-positions-list">
            <div class="career-position-item">
              <i class="bi bi-check-circle-fill"></i>
              <span>Software Trainees</span>
            </div>
            <div class="career-position-item">
              <i class="bi bi-check-circle-fill"></i>
              <span>Senior Programmer</span>
            </div>
            <div class="career-position-item">
              <i class="bi bi-check-circle-fill"></i>
              <span>Marketing Executive</span>
            </div>
            <div class="career-position-item">
              <i class="bi bi-check-circle-fill"></i>
              <span>Front Office Executive</span>
            </div>
          </div>

          <!-- Build Your Career Image -->
          <div class="career-build-box mt-4">
            <img src="<?= base_url('assets/img/build-career.png') ?>" 
                 alt="Build Your Career" 
                 class="img-fluid career-build-img"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
            <div class="career-build-placeholder" style="display:none;">
              <i class="bi bi-people-fill"></i>
              <span>BUILD YOUR CAREER</span>
            </div>
          </div>

        </div><!-- End Left Panel -->

        <!-- Right Panel: Application Form -->
        <div class="col-lg-8 col-md-7 career-right-panel" data-aos="fade-left" data-aos-delay="200">

          <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
              <i class="bi bi-check-circle me-2"></i>
              <?= session()->getFlashdata('success') ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
          <?php endif; ?>

          <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
              <i class="bi bi-exclamation-circle me-2"></i>
              <?= session()->getFlashdata('error') ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
          <?php endif; ?>

          <form id="careerForm" action="<?= base_url('careers/apply') ?>" method="post" enctype="multipart/form-data" class="career-form">
            <?= csrf_field() ?>

            <!-- Name -->
            <div class="career-field-row">
              <label class="career-label" for="career_name">Name</label>
              <div class="career-input-wrap">
                <input type="text" 
                       id="career_name" 
                       name="name" 
                       class="career-input" 
                       placeholder="Your Name" 
                       value="<?= old('name') ?>"
                       required>
              </div>
            </div>

            <!-- Address -->
            <div class="career-field-row">
              <label class="career-label" for="career_address">Address</label>
              <div class="career-input-wrap">
                <textarea id="career_address" 
                          name="address" 
                          class="career-input career-textarea" 
                          placeholder="Your Address" 
                          rows="3"
                          required><?= old('address') ?></textarea>
              </div>
            </div>

            <!-- Email -->
            <div class="career-field-row">
              <label class="career-label" for="career_email">Email</label>
              <div class="career-input-wrap">
                <input type="email" 
                       id="career_email" 
                       name="email" 
                       class="career-input" 
                       placeholder="Email" 
                       value="<?= old('email') ?>"
                       required>
              </div>
            </div>

            <!-- Position -->
            <div class="career-field-row">
              <label class="career-label" for="career_position">Position</label>
              <div class="career-input-wrap">
                <select id="career_position" 
                        name="position" 
                        class="career-input career-select" 
                        required>
                  <option value="" disabled selected>-----Select-----</option>
                  <option value="Software Trainees" <?= old('position') === 'Software Trainees' ? 'selected' : '' ?>>Software Trainees</option>
                  <option value="Senior Programmer" <?= old('position') === 'Senior Programmer' ? 'selected' : '' ?>>Senior Programmer</option>
                  <option value="Marketing Executive" <?= old('position') === 'Marketing Executive' ? 'selected' : '' ?>>Marketing Executive</option>
                  <option value="Front Office Executive" <?= old('position') === 'Front Office Executive' ? 'selected' : '' ?>>Front Office Executive</option>
                </select>
              </div>
            </div>

            <!-- Mobile Number -->
            <div class="career-field-row">
              <label class="career-label" for="career_mobile">Mobile Number</label>
              <div class="career-input-wrap">
                <input type="tel" 
                       id="career_mobile" 
                       name="mobile" 
                       class="career-input" 
                       placeholder="Mobile number" 
                       value="<?= old('mobile') ?>"
                       pattern="[0-9+\-\s]{7,15}"
                       required>
              </div>
            </div>

            <!-- Upload CV -->
            <div class="career-field-row career-field-upload">
              <label class="career-label" for="career_cv">Upload your cv<br><small>(docx or pdf only)</small></label>
              <div class="career-input-wrap">
                <input type="file" 
                       id="career_cv" 
                       name="cv" 
                       class="career-input career-file-input" 
                       accept=".pdf,.doc,.docx"
                       required>
              </div>
            </div>

            <!-- Submit Button -->
            <div class="career-submit-row">
              <button type="submit" class="career-submit-btn" id="careerSubmitBtn">
                Submit
              </button>
            </div>

          </form>
        </div><!-- End Right Panel -->

      </div><!-- End Row -->

    </div>
  </section><!-- /Career Section -->

</main>

<style>
/* ===== Career Page Styles ===== */
.career-section {
  padding: 60px 0;
  background: #f8f9fa;
}

.career-wrapper {
  background: #fff;
  border: 1px solid #e0e0e0;
  box-shadow: 0 2px 15px rgba(0,0,0,0.08);
}

/* Left Panel */
.career-left-panel {
  background: #fff;
  padding: 40px 30px;
  border-right: 1px solid #e8e8e8;
  min-height: 500px;
}

.career-img-box {
  width: 100%;
  max-width: 220px;
  text-align: center;
}

.career-newspaper-img {
  width: 100%;
  max-width: 220px;
  border: 2px solid #eee;
  border-radius: 4px;
}

.career-img-placeholder {
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #f8f9fa, #e9ecef);
  border: 2px solid #dee2e6;
  border-radius: 8px;
  width: 220px;
  height: 140px;
  color: #495057;
  font-weight: bold;
  gap: 6px;
  font-family: 'Georgia', serif;
}

.career-img-placeholder i {
  font-size: 2rem;
  color: #6c757d;
}

.career-img-placeholder span {
  font-size: 1rem;
  letter-spacing: 2px;
}

.career-img-placeholder small {
  font-size: 0.65rem;
  color: #888;
  font-style: italic;
}

/* Position List */
.career-positions-list {
  width: 100%;
  padding: 10px 0;
}

.career-position-item {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 1rem;
  font-weight: 600;
  color: #2c3e50;
  padding: 10px 0;
  border-bottom: 1px solid #f0f0f0;
  transition: color 0.2s;
}

.career-position-item:last-child {
  border-bottom: none;
}

.career-position-item i {
  color: #c00000;
  font-size: 1rem;
  flex-shrink: 0;
}

.career-position-item:hover {
  color: #c00000;
}

/* Build Your Career image */
.career-build-box {
  width: 100%;
  max-width: 220px;
  text-align: center;
}

.career-build-img {
  width: 100%;
  max-width: 220px;
  border-radius: 4px;
}

.career-build-placeholder {
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #1e3a5f, #2d5a9e);
  border-radius: 8px;
  width: 220px;
  height: 110px;
  color: #fff;
  font-weight: bold;
  gap: 8px;
  padding: 15px;
}

.career-build-placeholder i {
  font-size: 1.8rem;
}

.career-build-placeholder span {
  font-size: 0.9rem;
  letter-spacing: 1px;
  text-align: center;
}

/* Right Panel */
.career-right-panel {
  background: #fff;
  padding: 40px 50px;
}

/* Form Fields */
.career-form {
  width: 100%;
}

.career-field-row {
  display: flex;
  align-items: flex-start;
  margin-bottom: 20px;
  gap: 20px;
}

.career-label {
  min-width: 140px;
  max-width: 140px;
  font-size: 0.95rem;
  font-weight: 500;
  color: #2c3e50;
  padding-top: 10px;
  line-height: 1.4;
}

.career-label small {
  display: block;
  font-size: 0.75rem;
  color: #666;
  font-weight: 400;
  line-height: 1.3;
  margin-top: 3px;
}

.career-input-wrap {
  flex: 1;
}

.career-input {
  width: 100%;
  border: 1px solid #ccc;
  border-radius: 2px;
  padding: 8px 12px;
  font-size: 0.9rem;
  color: #333;
  background: #fff;
  outline: none;
  transition: border-color 0.2s, box-shadow 0.2s;
  appearance: none;
  -webkit-appearance: none;
}

.career-input:focus {
  border-color: #c00000;
  box-shadow: 0 0 0 3px rgba(192,0,0,0.08);
}

.career-textarea {
  resize: vertical;
  min-height: 70px;
}

.career-select {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24'%3E%3Cpath fill='%23666' d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 10px center;
  padding-right: 32px;
  cursor: pointer;
}

.career-file-input {
  padding: 6px;
  cursor: pointer;
}

.career-field-upload {
  align-items: flex-start;
}

/* Submit */
.career-submit-row {
  display: flex;
  justify-content: flex-end;
  margin-top: 10px;
}

.career-submit-btn {
  background-color: #c00000;
  color: #fff;
  border: none;
  border-radius: 3px;
  padding: 10px 32px;
  font-size: 0.95rem;
  font-weight: 600;
  letter-spacing: 0.5px;
  cursor: pointer;
  transition: background-color 0.2s, transform 0.1s;
}

.career-submit-btn:hover {
  background-color: #a00000;
  transform: translateY(-1px);
}

.career-submit-btn:active {
  transform: translateY(0);
}

/* Responsive */
@media (max-width: 767px) {
  .career-left-panel {
    border-right: none;
    border-bottom: 1px solid #e8e8e8;
    padding: 30px 20px;
    min-height: auto;
  }

  .career-right-panel {
    padding: 30px 20px;
  }

  .career-field-row {
    flex-direction: column;
    gap: 6px;
  }

  .career-label {
    min-width: unset;
    max-width: unset;
    padding-top: 0;
    font-weight: 600;
  }

  .career-submit-row {
    justify-content: center;
  }
}
</style>

<?php $this->endSection() ?>
