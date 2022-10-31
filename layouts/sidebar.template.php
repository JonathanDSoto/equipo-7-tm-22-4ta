        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Light Logo-->
                <a href="../products/index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= BASE_PATH ?>public/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= BASE_PATH ?>public/images/logo-light.png" alt="" height="40">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?= BASE_PATH ?>perfil-usuarios/">
                                <i class="ri-group-line"></i> <span data-key="t-widgets">Usuarios</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?= BASE_PATH ?>clientes/">
                                <i class="ri-account-circle-line"></i> <span data-key="t-dashboards">Clientes</span>
                            </a>
                            
                        </li> 

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?= BASE_PATH ?>productos/"> 
                                <i  class=" ri-shopping-basket-2-line"></i> <span data-key="t-widgets">Productos</span>
                            </a>
                        </li> 

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?= BASE_PATH ?>catalogos/">
                                <i class="bx bx-book-open"></i> <span data-key="t-maps">Catálogos</span>
                            </a>
                        </li>
 
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?= BASE_PATH ?>cupones/">
                                <i class=" ri-price-tag-3-line"></i> <span data-key="t-maps">Cupones</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_PATH ?>ordenes/">
                                <i class="ri-newspaper-line"></i> <span data-key="t-maps">Ordenes</span>
                            </a>

                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
