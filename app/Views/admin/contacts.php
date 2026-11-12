<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<?php $pageTitle = 'Contact Messages'; ?>

<div class="table-card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <span><i class="bi bi-envelope me-2"></i>All Contact Messages</span>
    <span class="badge bg-light text-dark"><?= count($contacts) ?> total</span>
  </div>
  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Subject</th>
          <th>Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($contacts)): ?>
          <tr><td colspan="6" class="text-center text-muted py-4">No contact messages yet.</td></tr>
        <?php else: ?>
          <?php foreach ($contacts as $contact): ?>
            <tr>
              <td><?= $contact['id'] ?></td>
              <td><?= esc($contact['name']) ?></td>
              <td><a href="mailto:<?= esc($contact['email']) ?>"><?= esc($contact['email']) ?></a></td>
              <td><?= esc($contact['subject']) ?></td>
              <td><?= date('d M Y h:i A', strtotime($contact['created_at'])) ?></td>
              <td>
                <a href="<?= base_url('admin/contacts/' . $contact['id']) ?>" class="btn btn-sm btn-outline-primary" title="View">
                  <i class="bi bi-eye"></i>
                </a>
                <a href="<?= base_url('admin/contacts/delete/' . $contact['id']) ?>" class="btn btn-sm btn-outline-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this message?')">
                  <i class="bi bi-trash"></i>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<?= $this->endSection() ?>
