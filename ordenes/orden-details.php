<?php 
        include "../app/OrderController.php";
        include "../app/LevelController.php";
        $idTemp=$_GET["slug"];  

        $tempLevel = new LevelController;    
        $Levels = $tempLevel->getLevels();  
    
        $etiqueta = new OrderController;    
        $Order = $etiqueta->getOrder($idTemp);        
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
                                        <li class="breadcrumb-item"><a href="<?= BASE_PATH ?>productos/">Productos</a></li>
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
                                        <h5 class="card-title flex-grow-1 mb-0">Folio #<?= $Order->folio ?></h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table table-nowrap align-middle table-borderless mb-0">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th scope="col">Detalles de producto</th>
                                                    <th scope="col" class="text-end">Precio del articulo</th>
                                                </tr>
                                            </thead>
                                            <tbody>         
                                                <?php foreach ($Order->presentations as $arrayPresent) { ?>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                                    <img src="https://crud.jonathansoto.mx/storage/products/<?php echo $arrayPresent->cover ?> " class="img-fluid d-block" alt="..."/>
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h5 class="fs-15"><a href="apps-ecommerce-product-details.html" class="link-primary"><?= $arrayPresent->description ?></a></h5>
                                                                    <p class="text-muted mb-0">Tamaño: <span class="fw-medium"><?php echo $arrayPresent->weight_in_grams ?> gr</span></p>
                                                                    <p class="text-muted mb-0">Codigo: <span class="fw-medium"><?php echo $arrayPresent->code ?> </span></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="fw-medium text-end">
                                                            $<?= $arrayPresent->current_price->amount ?>
                                                        </td>
                                                    </tr>
                                                <?php }?>
                                                <tr class="border-top border-top-dashed">
                                                    <td colspan="1"></td>
                                                    <td colspan="1" class="fw-medium p-0">
                                                        <table class="table table-borderless mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Cupon  <span class="text-muted">  </span>  :</td>
                                                                    <td class="text-muted text-end">
                                                                        <?php
                                                                            if (($Order->coupon) == null) {                                                
                                                                                echo " No aplica ";
                                                                            } else {
                                                                                echo $Order->coupon->code;
                                                                            }            
                                                                            // echo $arayP->brand->name;                             
                                                                        ?> 
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-top border-top-dashed">
                                                                    <th scope="row">Total (MXN) :</th>
                                                                    <th class="text-end">$<?= $Order->total ?>l</th>
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
                            
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-xl-3">
                            <!--end card-->

                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex">
                                        <h5 class="card-title flex-grow-1 mb-0">Detalles del cliente</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mb-0 vstack gap-3">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="fs-14 mb-1"><?= $Order->client->name ?></h6>
                                                    <p class="text-muted mb-0">
                                                        <?php foreach ($Levels as $arrayLevel) { 
                                                            if (($arrayLevel->id) == ($Order->client->level_id)) {                                                
                                                                echo $arrayLevel->name;
                                                            }   
                                                         }?>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li><i class="ri-mail-line me-2 align-middle text-muted fs-16"></i><?= $Order->client->email ?></li>
                                        <li><i class="ri-phone-line me-2 align-middle text-muted fs-16"></i><?= $Order->client->phone_number ?></li>
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
                                        <li class="fw-medium fs-14">Nombre: <?= $Order->address->first_name ?> <?= $Order->address->last_name ?></li>
                                        <li>Numero de telefono: <?= $Order->address->phone_number ?></li>
                                        <li>Direccion: <?= $Order->address->street_and_use_number ?></li>
                                        <li>Codigo postal: <?= $Order->address->postal_code ?></li>
                                        <li>Ciudad: <?= $Order->address->city ?></li>
                                        <li>Estado: <?= $Order->address->province ?></li>
                                    </ul>
                                </div>
                            </div>
                            <!--end card-->

                            
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