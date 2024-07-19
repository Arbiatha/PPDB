<?php
require_once 'style/sidebar.php';
?>
<div class="container text-center">
    <h2 class="mt-5">Metode Pembayaran</h2>
    <div class="table-wrapper">
        <form action="../fungsi/pembayaran.php" method="post">
            <div class="row mt-5 justify-content-md-center text-start">
                <div class="input-group mb-3">
                    <label for="formFile" class="form-label">Pembayaran Disimpan, Pilih Metode Bayar</label>
                </div>
                <div class="input-group mb-3">
                    <div class="d-grid gap-2 d-md-block">
                        <button type="submit" class="btn btn-secondary" name="submit">Bayar</button>

                        <button type="submit" class="btn btn-primary" name="batal">Batal</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
require_once 'style/footer.php';
?>