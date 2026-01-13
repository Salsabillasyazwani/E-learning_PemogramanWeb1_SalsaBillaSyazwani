<?php
require_once __DIR__ . '/cors.php';

// Konfigurasi database LOCAL
$database_hostname = "localhost";
$database_username = "root";
$database_password = "";
$database_name     = "umanage";
$database_port     = "3306";

try {
    $database_connection = new PDO(
        "mysql:host=$database_hostname;port=$database_port;dbname=$database_name;charset=utf8",
        $database_username,
        $database_password
      
    );
    $database_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // echo "koneksi berhasil";
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        "error" => "Koneksi database gagal"
    ]);
    exit;
}
