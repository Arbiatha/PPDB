<?php
require_once '../fungsi/session.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: ../_');
    exit;
}
?>

<!doctype html>
<html lang="id" data-bs-theme="dark">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>YAYASAN IR. H. MAULANA | PPDB 2024</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars-offcanvas/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/grid/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../bootstrap-5.3.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/siswa.css" rel="stylesheet">

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


    <!-- Custom styles for this template -->
    <link href="../bootstrap-5.3.3-examples/navbars-offcanvas/navbars-offcanvas.css" rel="stylesheet">
    <link href="../css/siswa.css" rel="stylesheet">
    <link href="../bootstrap-5.3.3-examples/sidebars/sidebars.css" rel="stylesheet">
    <link href="../bootstrap-5.3.3-examples/grid/grid.css" rel="stylesheet">
</head>

<body class="bg-success-subtle">
    <div class="card rounded-0 border-0 bg-success-subtle">
        <div class="card-header">
            <nav class="navbar navbar-expand-lg bg-success-subtle" aria-label="Offcanvas navbar large" id="beranda">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">PPDB YAYASAN IR. H. MAULANA</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-start bg-success-subtle" tabindex="-1" id="offcanvasNavbar2"
                        aria-labelledby="offcanvasNavbar2Label">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbar2Label"><a href="index.php"
                                    class="text-decoration-none text-light link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">PPDB
                                    YAYASAN IR.
                                    H.
                                    MAULANA</a></h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="mb-1">
                                    <a href="index.php"><button class="btn d-inline-flex align-items-center border-0">
                                            Beranda
                                        </button>
                                    </a>
                                </li>
                                <li class="border-top my-3"></li>
                                <li class="mb-1">
                                    <button
                                        class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                        aria-expanded="false">
                                        Pendaftaran
                                    </button>
                                    <div class="collapse" id="dashboard-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="input-data.php"
                                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Data
                                                    Calon Siswa</a>
                                            </li>
                                            <li><a href="upload-berkas.php"
                                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">
                                                    Berkas Pendaftaran</a>
                                            </li>
                                            <li><a href="pembayaran.php"
                                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Pembayaran</a>
                                            </li>
                                            <li><a href="download-bukti.php"
                                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Bukti
                                                    Pendaftaran</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <button
                                        class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#orders-collapse"
                                        aria-expanded="false">
                                        Panduan
                                    </button>
                                    <div class="collapse" id="orders-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="panduan-pendaftaran.php"
                                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Pendaftaran</a>
                                            </li>
                                            <li><a href="panduan-pembayaran.php"
                                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Pembayaran</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="border-top my-3"></li>
                                <li class="mb-1">
                                    <a href="../fungsi/logout.php"><button
                                            class="btn d-inline-flex align-items-center border-0">
                                            Logout
                                        </button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="card-body">