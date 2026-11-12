<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? 'Admin Panel' ?> - Faith Infosoft</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    :root {
      --primary: #1e1f58;
      --danger: #db1d27;
    }
    body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f4f6f9; }
    .sidebar {
      width: 260px;
      min-height: 100vh;
      background: var(--primary);
      color: #fff;
      position: fixed;
      top: 0; left: 0;
      z-index: 1000;
      transition: transform 0.3s;
    }
    .sidebar .brand {
      padding: 20px;
      text-align: center;
      border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    .sidebar .brand h4 { margin: 0; font-weight: 700; }
    .sidebar .brand small { color: rgba(255,255,255,0.6); }
    .sidebar .nav-link {
      color: rgba(255,255,255,0.75);
      padding: 12px 20px;
      font-size: 15px;
      border-left: 3px solid transparent;
      transition: all 0.2s;
    }
    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
      color: #fff;
      background: rgba(255,255,255,0.1);
      border-left-color: var(--danger);
    }
    .sidebar .nav-link i { width: 24px; margin-right: 10px; }
    .main-content {
      margin-left: 260px;
      padding: 0;
      min-height: 100vh;
    }
    .top-bar {
      background: #fff;
      padding: 15px 30px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .top-bar h5 { margin: 0; color: var(--primary); font-weight: 600; }
    .content-area { padding: 30px; }
    .stat-card {
      background: #fff;
      border-radius: 12px;
      padding: 25px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05);
      border-left: 4px solid var(--danger);
      transition: transform 0.2s;
    }
    .stat-card:hover { transform: translateY(-3px); }
    .stat-card .stat-number { font-size: 2rem; font-weight: 700; color: var(--primary); }
    .stat-card .stat-label { color: #666; font-size: 14px; }
    .table-card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05);
      overflow: hidden;
    }
    .table-card .card-header {
      background: var(--primary);
      color: #fff;
      padding: 15px 20px;
      font-weight: 600;
    }
    .table-card .table { margin: 0; }
    .table-card .table th { background: #f8f9fa; color: var(--primary); font-weight: 600; font-size: 14px; }
    .table-card .table td { vertical-align: middle; font-size: 14px; }
    .badge-pending { background: #ffc107; color: #000; }
    .badge-reviewed { background: #17a2b8; color: #fff; }
    .badge-shortlisted { background: #28a745; color: #fff; }
    .badge-rejected { background: #dc3545; color: #fff; }
    .btn-sm { font-size: 13px; }
    @media (max-width: 768px) {
      .sidebar { transform: translateX(-100%); }
      .sidebar.show { transform: translateX(0); }
      .main-content { margin-left: 0; }
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div class="brand">
      <h4>Faith Infosoft</h4>
      <small>Admin Panel</small>
    </div>
    <nav class="mt-3">
      <a href="<?= base_url('admin/dashboard') ?>" class="nav-link <?= uri_string() === 'admin/dashboard' ? 'active' : '' ?>">
        <i class="bi bi-speedometer2"></i> Dashboard
      </a>
      <a href="<?= base_url('admin/contacts') ?>" class="nav-link <?= str_starts_with(uri_string(), 'admin/contacts') ? 'active' : '' ?>">
        <i class="bi bi-envelope"></i> Contact Messages
      </a>
      <a href="<?= base_url('admin/careers') ?>" class="nav-link <?= str_starts_with(uri_string(), 'admin/careers') ? 'active' : '' ?>">
        <i class="bi bi-briefcase"></i> Career Applications
      </a>
      <hr class="mx-3 border-secondary">
      <a href="<?= base_url() ?>" class="nav-link" target="_blank">
        <i class="bi bi-globe"></i> View Website
      </a>
      <a href="<?= base_url('admin/logout') ?>" class="nav-link text-danger">
        <i class="bi bi-box-arrow-left"></i> Logout
      </a>
    </nav>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <div class="top-bar">
      <div>
        <button class="btn btn-sm btn-outline-secondary d-md-none me-2" onclick="document.getElementById('sidebar').classList.toggle('show')">
          <i class="bi bi-list"></i>
        </button>
        <h5 class="d-inline"><?= $pageTitle ?? 'Dashboard' ?></h5>
      </div>
      <div>
        <span class="text-muted me-3"><i class="bi bi-person-circle me-1"></i><?= session()->get('admin_name') ?></span>
      </div>
    </div>

    <div class="content-area">
      <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <i class="bi bi-check-circle me-2"></i><?= session()->getFlashdata('success') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      <?php endif; ?>

      <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <i class="bi bi-exclamation-triangle me-2"></i><?= session()->getFlashdata('error') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      <?php endif; ?>

      <?= $this->renderSection('content') ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
