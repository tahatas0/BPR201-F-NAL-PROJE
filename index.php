<?php
// 1. Veritabanı bağlantısı ve Oturumu Başlat (Tekrar kontrol)
require_once 'includes/db.php'; 

// 2. Hangi sayfanın istendiğini URL'den al
$sayfa = $_GET['sayfa'] ?? 'anasayfa'; 

// 3. Header'ı Çağır
include 'includes/header.php'; 

// 4. İstenen Sayfayı index.php içinde aç
// Bu kısım, sayfanın ana içeriğini çağırır (anasayfa.php, urunler.php, giris.php vb.)
if (file_exists("pages/{$sayfa}.php")) {
    include "pages/{$sayfa}.php";
} else {
    // Sayfa bulunamazsa 404 hatası göster
    include "pages/404.php"; 
}

// 5. Footer'ı Çağır (Sadece bir kez çağrılmalı)
include 'includes/footer.php'; 
?>