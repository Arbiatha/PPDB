<?php
require_once "fungsi/koneksi.php";
function generateBreadcrumb()
{
    // Mendapatkan halaman saat ini
    $current_page = basename($_SERVER['PHP_SELF']);

    // Array untuk menyimpan breadcrumb
    $breadcrumb = array();

    // Menentukan breadcrumb berdasarkan halaman saat ini
    switch ($current_page) {
        case 'index.php':
            $breadcrumb[] = array('title' => 'Home', 'link' => 'index.php');
            break;
        case 'alur-pendaftaran.php':
            $breadcrumb[] = array('title' => 'Home', 'link' => 'index.php');
            $breadcrumb[] = array('title' => 'Panduan', 'link' => 'alur-pendaftaran.php');
            $breadcrumb[] = array('title' => 'Alur Pendaftaran', 'link' => '');
            break;
        case 'panduan-pembayaran.php':
            $breadcrumb[] = array('title' => 'Home', 'link' => 'index.php');
            $breadcrumb[] = array('title' => 'Panduan', 'link' => 'panduan-pembayaran.php');
            $breadcrumb[] = array('title' => 'Panduan Pembayaran', 'link' => '');
            break;
        case 'brosur.php':
            $breadcrumb[] = array('title' => 'Home', 'link' => 'index.php');
            $breadcrumb[] = array('title' => 'Panduan', 'link' => 'brosur.php');
            $breadcrumb[] = array('title' => 'Brosur PPDB', 'link' => '');
            break;
        case 'register.php':
            $breadcrumb[] = array('title' => 'Home', 'link' => 'index.php');
            $breadcrumb[] = array('title' => 'Register Akun', 'link' => '');
            break;
    }

    // Menampilkan breadcrumb
    echo '<nav aria-label="breadcrumb">';
    echo '<ol class="breadcrumb">';
    foreach ($breadcrumb as $item) {
        if ($item['link'] != '') {
            echo '<li class="breadcrumb-item"><a href="' . $item['link'] . '">' . $item['title'] . '</a></li>';
        } else {
            echo '<li class="breadcrumb-item active" aria-current="page">' . $item['title'] . '</li>';
        }
    }
    echo '</ol>';
    echo '</nav>';
}
?>

<!doctype html>
<html lang="en" class="h-100" data-bs-theme="dark">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Hugo 0.122.0">
<title>YAYASAN IR. H. MAULANA | PPDB 2024</title>

<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-static/">
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/jumbotron/">
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sticky-footer-navbar/">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="bootstrap-5.3.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (max-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }

        .form-signin {
            width: 20%;
        }
    }

    @media (max-width: 486px) {
        .form-signin {
            width: 50%;
        }
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
    }
</style>

</head>

<body class="d-flex flex-column h-100 bg-success-subtle">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success-subtle">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">PPDB YAYASAN IR. H. MAULANA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Panduan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="alur-pendaftaran.php">Alur Pendaftaran</a></li>
                                <li><a class="dropdown-item" href="panduan-pembayaran.php">Panduan Pembayaran</a></li>
                                <li><a class="dropdown-item" href="brosur.php">Brosur PPDB</a></li>
                            </ul>
                        </li>
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown"
                                data-bs-display="static" aria-expanded="false">
                                Login
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <form class="px-4 py-3" method="post" action="fungsi/login.php">
                                    <div class="form-floating mb-2">
                                        <input type="email" class="form-control " id="floatingInput"
                                            placeholder="name@example.com" id="validationCustom01" required>
                                        <label for="floatingInput" for="validationCustom01">Email address</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="Password" id="validationCustom02" required>
                                        <label for="floatingPassword" for="validationCustom02">Password</label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                            required>
                                        <label class="form-check-label text-capitalize" for="invalidCheck">
                                            Remember me
                                        </label>
                                    </div>
                                    <button class="btn btn-primary w-100 py-2" type="submit">Log In</button>
                                </form>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="register.php">Belum Punya Akun? Buat Akun</a>
                                <a class="dropdown-item" href="ganti-password.php">Lupa password?</a>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <hr class="my-3">
        <div class="container-fluid">
            <?php generateBreadcrumb(); ?>
        </div>
        <hr>
    </header>