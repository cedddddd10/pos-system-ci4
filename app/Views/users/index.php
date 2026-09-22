<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="card">
    <h1>User Accounts</h1>
    <p class="lead">User and staff records retrieved from the local MySQL database.</p>
    <table>
        <thead><tr><th>Username</th><th>Full Name</th><th>Role</th></tr></thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= esc($user['username']) ?></td>
                <td><?= esc($user['full_name']) ?></td>
                <td><?= esc($user['role']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section>
<?= $this->endSection() ?>
