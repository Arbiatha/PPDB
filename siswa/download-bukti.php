<?php
require_once 'style/sidebar.php';
?>
<div class="bukti">
    <div class="mb-3 border-bottom">
        <h2 class="text-center">Bukti Pendaftaran</h2>
    </div>

    <div class="container-fluid mt-5">
        <form action="../fungsi/download.php" method="post">
            <div class="row justify-content-md-center">
                <div class="col-md-auto mb-3">
                    <label class="form-label">Unduh Formulir Pendaftaran</label>
                    <button type="button" class="btn btn-primary btn-sm">Unduh</button>
                </div>
                <div class="col-md-auto">
                    <label class=" form-label">Unduh Bukti Pembayaran</label>
                    <button type="button" class="btn btn-primary btn-sm">Unduh</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
require_once 'style/footer.php';
?>