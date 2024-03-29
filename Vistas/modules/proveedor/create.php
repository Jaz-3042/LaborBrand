<?php require("../../partials/routes.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Crear Proveedor</title>
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
                        <h1>Crear un Nuevo Proveedor</h1>
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
                <form class="form-horizontal" method="post" id="frmCreateProveedor" name="frmCreateProveedor" action="../../../App/Controladores/ProveedorControlador.php?action=create" >
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="Nombre" class="col-sm-2 col-form-label">Razón Social :</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="Razon_Social" name="Razon_Social" placeholder="Ingrese  nombre empresa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Codigo" class="col-sm-2 col-form-label">Nit :</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="Nit" name="Nit" placeholder="Ingrese nit de la empresa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Codigo" class="col-sm-2 col-form-label">Representante Legal :</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="Representante_Legal" name="Representante_Legal" placeholder="Ingrese nombre vendedor">
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

