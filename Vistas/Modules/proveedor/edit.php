<?php
require("../../partials/routes.php");
require("../../../App/Controladores/ProveedorControlador.php");

use App\Controladores\ProveedorControlador; ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Editar Proveedor</title>
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
                        <h1>Editar Nuevo Proveedor</h1>
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
                            Error al crear el proveedor: <?= ($_GET['mensaje']) ?? "" ?>
                    </div>
                <?php } ?>
            <?php } else if (empty($_GET['id'])) { ?>
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
                <?php if(!empty($_GET["id"]) && isset($_GET["id"])){ ?>
                    <p>
                    <?php
                    $DataUsuario = ProveedorControlador::searchForID($_GET["id"]);
                        if(!empty($DataProveedor)){
                    ?>
                            <!-- form start -->
                            <form class="form-horizontal" method="post" id="frmEditproveedor" name="frmEditproveedor" action="../../../App/Controladores/ProveedorControlador.php?action=edit">
                                <input id="id" name="id" value="<?php echo $DataProveedor->getId(); ?>" hidden required="required" type="number">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="Nombre" class="col-sm-2 col-form-label">Razon_Social</label>
                                        <div class="col-sm-10">
                                            <input required type="text" class="form-control" id="Razon_Social" name="Razon_Social" value="<?= $DataProveedor->getRazonSocial(); ?>" placeholder="Ingrese nombre empresa">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Codigo" class="col-sm-2 col-form-label">Nit</label>
                                        <div class="col-sm-10">
                                            <input required type="text" class="form-control" id="Nit" name="Nit" value="<?= $DataProveedor->getCodigo(); ?>" placeholder="Ingrese nit empresa">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Nombre" class="col-sm-2 col-form-label">Representante_Legal</label>
                                        <div class="col-sm-10">
                                            <input required type="text" class="form-control" id="Representante_Legal" name="Representante_Legal" value="<?= $DataProveedor->getRepresentanteLegal(); ?>" placeholder="Ingrese nombre vendedor">
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
