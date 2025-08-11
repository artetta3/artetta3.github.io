<?php
function sanitize(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
