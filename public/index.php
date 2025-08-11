<?php
require_once __DIR__ . '/../config.php';

if (current_user()) {
    header('Location: /app/dashboard_user.php');
} else {
    header('Location: /app/login.php');
}
exit();
