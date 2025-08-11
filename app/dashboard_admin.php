<?php
require_once __DIR__ . '/../config.php';
require_login();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <p><a href="/app/users_stub.php">Manage Users</a></p>
    <p><a href="/app/login.php?logout=1">Logout</a></p>
</body>
</html>
