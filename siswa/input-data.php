<?php
require_once 'style/sidebar.php';
?>
<div class="mb-3 border-bottom">
    <h2 class="text-center">Formulir Data Calon Siswa</h2>
</div>
<div class="container-fluid ">
    <form action="../fungsi/input-data.php" method="post">
        <div class="row mt-5">
            <div class="col-sm-8 p-2 ">
                <h4 class="mb-3">Informasi Diri</h4>
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Nama Lengkap"
                            required="required">
                        <label for="floatingInputGroup1">Nama Lengkap</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <select class="form-select" aria-label="Default select example" placeholder="Jenis Kelamin"
                            required="required">
                            <option selected disabled onchange="pilih()">--Pilih--</option>
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                        <label for="floatingInputGroup1">Jenis Kelamin</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Tempat Lahir"
                            required="required">
                        <label for="floatingInputGroup1">Tempat Lahir</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="date" class="form-control" id="floatingInputGroup1" placeholder="Tanggal Lahir"
                            required="required">
                        <label for="floatingInputGroup1">Tanggal Lahir</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="NIK"
                            required="required">
                        <label for="floatingInputGroup1">NIK</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Agama"
                            required="required">
                        <label for="floatingInputGroup1">Agama</label>
                    </div>
                </div>

                <hr class="my-1 mb-3">

                <h4 class="mb-3">Informasi Kontak</h4>
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="alamat"
                            required="required">
                        <label for="floatingInputGroup1">Alamat</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingInputGroup1" placeholder="Telepon / HP"
                            required="required">
                        <label for="floatingInputGroup1">Telepon / HP</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInputGroup1" placeholder="Email"
                            required="required">
                        <label for="floatingInputGroup1">Email</label>
                    </div>
                </div>

                <hr class="my-1 mb-3">

                <h4 class="mb-3">Informasi Orang Tua / Wali</h4>
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Nama Ayah"
                            required="required">
                        <label for="floatingInputGroup1">Nama Ayah</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Nama Ibu"
                            required="required">
                        <label for="floatingInputGroup1">Nama Ibu</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Pekerjaan Ayah"
                            required="required">
                        <label for="floatingInputGroup1">Pekerjaan Ayah</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Pekerjaan Ibu"
                            required="required">
                        <label for="floatingInputGroup1">Pekerjaan Ibu</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1"
                            placeholder="Nomor Telepon/HP Orang Tua" required="required">
                        <label for="floatingInputGroup1">Nomor Telepon/HP Orang Tua</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1"
                            placeholder="Alamat Tempat Tinggal Orang Tua" required="required">
                        <label for="floatingInputGroup1">Alamat Tempat Tinggal Orang Tua</label>
                    </div>
                </div>

                <hr class="my-1 mb-3">

                <h4 class="mb-3">Informasi Pendidikan</h4>
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Nama Sekolah Asal"
                            required="required">
                        <label for="floatingInputGroup1">Nama Sekolah Asal</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1"
                            placeholder="Alamat Sekolah Asal" required="required">
                        <label for="floatingInputGroup1">Alamat Sekolah Asal</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingInputGroup1"
                            placeholder="Nomor Induk Siswa Nasional (NISN)" required="required">
                        <label for="floatingInputGroup1">Nomor Induk Siswa Nasional (NISN)</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Tahun Lulus"
                            required="required">
                        <label for="floatingInputGroup1">Tahun Lulus</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="form-floating">
                        <select class="form-select" aria-label="Default select example" placeholder="Sekolah Tujuan"
                            required="required">
                            <option selected disabled onchange="pilih()">--Pilih--</option>
                            <option value="1">MIS</option>
                            <option value="2">SMP</option>
                            <option value="1">SMA</option>
                            <option value="2">SMK</option>
                        </select>
                        <label for="floatingInputGroup1">Sekolah Tujuan</label>
                    </div>
                </div>

                <hr class="my-1 mb-3">

                <h4 class="mb-3">Informasi Lainnya</h4>
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1"
                            placeholder="Prestasi yang Pernah Diraih">
                        <label for="floatingInputGroup1">Prestasi yang Pernah Diraih</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Sertifikat</label>
                    <input class="form-control mb-3" type="file" id="formFile">
                </div>

                <label for="formFile" class="form-label">File Berbentuk pdf | Ukuran Maks File 2MB</label>
            </div>

            <div class="col-sm-4">
                <div class="mb-3">
                    <h5 class="mb-3">Pas Foto Berlatar Belakang Merah UK 3x4</h5>

                    <div class="text-center mb-3">
                        <img src="../img/ULY04125.jpg" class="rounded" alt="profil.jpg" width="100">
                    </div>
                    <input class="form-control mb-3" type="file" id="formFile">
                    <label for="formFile" class="form-label">*File Berbentuk JPEG atau PNG</label>
                    <label for="formFile" class="form-label">**Ukuran Maks File 2MB</label>
                </div>
            </div>

            <hr class="my-1 mb-3">
            <div class="input-group mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" disabled>
                    <label class="form-check-label" for="defaultCheck1">
                        Checklist Jika Data Sudah Benar
                    </label>
                </div>
            </div>
            <div class="input-group mb-3">
                <button type="submit" class="btn btn-secondary" disabled name="submit">Simpan</button>
            </div>
        </div>
    </form>
</div>

<?php
require_once 'style/footer.php';
?>