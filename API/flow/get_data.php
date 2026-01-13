<?php
require_once '../connection/koneksi.php';
// Ambil token dari cookie
$token = $_COOKIE['auth_token'] ?? '';

// Validasi token kosong
if ($token === '') {
    http_response_code(401);
    echo json_encode([
        "success" => false,
        "message" => "No auth cookie"
    ]);
    exit;
}

try {
    // Query untuk mengambil semua data pendaftar
    $sql = "SELECT * FROM users";
    $qconnect = $database_connection->prepare($sql);
    $qconnect->execute();
    
    // Ambil semua data ke dalam array
    $data = array();
    while ($row = $qconnect->fetch(PDO::FETCH_ASSOC)) {
        array_push($data, $row);
    }
    
    // Return data dalam format JSON
    echo json_encode($data);
    
} catch (PDOException $err) {
    // Handle error database
    die("Tidak dapat memuat database $database_name: " . $err->getMessage());
}

?>