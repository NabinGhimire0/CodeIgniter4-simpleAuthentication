<!-- app/Views/dashboard/index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard, <?= esc($username) ?>!</h1>
    <a href="<?= site_url('logout') ?>">Logout</a>
    <!-- Feel free to add more content or features here -->
</body>
</html>
