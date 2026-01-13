<?php
require_once '../connection/cors.php';

setcookie("auth_token","",time()-3600,"/");

echo json_encode(["success"=>true,"message"=>"Logout berhasil"]);
