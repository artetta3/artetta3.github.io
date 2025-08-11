<?php
require_once __DIR__ . '/../config.php';
require_login();
$user = current_user();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome <?php echo sanitize($user['email']); ?></h1>
    <ul>
        <li><a href="/app/shipments_list.php">Shipments</a></li>
        <li><a href="/app/commodities_list.php">Commodities</a></li>
        <li><a href="/app/profile_complete.php">Complete Profile</a></li>
        <li><a href="/app/login.php?logout=1">Logout</a></li>
    </ul>
</body>
</html>
