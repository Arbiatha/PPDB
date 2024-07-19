<?php include 'style/navbar.php'; ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pengaturan</h1>
</div>

<div class="row align-items-md-stretch">
    <div class="col-md-6 mb-3">
        <div class="h-auto p-5 text-light text-center bg-success rounded-3">
            <h2 class="mb-3">Manajemen Akun</h2>
            <hr class="my-1 mb-3">
            <form action="../fungsi/profil.php" method="post">
                <div class="row justify-content-sm-center">
                    <div class="col-sm-8 ">
                        <div class="input-group mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1"
                                    placeholder="Nama Lengkap">
                                <label for="floatingInputGroup1">Email Admin</label>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1"
                                    placeholder="Password Baru">
                                <label for="floatingInputGroup1">Password Baru</label>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1"
                                    placeholder="Konfirmasi Password" required="required">
                                <label for="floatingInputGroup1">Konfirmasi Password</label>
                            </div>
                        </div>

                        <hr class="my-1 mb-3">
                    </div>
                </div>
                <a href="fungsi/update-profil.php" class="btn btn-outline-light" type="button" name="submit">Simpan</a>
            </form>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class=" h-auto p-5 bg-success border rounded-3">
            <h2 class="text-center">Manajemen Database</h2>
            <hr class="my-1 mb-3">
            <form action="../fungsi/profil.php" method="post">
                <div class="container ">
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <h4 class="mb-4">Backup</h4>
                            <h4>Hapus</h4>
                        </div>

                        <div class="col-2">
                            <a href="hapus-database.php" class="btn btn-outline-light mb-3" type="button"
                                name="backup">Backup</a>
                            <a href="backup-database.php" class="btn btn-outline-light" type="button"
                                name="hapus">Hapus</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'style/footer.php'; ?>