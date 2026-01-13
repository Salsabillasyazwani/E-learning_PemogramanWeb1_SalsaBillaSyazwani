<?php
require_once '../connection/koneksi.php';

$data = json_decode(file_get_contents("php://input"), true);

$user = trim($data['username'] ?? '');
$pass = trim($data['password'] ?? '');

$stmt = $database_connection->prepare(
    "SELECT ID_user,password FROM users WHERE username=?"
);
$stmt->execute([$user]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row || !password_verify($pass,$row['password'])) {
    echo json_encode(["success"=>false,"message"=>"Login gagal"]);
    exit;
}

$token = bin2hex(random_bytes(32));
$hash = hash('sha256',$token);

$database_connection->prepare(
    "UPDATE users SET token=? WHERE ID_user=?"
)->execute([$hash,$row['ID_user']]);

setcookie("auth_token", $token, [
    "expires" => time() + 86400,
    "path" => "/",
    "httponly" => true,
    "samesite" => "Lax"  // TAMBAH: untuk keamanan
]);

echo json_encode(["success"=>true,"message"=>"Login berhasil"]);