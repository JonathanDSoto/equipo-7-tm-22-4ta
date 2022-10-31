<?php 
    include "../app/UserController.php";
    $idTemp=$_SESSION['id'];

    $tempUser = new UserController;    
    $user = $tempUser->getUser($idTemp);
?>
<!doctype html>
<?php include "../app/validateLogin.php"; ?>
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
                                    <img src="<?= $user->avatar ?>"  alt="user-img" class="img-thumbnail rounded-circle"/>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="p-2">
                                    <h3 class="text-white mb-1"><?= $_SESSION['name'] ?></h3>
                                    <p class="text-white-75"><?= $user->role ?></p>
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
                                                                    <th class="ps-0" scope="row">Nombre :</th>
                                                                    <td class="text-muted"><?= $user->name ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Apellidos :</th>
                                                                    <td class="text-muted"> <?= $user->lastname ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Móvil :</th>
                                                                    <td class="text-muted"><?= $user->phone_number ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Correo electrónico :</th>
                                                                    <td class="text-muted"><?= $user->email ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div>
                                        <!--end col-->
                                        
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