		<header id="page-topbar">
		    <div class="layout-width">
		        <div class="navbar-header">
		            <div class="d-flex">

		                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
		                    <span class="hamburger-icon">
		                        <span></span>
		                        <span></span>
		                        <span></span>
		                    </span>
		                </button>

		                <!-- App Search-->
		                <form class="app-search d-none d-md-block">
		                    <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
		                        <div data-simplebar style="max-height: 320px;">
		                            <!-- item-->
		                            <div class="dropdown-header">
		                                <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
		                            </div>

		                            <div class="dropdown-item bg-transparent text-wrap">
		                                <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup <i class="mdi mdi-magnify ms-1"></i></a>
		                                <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i class="mdi mdi-magnify ms-1"></i></a>
		                            </div>
		                            <!-- item-->
		                            <div class="dropdown-header mt-2">
		                                <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
		                            </div>

		                            <!-- item-->
		                            <a href="javascript:void(0);" class="dropdown-item notify-item">
		                                <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
		                                <span>Analytics Dashboard</span>
		                            </a>

		                            <!-- item-->
		                            <a href="javascript:void(0);" class="dropdown-item notify-item">
		                                <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
		                                <span>Help Center</span>
		                            </a>

		                            <!-- item-->
		                            <a href="javascript:void(0);" class="dropdown-item notify-item">
		                                <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
		                                <span>My account settings</span>
		                            </a>

		                            <!-- item-->
		                            <div class="dropdown-header mt-2">
		                                <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
		                            </div>

		                            <div class="notification-list">
		                                <!-- item -->
		                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
		                                    <div class="d-flex">
		                                        <img src="<?= BASE_PATH ?>public/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
		                                        <div class="flex-1">
		                                            <h6 class="m-0">Angela Bernier</h6>
		                                            <span class="fs-11 mb-0 text-muted">Manager</span>
		                                        </div>
		                                    </div>
		                                </a>
		                                <!-- item -->
		                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
		                                    <div class="d-flex">
		                                        <img src="<?= BASE_PATH ?>public/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
		                                        <div class="flex-1">
		                                            <h6 class="m-0">David Grasso</h6>
		                                            <span class="fs-11 mb-0 text-muted">Web Designer</span>
		                                        </div>
		                                    </div>
		                                </a>
		                                <!-- item -->
		                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
		                                    <div class="d-flex">
		                                        <img src="<?= BASE_PATH ?>public/images/users/avatar-5.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
		                                        <div class="flex-1">
		                                            <h6 class="m-0">Mike Bunch</h6>
		                                            <span class="fs-11 mb-0 text-muted">React Developer</span>
		                                        </div>
		                                    </div>
		                                </a>
		                            </div>
		                        </div>

		                        <div class="text-center pt-3 pb-1">
		                            <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results <i class="ri-arrow-right-line ms-1"></i></a>
		                        </div>
		                    </div>
		                </form>
		            </div>

		            <div class="d-flex align-items-center">
		                <div class="dropdown topbar-head-dropdown ms-1 header-item">
		                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
		                        <i class='ri-shopping-cart-line fs-22'></i>
		                        <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">5</span>
		                    </button>
		                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart" aria-labelledby="page-header-cart-dropdown">
		                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
		                            <div class="row align-items-center">
		                                <div class="col">
		                                    <h6 class="m-0 fs-16 fw-semibold"> Mi Carrito</h6>
		                                </div>
		                                <div class="col-auto">
		                                    <span class="badge badge-soft-warning fs-13"><span class="cartitem-badge">7</span>
		                                        items</span>
		                                </div>
		                            </div>
		                        </div>
		                        <div data-simplebar style="max-height: 300px;">
		                            <div class="p-2">
		                                
		                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
		                                    <div class="d-flex align-items-center">
		                                        <img src="<?= BASE_PATH ?>public/images/products/img-1.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
		                                        <div class="flex-1">
		                                            <h6 class="mt-0 mb-1 fs-14">
		                                                <a href="apps-ecommerce-product-details.html" class="text-reset">Branded
		                                                    T-Shirts</a>
		                                            </h6>
		                                            <p class="mb-0 fs-12 text-muted">
		                                                Quantity: <span>10 x $32</span>
		                                            </p>
		                                        </div>
		                                        <div class="px-2">
		                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">320</span></h5>
		                                        </div>
		                                        <div class="ps-2">
		                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
		                                        </div>
		                                    </div>
		                                </div>

		                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
		                                    <div class="d-flex align-items-center">
		                                        <img src="<?= BASE_PATH ?>public/images/products/img-2.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
		                                        <div class="flex-1">
		                                            <h6 class="mt-0 mb-1 fs-14">
		                                                <a href="apps-ecommerce-product-details.html" class="text-reset">Bentwood Chair</a>
		                                            </h6>
		                                            <p class="mb-0 fs-12 text-muted">
		                                                Quantity: <span>5 x $18</span>
		                                            </p>
		                                        </div>
		                                        <div class="px-2">
		                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">89</span></h5>
		                                        </div>
		                                        <div class="ps-2">
		                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
		                                        </div>
		                                    </div>
		                                </div>

		                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
		                                    <div class="d-flex align-items-center">
		                                        <img src="<?= BASE_PATH ?>public/images/products/img-3.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
		                                        <div class="flex-1">
		                                            <h6 class="mt-0 mb-1 fs-14">
		                                                <a href="apps-ecommerce-product-details.html" class="text-reset">
		                                                    Borosil Paper Cup</a>
		                                            </h6>
		                                            <p class="mb-0 fs-12 text-muted">
		                                                Quantity: <span>3 x $250</span>
		                                            </p>
		                                        </div>
		                                        <div class="px-2">
		                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">750</span></h5>
		                                        </div>
		                                        <div class="ps-2">
		                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
		                                        </div>
		                                    </div>
		                                </div>

		                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
		                                    <div class="d-flex align-items-center">
		                                        <img src="<?= BASE_PATH ?>public/images/products/img-6.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
		                                        <div class="flex-1">
		                                            <h6 class="mt-0 mb-1 fs-14">
		                                                <a href="apps-ecommerce-product-details.html" class="text-reset">Gray
		                                                    Styled T-Shirt</a>
		                                            </h6>
		                                            <p class="mb-0 fs-12 text-muted">
		                                                Quantity: <span>1 x $1250</span>
		                                            </p>
		                                        </div>
		                                        <div class="px-2">
		                                            <h5 class="m-0 fw-normal">$ <span class="cart-item-price">1250</span></h5>
		                                        </div>
		                                        <div class="ps-2">
		                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
		                                        </div>
		                                    </div>
		                                </div>

		                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
		                                    <div class="d-flex align-items-center">
		                                        <img src="<?= BASE_PATH ?>public/images/products/img-5.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
		                                        <div class="flex-1">
		                                            <h6 class="mt-0 mb-1 fs-14">
		                                                <a href="apps-ecommerce-product-details.html" class="text-reset">Stillbird Helmet</a>
		                                            </h6>
		                                            <p class="mb-0 fs-12 text-muted">
		                                                Quantity: <span>2 x $495</span>
		                                            </p>
		                                        </div>
		                                        <div class="px-2">
		                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">990</span></h5>
		                                        </div>
		                                        <div class="ps-2">
		                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border" id="checkout-elem">
		                            <div class="d-flex justify-content-between align-items-center pb-3">
		                                <h5 class="m-0 text-muted">Total:</h5>
		                                <div class="px-2">
		                                    <h5 class="m-0" id="cart-item-total">$1258.58</h5>
		                                </div>
		                            </div>

		                            <a href="apps-ecommerce-checkout.html" class="btn btn-success text-center w-100">
		                                Comprar
		                            </a>
		                        </div>
		                    </div>
		                </div>

		                <div class="ms-1 header-item d-none d-sm-flex">
		                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" data-toggle="fullscreen">
		                        <i class='bx bx-fullscreen fs-22'></i>
		                    </button>
		                </div>

		                <div class="dropdown ms-sm-3 header-item topbar-user">
		                    <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                        <span class="d-flex align-items-center">
		                            <img class="rounded-circle header-profile-user" src="<?= BASE_PATH ?>public/images/users/avatar-1.jpg" alt="Header Avatar">
		                            <span class="text-start ms-xl-2">
		                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Eridani Lucero</span>
		                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Administrador</span>
		                            </span>
		                        </span>
		                    </button>
		                    <div class="dropdown-menu dropdown-menu-end">
		                        <!-- item-->
		                        
		                        <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Perfil</span></a>
		                        <div class="dropdown-divider"></div>
		                        
		                        
		                        <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Cerrar Sesión</span></a>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</header>