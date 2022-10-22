<?php 
    include "../app/config.php";
?> 
<!doctype html>
<html data-layout="vertical"data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
	<?php include "../layouts/head.template.php"; ?>
    
    <title>Productos | Velzon</title>
    <!-- nouisliderribute css -->
    <link rel="stylesheet" href="<?= BASE_PATH ?>public/libs/nouislider/nouislider.min.css">

    <!-- gridjs css -->
    <link rel="stylesheet" href="<?= BASE_PATH ?>public/libs/gridjs/theme/mermaid.min.css">
</head>

<body>
    <?php include "../layouts/nav.template.php"; ?>
    
    <!-- ========== App Menu ========== -->
    <?php include "../layouts/sidebar.template.php"; ?>
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div id="layout-wrapper">

        <div class="main-content">
    
    
            <div class="page-content">
                <div class="container-fluid">
    
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Productos</h4>
    
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tienda</a></li>
                                        <li class="breadcrumb-item active">Productos</li>
                                    </ol>
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <a href ="add-products.php" class="mb-3 btn btn-primary">Añadir Producto </a>
    
                    <div class="card" style="width: 18rem;">
                        <img src="../public/images/products/img-4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-success">Ver Detalles</a> 
                            <a href="#" class="btn btn-secondary">Editar Producto</a>
                            <a href="#" class="mt-1 btn btn-danger">Eliminar Producto</a>
                    
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php include "../layouts/footer.template.php"; ?>
        </div>
        <!-- end main content-->

    </div>


    <?php include "../layouts/scripts.template.php"; ?>

    <!-- nouisliderribute js -->
    <script src="<?= BASE_PATH ?>public/libs/nouislider/nouislider.min.js"></script>
    <script src="<?= BASE_PATH ?>public/libs/wnumb/wNumb.min.js"></script>

    <!-- gridjs js -->
    <script src="<?= BASE_PATH ?>public/libs/gridjs/gridjs.umd.js"></script>
    <script src="../../../../unpkg.com/gridjs%405.1.0/plugins/selection/dist/selection.umd.js"></script>
    <!-- ecommerce product list -->
    <script src="<?= BASE_PATH ?>public/js/pages/ecommerce-product-list.init.js"></script>


</body>

</html>