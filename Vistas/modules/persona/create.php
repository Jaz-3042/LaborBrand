<?php require("../../partials/routes.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Crear Usuario</title>
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
                        <h1>Crear un Nuevo Usuario</h1>
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
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Horizontal Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" id="frmcreatePersona" name="frmcreatePersona" action="../../../App/Controladores/PersonaControlador.php?action=create">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="Nombres" class="col-sm-2 col-form-label">Nombres :</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Ingrese sus nombres">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Apellidos" class="col-sm-2 col-form-label">Apellidos :</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Ingrese sus apellidos">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Tipo_Documento" class="col-sm-2 col-form-label">Tipo Documento :</label>
                            <div class="col-sm-10">
                                <select id="Tipo_Documento" name="Tipo_Documento" class="custom-select">
                                    <option value="T.I">Tarjeta de Identidad</option>
                                    <option value="C.C">Cedula de Ciudadania</option>
                                    <option value="C.E">Cedula de Extranjeria</option>
                                    <option value="Pasaporte">Pasaporte</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="N_documento" class="col-sm-2 col-form-label">Documento :</label>
                            <div class="col-sm-10">
                                <input required type="number"  class="form-control" id="N_documento" name="N_Documento" placeholder="Ingrese su documento">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telefono" class="col-sm-2 col-form-label">Teléfono :</label>
                            <div class="col-sm-10">
                                <input required type="number" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su numero de telefono">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telefono" class="col-sm-2 col-form-label">Celular</label>
                            <div class="col-sm-10">
                                <input required type="number"  class="form-control" id="telefono" name="telefono" placeholder="Ingrese su numero de celular">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="direccion" class="col-sm-2 col-form-label">Dirección :</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese su direccion">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Email" class="col-sm-2 col-form-label">Email :</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese su correo electrónico">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Enviar</button>
                        <button type="submit" class="btn btn-default float-right">Cancelar</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
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
