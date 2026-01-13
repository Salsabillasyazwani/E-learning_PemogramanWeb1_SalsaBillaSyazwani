<?php
require_once '../connection/cors.php';
require_once '../connection/koneksi.php';

$data = json_decode(file_get_contents("php://input"), true);

$nama_UMKM = trim($data['nama_UMKM'] ?? '');
$username  = trim($data['username'] ?? '');
$email     = trim($data['email'] ?? '');
$password  = trim($data['password'] ?? '');

if ($nama_UMKM=='' || $username=='' || $email=='' || $password=='') {
    http_response_code(400);
    echo json_encode(["success"=>false,"message"=>"Data wajib diisi"]);
    exit;
}

$cek = $database_connection->prepare(
    "SELECT ID_user FROM users WHERE username=? OR email=?"
);
$cek->execute([$username,$email]);

if ($cek->rowCount() > 0) {
    echo json_encode(["success"=>false,"message"=>"User sudah ada"]);
    exit;
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);  
$stmt = $database_connection->prepare(
    "INSERT INTO users (nama_UMKM,username,email,password)
     VALUES (?,?,?,?)"
);
$stmt->execute([$nama_UMKM,$username,$email,$hashedPassword]);

echo json_encode([
    "success"=>true,
    "message"=>"Register berhasil"
]);