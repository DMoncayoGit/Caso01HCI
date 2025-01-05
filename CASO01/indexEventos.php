<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Eventos</title>
        <!-- Bootstrap -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- DataTables -->
        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="dashboard/css/styles.css" rel="stylesheet" />
        
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
        
        
    </head>

    <body>

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar-->
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

                        <h1 class="mt-4" align="center">Listado de Eventos</h1>
                    
                        <div class="table-responsive overflow-auto" >
                            <br>
                            <!-- Botón para agregar eventos -->
                            <button class="btn btn-primary" id="btnAgregar" data-toggle="modal" data-target="#agregarModal">Agregar Evento</button>
                            <!-- Tabla de eventos -->
                            <table id="evento" class="table table-bordered table-striped" class="display responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Evento</th>
                                        <th>Descripción</th>
                                        <th>Fecha</th>
                                        <th>Zona Horaria</th>
                                        <th>Codigo_Ubicación</th>
                                        <th>Ubicación</th>
                                        <th>Tipo</th>
                                        <th>Clasificación</th>
                                        <th>Invitados</th>
                                        <th>Repetición</th>
                                        <th>Recordatorio</th>
                                        <th>Identificación</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Los datos se cargarán con AJAX -->
                                </tbody>
                            </table>
                            <br>
                        </div>

                        <!-- Modal para Mostrar Evento -->
                        <div class="modal fade" id="detalleModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Detalles del Evento</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Evento:</strong> <span id="detalleCodigo_evento"></span></p>
                                    <p><strong>Tipo:</strong> <span id="detalleTipo"></span></p>
                                    <p><strong>Descripción:</strong> <span id="detalleDescripcion"></span></p>
                                    <p><strong>Clasificacion:</strong> <span id="detalleClasificacion"></span></p>
                                    <p><strong>Fecha:</strong> <span id="detalleFecha"></span></p>
                                    <p><strong>Zona:</strong> <span id="detalleZona"></span></p>
                                    <p><strong>Invitados:</strong> <span id="detalleInvitados"></span></p>
                                    <p><strong>Repeticion:</strong> <span id="detalleRepeticion"></span></p>
                                    <p><strong>Recordatorio:</strong> <span id="detalleRecordatorio"></span></p>
                                    <p><strong>Contacto:</strong> <span id="detalleIdentificacion"></span></p>
                                    <p><strong>Ubicacion:</strong> <span id="detalleCodigo_ubicacion"></span></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                                </div>
                            </div>
                        </div>
                            
                        <!-- Modal para Agregar Evento -->
                        <div class="modal fade" id="agregarModal" tabindex="-1" aria-labelledby="agregarModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="agregarModalLabel">Agregar Eventos</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="formAgregarEvento">
                                            <div class="form-group row">
                                                <label for="codigo_evento" class="col-sm-4 col-form-label mb-1">Código</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="codigo_evento" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tipo" class="col-sm-4 col-form-label mb-1">Tipo</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="tipo" required>
                                                        <option value="">Seleccione un Tipo</option>
                                                        <option value="C">Conferencia</option>
                                                        <option value="T">Taller</option>
                                                        <option value="S">Seminario</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="descripcion" class="col-sm-4 col-form-label mb-1">Descripción</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="descripcion" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="clasificacion" class="col-sm-4 col-form-label mb-1">Clasificación</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="clasificacion" required>
                                                        <option value="">Seleccione una Clasificación</option>
                                                        <option value="1">Corporativos</option>
                                                        <option value="2">Recaudación de Fondos</option>
                                                        <option value="3">Espectáculos</option>
                                                        <option value="4">Deportivos</option>
                                                        <option value="5">Sociales</option>
                                                        <option value="6">Otro</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fecha" class="col-sm-4 col-form-label mb-1">Fecha</label>
                                                <div class="col-sm-8">
                                                    <input type="datetime-local" class="form-control" id="fecha" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="zona" class="col-sm-4 col-form-label mb-1">Zona</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="zona" required>
                                                        <option value="">Seleccione una Zona</option>
                                                        <option value="UTC-5">UTC-5</option>
                                                        <option value="UTC-6">UTC-6</option>
                                                        <option value="UTC-7">UTC-7</option>
                                                        <option value="Desconocida">Desconocida</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="invitados" class="col-sm-4 col-form-label mb-1">Invitados</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="invitados" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="repeticion" class="col-sm-4 col-form-label mb-1">Repetición</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="repeticion" required>
                                                        <option value="">Seleccione si hay Repetición</option>
                                                        <option value="S">Si</option>
                                                        <option value="N">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="recordatorio" class="col-sm-4 col-form-label mb-1">Recordatorio</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="recordatorio" required>
                                                        <option value="">Seleccione si desea un Recordatorio</option>
                                                        <option value="S">Si</option>
                                                        <option value="N">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="identificacion" class="col-sm-4 col-form-label mb-1">Contacto</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="identificacion" required>
                                                        <option value="">Seleccione un Contacto</option>
                                                        <!-- Las opciones se llenarán aquí con jQuery -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="codigo_ubicacion" class="col-sm-4 col-form-label mb-1">Dirección</label>
                                                <div class="col-sm-8">
                                                    <!-- <input type="text" class="form-control" id="codigo_ubicacion" required>-->
                                                    <select class="form-control" id="codigo_ubicacion" required>
                                                        <option value="">Seleccione una Dirección</option>
                                                        <!-- Las opciones se llenarán aquí con jQuery -->
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-success">Agregar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Modal para Editar Evento -->
                        <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editarModalLabel">Editar Eventos</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <form id="formEditarEvento">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="codigo_eventoEditar">Código</label>
                                                    <input type="text" class="form-control" id="codigo_eventoEditar" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="tipoEditar">Tipo</label>
                                                    <select class="form-control" id="tipoEditar" required>
                                                        <option value="">Seleccione un tipo</option>
                                                        <option value="C">Conferencia</option>
                                                        <option value="T">Taller</option>
                                                        <option value="S">Seminario</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="descripcionEditar">Descripción</label>
                                                    <input type="text" class="form-control" id="descripcionEditar" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="clasificacionEditar">Clasificación</label>
                                                    <select class="form-control" id="clasificacionEditar" required>
                                                        <option value="">Seleccione una Clasificación</option>
                                                        <option value="1">Corporativos</option>
                                                        <option value="2">Recaudación de Fondos</option>
                                                        <option value="3">Espectáculos</option>
                                                        <option value="4">Deportivos</option>
                                                        <option value="5">Sociales</option>
                                                        <option value="6">Otro</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="fechaEditar">Fecha</label>
                                                    <input type="datetime-local" class="form-control" id="fechaEditar" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="zonaEditar">Zona</label>
                                                    <select class="form-control" id="zonaEditar" required>
                                                        <option value="">Seleccione una Zona</option>
                                                        <option value="UTC-5">UTC-5</option>
                                                        <option value="UTC-6">UTC-6</option>
                                                        <option value="UTC-7">UTC-7</option>
                                                        <option value="Desconocida">Desconocida</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="invitadosEditar">Invitados</label>
                                                    <input type="number" class="form-control" id="invitadosEditar" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="repeticionEditar">Repetición</label>
                                                    <select class="form-control" id="repeticionEditar" required>
                                                        <option value="">Seleccione si hay Repetición</option>
                                                        <option value="S">Si</option>
                                                        <option value="N">No</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="recordatorioEditar">Recordatorio</label>
                                                    <select class="form-control" id="recordatorioEditar" required>
                                                        <option value="">Seleccione si desea un Recordatorio</option>
                                                        <option value="S">Si</option>
                                                        <option value="N">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="identificacionEditar">Contacto</label>
                                                    <select class="form-control" id="identificacionEditar" required>
                                                        <option value="">Seleccione un Contacto</option>
                                                        <!-- Las opciones se llenarán aquí con jQuery -->
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="codigo_ubicacionEditar">Dirección</label>
                                                    <select class="form-control" id="codigo_ubicacionEditar" required>
                                                        <option value="">Seleccione una Dirección</option>
                                                        <!-- Las opciones se llenarán aquí con jQuery -->
                                                    </select>
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
                                        <h5 class="modal-title" id="eliminarModalLabel">Eliminar Evento</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>¿Está seguro que desea eliminar este Evento?</p>
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
        <script src="public_html/js/ScriptEventos.js"></script>
        <script src="dashboard/js/scripts.js"></script>
        
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        
    </body>
</html>

