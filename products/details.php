<?php 
          include "../app/ProductsController.php";
        //   include "../app/LevelController.php";
          $idTemp=$_GET["slug"];  
  
        //   $tempLevel = new LevelController;    
        //   $Levels = $tempLevel->getLevels();  
      
          $tempProduct = new ProductsController;    
          $product = $tempProduct->getProductBySlug($idTemp);
?>
<?php include "../app/validateLogin.php"; ?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<head>

    <?php include "../layouts/head.template.php"; ?>
    <title>Detalles de Producto | Velzon</title>
    
    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
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

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Detalles de Producto</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?= BASE_PATH ?>productos/">Productos</a></li>
                                        <li class="breadcrumb-item active">Detalles Producto</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row gx-lg-3">
                                        <div class="col-xl-4 col-md-8 mx-auto">
                                            <div class="images-img-slider sticky-side-div">
                                                <div class="swiper products-thumbnail-slider p-2 rounded bg-light">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <img src="<?php echo $product->cover ?> " class="img-fluid d-block" alt="..."/>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xl-8">
                                            <div class="mt-xl-0 mt-5">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h4><?php echo $product->name ?> </h4>
                                                        <div class="hstack gap-3 flex-wrap">
                                                            <div><a href="#" class="text-primary d-block"><?php echo $product->brand->name ?> </a></div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>


                                                <div class="row mt-4">
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="p-2 border border-dashed rounded">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm me-2">
                                                                    <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                                        <i class="ri-money-dollar-circle-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <p class="text-muted mb-1">Precio :</p>    
                                                                        <h5 class="mb-0">
                                                                            <?php 
                                                                                foreach ($product->presentations as $arrayPresent) { 
                                                                                    foreach ($arrayPresent->price as $arrayPrice) { 
                                                                                        if(isset($arrayPresent->price)){
                                                                                            foreach ($arrayPresent->price as $arrayPrice) {
                                                                                                $lastPrice = $arrayPrice->amount;
                                                                                            }
                                                                                            // echo "$".$lastPrice;
                                                                                        } else {
                                                                                            echo "Price not found.";
                                                                                         }
                                                                                    }
                                                                                }
                                                                                echo "$".$lastPrice;
                                                                            ?>
                                                                        </h5>  
                                                                                                                                           
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <!-- end col -->
                                                    <!-- end col -->
                                                </div>

                                                
                                                <!-- end row -->

                                                <div class="mt-4 text-muted">
                                                    <h5 class="fs-14">Descripción:</h5>
                                                    <p><?php echo $product->description ?></p>
                                                </div>
                                                <div class="mt-4 text-muted">
                                                    <h5 class="fs-14">Caracteristicas:</h5>
                                                    <p><?php echo $product->features ?></p>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="mt-3">
                                                            <h5 class="fs-14">Etiquetas:</h5>
                                                            <ul class="list-unstyled">
                                                                <?php foreach ($product->tags as $arraytags) { ?>
                                                                    <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i> <?php echo $arraytags->name ?></li>
                                                                <?php }?>   
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="mt-3">
                                                            <h5 class="fs-14">Categorias:</h5>
                                                            <ul class="list-unstyled">
                                                                <?php foreach ($product->categories as $arrayCategorias) { ?>
                                                                    <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i> <?php echo $arrayCategorias->name ?></li>
                                                                <?php }?>   
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>


                   
                                                <!-- product-content -->
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
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
    <!-- END layout-wrapper -->

   

    <?php include "../layouts/scripts.template.php"; ?>
    
    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- ecommerce product details init -->
    <script src="assets/js/pages/ecommerce-product-details.init.js"></script>

</body>


</html>