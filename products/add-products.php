<?php 
    include "../app/config.php";
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Productos</a></li>
                                        <li class="breadcrumb-item active">Crear Productos</li>
                                    </ol>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- end page title -->

                    <form id="createproduct-form" autocomplete="off" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-lg-6"> 
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Añadir Producto</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Titulo del producto</label>
                                            <input type="hidden" class="form-control" id="formAction" name="formAction" value="add">
                                            <input type="text" class="form-control d-none" id="product-id-input">
                                            <input type="text" class="form-control" id="product-title-input" value="" placeholder="Ingrese el titulo del producto" required>
                                            <div class="invalid-feedback">Ingrese un título de producto.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Descripción general del producto</label>
                                            <textarea class="form-control" placeholder="Debe ingresar un mínimo de 100 caracteres" rows="3"></textarea>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Categorías de Producto</label>
                                            <a href="#" class="float-end text-decoration-underline">Agregar nuevo</a>
                                            
                                            <select class="form-select" id="choices-category-input" name="choices-category-input" data-choices data-choices-search-false>
                                                <option value="Appliances">Accesorios</option>
                                                <option value="Automotive Accessories">Accesorios automotrices</option>
                                                <option value="Electronics">Electrónica</option>
                                                <option value="Fashion">Moda</option>
                                                <option value="Furniture">Muebles</option>
                                                <option value="Grocery">Comestibles</option>
                                                <option value="Kids">Niños</option>
                                                <option value="Watches">Relojes</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Etiquetas de productos</label>                                            
                                            <div class="hstack gap-3 align-items-start">
                                                <div class="flex-grow-1">
                                                    <input class="form-control" data-choices data-choices-multiple-remove="true" placeholder="Ingrese una etiqueta" type="text" value="Cotton"/>
                                                </div>
                                            </div>
                                        
                                        
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6"> 
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Detalles del Producto</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Características principales</label>
                                            <textarea class="form-control" placeholder="Debe ingresar un mínimo de 100 caracteres" rows="3"></textarea>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Marca del producto</label>                                            
                                            <div class="hstack gap-3 align-items-start">
                                                <div class="flex-grow-1">
                                                    <input class="form-control" data-choices data-choices-multiple-remove="true" placeholder="Ingrese una marca" type="text" value="Cotton"/>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Palabra clave del producto</label>
                                            <input type="hidden" class="form-control" id="formAction" name="formAction" value="add">
                                            <input type="text" class="form-control d-none" id="product-id-input">
                                            <input type="text" class="form-control" id="product-title-input" value="" placeholder="Ingrese el titulo del producto" required>
                                            <div class="invalid-feedback">Ingrese la palabra del producto.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end mb-3">
                                        <button type="submit" class="btn btn-success w-lg">Enviar</button>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
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