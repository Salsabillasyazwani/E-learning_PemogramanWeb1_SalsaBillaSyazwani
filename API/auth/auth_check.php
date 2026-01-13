<?php
require_once '../connection/koneksi.php';

if (!isset($_COOKIE['auth_token'])) {
    http_response_code(401);
    exit;
}

$hash = hash('sha256', $_COOKIE['auth_token']);

$stmt = $database_connection->prepare(
    "SELECT ID_user FROM users WHERE token=?"
);
$stmt->execute([$hash]);

$user = $stmt->fetch();

if (!$user) {
    http_response_code(401);
    exit;
}

define("AUTH_ID", $user['ID_user']);
