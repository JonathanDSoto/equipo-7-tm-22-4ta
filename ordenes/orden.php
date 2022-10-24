<?php 
    include "../app/config.php";
?> 
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<head>
    <?php include "../layouts/head.template.php"; ?>
    <title>Ordenes | Velzon </title>

    <!-- Sweet Alert css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php include "../layouts/nav.template.php"; ?>
    
    <!-- ========== App Menu ========== -->
    <?php include "../layouts/sidebar.template.php"; ?>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Ordenes</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Productos</a></li>
                                        <li class="breadcrumb-item active">Ordenes</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" id="orderList">
                                <div class="card-header  border-0">
                                    <div class="d-flex align-items-center">
                                        <h5 class="card-title mb-0 flex-grow-1">Historial de pedidos</h5>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Crear orden</button>
                                            <button type="button" class="btn btn-info"><i class="ri-file-download-line align-bottom me-1"></i> Importar</button>
                                            <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border border-dashed border-end-0 border-start-0">
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-xxl-2 col-sm-4">
                                                <div class="search-box">
                                                    <input type="text" class="form-control search" placeholder="Busque ID de pedido o algo...">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-sm-4">
                                                <div>
                                                    <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idEstado">
                                                        <option value="">Estado</option>
                                                        <option value="Pending">Pendiente</option>
                                                        <option value="Inprogress">En proceso</option>
                                                        <option value="Cancelled">Cancelado</option>
                                                        <option value="Returns">Devoluciones</option>
                                                        <option value="Delivered">Entregado</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-sm-4">
                                                <div>
                                                    <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idPayment">
                                                        <option value="">Forma de pago</option>
                                                        <option value="Mastercard"> Tarjeta Mastercard</option>
                                                        <option value="Paypal">Paypal</option>
                                                        <option value="Visa">Visa</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                                <div class="card-body pt-0">
                                    <div>
                                        <ul class="nav nav-tabs nav-tabs-custom nav-success mb-3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active All py-3" data-bs-toggle="tab" id="All" href="#home1" role="tab" aria-selected="true">
                                                    <i class="ri-store-2-fill me-1 align-bottom"></i> Todas las órdenes
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-3 Delivered" data-bs-toggle="tab" id="Delivered" href="#delivered" role="tab" aria-selected="false">
                                                    <i class="ri-checkbox-circle-line me-1 align-bottom"></i> Entregado
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-3 Returns" data-bs-toggle="tab" id="Returns" href="#returns" role="tab" aria-selected="false">
                                                    <i class="ri-arrow-left-right-fill me-1 align-bottom"></i> Devoluciones
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-3 Cancelled" data-bs-toggle="tab" id="Cancelled" href="#cancelled" role="tab" aria-selected="false">
                                                    <i class="ri-close-circle-line me-1 align-bottom"></i> Cancelado
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="table-responsive table-card mb-1">
                                            <table class="table table-nowrap align-middle" id="orderTable">
                                                <thead class="text-muted table-light">
                                                    <tr class="text-uppercase">
                                                        <th scope="col" style="width: 25px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                            </div>
                                                        </th>
                                                        <th class="sort" data-sort="id">ID</th>
                                                        <th class="sort" data-sort="customer_name">Cliente</th>
                                                        <th class="sort" data-sort="product_name">Producto</th>
                                                        <th class="sort" data-sort="date">Fecha de Orden</th>
                                                        <th class="sort" data-sort="amount">Monto</th>
                                                        <th class="sort" data-sort="payment">Método de Pago</th>
                                                        <th class="sort" data-sort="status">Estado de entrega</th>
                                                        <th class="sort" data-sort="city">Acción</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id"><a href="#" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="customer_name">Frank Hook</td>
                                                        <td class="product_name">Puma Tshirt</td>
                                                        <td class="date">20 Dec, 2021, <small class="text-muted">02:21 AM</small></td>
                                                        <td class="amount">$654</td>
                                                        <td class="payment">Mastercard</td>
                                                        <td class="status"><span class="badge badge-soft-warning text-uppercase">Pendiente</span>
                                                        </td>
                                                        <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Ver">
                                                                    <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                                        <i class="ri-eye-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Editar">
                                                                    <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                        <i class="ri-pencil-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Eliminar">
                                                                    <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <div class="pagination-wrap hstack gap-2">
                                                <a class="page-item pagination-prev disabled" href="#">
                                                    Anterior
                                                </a>
                                                <ul class="pagination listjs-pagination mb-0"></ul>
                                                <a class="page-item pagination-next" href="#">
                                                    Siguiente
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel">&nbsp;</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form action="#">
                                                    <div class="modal-body">
                                                        <input type="hidden" id="id-field" />

                                                        <div class="mb-3" id="modal-id">
                                                            <label for="orderId" class="form-label">ID</label>
                                                            <input type="text" id="orderId" class="form-control" placeholder="ID" readonly />
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="customername-field" class="form-label">Customer Name</label>
                                                            <input type="text" id="customername-field" class="form-control" placeholder="Enter name" required />
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="productname-field" class="form-label">Product</label>
                                                            <select class="form-control" data-trigger name="productname-field" id="productname-field">
                                                                <option value="">Product</option>
                                                                <option value="Puma Tshirt">Puma Tshirt</option>
                                                                <option value="Adidas Sneakers">Adidas Sneakers</option>
                                                                <option value="350 ml Glass Grocery Container">350 ml Glass Grocery Container</option>
                                                                <option value="American egale outfitters Shirt">American egale outfitters Shirt</option>
                                                                <option value="Galaxy Watch4">Galaxy Watch4</option>
                                                                <option value="Apple iPhone 12">Apple iPhone 12</option>
                                                                <option value="Funky Prints T-shirt">Funky Prints T-shirt</option>
                                                                <option value="USB Flash Drive Personalized with 3D Print">USB Flash Drive Personalized with 3D Print</option>
                                                                <option value="Oxford Button-Down Shirt">Oxford Button-Down Shirt</option>
                                                                <option value="Classic Short Sleeve Shirt">Classic Short Sleeve Shirt</option>
                                                                <option value="Half Sleeve T-Shirts (Blue)">Half Sleeve T-Shirts (Blue)</option>
                                                                <option value="Noise Evolve Smartwatch">Noise Evolve Smartwatch</option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="date-field" class="form-label">Order Date</label>
                                                            <input type="date" id="date-field" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-enable-time required placeholder="Select date" />
                                                        </div>

                                                        <div class="row gy-4 mb-3">
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label for="amount-field" class="form-label">Amount</label>
                                                                    <input type="text" id="amount-field" class="form-control" placeholder="Total amount" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label for="payment-field" class="form-label">Payment Method</label>
                                                                    <select class="form-control" data-trigger name="payment-method" id="payment-field">
                                                                        <option value="">Payment Method</option>
                                                                        <option value="Mastercard">Mastercard</option>
                                                                        <option value="Visa">Visa</option>
                                                                        <option value="COD">COD</option>
                                                                        <option value="Paypal">Paypal</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <label for="delivered-status" class="form-label">Delivery Status</label>
                                                            <select class="form-control" data-trigger name="delivered-status" id="delivered-status">
                                                                <option value="">Delivery Status</option>
                                                                <option value="Pending">Pending</option>
                                                                <option value="Inprogress">Inprogress</option>
                                                                <option value="Cancelled">Cancelled</option>
                                                                <option value="Pickups">Pickups</option>
                                                                <option value="Delivered">Delivered</option>
                                                                <option value="Returns">Returns</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" id="add-btn">Add Order</button>
                                                            <button type="button" class="btn btn-success" id="edit-btn">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body p-5 text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                                    <div class="mt-4 text-center">
                                                        <h4>¿Está a punto de eliminar un pedido?</h4>
                                                        <p class="text-muted fs-15 mb-4">Eliminar su pedido eliminará toda su información de nuestra base de datos.</p>
                                                        <div class="hstack gap-2 justify-content-center remove">
                                                            <button class="btn btn-link link-success fw-medium text-decoration-none" id="deleteRecord-close" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</button>
                                                            <button class="btn btn-danger" id="delete-record">Si, Eliminalo</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end modal -->
                                </div>
                            </div>

                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

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
    
    <!-- list.js min js -->
    <script src="assets/libs/list.js/list.min.js"></script>

    <!--list pagination js-->
    <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

    <!-- ecommerce-order init js -->
    <script src="assets/js/pages/ecommerce-order.init.js"></script>

    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
</body>


</html>