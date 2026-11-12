<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<?php $pageTitle = 'View Contact Message'; ?>

<div class="card shadow-sm border-0" style="border-radius: 12px;">
  <div class="card-body p-4">
    <div class="d-flex justify-content-between align-items-start mb-4">
      <div>
        <h4 class="mb-1" style="color: #1e1f58;"><?= esc($contact['subject']) ?></h4>
        <small class="text-muted">Received on <?= date('d M Y h:i A', strtotime($contact['created_at'])) ?></small>
      </div>
      <a href="<?= base_url('admin/contacts') ?>" class="btn btn-outline-secondary btn-sm">
        <i class="bi bi-arrow-left me-1"></i>Back
      </a>
    </div>

    <hr>

    <div class="row mb-3">
      <div class="col-md-6">
        <label class="text-muted small">Name</label>
        <p class="fw-semibold"><?= esc($contact['name']) ?></p>
      </div>
      <div class="col-md-6">
        <label class="text-muted small">Email</label>
        <p class="fw-semibold"><a href="mailto:<?= esc($contact['email']) ?>"><?= esc($contact['email']) ?></a></p>
      </div>
    </div>

    <div class="mb-3">
      <label class="text-muted small">Message</label>
      <div class="p-3 bg-light rounded">
        <?= nl2br(esc($contact['message'])) ?>
      </div>
    </div>

    <hr>

    <div class="d-flex gap-2">
      <a href="mailto:<?= esc($contact['email']) ?>?subject=Re: <?= urlencode($contact['subject']) ?>" class="btn btn-primary btn-sm">
        <i class="bi bi-reply me-1"></i>Reply via Email
      </a>
      <a href="<?= base_url('admin/contacts/delete/' . $contact['id']) ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete this message?')">
        <i class="bi bi-trash me-1"></i>Delete
      </a>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
