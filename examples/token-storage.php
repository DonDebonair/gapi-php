<?php

require_once __DIR__ . '/bootstrap.php';

use Gapi\Gapi;

$ga = new Gapi(
    ga_email,
    ga_password,
    isset($_SESSION['ga_auth_token'])?$_SESSION['ga_auth_token']:null);

$_SESSION['ga_auth_token'] = $ga->getAuthToken();

echo 'Token: ' . $_SESSION['ga_auth_token'];
