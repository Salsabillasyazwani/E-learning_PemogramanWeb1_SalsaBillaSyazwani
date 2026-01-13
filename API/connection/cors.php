<?php

// 1. Definisikan whitelist origins yang diizinkan
$allowed_origins = [
    "http://127.0.0.1:5500",                    // VS Code Live Server
    "http://localhost",                          // Local
    "http://localhost:8000"                      // Postman/Bruno (sometimes sends this)
];

// 2. Dapatkan origin dari request saat ini
$origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';

// 3. Cek apakah origin ada dalam whitelist
if (in_array($origin, $allowed_origins)) {
    // Jika diizinkan, mirror origin kembali ke header
    header("Access-Control-Allow-Origin: $origin");
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");
}

// 4. Handle Preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

?>