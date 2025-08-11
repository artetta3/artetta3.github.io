<?php
require_once __DIR__ . '/../config.php';
require_login();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Placeholder for saving shipment
    header('Location: /app/shipments_list.php');
    exit();
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Shipment</title>
</head>
<body>
    <h1>Add Shipment</h1>
    <form method="post">
        <input type="text" name="description" placeholder="Description">
        <button type="submit">Save</button>
    </form>
    <p><a href="/app/shipments_list.php">Back to list</a></p>
</body>
</html>
