<?php
	include_once "app/config.php";
?> 
<!doctype html>
<html lang="en" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<head>

    <meta charset="utf-8" />
    <title>Iniciar Sesión | Velzon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= BASE_PATH ?>public/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="<?= BASE_PATH ?>public/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="<?= BASE_PATH ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= BASE_PATH ?>public/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= BASE_PATH ?>public/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?= BASE_PATH ?>public/css/custom.min.css" rel="stylesheet" type="text/css" />


</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <lord-icon src="https://cdn.lordicon.com/rqqkvjqf.json" trigger="loop" colors="primary:#4b38b3,secondary:#08a88a" style="width:180px;height:180px">
                                    </lord-icon>
                                    <h5 class="text-primary">Bienvenido</h5>
                                    <p class="text-muted">Inicia sesión para continuar.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="<?= BASE_PATH ?>auth" method="post">

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Correo Electrónico</label>
                                            <input type="email" class="form-control" id="email" name="email"  placeholder="Introduzca su correo electrónico" pattern="\b[\w.%+-]+@[\w.-]+\.[a-zA-Z]{2,4}">
                                        </div>

                                        <div class="mb-3">
                                            
                                            <label class="form-label" for="password-input">Contraseña</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input" placeholder="Introducir la contraseña" id="password" name="password" pattern="([\w\d\s/!%$@#?])+" title="La contraseña solo acepta letras, números y caracteres especiales (@ ! ? $ % #).">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none password-addon" type="button" id="password-addon"></button>
                                            </div>
                                        </div>
                                        
                                        <div class="mt-4">
                                            <input type="hidden" name="action" value="access"> 
                                            <input type="hidden" name="global_token" value="<?= $_SESSION['global_token'] ?>">
                                            <button  class="btn btn-success w-100" type="submit">Iniciar Sesión</button>
                                        </div>

                                        
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
       
        <?php include "layouts/footer.template.php";?>

        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="<?= BASE_PATH ?>public/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_PATH ?>public/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= BASE_PATH ?>public/libs/node-waves/waves.min.js"></script>
    <script src="<?= BASE_PATH ?>public/libs/feather-icons/feather.min.js"></script>
    <script src="<?= BASE_PATH ?>public/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="<?= BASE_PATH ?>public/js/plugins.js"></script>
    <script src="<?= BASE_PATH ?>public/js/loginF.js"></script>

    <!-- particles js -->
    <script src="<?= BASE_PATH ?>public/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="<?= BASE_PATH ?>public/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="<?= BASE_PATH ?>public/js/pages/password-addon.init.js"></script>
</body>


</html>