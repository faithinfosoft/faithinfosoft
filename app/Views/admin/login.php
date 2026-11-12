<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login - Faith Infosoft</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #1e1f58 0%, #db1d27 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .login-card {
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 20px 60px rgba(0,0,0,0.3);
      padding: 40px;
      width: 100%;
      max-width: 420px;
    }
    .login-card .logo {
      text-align: center;
      margin-bottom: 30px;
    }
    .login-card .logo h2 {
      color: #1e1f58;
      font-weight: 700;
      margin: 0;
    }
    .login-card .logo span {
      color: #db1d27;
      font-size: 14px;
    }
    .form-control {
      border-radius: 8px;
      padding: 12px 15px;
      border: 1px solid #ddd;
    }
    .form-control:focus {
      border-color: #1e1f58;
      box-shadow: 0 0 0 0.2rem rgba(30, 31, 88, 0.15);
    }
    .btn-login {
      background: #db1d27;
      color: #fff;
      border: none;
      border-radius: 8px;
      padding: 12px;
      font-weight: 600;
      width: 100%;
      font-size: 16px;
      transition: background 0.3s;
    }
    .btn-login:hover {
      background: #b8151e;
      color: #fff;
    }
    .input-group-text {
      background: #f8f9fa;
      border-right: none;
      border-radius: 8px 0 0 8px;
    }
    .input-group .form-control {
      border-left: none;
      border-radius: 0 8px 8px 0;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <div class="logo">
      <h2><i class="bi bi-shield-lock"></i> Admin Panel</h2>
      <span>Faith Infosoft</span>
    </div>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle me-2"></i><?= session()->getFlashdata('error') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle me-2"></i><?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/login') ?>" method="post">
      <?= csrf_field() ?>

      <div class="mb-3">
        <label class="form-label fw-semibold">Email Address</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-envelope"></i></span>
          <input type="email" name="email" class="form-control" placeholder="admin@faithinfosoft.com" value="<?= old('email') ?>" required>
        </div>
      </div>

      <div class="mb-4">
        <label class="form-label fw-semibold">Password</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-lock"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Enter password" required>
        </div>
      </div>

      <button type="submit" class="btn btn-login">
        <i class="bi bi-box-arrow-in-right me-2"></i>Sign In
      </button>
    </form>

    <div class="text-center mt-3">
      <a href="<?= base_url() ?>" class="text-muted small"><i class="bi bi-arrow-left me-1"></i>Back to Website</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
