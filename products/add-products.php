<?php 
        include "../app/ProductsController.php";
        include "../app/BrandController.php";
    
        $productController = new ProductsController();
        $productos = $productController->getProducts();
    
        $brandController = new BrandController();	
        $brands = $brandController->getBrands();
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<head>
    <?php include "../layouts/head.template.php";?>    
    <title>Añadir Productos | Velzon</title>

    <!-- Plugins css -->
    <link href="assets/libs/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
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
                                <h4 class="mb-sm-0">Crear Producto</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?= BASE_PATH ?>productos/">Productos</a></li>
                                        <li class="breadcrumb-item active">Crear Productos</li>
                                    </ol>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- end page title -->

                    <form  action="<?= BASE_PATH ?>product" method="post" enctype="multipart/form-data"">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <span class="col-form-label" id="basic-addon1">name</span> 
                                            <input type="text" id="name" name="name" class="form-control" placeholder="name" aria-label="name" aria-describedby="basic-addon1"> 
                                        </div>
                                        <div class="input mb-3">
                                            <span class="col-form-label" id="basic-addon1">slug</span> 
                                            <input type="text" id="slug" name="slug" class="form-control" placeholder="slug" aria-label="slug" aria-describedby="basic-addon1"> 
                                        </div>
                                        <div class="input mb-3">
                                            <span class="col-form-label"id="basic-addon1">description</span> 
                                            <input type="text" id="description" name="description" class="form-control" placeholder="description" aria-label="description" aria-describedby="basic-addon1"> 
                                        </div>
                                        <div class="input mb-3">
                                            <span class="col-form-label" id="basic-addon1">features</span>    
                                            <input type="text" id="features" name="features" class="form-control" placeholder="features" aria-label="features" aria-describedby="basic-addon1"> 
                                        </div>                                    
                                        <div class="mb-3">
                                            <label class="col-form-label" for="product-title-input">Marcas de Producto</label>
                                            <a href="#" class="float-end text-decoration-underline">Agregar nuevo</a>                                            
                                            <select name="brand_id" id="brand_id" class="form-select" placeholder="marca...">
                                                <?php foreach($brands as $arrayBrand){ ?>
                                                    <option value="<?php echo $arrayBrand ->id ?>"> <?php echo $arrayBrand->name ?> </option>
                                                <?php }?>
                                            </select> 
                                        </div> 
                                        <div class="input-group mb-3">
                                            <input type="file" name="cover" class="form-control" placeholder="cover" > 
                                        </div> 
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="id" id="id">
                                        <input type="hidden" id="inputOculto" value="create" name="action">
                                        <input type="hidden" name="global_token" value="<?= $_SESSION['global_token'] ?>">
                                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                    </div>
                                </form>
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

    <!-- ckeditor -->
    <script src="assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

    <!-- dropzone js -->
    <script src="assets/libs/dropzone/dropzone-min.js"></script>

    <script src="assets/js/pages/ecommerce-product-create.init.js"></script>
</body>


</html>