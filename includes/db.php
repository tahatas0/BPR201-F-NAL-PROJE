<?php
$host = 'localhost';
$dbname = 'ayakkabi_db';
$user = 'root'; 
$password = 'Tahatas06.'; 
    
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    session_start(); 

} catch (PDOException $e) {
    echo "Veritabanı Bağlantı Hatası: " . $e->getMessage();
    exit(); 
}
?>
