<?php
require("../../partials/routes.php");
require("../../../App/Controladores/PersonaControlador.php");

use App\Controladores\PersonaControlador; ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Editar Persona</title>
    <?php require("../../partials/head_imports.php"); ?>
</head>
<body class="hold-transition sidebar-mini">

<!-- Site wrapper -->
<div class="wrapper">
    <?php require("../../partials/navbar_customization.php"); ?>

    <?php require("../../partials/sliderbar_main_menu.php"); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Editar Nueva Persona</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= $baseURL; ?>/Vistas/">LaborBrand</a></li>
                            <li class="breadcrumb-item active">Inicio</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <?php if(!empty($_GET['respuesta'])){ ?>
                <?php if ($_GET['respuesta'] == "error"){ ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Error!</h5>
                            Error al crear la persona: <?= ($_GET['mensaje']) ?? "" ?>
                    </div>
                <?php } ?>
            <?php } else if (empty($_GET['Id'])) { ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Error!</h5>
                    Faltan criterios de busqueda <?= ($_GET['mensaje']) ?? "" ?>
                </div>
            <?php } ?>

            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Horizontal Form</h3>
                </div>
                <!-- /.card-header -->
                <?php if(!empty($_GET["Id"]) && isset($_GET["Id"])){ ?>
                    <p>
                    <?php
                    $DataPersona = PersonaControlador::searchForID($_GET["Id"]);
                        if(!empty($DataPersona)){
                    ?>
                            <!-- form start -->
                            <form class="form-horizontal" method="post" id="frmEditPersona" name="frmEditPersona" action="../../../App/Controladores/PersonaControlador.php?action=edit">
                                <input id="Id" name="Id" value="<?php echo $DataPersona->getId(); ?>" hidden required="required" type="number">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nombres" class="col-sm-2 col-form-label">Nombres</label>
                                        <div class="col-sm-10">
                                            <input required type="text" class="form-control" id="Nombres" name="Nombres" value="<?= $DataPersona->getNombres(); ?>" placeholder="Ingrese sus nombres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Apellidos" class="col-sm-2 col-form-label">Apellidos</label>
                                        <div class="col-sm-10">
                                            <input required type="text" class="form-control" id="Apellidos" name="Apellidos" value="<?= $DataPersona->getApellidos(); ?>" placeholder="Ingrese sus apellidos">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Tipo_Documento" class="col-sm-2 col-form-label">Tipo Documento</label>
                                        <div class="col-sm-10">
                                            <select id="Tipo_Documento" name="Tipo_Documento" class="custom-select">
                                                <option <?= ($DataPersona->getTipoDocumento() == "T.I") ? "selected":""; ?> value="T.I">Tarjeta de Identidad</option>
                                                <option <?= ($DataPersona->getTipoDocumento() == "C.C") ? "selected":""; ?> value="C.C">Cedula de Ciudadania</option>
                                                <option <?= ($DataPersona->getTipoDocumento() == "C.E") ? "selected":""; ?> value="C.E">Cedula de Extranjeria</option>
                                                <option <?= ($DataPersona->getTipoDocumento() == "Pasaporte") ? "selected":""; ?> value="Pasaporte">Pasaporte</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="N_Documento" class="col-sm-2 col-form-label">Documento</label>
                                        <div class="col-sm-10">
                                            <input required type="number" minlength="6" class="form-control" id="N_Documento" name="N_Documento" value="<?= $DataPersona->getNDocumento(); ?>" placeholder="Ingrese su número de documento">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Telefono_Fijo" class="col-sm-2 col-form-label">Telefono Fijo</label>
                                        <div class="col-sm-10">
                                            <input required type="number" minlength="6" class="form-control" id="Telefono_Fijo" name="Telefono_Fijo" value="<?= $DataPersona->getTelefonoFijo(); ?>" placeholder="Ingrese su número de telefono fijo">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="N_Celular" class="col-sm-2 col-form-label">Celular</label>
                                        <div class="col-sm-10">
                                            <input required type="number" minlength="6" class="form-control" id="N_Celular" name="N_Celular" value="<?= $DataPersona->getNCelular(); ?>" placeholder="Ingrese su número de celular">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Direccion" class="col-sm-2 col-form-label">Direccion</label>
                                        <div class="col-sm-10">
                                            <input required type="text" class="form-control" id="Direccion" name="Direccion" value="<?= $DataPersona->getDireccion(); ?>" placeholder="Ingrese su direccion">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input required type="text" class="form-control" id="Email" name="Email" value="<?= $DataPersona->getEmail(); ?>" placeholder="Ingrese su correo electrónico">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rol" class="col-sm-2 col-form-label">Rol</label>
                                        <div class="col-sm-10">
                                            <select id="Rol" name="Rol" class="custom-select">
                                                <option <?= ($DataPersona->getRol() == "Administrador") ? "selected":""; ?> value="Administrador">Administrador</option>
                                                <option <?= ($DataPersona->getRol() == "Auxiliar") ? "selected":""; ?> value="Auxiliar">Auxiliar</option>
                                                <option <?= ($DataPersona->getRol() == "Empleado") ? "selected":""; ?> value="Empleado">Empleado</option>
                                                <option <?= ($DataPersona->getRol() == "Cliente") ? "selected":""; ?> value="Cliente">Cliente</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Estado" class="col-sm-2 col-form-label">Estado</label>
                                        <div class="col-sm-10">
                                            <select id="Estado" name="Estado" class="custom-select">
                                                <option <?= ($DataPersona->getEstado() == "Activo") ? "selected":""; ?> value="Activo">Activo</option>
                                                <option <?= ($DataPersona->getEstado() == "Inactivo") ? "selected":""; ?> value="Inactivo">Inactivo</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Enviar</button>
                                    <a href="index.php" role="button" class="btn btn-default float-right">Cancelar</a>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                    <?php }else{ ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-ban"></i> Error!</h5>
                                No se encontro ningun registro con estos parametros de busqueda <?= ($_GET['mensaje']) ?? "" ?>
                            </div>
                    <?php } ?>
                    </p>
                <?php } ?>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php require ('../../partials/footer.php');?>
</div>
<!-- ./wrapper -->
<?php require ('../../partials/scripts.php');?>
</body>
</html>
