<?php 
    
    include "../app/ProductsController.php";
	include "../app/BrandController.php";

	$productController = new ProductsController();
    $productos = $productController->getProducts();

	$brandController = new BrandController();	
	$brands = $brandController->getBrands();

?> 
<?php include "../app/validateLogin.php"; ?>
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
                                        <li class="breadcrumb-item">Tienda</li>
                                        <li class="breadcrumb-item active">Productos</li>
                                    </ol>
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <a href ="<?= BASE_PATH ?>añadirProductos/" class="mb-3 btn btn-primary">Añadir Producto </a>
                    <div class="row">                        
                        <?php  foreach ($productos as $arayP) {?>
                            <div class="col-md-3 p-2">
                                <div class="card" style="width: 18rem;">
                                    
                                    <img src="<?php
                                                if (($arayP->cover) == "https://crud.jonathansoto.mx/storage/products/") {                                                
                                                    echo "https://upload.wikimedia.org/wikipedia/commons/thumb/d/da/Imagen_no_disponible.svg/1200px-Imagen_no_disponible.svg.png";
                                                } else {
                                                    echo $arayP->cover;
                                                }            
                                                // echo $arayP->brand->name;                             
                                            ?> " class="card-img-top" alt="...">

                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $arayP->name ?></h5>
                                        <p class="card-text"><?php echo $arayP->description ?></p>
                                        <p class="card-text">
                                            <?php
                                                if (($arayP->brand) == null) {                                                
                                                    echo "Producto sin brand";
                                                } else {
                                                    echo $arayP->brand->name;
                                                }            
                                                // echo $arayP->brand->name;                             
                                            ?>     
                                        </p>  
                                        <div class="row">
                                            <a href="<?= BASE_PATH."detalle-productos/". $arayP->slug."/"?>" class=" mt-1 btn btn-success col-6">Ver Detalles</a> 
                                            <a  onclick ="editProduct(this)"  data-product='<?php echo json_encode($arayP); ?>' data-bs-toggle="modal" data-bs-target="#editarproduct"  class="mt-1 btn btn-secondary col-6">Editar </a>
                                        </div>                                       
                                        <a onclick="remove(<?php echo $arayP->id ?>)" class="mt-1 btn btn-danger col-12">Eliminar Producto</a>    
                                                                                                    
                                    </div>
                                </div>
                            </div>
                        <?php }?>    
                    </div>
                    <!-- end row -->
                </div>
                <!-- Modal -->
                        <div class="modal fade" id="editarproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar producto</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
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
                                        <input type="hidden" id="inputOculto"  name="action">
                                        <input type="hidden" name="global_token" value="<?= $_SESSION['global_token'] ?>">
                                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                    </div>
                                </form>
                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- end modal -->
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
    <script src="<?= BASE_PATH ?>public/js/logout.js"></script>

    <script type="text/javascript">
        function logout(email) {
            var bodyFormData = new FormData();
            bodyFormData.append('email', email);
            bodyFormData.append('action', 'exit');
            bodyFormData.append('global_token', '<?= $_SESSION['global_token'] ?>')
            
        }
        function remove(id) {
            swal({
                title: "¿Estas seguro?",
                text: "una vez eliminado, no podras reecuperar el producto",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("El producto fue elimidado con exito!", {
                    icon: "success",
                });
                var bodyFormData = new FormData();
                bodyFormData.append('id', id);
                bodyFormData.append('action', 'delete');
                bodyFormData.append('global_token', '<?= $_SESSION['global_token'] ?>');
                console.log(id);
                axios.post('<?= BASE_PATH ?>product',bodyFormData)
                .then(function (response){
                            console.log('hola');
                            
                        })
                        .catch(function (error){
                            console.log('error');
                        })

                

            } else {
                swal("El producto no fue eliminado");
            }
            });  
        }
        function editProduct(target) { 
            document.getElementById('inputOculto').value = 'update';

            let product = JSON.parse(target.getAttribute('data-product'));
            document.getElementById('name').value = product.name;
            document.getElementById('slug').value = product.slug;
            document.getElementById('description').value = product.description;
            document.getElementById('features').value = product.features;
            document.getElementById('brand_id').value = product.brand_id;
            document.getElementById('id').value = product.id;
            

        }
    </script>
</body>

</html>