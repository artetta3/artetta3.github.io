<?php
require_once __DIR__ . '/../config.php';

$user = handle_google_callback();
if ($user) {
    login($user);
    header('Location: /app/dashboard_user.php');
    exit();
}

echo 'Google authentication failed.';
