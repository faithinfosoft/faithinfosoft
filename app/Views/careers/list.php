<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Career Applications - Faith Infosoft Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4">
    <h3 class="mb-4">Career Applications</h3>
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-hover table-striped mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Position</th>
                        <th>Experience</th>
                        <th>Resume</th>
                        <th>Status</th>
                        <th>Applied On</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($careers)): ?>
                        <?php foreach ($careers as $i => $c): ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= esc($c['full_name']) ?></td>
                            <td><?= esc($c['email']) ?></td>
                            <td><?= esc($c['phone'] ?? '-') ?></td>
                            <td><?= esc($c['position']) ?></td>
                            <td><?= esc($c['experience'] ?? '-') ?></td>
                            <td>
                                <?php if ($c['resume']): ?>
                                    <a href="<?= base_url($c['resume']) ?>" target="_blank">View</a>
                                <?php else: ?>
                                    <span class="text-muted">-</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php
                                $badges = [
                                    'pending'     => 'warning',
                                    'reviewed'    => 'info',
                                    'shortlisted' => 'success',
                                    'rejected'    => 'danger',
                                ];
                                $badge = $badges[$c['status']] ?? 'secondary';
                                ?>
                                <span class="badge bg-<?= $badge ?>"><?= ucfirst($c['status']) ?></span>
                            </td>
                            <td><?= date('d M Y', strtotime($c['created_at'])) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="9" class="text-center text-muted py-4">No applications yet.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
