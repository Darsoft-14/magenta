<?php require_once "vistas/parte_superior.php" ?>

<!-- INICIO del cont principal -->

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Inicio</h1>
                        <!-- tarjetas -->
                        <!-- Content Row -->
                    <div class="row">

                        <!--  Card Buscar -->

                        <div class="col-xl-3 col-md-6 mb-4">
                        	<a style="text-decoration:none" href="buscar.php">
	                            <div class="card border-left-primary shadow h-100 py-2">
	                                <div class="card-body">
	                                    <div class="row no-gutters align-items-center">
	                                        <div class="col mr-2">
	                                            <div class=" font-weight-bold text-primary text-uppercase mb-1">
	                                                Busqueda General</div>
	                                        </div>
	                                        <div class="col-auto">
	                                            <i class="fas fa-search fa-2x text-gray-300"></i>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
                        	</a>
                        </div>

                        <!-- Card insertar -->
                        <div class="col-xl-3 col-md-6 mb-4">
                        	<a style="text-decoration:none" href="nuevo.php">
	                            <div class="card border-left-success shadow h-100 py-2">
	                                <div class="card-body">
	                                    <div class="row no-gutters align-items-center">
	                                        <div class="col mr-2">
	                                            <div class="font-weight-bold text-success text-uppercase mb-1">
	                                                General Agregar</div>
	                                        </div>
	                                        <div class="col-auto">
	                                            <i class="fas fa-edit fa-2x text-gray-300"></i>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </a>
                        </div>

                        <!-- Card clientes -->
                        <div class="col-xl-3 col-md-6 mb-4">
                        	<a style="text-decoration:none" href="clientes.php">
	                            <div class="card border-left-info shadow h-100 py-2">
	                                <div class="card-body">
	                                    <div class="row no-gutters align-items-center">
	                                        <div class="col mr-2">
	                                            <div class="font-weight-bold text-info text-uppercase mb-1">Clientes
	                                            </div>                  
	                                        </div>
	                                        <div class="col-auto">
	                                            <i class="fas fa-address-card fa-2x text-gray-300"></i>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </a>
                        </div>

                        <!-- Card Reportes -->
                        <div class="col-xl-3 col-md-6 mb-4">
                        	<a style="text-decoration:none" href="reportes.php">
	                            <div class="card border-left-warning shadow h-100 py-2">
	                                <div class="card-body">
	                                    <div class="row no-gutters align-items-center">
	                                        <div class="col mr-2">
	                                            <div class="font-weight-bold text-warning text-uppercase mb-1">
	                                                Reportes</div>
	                                        </div>
	                                        <div class="col-auto">
	                                            <i class="fas fa-fw fa-chart-area fa-2x text-gray-300"></i>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </a>
                        </div><!-- tarjetas -->
                    </div>
                       
                      
                    </div>
                </main>
               
            </div>



<!-- FIN del cont principal -->

<?php require_once "vistas/parte_inferior.php" ?>