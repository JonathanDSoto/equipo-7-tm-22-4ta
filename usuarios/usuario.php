<?php 
    include "../app/config.php";
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<head>
    <?php include "../layouts/head.template.php"; ?>
    <title>Perfil Usuario | Velzon </title>
   
    <!-- swiper css -->
    <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">
</head>

<body>
    <?php include "../layouts/nav.template.php"; ?>
    <?php include "../layouts/sidebar.template.php"; ?>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="profile-foreground position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg">
                            <img src="<?= BASE_PATH ?>public/images/profile-bg.jpg"  alt="" class="profile-wid-img"/>
                        </div>
                    </div>
                    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                        <div class="row g-4">
                            <div class="col-auto">
                                <div class="avatar-lg">
                                    <img src="<?= BASE_PATH ?>public/images/users/avatar-1.jpg"  alt="user-img" class="img-thumbnail rounded-circle"/>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="p-2">
                                    <h3 class="text-white mb-1">Guadalupe Eridani</h3>
                                    <p class="text-white-75">Maquetador</p>
                                    <div class="hstack text-white-50 gap-1">
                                        <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>La Paz B.C.S., México</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content pt-4 text-muted">
                                <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-3">Información</h5>
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Nombre Completo :</th>
                                                                    <td class="text-muted">Guadalupe Eridani</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Móvil :</th>
                                                                    <td class="text-muted">+(52) 612 1223456</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Correo electrónico :</th>
                                                                    <td class="text-muted">guadalupe@velzon.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Ubicación :</th>
                                                                    <td class="text-muted">La Paz B.C.S., México
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div>
                                        <!--end col-->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-4">
                                                    <div class="flex-grow-1">
                                                        <h5 class="card-title mb-0">Sugerencias</h5>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill fs-14"></i>
                                                            </a>

                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink2">
                                                                <li><a class="dropdown-item" href="#">Ver</a></li>
                                                                <li><a class="dropdown-item" href="#">Editar</a></li>
                                                                <li><a class="dropdown-item" href="#">Eliminar</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="d-flex align-items-center py-3">
                                                        <div class="avatar-xs flex-shrink-0 me-3">
                                                            <img src="<?= BASE_PATH ?>public/images/users/avatar-7.jpg"  alt="user-img" class="img-fluid rounded-circle shadow"/>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h5 class="fs-14 mb-1">Moises Moreno</h5>
                                                                <p class="fs-13 text-muted mb-0">Desarrollador Frontend</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <button type="button" class="btn btn-sm btn-outline-success shadow-none"><i class="ri-user-add-line align-middle"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center py-3">
                                                        <div class="avatar-xs flex-shrink-0 me-3">
                                                            <img src="<?= BASE_PATH ?>public/images/users/avatar-8.jpg"  alt="user-img" class="img-fluid rounded-circle shadow"/>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h5 class="fs-14 mb-1">Aarón Arturo</h5>
                                                                <p class="fs-13 text-muted mb-0">Desarrollador Backend</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <button type="button" class="btn btn-sm btn-outline-success shadow-none"><i class="ri-user-add-line align-middle"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center py-3">
                                                        <div class="avatar-xs flex-shrink-0 me-3">
                                                            <img src="<?= BASE_PATH ?>public/images/users/avatar-9.jpg"  alt="user-img" class="img-fluid rounded-circle shadow"/>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h5 class="fs-14 mb-1">Niggel Altamirano</h5>
                                                                <p class="fs-13 text-muted mb-0">QA</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <button type="button" class="btn btn-sm btn-outline-success shadow-none"><i class="ri-user-add-line align-middle"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include "../layouts/footer.template.php"; ?>

    </div>

    
    <?php include "../layouts/scripts.template.php"; ?>

    <!-- swiper js -->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- profile init js -->
    <script src="assets/js/pages/profile.init.js"></script>
</body>


</html>