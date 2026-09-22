<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="card">
    <h1>Customer Accounts</h1>
    <p class="lead">Customer records retrieved from the local MySQL database.</p>
    <table>
        <thead><tr><th>Full Name</th><th>Email</th><th>Phone</th></tr></thead>
        <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= esc($customer['full_name']) ?></td>
                <td><?= esc($customer['email']) ?></td>
                <td><?= esc($customer['phone']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section>
<?= $this->endSection() ?>
