<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Application - Faith Infosoft</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f8f9fa; }
        .form-card { max-width: 700px; margin: 40px auto; border-radius: 12px; }
        .form-card .card-header { background: #0d6efd; color: #fff; border-radius: 12px 12px 0 0; }
    </style>
</head>
<body>
<div class="container">
    <div class="card shadow form-card">
        <div class="card-header py-3">
            <h4 class="mb-0"><i class="bi bi-briefcase"></i> Career Application</h4>
            <small>Join the Faith Infosoft team</small>
        </div>
        <div class="card-body p-4">

            <?php if (isset($errors['general'])): ?>
                <div class="alert alert-danger"><?= esc($errors['general']) ?></div>
            <?php endif; ?>

            <form action="<?= base_url('career/submit') ?>" method="post" enctype="multipart/form-data" novalidate>
                <?= csrf_field() ?>

                <div class="row g-3">
                    <!-- Full Name -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Full Name <span class="text-danger">*</span></label>
                        <input type="text" name="full_name"
                               class="form-control <?= isset($errors['full_name']) ? 'is-invalid' : '' ?>"
                               value="<?= esc($old_input['full_name'] ?? '') ?>" placeholder="John Doe">
                        <?php if (isset($errors['full_name'])): ?>
                            <div class="invalid-feedback"><?= esc($errors['full_name']) ?></div>
                        <?php endif; ?>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Email Address <span class="text-danger">*</span></label>
                        <input type="email" name="email"
                               class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>"
                               value="<?= esc($old_input['email'] ?? '') ?>" placeholder="john@example.com">
                        <?php if (isset($errors['email'])): ?>
                            <div class="invalid-feedback"><?= esc($errors['email']) ?></div>
                        <?php endif; ?>
                    </div>

                    <!-- Phone -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Phone Number</label>
                        <input type="text" name="phone"
                               class="form-control <?= isset($errors['phone']) ? 'is-invalid' : '' ?>"
                               value="<?= esc($old_input['phone'] ?? '') ?>" placeholder="+91 9876543210">
                        <?php if (isset($errors['phone'])): ?>
                            <div class="invalid-feedback"><?= esc($errors['phone']) ?></div>
                        <?php endif; ?>
                    </div>

                    <!-- Position -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Position Applied For <span class="text-danger">*</span></label>
                        <select name="position" class="form-select <?= isset($errors['position']) ? 'is-invalid' : '' ?>">
                            <option value="">-- Select Position --</option>
                            <option value="PHP Developer" <?= (($old_input['position'] ?? '') === 'PHP Developer') ? 'selected' : '' ?>>PHP Developer</option>
                            <option value="Web Designer" <?= (($old_input['position'] ?? '') === 'Web Designer') ? 'selected' : '' ?>>Web Designer</option>
                            <option value="React Developer" <?= (($old_input['position'] ?? '') === 'React Developer') ? 'selected' : '' ?>>React Developer</option>
                            <option value="Node.js Developer" <?= (($old_input['position'] ?? '') === 'Node.js Developer') ? 'selected' : '' ?>>Node.js Developer</option>
                            <option value="Digital Marketing" <?= (($old_input['position'] ?? '') === 'Digital Marketing') ? 'selected' : '' ?>>Digital Marketing</option>
                            <option value="Other" <?= (($old_input['position'] ?? '') === 'Other') ? 'selected' : '' ?>>Other</option>
                        </select>
                        <?php if (isset($errors['position'])): ?>
                            <div class="invalid-feedback"><?= esc($errors['position']) ?></div>
                        <?php endif; ?>
                    </div>

                    <!-- Experience -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Years of Experience</label>
                        <select name="experience" class="form-select">
                            <option value="">-- Select --</option>
                            <option value="Fresher" <?= (($old_input['experience'] ?? '') === 'Fresher') ? 'selected' : '' ?>>Fresher</option>
                            <option value="0-1 Year" <?= (($old_input['experience'] ?? '') === '0-1 Year') ? 'selected' : '' ?>>0–1 Year</option>
                            <option value="1-3 Years" <?= (($old_input['experience'] ?? '') === '1-3 Years') ? 'selected' : '' ?>>1–3 Years</option>
                            <option value="3-5 Years" <?= (($old_input['experience'] ?? '') === '3-5 Years') ? 'selected' : '' ?>>3–5 Years</option>
                            <option value="5+ Years" <?= (($old_input['experience'] ?? '') === '5+ Years') ? 'selected' : '' ?>>5+ Years</option>
                        </select>
                    </div>

                    <!-- Resume Upload -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Upload Resume</label>
                        <input type="file" name="resume"
                               class="form-control <?= isset($errors['resume']) ? 'is-invalid' : '' ?>"
                               accept=".pdf,.doc,.docx">
                        <div class="form-text">Accepted: PDF, DOC, DOCX (max 2MB)</div>
                        <?php if (isset($errors['resume'])): ?>
                            <div class="invalid-feedback"><?= esc($errors['resume']) ?></div>
                        <?php endif; ?>
                    </div>

                    <!-- Message -->
                    <div class="col-12">
                        <label class="form-label fw-semibold">Cover Letter / Message</label>
                        <textarea name="message" rows="4"
                                  class="form-control"
                                  placeholder="Tell us about yourself..."><?= esc($old_input['message'] ?? '') ?></textarea>
                    </div>

                    <!-- Submit -->
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary px-5">
                            Submit Application
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
</body>
</html>
