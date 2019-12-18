<?php require("../../partials/routes.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Crear Compra</title>
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
                        <h1>Crear una Nueva Compra</h1>
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
                <?php if ($_GET['respuesta'] != "correcto"){ ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Error!</h5>
                        Error al crear una nueva compra: <?= $_GET['mensaje'] ?>
                    </div>
                <?php } ?>
            <?php } ?>
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Compra</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" id="frmCreateCompra" name="frmCreateCompra" action="../../../app/Controladores/CompraControladores.php?action=create">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="N_Factura" class="col-sm-2 col-form-label">N_Factura</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="N_Factura" name="N_Factura" placeholder="Ingrese Numero de Factura">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Fecha_Factura" class="col-sm-2 col-form-label">Fecha_Factura</label>
                            <div class="col-sm-10">
                                <input required type="date" class="form-control" id="Fecha_Factura" name="Fecha_Factura" placeholder="Ingrese la fecha de la factura">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Descripcion" class="col-sm-2 col-form-label">Descripcion</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="Descripcion" name="Descripcion" placeholder="Ingrese la descripcion de la factura">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Valor_Total" class="col-sm-2 col-form-label">Valor_Total</label>
                            <div class="col-sm-10">
                                <input required type="number" class="form-control" id="Valor_Total" name="Valor_Total" placeholder="Ingrese el valor total de la factura">
                            </div>


                        </div>
                        <div class="form-group row">
                            <label for="Proveedor_Id" class="col-sm-2 col-form-label">Proveedor_Id</label>
                            <div class="col-sm-10">
                                <input required type="number" class="form-control" id="Proveedor_Idl" name="Proveedor_Id" placeholder="Ingrese el Proveedor_Id">
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