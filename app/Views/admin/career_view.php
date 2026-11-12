<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<?php $pageTitle = 'View Career Application'; ?>

<div class="card shadow-sm border-0" style="border-radius: 12px;">
  <div class="card-body p-4">
    <div class="d-flex justify-content-between align-items-start mb-4">
      <div>
        <h4 class="mb-1" style="color: #1e1f58;"><?= esc($career['name']) ?></h4>
        <small class="text-muted">Applied on <?= date('d M Y h:i A', strtotime($career['created_at'])) ?></small>
      </div>
      <div>
        <span class="badge badge-<?= $career['status'] ?> me-2" style="font-size: 14px;"><?= ucfirst($career['status']) ?></span>
        <a href="<?= base_url('admin/careers') ?>" class="btn btn-outline-secondary btn-sm">
          <i class="bi bi-arrow-left me-1"></i>Back
        </a>
      </div>
    </div>

    <hr>

    <div class="row mb-3">
      <div class="col-md-4">
        <label class="text-muted small">Position Applied</label>
        <p class="fw-semibold"><?= esc($career['position']) ?></p>
      </div>
      <div class="col-md-4">
        <label class="text-muted small">Email</label>
        <p class="fw-semibold"><a href="mailto:<?= esc($career['email']) ?>"><?= esc($career['email']) ?></a></p>
      </div>
      <div class="col-md-4">
        <label class="text-muted small">Mobile</label>
        <p class="fw-semibold"><a href="tel:<?= esc($career['mobile']) ?>"><?= esc($career['mobile']) ?></a></p>
      </div>
    </div>

    <div class="mb-3">
      <label class="text-muted small">Address</label>
      <div class="p-3 bg-light rounded">
        <?= nl2br(esc($career['address'])) ?>
      </div>
    </div>

    <?php if (!empty($career['cv'])): ?>
      <div class="mb-3">
        <label class="text-muted small">CV / Resume</label>
        <div>
          <a href="<?= base_url($career['cv']) ?>" class="btn btn-outline-primary btn-sm" target="_blank">
            <i class="bi bi-file-earmark-pdf me-1"></i>Download CV
          </a>
        </div>
      </div>
    <?php endif; ?>

    <hr>

    <div class="d-flex gap-2">
      <a href="mailto:<?= esc($career['email']) ?>?subject=Re: Career Application - <?= urlencode($career['position']) ?>" class="btn btn-primary btn-sm">
        <i class="bi bi-reply me-1"></i>Reply via Email
      </a>
      <a href="<?= base_url('admin/careers/delete/' . $career['id']) ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete this application?')">
        <i class="bi bi-trash me-1"></i>Delete
      </a>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
