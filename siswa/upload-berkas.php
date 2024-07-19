<?php
require_once 'style/sidebar.php';
?>
<div class="upload">
    <div class="mb-3 border-bottom">
        <h2 class="text-center">Berkas Pedaftaran</h2>
    </div>

    <div class="container-fluid ">
        <form action="../fungsi/upload-berkas.php" method="post">
            <div class="row mt-5">
                <div class="col-sm-8 p-2 ">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Akta Kelahiran</label>
                        <input class="form-control mb-3" type="file" id="formFile">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Kartu Keluarga</label>
                        <input class="form-control mb-3" type="file" id="formFile">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Ijazah Terakhir / Surat Keterangan Lulus</label>
                        <input class="form-control mb-3" type="file" id="formFile">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Kartu Keluarga</label>
                        <input class="form-control mb-3" type="file" id="formFile">
                    </div>
                    <label for="formFile" class="form-label">File Berbentuk pdf | Ukuran Maks File 2MB</label>
                    <hr class="my-1">
                </div>

                <div class="col-sm-4 mb-3 mt-2">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">KTP Orang Tua/Wali</label>
                        <input class="form-control mb-3" type="file" id="formFile">
                    </div>
                    <label for="formFile" class="form-label">File Berbentuk JPG / PNG | Ukuran Maks File 2MB</label>
                </div>

                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-secondary disabled" name="submit">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
require_once 'style/footer.php';
?>