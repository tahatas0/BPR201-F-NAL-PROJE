<?php 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdımTrendi | Ayakkabı E-Ticaret Projesi</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    
    <link href="css/custom.css" rel="stylesheet"> 

</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm"> 
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php?sayfa=anasayfa">ADIMTRENDİ</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?sayfa=anasayfa">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?sayfa=urunler">Tüm Ürünler</a>
                    </li>
                </ul>
                
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="admin/index.php">Panel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-danger" href="index.php?sayfa=cikis">Çıkış Yap</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?sayfa=giris">Giriş Yap</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-light btn-sm ms-2" href="index.php?sayfa=kayit">Kayıt Ol</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container mt-4">
        <div class="container">
            <a class="navbar-brand" href="index.php?sayfa=anasayfa">ADIMTRENDİ</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?sayfa=anasayfa">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?sayfa=urunler">Tüm Ürünler</a>
                    </li>
                </ul>
                
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="admin/index.php">Panel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-danger" href="index.php?sayfa=cikis">Çıkış Yap</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?sayfa=giris">Giriş Yap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white" href="index.php?sayfa=kayit">Kayıt Ol</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container mt-4">
