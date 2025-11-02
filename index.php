<?php
require_once 'includes/db.php'; 
$sayfa = $_GET['sayfa'] ?? 'anasayfa'; 

include 'includes/header.php'; 

if (file_exists("pages/{$sayfa}.php")) {
    include "pages/{$sayfa}.php";
} else {
    include "pages/404.php"; 
}

include 'includes/footer.php'; 
?>
