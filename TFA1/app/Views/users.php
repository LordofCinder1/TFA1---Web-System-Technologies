<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>
    <nav>
    <a href="<?= base_url('/') ?>">Home</a>
    <a href="<?= base_url('about') ?>">About</a>
    <a href="<?= base_url('customers') ?>">Customer Accounts</a>
    <a href="<?= base_url('users') ?>">User Accounts</a>
    </nav>



    <h1>User Accounts</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Role</th>
        </tr>

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['role'] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>
</html>