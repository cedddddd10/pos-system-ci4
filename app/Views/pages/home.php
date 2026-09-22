<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="card">
    <h1>Welcome to Campus POS</h1>
    <p class="lead">A basic Point-of-Sale system for managing customer accounts and user or staff accounts. This first version uses static PHP arrays as its temporary data source.</p>
    <a class="button" href="<?= site_url('customers') ?>">View Customer Accounts</a>
</section>
<?= $this->endSection() ?>
