<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<?php $pageTitle = 'Dashboard'; ?>

<div class="row mb-4">
  <div class="col-md-6 mb-3">
    <div class="stat-card">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <div class="stat-number"><?= $totalContacts ?></div>
          <div class="stat-label">Contact Messages</div>
        </div>
        <i class="bi bi-envelope-fill" style="font-size: 2.5rem; color: #db1d27; opacity: 0.3;"></i>
      </div>
      <a href="<?= base_url('admin/contacts') ?>" class="btn btn-sm btn-outline-danger mt-3">View All <i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
  <div class="col-md-6 mb-3">
    <div class="stat-card">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <div class="stat-number"><?= $totalCareers ?></div>
          <div class="stat-label">Career Applications</div>
        </div>
        <i class="bi bi-briefcase-fill" style="font-size: 2.5rem; color: #db1d27; opacity: 0.3;"></i>
      </div>
      <a href="<?= base_url('admin/careers') ?>" class="btn btn-sm btn-outline-danger mt-3">View All <i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
</div>

<!-- Recent Contact Messages -->
<div class="table-card mb-4">
  <div class="card-header">
    <i class="bi bi-envelope me-2"></i>Recent Contact Messages
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
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($recentContacts)): ?>
          <tr><td colspan="6" class="text-center text-muted py-4">No contact messages yet.</td></tr>
        <?php else: ?>
          <?php foreach ($recentContacts as $contact): ?>
            <tr>
              <td><?= $contact['id'] ?></td>
              <td><?= esc($contact['name']) ?></td>
              <td><?= esc($contact['email']) ?></td>
              <td><?= esc($contact['subject']) ?></td>
              <td><?= date('d M Y', strtotime($contact['created_at'])) ?></td>
              <td>
                <a href="<?= base_url('admin/contacts/' . $contact['id']) ?>" class="btn btn-sm btn-outline-primary">
                  <i class="bi bi-eye"></i>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Recent Career Applications -->
<div class="table-card">
  <div class="card-header">
    <i class="bi bi-briefcase me-2"></i>Recent Career Applications
  </div>
  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Position</th>
          <th>Email</th>
          <th>Status</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($recentCareers)): ?>
          <tr><td colspan="7" class="text-center text-muted py-4">No career applications yet.</td></tr>
        <?php else: ?>
          <?php foreach ($recentCareers as $career): ?>
            <tr>
              <td><?= $career['id'] ?></td>
              <td><?= esc($career['name']) ?></td>
              <td><?= esc($career['position']) ?></td>
              <td><?= esc($career['email']) ?></td>
              <td><span class="badge badge-<?= $career['status'] ?>"><?= ucfirst($career['status']) ?></span></td>
              <td><?= date('d M Y', strtotime($career['created_at'])) ?></td>
              <td>
                <a href="<?= base_url('admin/careers/' . $career['id']) ?>" class="btn btn-sm btn-outline-primary">
                  <i class="bi bi-eye"></i>
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
