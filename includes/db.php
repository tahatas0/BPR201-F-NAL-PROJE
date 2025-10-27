<?php
// WAMP'ınızın ayarları:
$host = 'localhost';
$dbname = 'ayakkabi_db'; // phpMyAdmin'de verdiğiniz veritabanı adı
$user = 'root'; 
$password = 'Tahatas06.'; 
    
try {
    // PDO kullanarak güvenli bağlantı (SQL Injection'a karşı önemlidir)
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Oturum başlangıcı
    session_start(); 

} catch (PDOException $e) {
    echo "Veritabanı Bağlantı Hatası: " . $e->getMessage();
    exit(); // Bağlantı hatası varsa sitenin devam etmesini engeller
}
?>