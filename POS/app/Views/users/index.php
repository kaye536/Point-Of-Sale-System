<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS System - Users</title>
    <link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>">
</head>
<body>
    <div class="app-wrapper">
        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <a href="<?= base_url('/') ?>" class="nav-brand">POS System</a>
            <ul class="nav-links">
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a href="<?= base_url('about') ?>">About</a></li>
                <li><a href="<?= base_url('customers') ?>">Customer Accounts</a></li>
                <li><a href="<?= base_url('users') ?>" class="active">User Accounts</a></li>
            </ul>
        </aside>

        <div class="main-content">
            <div class="container">
                <div class="card">
                    <h2>Staff User Accounts</h2>
                    <p>Active registry of administrative and staff profiles.</p>
                    
                    <table>
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Full Name</th>
                                <th>Assigned Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $u): ?>
                            <tr>
                                <td><strong><?= esc($u['username']); ?></strong></td>
                                <td><?= esc($u['full_name']); ?></td>
                                <td><?= esc($u['role']); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <footer>
                <p>&copy; 2026 Point-Of-Sale System.</p>
            </footer>
        </div>
    </div>
</body>
</html>