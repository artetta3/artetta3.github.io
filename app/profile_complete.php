<?php
require_once __DIR__ . '/../config.php';
require_login();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Placeholder for saving profile data
    header('Location: /app/dashboard_user.php');
    exit();
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Complete Profile</title>
</head>
<body>
    <h1>Complete Profile</h1>
    <form method="post">
        <input type="text" name="name" placeholder="Full Name">
        <button type="submit">Save</button>
    </form>
    <p><a href="/app/dashboard_user.php">Back to Dashboard</a></p>
</body>
</html>
