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
			</div>

			<div class="d-flex align-items-center">
				
				<div class="ms-1 header-item d-none d-sm-flex">
					<button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" data-toggle="fullscreen">
						<i class='bx bx-fullscreen fs-22'></i>
					</button>
				</div>

				<div class="dropdown ms-sm-3 header-item topbar-user">
					<button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="d-flex align-items-center">
							<img class="rounded-circle header-profile-user" src="<?= $_SESSION['avatar'] ?>" alt="Header Avatar">
							<span class="text-start ms-xl-2">
								<span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?= $_SESSION['name'] ?></span>
								<span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Administrador</span>
							</span>
						</span>
					</button>
					<div class="dropdown-menu dropdown-menu-end">
						<!-- item-->
						
						<a class="dropdown-item" href="../users/usuario.php"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Perfil</span></a>
						<div class="dropdown-divider"></div>
						<form action="<?= BASE_PATH ?>auth" method="post">
							<input type="hidden" name="action" value="exit"> 
                            <input type="hidden" name="global_token" value="<?= $_SESSION['global_token'] ?>">
                            <button  class="mdi mdi-logout text-muted fs-16 align-middle me-1" type="submit">Cerrar Sesión</button>
						</form>
						<!-- <a class="dropdown-item"  ><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Cerrar Sesión</span></a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</header>