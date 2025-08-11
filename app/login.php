<?php
require_once __DIR__ . '/../config.php';

if (isset($_GET['logout'])) {
    logout();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    if ($email) {
        login(['email' => $email]);
        header('Location: /app/dashboard_user.php');
        exit();
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
</head>
<body>
    <h1>Login</h1>
    <form method="post">
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Login</button>
    </form>
    <p><a href="<?php echo sanitize(google_login_url()); ?>">Login with Google</a></p>
</body>
</html>
