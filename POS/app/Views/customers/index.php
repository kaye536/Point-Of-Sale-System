<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS System - Customers</title>
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
                <li><a href="<?= base_url('customers') ?>" class="active">Customer Accounts</a></li>
                <li><a href="<?= base_url('users') ?>">User Accounts</a></li>
            </ul>
        </aside>

        <div class="main-content">
            <div class="container">
                <div class="card">
                    <h2>Customer Accounts Directory</h2>                    
                    <table>
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($customers as $c): ?>
                            <tr>
                                <td><?= esc($c['full_name']); ?></td>
                                <td><?= esc($c['email']); ?></td>
                                <td><?= esc($c['phone']); ?></td>
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