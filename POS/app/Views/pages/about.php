<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS System - About</title>
    <link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>">
</head>
<body>
    <div class="app-wrapper">
        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <a href="<?= base_url('/') ?>" class="nav-brand">POS System</a>
            <ul class="nav-links">
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a href="<?= base_url('about') ?>" class="active">About</a></li>
                <li><a href="<?= base_url('customers') ?>">Customer Accounts</a></li>
                <li><a href="<?= base_url('users') ?>">User Accounts</a></li>
            </ul>
        </aside>

        <div class="main-content">
            <div class="container">
                <div class="card">
                    <h2>About</h2>
                    <p>This Point of Sale (POS) system helps manage daily store operations, keep track of customer records, 
                    and organize staff accounts. It connects sales processing with a back-end database so administrators 
                    can easily monitor transactions, customer details, and employee access from one place.</p>
                    <p style="margin-top: 1rem;">.</p>
                </div>
            </div>

            <footer>
                <p>&copy; 2026 Point-Of-Sale System.</p>
            </footer>
        </div>
    </div>
</body>
</html>