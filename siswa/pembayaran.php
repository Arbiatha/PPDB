<?php
require_once 'style/sidebar.php';
?>
<div class="pembayaran">
    <div class="mb-3 border-bottom">
        <h2 class="text-center">Pembayaran Pendaftaran</h2>
    </div>

    <div class="container-fluid text-center">
        <form action="metode-bayar.php" method="post">
            <div class="row mt-5 justify-content-md-center">
                <div class="col col-md-auto p-2 ">
                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGroup1" required="required"
                                value="Contoh" disabled>
                            <label for="floatingInputGroup1">Nama Calon Siswa</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGroup1" required="required"
                                value="Contoh" disabled>
                            <label for="floatingInputGroup1">NIK Calon Siswa</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGroup1" required="required"
                                value="Contoh" disabled>
                            <label for="floatingInputGroup1">Email Calon Siswa</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGroup1" required="required"
                                value="Contoh" disabled>
                            <label for="floatingInputGroup1">Biaya Pendaftaran</label>
                        </div>
                    </div>
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-secondary" name="submit">Bayar</button>
                    </div>
                </div>
        </form>
    </div>
</div>

<?php
require_once 'style/footer.php';
?>