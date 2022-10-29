<?php 
    include "../app/config.php";
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">



<head>
    <?php include "../layouts/head.template.php"; ?>
    <title>Catálogo | Velzon </title>
    
    <!-- nouisliderribute css -->
    <link rel="stylesheet" href="assets/libs/nouislider/nouislider.min.css">
    <!-- gridjs css -->
    <link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">
</head>

<body>
    <?php include "../layouts/nav.template.php"; ?>
    <?php include "../layouts/sidebar.template.php"; ?>
    
    <div id="layout-wrapper">
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <div>    
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Catálogo de Productos</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Catálogo</a></li>
                                            <li class="breadcrumb-item active">Productos</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-9 col-xl-12">
                                <div>
                                    <div class="card">
                                        <div class="card-header border-0">
                                            <div class="row g-6">
                                                <div class="row align-items-center">
                                                        <div class="col">
                                                            <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#productnav-all" role="tab">
                                                                        Todos
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-electrodomesticos" role="tab">
                                                                        Categorías
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-deportivo" role="tab">
                                                                        Marcas
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-casual" role="tab">
                                                                        Tags 
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-draft" role="tab">
                                                                        Draft
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div id="selection-element">
                                                                <div class="my-n1 d-flex align-items-center text-muted">
                                                                    Select <div id="select-content" class="text-body fw-semibold px-1"></div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3 shadow-none" data-bs-toggle="modal" data-bs-target="#removeItemModal">Remove</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>


                                        <!-- end card header -->
                                        <div class="card-body">

                                            <div class="tab-content text-muted">
                                                <div class="tab-pane active" id="productnav-all" role="tabpanel">
                                                    <div id="table-product-list-all" class="table-card gridjs-border-none"></div>
                                                </div>
                                                <!-- end tab pane -->

                                                <div class="tab-pane" id="productnav-published" role="tabpanel">
                                                    <div id="table-product-list-published" class="table-card gridjs-border-none"></div>
                                                </div>
                                                <!-- end tab pane -->

                                                <div class="tab-pane" id="productnav-draft" role="tabpanel">
                                                    <div class="py-4 text-center">
                                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px">
                                                        </lord-icon>
                                                        <h5 class="mt-4"> ¡Lo siento! No se han encontrado resultados</h5>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
                                            </div>
                                            <!-- end tab content -->
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
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

    <!-- nouisliderribute js -->
    <script src="assets/libs/nouislider/nouislider.min.js"></script>
    <script src="assets/libs/wnumb/wNumb.min.js"></script>

    <!-- gridjs js -->
    <script src="assets/libs/gridjs/gridjs.umd.js"></script>
    <script src="../../../../unpkg.com/gridjs%405.1.0/plugins/selection/dist/selection.umd.js"></script>
    <!-- ecommerce product list -->
    <script src="assets/js/pages/ecommerce-product-list.init.js"></script>

</body>


</html>