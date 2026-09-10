<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS System - Home</title>
    <link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>">
</head>
<body>
    <div class="app-wrapper">
        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <a href="<?= base_url('/') ?>" class="nav-brand">POS System</a>
            <ul class="nav-links">
                <li><a href="<?= base_url('/') ?>" class="active">Home</a></li>
                <li><a href="<?= base_url('about') ?>">About</a></li>
                <li><a href="<?= base_url('customers') ?>">Customer Accounts</a></li>
                <li><a href="<?= base_url('users') ?>">User Accounts</a></li>
            </ul>
        </aside>

        <div class="main-content">
            <div class="container">
                <div class="hero">
                    <h1>Welcome to Retail Point-of-Sale System</h1>
                    <p>Welcome to your retail command center. Streamline store transactions, keep tabs on your staff accounts, and stay effortlessly connected with your customers.</p>
                </div>
            </div>

            <footer>
                <p>&copy; 2026 Point-Of-Sale System.</p>
            </footer>
        </div>
    </div>
</body>
</html>