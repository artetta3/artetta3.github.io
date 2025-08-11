<?php
function google_login_url(): string {
    $clientId = GOOGLE_CLIENT_ID;
    $redirect = urlencode(GOOGLE_REDIRECT_URI);
    $scope = urlencode('email profile');
    return "https://accounts.google.com/o/oauth2/v2/auth?response_type=code&client_id={$clientId}&redirect_uri={$redirect}&scope={$scope}";
}

function handle_google_callback(): ?array {
    // Placeholder: A real implementation would exchange the code for user info.
    if (!isset($_GET['code'])) {
        return null;
    }
    return [
        'email' => 'demo@example.com',
        'name'  => 'Demo User'
    ];
}
