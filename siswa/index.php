<?php
require_once 'style/sidebar.php';

?>

<div class="container py-5">
    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Selamat Datang di PPDB Yayasan Ir. H. Maulana</h1>
            <p class="col-md-8 fs-4">Proses Pendaftaran Peserta Didik Baru Tahun Ajaran 2024 sudah dibuka.
                Silakan
                mengisi
                data calon siswa pada menu yang tersedia.</p>
            <a href="input-data.php" class="btn btn-primary btn-lg" type="button">Daftar Sekarang</a>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6 mb-3">
            <div class="h-auto p-5 text-white bg-success rounded-3">
                <h2>Alur Pendaftaran</h2>
                <p>Pelajari langkah-langkah pendaftaran yang diperlukan untuk mendaftar di Yayasan Ir. H.
                    Maulana. Kami siap
                    membantu Anda di setiap tahap proses.</p>
                <a href="panduan-pendaftaran.php" class="btn btn-outline-light" type="button">Baca
                    Panduan</a>
            </div>
        </div>

        <div class="col-md-6 ">
            <div class="h-auto p-5 bg-body-tertiary border rounded-3">
                <h2>Panduan Pembayaran</h2>
                <p>Informasi lengkap mengenai biaya pendaftaran dan cara pembayaran. Pastikan Anda memahami
                    semua tahapan
                    sebelum melakukan pembayaran.</p>
                <a href="panduan-pembayaran.php" class="btn btn-outline-secondary" type="button">Baca
                    Panduan</a>
            </div>
        </div>
    </div>
</div>

<?php
include 'style/footer.php';
?>