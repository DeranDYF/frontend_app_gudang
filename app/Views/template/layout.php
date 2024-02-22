<!DOCTYPE html>
<html lang="en">

<head>
    <title>APLIKASI GUDANG FRONTEND | <?= $title ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/dist/images/D.png" />
    <link rel="stylesheet" href="<?= base_url(); ?>/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css">
    <link id="themeColors" rel="stylesheet" href="<?= base_url(); ?>/dist/css/style.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="horizontal" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <header class="app-header">
            <nav class="navbar navbar-expand-xl navbar-light container-fluid px-0">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler ms-n3" id="sidebarCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-xl-block">
                        <a href="<?= base_url(); ?>" class="text-nowrap nav-link">
                            <img src="<?= base_url(); ?>/dist/images/dyfzn2.png" class="dark-logo" width="120" alt="" />
                            <img src="<?= base_url(); ?>/dist/images/dyfzn.png" class="light-logo" width="120" alt="" />
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <?= $this->include('template/navbar') ?>
        <div class="body-wrapper">
            <div class="container-fluid">
                <?= $this->renderSection('main') ?>
            </div>
        </div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>

    <!--  Customizer -->
    <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="ti ti-settings fs-7" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Settings"></i>
    </button>
    <div class="offcanvas offcanvas-end customizer" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" data-simplebar="">
        <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
            <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">Settings</h4>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-4">
            <div class="theme-option pb-4">
                <h6 class="fw-semibold fs-4 mb-1">Theme Option</h6>
                <div class="d-flex align-items-center gap-3 my-3">
                    <a href="javascript:void(0)" onclick="toggleTheme('<?= base_url(); ?>/dist/css/style.min.css')" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 light-theme text-dark">
                        <i class="ti ti-brightness-up fs-7 text-primary"></i>
                        <span class="text-dark">Light</span>
                    </a>
                    <a href="javascript:void(0)" onclick="toggleTheme('<?= base_url(); ?>/dist/css/style-dark.min.css')" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 dark-theme text-dark">
                        <i class="ti ti-moon fs-7 "></i>
                        <span class="text-dark">Dark</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url(); ?>/dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="<?= base_url(); ?>/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/dist/js/app.min.js"></script>
    <script src="<?= base_url(); ?>/dist/js/app.horizontal.init.js"></script>
    <script src="<?= base_url(); ?>/dist/js/app-style-switcher.js"></script>
    <script src="<?= base_url(); ?>/dist/js/sidebarmenu.js"></script>
    <script src="<?= base_url(); ?>/dist/js/custom.js"></script>
    <script src="<?= base_url(); ?>/dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/dist/js/datatable/datatable-basic.init.js"></script>
</body>

</html>