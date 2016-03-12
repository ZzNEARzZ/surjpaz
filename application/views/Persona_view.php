<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem de Registro de Jueces de Paz</title>
    <link href="<?php echo base_url('assets2/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets2/datatables/css/dataTables.bootstrap.css') ?>" rel="stylesheet">
    <link href="http://getbootstrap.com/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style=" background-color: #003D78;">


<nav class="navbar navbar-default" style="min-width: 560px;" align="center">
    <div class="container-fluid">
        <!-- header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sistema de Registro de Jueces de Paz</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div align="" class="text-right" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio<span class="sr-only">(current)</span></a></li>
                <li><a href="#">Cerrar Sesión</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<nav>

    <div style="font-family: Verdana; float: left; min-width= 100px; ">

        <div class="container">

            <div class="row">
                <div class="col-sm-3">
                    <div class="sidebar-nav">
                        <div class="navbar navbar-default" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".sidebar-navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <span class="visible-xs navbar-brand">Sidebar menu</span>
                            </div>
                            <div class="navbar-collapse collapse sidebar-navbar-collapse" align="center">
                                <ul class="nav navbar-nav" align="center">
                                    <h3 align="center">Menu</h3>
                                    <li class="active" align="center"><a align="center"
                                                                         href="<?php echo base_url('') ?>">Menu
                                            Jueces</a></li>
                                    <li align="center"><a href="#" align="center">Menu Personas</a></li>
                                    <li><a href="<?php echo base_url('Juzgado') ?>">Menu Juzgado</a></li>
                                    <li><a href="#">Menu Usuarios</a></li>
                                    <li><a href="#">Reviews <span class="badge">1,118</span></a></li>
                                </ul>
                                <ul class="nav navbar-nav">

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-haspopup="true" aria-expanded="false">Usuarios <span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">One more separated link</a></li>
                                        </ul>
                                    </li>
                                </ul>


                            </div><!--/.nav-collapse -->
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-md-push-1" style=" background-color: #fff8dc;">
                    <h1 align="center">Sistema de Registro de Jueces de Paz</h1>

                    <h3 align="center" class="bg-primary">Modulo Persona</h3>
                    <br/>
                    <button class="btn btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i>
                        Agregar Nueva Persona-Juez
                    </button>
                    <br/>
                    <br/>

                    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%"
                           style=" background-color: #fff8dc;">
                        <thead>
                        <tr>
                            <th>Dni</th>
                            <th>Nombres</th>
                            <th>Paterno</th>
                            <th>Materno</th>
                            <th>direccion</th>
                            <th>Poblado</th>
                            <th>Genero</th>
                            <th>FechaNac</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Celular</th>
                            <th>Departamento</th>
                            <th>Provincia</th>
                            <th>Distrito</th>
                            <th>Lengua</th>
                            <th>Nivel</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>

                        <tfoot>
                        <tr>
                            <th>Dni</th>
                            <th>Nombres</th>
                            <th>Paterno</th>
                            <th>Materno</th>
                            <th>direccion</th>
                            <th>Poblado</th>
                            <th>genero</th>
                            <th>FechaNac</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Celular</th>
                            <th>Departamento</th>
                            <th>Provincia</th>
                            <th>Distrito</th>
                            <th>Lengua</th>
                            <th>Nivel</th>
                            <th>Accion</th>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>

        </div>

    </div>

    <div class="container">
        <!--
           <h1>Ajax CRUD with Bootstrap modals and Datatables</h1>

            <h3>Person Data</h3>
            <br />
            <button class="btn btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Add Person</button>
            <br />
            <br />
            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr >
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Address</th>
                  <th>Date of Birth</th>
                  <th style="min-width:135px;">Action</th>
                </tr>
              </thead>
              <tbody>
              </tbody>

              <tfoot>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Address</th>
                  <th>Date of Birth</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
             -->
    </div>

    <script src="<?php echo base_url('assets2/jquery/jquery-2.2.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets2/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets2/datatables/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets2/datatables/js/dataTables.bootstrap.js') ?>"></script>

    <script type="text/javascript">

        var save_method; //for save method string
        var table;
        $(document).ready(function () {

            /*$('#table').DataTable( {
             "scrollX": true
             } );
             */
            table = $('#table').DataTable({

                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.

                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo site_url('persona/ajax_list')?>",
                    "type": "POST"
                },

                //Set column definition initialisation properties.
                "columnDefs": [
                    {
                        "targets": [-1], //last column
                        "orderable": false, //set not orderable
                    },
                ],
                "scrollY": 200,
                "scrollX": true,


            });


        });

        function add_person() {
            save_method = 'add';
            $('#form')[0].reset(); // reset form on modals
            $('#modal_form').modal('show'); // show bootstrap modal
            $('.modal-title').text('Agregar Persona'); // Set Title to Bootstrap modal title
        }

        function edit_person(id) {
            save_method = 'update';
            $('#form')[0].reset(); // reset form on modals

            //Ajax Load data from ajax
            $.ajax({
                url: "<?php echo site_url('persona/ajax_edit/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function (data) {

                    $('[name="idPersona"]').val(data.idPersona);
                    $('[name="dni"]').val(data.dni);
                    $('[name="nombres"]').val(data.nombres);
                    $('[name="paterno"]').val(data.paterno);
                    $('[name="materno"]').val(data.materno);
                    $('[name="direccion"]').val(data.direccion);
                    $('[name="poblado"]').val(data.poblado);
                    $('[name="genero"]').val(data.genero);
                    $('[name="fechaNaci"]').val(data.fechaNaci);
                    $('[name="telefono"]').val(data.telefono);
                    $('[name="correo"]').val(data.correo);
                    $('[name="celular"]').val(data.celular);
                    $('[name="ubigeo_idUbigeo"]').val(data.ubigeo_idUbigeo);
                    $('[name="LenguasNativos_idLenguaNativo"]').val(data.LenguasNativos_idLenguaNativo);
                    $('[name="NivelesInstruccion_idNivelInstruccion"]').val(data.NivelesInstruccion_idNivelInstruccion);


                    $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                    $('.modal-title').text('Modificar persona'); // Set title to Bootstrap modal title

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error get data from ajax');
                }
            });
        }

        function reload_table() {
            table.ajax.reload(null, false); //reload datatable ajax
        }

        function save() {
            var url;
            if (save_method == 'add') {
                url = "<?php echo site_url('persona/ajax_add')?>";
            }
            else {
                url = "<?php echo site_url('persona/ajax_update')?>";
            }

            // ajax adding data to database
            $.ajax({
                url: url,
                type: "POST",
                data: $('#form').serialize(),
                dataType: "JSON",
                success: function (data) {
                    //if success close modal and reload ajax table
                    $('#modal_form').modal('hide');
                    reload_table();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error adding / update data');
                }
            });
        }

        function delete_person(id) {
            if (confirm('Estas Seguro de Eliminar?')) {
                // ajax delete data to database
                $.ajax({
                    url: "<?php echo site_url('persona/ajax_delete')?>/" + id,
                    type: "POST",
                    dataType: "JSON",
                    success: function (data) {
                        //if success reload ajax table
                        $('#modal_form').modal('hide');
                        reload_table();
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('Error adding / update data');
                    }
                });

            }
        }

    </script>

    <!-- Bootstrap modal -->


    <div class="modal fade" id="modal_form" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Formulario Persona</h3>
                </div>
                <div class="modal-body form" style=" background-color: #fff8dc;">
                    <form action="#" id="form" class="form-horizontal">
                        <input type="hidden" value="" name="idPersona"/>
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">Dni</label>
                                <div class="col-md-9">
                                    <input name="dni" placeholder="Dni" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Nombres</label>
                                <div class="col-md-9">
                                    <input name="nombres" placeholder="Nombres" class="form-control" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Apellido Paterno</label>
                                <div class="col-md-9">
                                    <input name="paterno" placeholder="Apellido Paterno" class="form-control"
                                           type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Apellido Materno</label>
                                <div class="col-md-9">
                                    <input name="materno" placeholder="Apellido Materno" class="form-control"
                                           type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Direccion</label>
                                <div class="col-md-9">
                                    <input name="direccion" placeholder="Direccion" class="form-control" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Procedencia</label>
                                <div class="col-md-9">
                                    <input name="poblado" placeholder="Procedencia" class="form-control" type="text">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3">Genero</label>
                                <div class="col-md-9">
                                    <select name="genero" class="form-control">
                                        <option value="1">Masculino</option>
                                        <option value="0">Femenino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Fecha de Nacimiento</label>
                                <div class="col-md-9">
                                    <input name="fechaNaci" placeholder="yyyy-mm-dd" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">telefono</label>
                            <div class="col-md-9">
                                <input name="telefono" placeholder="telefono" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Correo</label>
                            <div class="col-md-9">
                                <input name="correo" placeholder="correo" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">celular</label>
                            <div class="col-md-9">
                                <input name="celular" placeholder="celular" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Departamento</label>
                            <div class="col-md-9">
                                <input name="ubigeo_idUbigeo" placeholder="departamento" class="form-control"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Lengua Nativa</label>
                            <div class="col-md-9">
                                <input name="LenguasNativos_idLenguaNativo" placeholder="Lengua Nativa"
                                       class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Nivel de Instrucción</label>
                            <div class="col-md-9">
                                <input name="NivelesInstruccion_idNivelInstruccion" placeholder="nivel de instruccion"
                                       class="form-control" type="text">
                            </div>
                        </div>

                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- End Bootstrap modal -->

</nav>
<footer class="footer">
    <div class="container" style=" background-color: #f5f5f5;">
        <p class="text-muted">Desarrollado 2016</p>
    </div>
</footer>
</body>

</html>