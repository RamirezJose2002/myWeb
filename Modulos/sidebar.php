 <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Soda el Edén</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <!-- Foto de Perfil -->
                        <img class="rounded-circle" src="<?php echo $baseURL;?>/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <!-- Nombre de usuario -->
                    <div class="ms-3">
                        <h6 class="mb-0">Jose Ramírez</h6>
                        <span>Administrador</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">

                    <a href="<?php echo $baseURL;?>/index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Inicio</a>

                    <a href="ventas.html" class="nav-item nav-link"><i class="fa fa-book me-2"></i>Ventas</a>

                    <a href="gastos.html" class="nav-item nav-link"><i class="fa fa-comments-dollar me-2"></i>Gastos</a>

                    <a href="facturas.html" class="nav-item nav-link"><i class="fa fa-file me-2"></i>Facturas</a>

                    <a href="<?php echo $baseURL;?>/Menu/menu.php" class="nav-item nav-link"><i class="fa fa-list me-2"></i>Menu</a>

                    <a href="<?php echo $baseURL;?>/usuarios/usuarios.php" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Usuarios</a>
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
        