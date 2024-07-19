<?php include 'style/navbar.php'; ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Data Pendaftaran</h1>
</div>

<div class="p-2 mb-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-2">
        <h2 class="fw-bold text-center mb-4">UNGGAH FILE</h2>
        <form action="../fungsi/input-data.php" method="post">
            <div class="row justify-content-sm-center">
                <div class="col-sm-8 p-2 ">
                    <h5 class="mb-3">Alur Pendaftaran</h5>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        <button class="btn btn-outline-secondary" type="button"
                            id="inputGroupFileAddon04">Upload</button>
                    </div>
                    <p>Jenis File | PDF atau Gambar</p>
                    <p>Ukuran File | Maks 5Mb</p>

                    <hr class="my-1 mb-3">
                    <h5 class="mb-3">Syarat Pendaftaran</h5>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        <button class="btn btn-outline-secondary" type="button"
                            id="inputGroupFileAddon04">Upload</button>
                    </div>
                    <p>Jenis File | PDF atau Gambar</p>
                    <p>Ukuran File | Maks 5Mb</p>

                    <hr class="my-1 mb-3">
                    <h5 class="mb-3">Panduan Bayar</h5>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        <button class="btn btn-outline-secondary" type="button"
                            id="inputGroupFileAddon04">Upload</button>
                    </div>
                    <p>Jenis File | PDF atau Gambar</p>
                    <p>Ukuran File | Maks 5Mb</p>

                    <hr class="my-1 mb-3">
                </div>
            </div>
        </form>
    </div>
</div>

<?php include 'style/footer.php'; ?>