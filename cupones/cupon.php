<?php 
    include "../app/config.php";
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<head>
    <?php include "../layouts/head.template.php"; ?>  
    <title>Cupones | Velzon </title>
   
    <!-- Sweet Alert css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php include "../layouts/nav.template.php"; ?>
    <?php include "../layouts/sidebar.template.php"; ?>
    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Cupones</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Página</a></li>
                                        <li class="breadcrumb-item active">Cupones</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="fw-medium text-muted mb-0">Total de Cupones</p>
                                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="234">0</span>k</h2>
                                            <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0"> <i class="ri-arrow-up-line align-middle"></i> 17.32 %</span> altas </p>
                                        </div>
                                        <div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-info rounded-circle fs-4">
                                                    <i class="ri-ticket-2-line"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div> <!-- end card-->
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="fw-medium text-muted mb-0">Cupones pendinetes</p>
                                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="64.5">0</span>k</h2>
                                            <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0"> <i class="ri-arrow-down-line align-middle"></i> 0.87 %</span> modificados</p>
                                        </div>
                                        <div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-warning rounded-circle fs-4">
                                                    <i class="mdi mdi-timer-sand"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="fw-medium text-muted mb-0">Cupones usados</p>
                                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="116.21">0</span>K</h2>
                                            <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                                    <i class="ri-arrow-down-line align-middle"></i> 2.52 %
                                                </span> vs. previous month</p>
                                        </div>
                                        <div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success rounded-circle fs-4">
                                                    <i class="ri-checkbox-circle-line"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="fw-medium text-muted mb-0">Cupones eliminados</p>
                                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="14.84">0</span>%</h2>
                                            <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0">
                                                    <i class="ri-arrow-up-line align-middle"></i> 0.63 %
                                                </span> bajas</p>
                                        </div>
                                        <div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-secondary rounded-circle fs-4">
                                                    <i class="ri-delete-bin-line"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" id="tasksList">
                                <div class="card-header border-0">
                                    <div class="d-flex align-items-center">
                                        <h5 class="card-title mb-0 flex-grow-1">Todos los cupones</h5>
                                        
                                    </div>
                                </div>
                                
                                <div class="card-body">
                                    <div class="table-responsive table-card mb-4">
                                        <table class="table align-middle table-nowrap mb-0" id="tasksTable">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th scope="col" style="width: 40px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                        </div>
                                                    </th>
                                                    <th class="sort" data-sort="id">ID</th>
                                                    <th class="sort" data-sort="project_name">Folio</th>
                                                    <th class="sort" data-sort="tasks_name">Nombre Cupon</th>
                                                    <th class="sort" data-sort="client_name">Nom Cliente</th>
                                                    <th class="sort" data-sort="assignedto">Utilizado</th>
                                                    <th class="sort" data-sort="due_date">Fecha </th>
                                                    <th class="sort" data-sort="status">Porcentaje</th>
                                                    <th class="sort" data-sort="priority">Orden</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id"><a href="apps-tasks-details.html" class="fw-medium link-primary">#VLZ501</a></td>
                                                    <td class="project_name"><a href="apps-projects-overview.html" class="fw-medium link-primary">Velzon -
                                                            v1.0.0</a></td>
                                                    <td>
                                                        <div class="flex-grow-1 tasks_name">Profile Page Satructure</div>
                                                    </td>
                                                    <td class="client_name">Robert McMahon</td>
                                                    <td class="assignedto">
                                                        <div class="avatar-group">
                                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Frank">
                                                                <img src="<?= BASE_PATH ?>public/images/users/avatar-3.jpg"  alt="" class="rounded-circle avatar-xxs"/>
                                                            </a>
                                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Anna">
                                                                <img src="<?= BASE_PATH ?>public/images/users/avatar-2.jpg"  alt="" class="rounded-circle avatar-xxs"/>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="due_date">25 Jan, 2022</td>
                                                    <td class="status"><span class="badge badge-soft-secondary text-uppercase">10%</span></td>
                                                    <td class="priority"><span class="badge bg-danger text-uppercase">High</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                    <div class="d-flex justify-content-end mt-2">
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
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body p-5 text-center">
                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                    <div class="mt-4 text-center">
                                        <h4>You are about to delete a task ?</h4>
                                        <p class="text-muted fs-14 mb-4">Deleting your task will remove all of
                                            your information from our database.</p>
                                        <div class="hstack gap-2 justify-content-center remove">
                                            <button class="btn btn-link btn-ghost-success fw-medium text-decoration-none" id="deleteRecord-close" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                            <button class="btn btn-danger" id="delete-record">Yes, Delete It</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end delete modal -->

                    <div class="modal fade zoomIn" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content border-0">
                                <div class="modal-header p-3 bg-soft-info">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Task</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                </div>
                                <form action="#">
                                    <div class="modal-body">
                                        <input type="hidden" id="tasksId" />
                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <label for="projectName-field" class="form-label">Project Name</label>
                                                <input type="text" id="projectName-field" class="form-control" placeholder="Project name" required />
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div>
                                                    <label for="tasksTitle-field" class="form-label">Title</label>
                                                    <input type="text" id="tasksTitle-field" class="form-control" placeholder="Title" required />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <label for="clientName-field" class="form-label">Client Name</label>
                                                <input type="text" id="clientName-field" class="form-control" placeholder="Client name" required />
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <label class="form-label">Assigned To</label>
                                                <div data-simplebar style="height: 95px;">
                                                    <ul class="list-unstyled vstack gap-2 mb-0">
                                                        <li>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input me-3" type="checkbox" name="assignedTo[]" value="avatar-1.jpg" id="anna-adame">
                                                                <label class="form-check-label d-flex align-items-center" for="anna-adame">
                                                                    <span class="flex-shrink-0">
                                                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xxs rounded-circle">
                                                                    </span>
                                                                    <span class="flex-grow-1 ms-2">
                                                                        Anna Adame
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input me-3" type="checkbox" name="assignedTo[]" value="avatar-3.jpg" id="frank-hook">
                                                                <label class="form-check-label d-flex align-items-center" for="frank-hook">
                                                                    <span class="flex-shrink-0">
                                                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xxs rounded-circle">
                                                                    </span>
                                                                    <span class="flex-grow-1 ms-2">
                                                                        Frank Hook
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input me-3" type="checkbox" name="assignedTo[]" value="avatar-6.jpg" id="alexis-clarke">
                                                                <label class="form-check-label d-flex align-items-center" for="alexis-clarke">
                                                                    <span class="flex-shrink-0">
                                                                        <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xxs rounded-circle">
                                                                    </span>
                                                                    <span class="flex-grow-1 ms-2">
                                                                        Alexis Clarke
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input me-3" type="checkbox" name="assignedTo[]" value="avatar-2.jpg" id="herbert-stokes">
                                                                <label class="form-check-label d-flex align-items-center" for="herbert-stokes">
                                                                    <span class="flex-shrink-0">
                                                                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xxs rounded-circle">
                                                                    </span>
                                                                    <span class="flex-grow-1 ms-2">
                                                                        Herbert Stokes
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input me-3" type="checkbox" name="assignedTo[]" value="avatar-7.jpg" id="michael-morris">
                                                                <label class="form-check-label d-flex align-items-center" for="michael-morris">
                                                                    <span class="flex-shrink-0">
                                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xxs rounded-circle">
                                                                    </span>
                                                                    <span class="flex-grow-1 ms-2">
                                                                        Michael Morris
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input me-3" type="checkbox" name="assignedTo[]" value="avatar-5.jpg" id="nancy-martino">
                                                                <label class="form-check-label d-flex align-items-center" for="nancy-martino">
                                                                    <span class="flex-shrink-0">
                                                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xxs rounded-circle">
                                                                    </span>
                                                                    <span class="flex-grow-1 ms-2">
                                                                        Nancy Martino
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input me-3" type="checkbox" name="assignedTo[]" value="avatar-8.jpg" id="thomas-taylor">
                                                                <label class="form-check-label d-flex align-items-center" for="thomas-taylor">
                                                                    <span class="flex-shrink-0">
                                                                        <img src="assets/images/users/avatar-8.jpg" alt="" class="avatar-xxs rounded-circle">
                                                                    </span>
                                                                    <span class="flex-grow-1 ms-2">
                                                                        Thomas Taylor
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input me-3" type="checkbox" name="assignedTo[]" value="avatar-10.jpg" id="tonya-noble">
                                                                <label class="form-check-label d-flex align-items-center" for="tonya-noble">
                                                                    <span class="flex-shrink-0">
                                                                        <img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xxs rounded-circle">
                                                                    </span>
                                                                    <span class="flex-grow-1 ms-2">
                                                                        Tonya Noble
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <label for="duedate-field" class="form-label">Due Date</label>
                                                <input type="text" id="duedate-field" class="form-control" data-provider="flatpickr" placeholder="Due date" required />
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <label for="ticket-status" class="form-label">Status</label>
                                                <select class="form-control" data-choices data-choices-search-false id="ticket-status">
                                                    <option value="">Status</option>
                                                    <option value="New">New</option>
                                                    <option value="Inprogress">Inprogress</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Completed">Completed</option>
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <label for="priority-field" class="form-label">Priority</label>
                                                <select class="form-control" data-choices data-choices-search-false id="priority-field">
                                                    <option value="">Priority</option>
                                                    <option value="High">High</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-light" id="close-modal" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" id="add-btn">Add Task</button>
                                            <button type="button" class="btn btn-success" id="edit-btn">Update Task</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end modal-->

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

    <!-- titcket init js -->
    <script src="assets/js/pages/tasks-list.init.js"></script>

    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

</body>


</html>