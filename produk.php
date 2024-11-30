<?php include 'layout/header.php'; ?>
<div class="container my-5">
    <h2 class="text-center">Semua Produk</h2>
    <div class="row">
        <?php for ($i = 1; $i <= 6; $i++): ?>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produk <?= $i ?>">
                <div class="card-body">
                    <h5 class="card-title">Produk <?= $i ?></h5>
                    <p class="card-text">Deskripsi singkat produk UMKM.</p>
                    <a href="#" class="btn btn-primary">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</div>
<?php include 'layout/footer.php'; ?>
