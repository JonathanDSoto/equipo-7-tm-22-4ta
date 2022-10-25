<?php 
    include "../app/config.php";
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">



<head>
    <?php include "../layouts/head.template.php"; ?>
    <title>Detalle Ordenes | Velzon </title>
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
                                <h4 class="mb-sm-0">Detalles de la Orden</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Productos</a></li>
                                        <li class="breadcrumb-item active">Detalles del pedido</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-9">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h5 class="card-title flex-grow-1 mb-0">Orden #VL2667</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table table-nowrap align-middle table-borderless mb-0">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th scope="col">Detalles de producto</th>
                                                    <th scope="col">Precio del articulo</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Clasificación</th>
                                                    <th scope="col" class="text-end">Cantidad total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                                <img src="<?= BASE_PATH ?>public/images/products/img-8.png" class="img-fluid d-block" alt="..."/>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h5 class="fs-15"><a href="apps-ecommerce-product-details.html" class="link-primary">Sudadera para hombre (Rosa)</a></h5>
                                                                <p class="text-muted mb-0">Color: <span class="fw-medium">Rosa</span></p>
                                                                <p class="text-muted mb-0">Tamaño: <span class="fw-medium">M</span></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$119.99</td>
                                                    <td>02</td>
                                                    <td>
                                                        <div class="text-warning fs-15">
                                                            <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium text-end">
                                                        $239.98
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                                <img src="<?= BASE_PATH ?>public/images/products/img-7.png" class="img-fluid d-block" alt="..."/>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h5 class="fs-15"><a href="apps-ecommerce-product-details.html" class="link-primary">Reloj inteligente Ruido NoiseFit Endure</a></h5>
                                                                <p class="text-muted mb-0">Color: <span class="fw-medium">Negro</span></p>
                                                                <p class="text-muted mb-0">Tamaño: <span class="fw-medium">32.5mm</span></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$94.99</td>
                                                    <td>01</td>
                                                    <td>
                                                        <div class="text-warning fs-15">
                                                            <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium text-end">
                                                        $94.99
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                                <img src="<?= BASE_PATH ?>public/images/products/img-3.png" class="img-fluid d-block" alt="..."/>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h5 class="fs-15"><a href="apps-ecommerce-product-details.html" class="link-primary">Contenedor de comestibles de vidrio de 350 ml</a></h5>
                                                                <p class="text-muted mb-0">Color: <span class="fw-medium">Blanco</span></p>
                                                                <p class="text-muted mb-0">Tamaño: <span class="fw-medium">350 ml</span></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$24.99</td>
                                                    <td>01</td>
                                                    <td>
                                                        <div class="text-warning fs-15">
                                                            <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i><i class="ri-star-line"></i><i class="ri-star-line"></i>
                                                        </div>
                                                    </td>
                                                    <td class="fw-medium text-end">
                                                        $24.99
                                                    </td>
                                                </tr>
                                                <tr class="border-top border-top-dashed">
                                                    <td colspan="3"></td>
                                                    <td colspan="2" class="fw-medium p-0">
                                                        <table class="table table-borderless mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Sub Total :</td>
                                                                    <td class="text-end">$359.96</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Descuento  <span class="text-muted">(VELZON15)</span> : :</td>
                                                                    <td class="text-end">-$53.99</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Costo de envío :</td>
                                                                    <td class="text-end">$65.00</td>
                                                                </tr>
                                                                <tr class="border-top border-top-dashed">
                                                                    <th scope="row">Total (MXN) :</th>
                                                                    <th class="text-end">$415.96</th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-sm-flex align-items-center">
                                        <h5 class="card-title flex-grow-1 mb-0">Estado del pedido</h5>
                                        <div class="flex-shrink-0 mt-2 mt-sm-0">
                                            <a href="javasccript:void(0;)" class="btn btn-soft-info btn-sm mt-2 mt-sm-0 shadow-none"><i class="ri-map-pin-line align-middle me-1"></i> Cmabiar dirección</a>
                                            <a href="javasccript:void(0;)" class="btn btn-soft-danger btn-sm mt-2 mt-sm-0 shadow-none"><i class="mdi mdi-archive-remove-outline align-middle me-1"></i> Cancelar Orden</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="profile-timeline">
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item border-0">
                                                <div class="accordion-header" id="headingOne">
                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 avatar-xs">
                                                                <div class="avatar-title bg-success rounded-circle shadow">
                                                                    <i class="ri-shopping-bag-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-15 mb-0 fw-semibold">Pedido realizado - <span class="fw-normal">Mie, 15 Dic 2021</span></h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body ms-2 ps-5 pt-0">
                                                        <h6 class="mb-1">Se ha realizado un pedido.</h6>
                                                        <p class="text-muted">Mie, 15 Dic 2021 - 05:34PM</p>

                                                        <h6 class="mb-1">El vendedor ha procesado su pedido.</h6>
                                                        <p class="text-muted mb-0">Jue, 16 Dic 2021 - 5:48AM</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-0">
                                                <div class="accordion-header" id="headingTwo">
                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 avatar-xs">
                                                                <div class="avatar-title bg-success rounded-circle shadow">
                                                                    <i class="mdi mdi-gift-outline"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-15 mb-1 fw-semibold">Empacado - <span class="fw-normal">Jue, 16 Dic 2021</span></h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body ms-2 ps-5 pt-0">
                                                        <h6 class="mb-1">Su artículo ha sido recogido por un socio de mensajería</h6>
                                                        <p class="text-muted mb-0">Vie, 17 Dic 2021 - 9:45AM</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-0">
                                                <div class="accordion-header" id="headingThree">
                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 avatar-xs">
                                                                <div class="avatar-title bg-success rounded-circle shadow">
                                                                    <i class="ri-truck-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-15 mb-1 fw-semibold">Envío - <span class="fw-normal">Thu, 16 Dec 2021</span></h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body ms-2 ps-5 pt-0">
                                                        <h6 class="fs-14">RQK Logística - MFDS1400457854</h6>
                                                        <h6 class="mb-1">Tu artículo ha sido enviado.</h6>
                                                        <p class="text-muted mb-0">Sáb, 18 Dic 2021 - 4.54PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-0">
                                                <div class="accordion-header" id="headingFour">
                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 avatar-xs">
                                                                <div class="avatar-title bg-light text-success rounded-circle shadow">
                                                                    <i class="ri-takeaway-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-14 mb-0 fw-semibold">Fuera para entregar</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-0">
                                                <div class="accordion-header" id="headingFive">
                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFile" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 avatar-xs">
                                                                <div class="avatar-title bg-light text-success rounded-circle shadow">
                                                                    <i class="mdi mdi-package-variant"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-14 mb-0 fw-semibold">Entregado</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end accordion-->
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex">
                                        <h5 class="card-title flex-grow-1 mb-0"><i class="mdi mdi-truck-fast-outline align-middle me-1 text-muted"></i> Detalles de Logística</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/uetqnvvg.json" trigger="loop" colors="primary:#4b38b3,secondary:#0ab39c" style="width:80px;height:80px"></lord-icon>
                                        <h5 class="fs-16 mt-2">RQK Logística</h5>
                                        <p class="text-muted mb-0">ID: MFDS1400457854</p>
                                        <p class="text-muted mb-0">Forma de Pago: Tarjeta de Débito</p>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->

                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex">
                                        <h5 class="card-title flex-grow-1 mb-0">Detalles del cliente</h5>
                                        <div class="flex-shrink-0">
                                            <a href="javascript:void(0);" class="link-secondary">Ver perfil</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mb-0 vstack gap-3">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-sm rounded shadow">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="fs-14 mb-1">Joseph Parkers</h6>
                                                    <p class="text-muted mb-0">Cliente</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li><i class="ri-mail-line me-2 align-middle text-muted fs-16"></i>josephparker@gmail.com</li>
                                        <li><i class="ri-phone-line me-2 align-middle text-muted fs-16"></i>+(256) 245451 441</li>
                                    </ul>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0"><i class="ri-map-pin-line align-middle me-1 text-muted"></i> Dirección de Envio</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled vstack gap-2 fs-13 mb-0">
                                        <li class="fw-medium fs-14">Joseph Parker</li>
                                        <li>+(256) 245451 451</li>
                                        <li>2186 Joyce Street Rocky Mount</li>
                                        <li>New York - 25645</li>
                                        <li>Estado Unidos</li>
                                    </ul>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0"><i class="ri-map-pin-line align-middle me-1 text-muted"></i> Dirección de Envio</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled vstack gap-2 fs-13 mb-0">
                                        <li class="fw-medium fs-14">Joseph Parker</li>
                                        <li>+(256) 245451 451</li>
                                        <li>2186 Joyce Street Rocky Mount</li>
                                        <li>California - 24567</li>
                                        <li>Estados Unidos</li>
                                    </ul>
                                </div>
                            </div>
                            <!--end card-->

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0"><i class="ri-secure-payment-line align-bottom me-1 text-muted"></i> Detalles del pago</h5>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0">Actas:</p>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <h6 class="mb-0">#VLZ124561278124</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0">Método de pago:</p>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <h6 class="mb-0">Tarjeta de débito</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0">Nombre del titular de la tarjeta:</p>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <h6 class="mb-0">Joseph Parker</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0">Número de tarjeta:</p>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <h6 class="mb-0">xxxx xxxx xxxx 2456</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0">Cantidad total:</p>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <h6 class="mb-0">$415.96</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div><!-- container-fluid -->
            </div><!-- End Page-content -->

            <?php include "../layouts/footer.template.php"; ?>
           
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <?php include "../layouts/scripts.template.php"; ?>
</body>


</html>