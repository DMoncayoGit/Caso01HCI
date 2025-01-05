<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ubicaciones</title>
        <!-- Bootstrap -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- DataTables -->
        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="dashboard/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

        
    </head>

    <body >
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar -->
            <a class="navbar-brand ps-3" href="index.html">S.G.E</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>  
        </nav>

        <div id="layoutSidenav">

            <!-- Menú -->
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Página Principal</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Panel Principal
                            </a>
                            
                            <div class="sb-sidenav-menu-heading">Tablas</div>
                                
                            <a class="nav-link" href="indexEventos.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Eventos
                            </a>
                            <a class="nav-link" href="indexUbicaciones.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-map-marker-alt"></i></div>
                                Ubicaciones
                            </a>
                            <a class="nav-link" href="indexContactos.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                                Contactos
                            </a>
                        </div>
                    </div>

                    <!-- Footer del Menú -->
                    <div class="sb-sidenav-footer">
                        <img src="dashboard/assets/img/sge-blanco.png" height="175" width="175">
                    </div>

                </nav>
            </div> 

            <!-- Contenido Principal -->
            <div id="layoutSidenav_content">    
                <main>
                    <div class="container-fluid px-4">

                        <h1 class="mt-4" align="center">Listado de Ubicaciones</h1>
                        
                        <div class="table-responsive overflow-auto">
                            <br>
                            <!-- Botón para agregar ubicaciones -->
                            <button class="btn btn-primary" id="btnAgregar" data-toggle="modal" data-target="#agregarModal">Agregar Ubicacion</button>
                            <!-- Tabla de ubicaciones -->
                            <table id="ubicacion" class="table table-bordered table-striped" class="display responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Dirección</th>
                                        <th>Latitud</th>
                                        <th>Longitud</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Los datos se cargarán con AJAX -->
                                </tbody>
                            </table>
                            <br>
                        </div>
                        
                        <!-- Modal para Agregar Ubicación -->
                        <div class="modal fade" id="agregarModal" tabindex="-1" aria-labelledby="agregarModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="agregarModalLabel">Agregar Ubicacion</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="formAgregarUbicacion">
                                            <div class="form-group row">
                                                <label for="codigo_ubicacion" class="col-sm-4 col-form-label mb-1">Codigo</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="codigo_ubicacion" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="direccion" class="col-sm-4 col-form-label mb-1">Dirección</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="direccion" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="latitud" class="col-sm-4 col-form-label mb-1">Latitud</label>
                                                <div class="col-sm-8">
                                                    <input type="number" step="0.000001" class="form-control" id="latitud" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="longitud" class="col-sm-4 col-form-label mb-1">Longitud</label>
                                                <div class="col-sm-8">
                                                    <input type="number" step="0.000001" class="form-control" id="longitud" required>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success">Agregar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Modal para Editar Ubicación -->
                        <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editarModalLabel">Editar Ubicación</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <form id="formEditarUbicacion">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="codigo_ubicacionEditar">Codigo</label>
                                                    <input type="text" class="form-control" id="codigo_ubicacionEditar" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="direccionEditar">Direccion</label>
                                                    <input type="text" class="form-control" id="direccionEditar" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="latitudEditar">Latitud</label>
                                                    <input type="number" step="0.000001" class="form-control" id="latitudEditar" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="longitudEditar">Longitud</label>
                                                    <input type="number" step="0.000001" class="form-control" id="longitudEditar" required>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-warning">Editar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal para Confirmar Eliminación -->
                        <div class="modal fade" id="eliminarModal" tabindex="-1" aria-labelledby="eliminarModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="eliminarModalLabel">Eliminar Ubicación</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>¿Está seguro que desea eliminar esta ubicación?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                <!-- Footer  -->
                <footer class="py-4 bg-light mt-auto">
                    <div class="text-muted" style="width: 100%; text-align: center;" >
                        <p>Copyright &copy; Caso Práctico 1 - DMoncayo 2024</p> 
                    </div>
                </footer>
            </div>
        </div> 

        <!-- jQuery, DataTables y Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
        <script src="public_html/js/ScriptUbicaciones.js"></script>
        <script src="dashboard/js/scripts.js"></script>
        
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>


    </body>
</html>

