<?php include 'style/navbar.php' ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Beranda Admin</h1>
</div>
<div>
    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Selamat Datang di Pengelolaan Data PPDB Yayasan Ir. H. Maulana</h1>
        </div>
    </div>

    <div class="row align-items-md-stretch mb-5">
        <div class="col-md-6 mb-3">
            <div class="h-100 p-5 text-white bg-success rounded-3">
                <h2>Jumlah Pendaftar</h2>
                <p>Jumlah Pendaftar Yang Menunggu Untuk Divalidasi Saat Ini....Pendaftar</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                <h2>Jumlah Pendaftaran Berhasil</h2>
                <p>Jumlah Pembayaran Berhasil ..... Dan Menunggu Konfirmasi</p>
                <a href="pembayaran.php" class="btn btn-outline-secondary" type="button">Konfirmasi Sekarang</a>
            </div>
        </div>
    </div>
</div>
<?php include 'style/footer.php' ?>