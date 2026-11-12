<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<?php $pageTitle = 'Career Applications'; ?>

<div class="table-card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <span><i class="bi bi-briefcase me-2"></i>All Career Applications</span>
    <span class="badge bg-light text-dark"><?= count($careers) ?> total</span>
  </div>
  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Position</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Status</th>
          <th>Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($careers)): ?>
          <tr><td colspan="8" class="text-center text-muted py-4">No career applications yet.</td></tr>
        <?php else: ?>
          <?php foreach ($careers as $career): ?>
            <tr>
              <td><?= $career['id'] ?></td>
              <td><?= esc($career['name']) ?></td>
              <td><?= esc($career['position']) ?></td>
              <td><a href="mailto:<?= esc($career['email']) ?>"><?= esc($career['email']) ?></a></td>
              <td><?= esc($career['mobile']) ?></td>
              <td><span class="badge badge-<?= $career['status'] ?>"><?= ucfirst($career['status']) ?></span></td>
              <td><?= date('d M Y', strtotime($career['created_at'])) ?></td>
              <td>
                <a href="<?= base_url('admin/careers/' . $career['id']) ?>" class="btn btn-sm btn-outline-primary" title="View">
                  <i class="bi bi-eye"></i>
                </a>
                <a href="<?= base_url('admin/careers/delete/' . $career['id']) ?>" class="btn btn-sm btn-outline-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this application?')">
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
