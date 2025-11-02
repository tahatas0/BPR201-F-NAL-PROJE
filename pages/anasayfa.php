<div class="p-5 mb-4 bg-primary text-white rounded-3 shadow-lg">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">EN TREND AYAKKABI MODELLERİ</h1>
    <p class="col-md-8 fs-4">Göz alıcı spor, klasik ve bot modellerimizle adımlarınızda fark yaratın. Ücretsiz kargo fırsatını kaçırmayın!</p>
    <a href="index.php?sayfa=urunler" class="btn btn-light btn-lg">Tüm Koleksiyonu Keşfet</a>
  </div>
</div>
<h2 class="mt-5 mb-4 text-center border-bottom pb-2">Öne Çıkan Ayakkabılar</h2>

<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">

    <?php 
    for ($i = 1; $i <= 3; $i++): 
    ?>
    
    <div class="col">
        <div class="card h-100 shadow">
            <img src="https://via.placeholder.com/400x300?text=Lacivert+Ayakkabi+<?= $i ?>" class="card-img-top" alt="Ayakkabı Model <?= $i ?>">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title text-primary">Lacivert Spor Model <?= $i ?></h5>
                <p class="card-text text-muted small">Rahatlık ve dayanıklılık bir arada. Yeni sezonun en popüler ürünü.</p>
                <div class="mt-auto pt-3 border-top">
                    <p class="fs-4 fw-bold text-danger mb-1">999.00 TL</p>
                    <a href="index.php?sayfa=urun_detay&id=<?= $i ?>" class="btn btn-primary w-100">Sepete Ekle / İncele</a>
                </div>
            </div>
        </div>
    </div>

    <?php endfor; ?>

</div>
