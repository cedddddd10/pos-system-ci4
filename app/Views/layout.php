<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Campus POS</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #f4f7fb; color: #1f2937; }
        nav { background: #183b65; padding: 16px 8%; display: flex; gap: 22px; align-items: center; }
        nav .brand { color: #fff; font-size: 1.15rem; font-weight: bold; margin-right: auto; }
        nav a { color: #dbeafe; text-decoration: none; font-weight: 600; }
        nav a:hover { color: #fff; }
        main { max-width: 1050px; margin: 42px auto; padding: 0 24px; }
        .card { background: #fff; padding: 32px; border-radius: 12px; box-shadow: 0 4px 18px #1f29371a; }
        h1 { color: #183b65; margin-top: 0; }
        .lead { color: #4b5563; font-size: 1.1rem; line-height: 1.65; }
        .button { display: inline-block; margin-top: 12px; padding: 11px 16px; border-radius: 7px; background: #2563eb; color: #fff; text-decoration: none; font-weight: bold; }
        table { width: 100%; border-collapse: collapse; margin-top: 22px; }
        th, td { padding: 13px; text-align: left; border-bottom: 1px solid #e5e7eb; }
        th { color: #fff; background: #183b65; }
        tr:hover { background: #f8fafc; }
        footer { text-align: center; padding: 24px; color: #6b7280; }
    </style>
</head>
<body>
    <nav>
        <span class="brand">Campus POS</span>
        <a href="<?= site_url('/') ?>">Home</a>
        <a href="<?= site_url('about') ?>">About</a>
        <a href="<?= site_url('customers') ?>">Customers</a>
        <a href="<?= site_url('users') ?>">Users</a>
    </nav>
    <main><?= $this->renderSection('content') ?></main>
    <footer>Campus POS &middot; Laboratory Activity</footer>
</body>
</html>
