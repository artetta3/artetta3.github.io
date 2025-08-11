<?php
function login(array $user): void {
    $_SESSION['user'] = $user;
}

function logout(): void {
    unset($_SESSION['user']);
}

function current_user(): ?array {
    return $_SESSION['user'] ?? null;
}

function require_login(): void {
    if (!current_user()) {
        header('Location: /app/login.php');
        exit();
    }
}
