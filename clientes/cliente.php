<?php 
    include "../app/ClientController.php";
    include "../app/LevelController.php";

    $tempLevel = new LevelController;    
    $Levels = $tempLevel->getLevels();  

    $tempClient = new ClientController();
    $clientes = $tempClient->getClients();
    // var_dump($clientes);
    
?>
<!doctype html>
<?php include "../app/validateLogin.php"; ?>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">



<head>
    <?php include "../layouts/head.template.php"; ?>
    <title>Clientes | Velzon </title>
    
    <!-- swiper css -->
    <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">
</head>

<body>

    <?php include "../layouts/nav.template.php"; ?>
    <?php include "../layouts/sidebar.template.php"; ?>


    <div id="layout-wrapper">

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Clientes</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Página</a></li>
                                        <li class="breadcrumb-item active">Clientes</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" id="orderList">
                                <div class="card-header  border-0">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <button onclick="addCliente()" class="btn btn-success add-btn" data-bs-toggle="modal"  data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Crear cliente</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card-body pt-0">
                                    <div>
                                        <ul class="nav nav-tabs nav-tabs-custom nav-success mb-3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active All py-3" data-bs-toggle="tab" id="All" href="#home1" role="tab" aria-selected="true">
                                                    <i class=" ri-team-line me-1 align-bottom"></i> Todos los clientes
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="table-responsive table-card mb-1">
                                            <table class="table table-nowrap align-middle" id="orderTable">
                                                <thead class="text-muted table-light">
                                                    <tr class="text-uppercase">                                                       
                                                        <th class="sort" data-sort="id">ID</th>
                                                        <th class="sort" data-sort="customer_name">Nombre del cliente</th>
                                                        <th class="sort" data-sort="product_name">Numero de telefono</th>
                                                        <th class="sort" data-sort="date">Correo electrónico</th>
                                                        <th class="sort" data-sort="payment">Orden</th>
                                                        <th class="sort" data-sort="status">Nivel</th>
                                                        <th class="sort" data-sort="city">Acción</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <?php foreach ($clientes as $arrayClientes) { ?>
                                                        <tr>
                                                            <td class="id"><?= $arrayClientes->id ?></td>
                                                            <td class="customer_name"> <?= $arrayClientes->name ?> </td>
                                                            <td class="product_name"> <?= $arrayClientes->phone_number ?></td>
                                                            <td class="date"><?= $arrayClientes->email ?></td>
                                                            <td>
                                                                <?php foreach ($arrayClientes->orders as $arrayOrders) { ?>
                                                                    <a href="<?= BASE_PATH."detalles-ordenes/".$arrayOrders->id?>"><?= $arrayOrders->folio ?></a><br>
                                                                <?php }?>
                                                            </td>
                                                           
                                                            <td class="payment">
                                                            <?php foreach ($Levels as $arrayLevel) { 
                                                                if (($arrayLevel->id) == ($arrayClientes->level->id)) {                                                
                                                                    echo $arrayLevel->name;
                                                                }   
                                                            }?>
                                                            </td>
                                                            
                                                            <td>
                                                                <ul class="list-inline hstack gap-2 mb-0">
                                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Editar">
                                                                        <a onclick ="editCliente(this)" data-product='<?php echo json_encode($arrayClientes); ?>' data-bs-toggle="modal" data-bs-target="#showModal" class="text-primary d-inline-block edit-item-btn">
                                                                            <i class="ri-pencil-fill fs-16"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Eliminar">
                                                                        <a onclick="remove(<?php echo $arrayClientes->id ?>)" class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                            <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    <?php }?>                                                    
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel">&nbsp;</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                            <!-- ($name, $email, $password, $phone_number, $is_suscribed, $level_id){ -->
                                                <form action="<?= BASE_PATH ?>cliente" method="post" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <input type="hidden" id="id-field" />

                                                        <div class="mb-3">
                                                            <label for="customername-field" class="form-label">Nombre</label>
                                                            <input pattern="[a-zA-Z\s]{3,255}"type="text" id="name" name="name" class="form-control" placeholder="nombre..." required />
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="customername-field" class="email" class="form-control" placeholder="correo..." required >email</label>
                                                            <input pattern="\b[\w.%+-]+@[\w.-]+\.[a-zA-Z]{2,4}" type="email" id="email" name="email" class="form-control" placeholder="email..." required />

                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="customername-field" class="email" class="form-control" placeholder="correo..." required >contraseña</label>
                                                            <input pattern="([\w\d\s/!%$@#?])+" title="La contraseña solo acepta letras, números y caracteres especiales (@ ! ? $ % #)." type="password" id="password" name="password" class="form-control" placeholder="contraseña..." required />
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="customername-field" class="email" class="form-control" placeholder="correo..." required >Telefono</label>
                                                            <input pattern="[0-9]{10}" title="El teléfono solo acepta números de 10 dígitos."type="text" id="phone_number" name="phone_number" class="form-control" placeholder="telefono..." required />
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="customername-field" class="email" class="form-control" placeholder="correo..." required >is_suscribed</label>
                                                            <input pattern="1" title="Debe ser 1."type="text" id="is_suscribed" name="is_suscribed" class="form-control" placeholder="Suscribed..."  required />
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="productname-field" class="form-label">Nivel</label>
                                                            <select class="form-select" data-trigger name="level_id" id="level_id">
                                                                <?php foreach($Levels as $arrayLevel){ ?>
                                                                    <option value="<?php echo $arrayLevel ->id ?>"> <?php echo $arrayLevel->name ?> </option>
                                                                <?php }?>
                                                            </select>
                                                        </div>

                                                        

                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <input type="hidden" name="id" id="id">
                                                            <input type="hidden" id="inputOculto"  name="action">
                                                            <input type="hidden" name="global_token" value="<?= $_SESSION['global_token'] ?>">
                                                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    
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

            <?php include "../layouts/footer.template.php";?>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <script type="text/javascript">
        function remove(id) {
            swal({
                title: "Estas seguro?",
                text: "No podras recuperar el usuario",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Poof! El usuario fue eliminado!", {
                    icon: "success",
                });
                var bodyFormData = new FormData();
                bodyFormData.append('id', id);
                bodyFormData.append('action', 'delete');
                bodyFormData.append('global_token', '<?= $_SESSION['global_token'] ?>');
                axios.post('<?= BASE_PATH ?>cliente',bodyFormData)
                .then(function (response){
                            console.log('hola');
                            
                        })
                        .catch(function (error){
                            console.log('error');
                        })

                 

            } else {
                swal("Usuario NO eliminado!");
            }
            });  
        }

        function addCliente() {

            document.getElementById('inputOculto').value = 'create';
            document.getElementById('name').value = "";
            document.getElementById('email').value = "";
            document.getElementById('password').value = "";
            document.getElementById('phone_number').value = "";
            document.getElementById('is_suscribed').value = "";
            document.getElementById('level_id').value = "";
        }

        function editCliente(target) { 
            document.getElementById('inputOculto').value = 'update';

            let product = JSON.parse(target.getAttribute('data-product'));
            document.getElementById('name').value = product.name;
            document.getElementById('email').value = product.email;
            document.getElementById('password').value = product.password;
            document.getElementById('phone_number').value = product.phone_number;
            document.getElementById('is_suscribed').value = product.is_suscribed;
            document.getElementById('level_id').value = product.level_id;
            document.getElementById('id').value = product.id;

        }
    </script>

    <?php include "../layouts/scripts.template.php"; ?>    

    <!-- list.js min js -->
    <script src="assets/libs/list.js/list.min.js"></script>

    <!--list pagination js-->
    <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

</body>


</html>