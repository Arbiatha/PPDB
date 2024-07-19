<?php
require_once 'style/navbar.php';

?>
<main class="flex-shrink-0 form-signin m-auto">
    <div class="container">
        <form method="post" action="fungsi/register.php">
            <h1 class="h3 mb-3 fw-normal text-center">Buat Akun</h1>
            <div class="form-floating mb-2">
                <input type="email" class="form-control " id="floatingInput" placeholder="name@example.com"
                    id="validationCustom01" required>
                <label for="floatingInput" for="validationCustom01">Email address</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                    id="validationCustom02" required>
                <label for="floatingPassword" for="validationCustom02">Password</label>
            </div>

            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label text-capitalize" for="invalidCheck">
                    menyetujui syarat dan ketentuan
                </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Buat Akun</button>
        </form>
    </div>
</main>

<?php
require_once 'style/footer.php';
?>