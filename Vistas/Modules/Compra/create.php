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
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Horizontal Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="N_Factura" class="col-sm-2 col-form-label">Numero de Factura</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="N_Factura" name="N_Factura" placeholder="Ingrese Numero de Factura">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Fecha_Factura" class="col-sm-2 col-form-label">Fecha de la Factura</label>
                            <div class="col-sm-10">
                                <input required type="date" class="form-control" id="Fecha_Factura" name="Fecha_Factura" placeholder="Ingrese la f echa de la factura">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Descripcion" class="col-sm-2 col-form-label">Descripcion de la factura</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="Descripcion" name="Descripcion" placeholder="Ingrese la descripcion de la factura">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Valor_Total" class="col-sm-2 col-form-label">Valor Total</label>
                            <div class="col-sm-10">
                                <input required type="number" class="form-control" id="Valor_Total" name="Valor_Total" placeholder="Ingrese el valor total de la factura">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Proveedor" class="col-sm-2 col-form-label">Proveedor</label>
                            <div class="col-sm-10">
                                <input required type="number" class="form-control" id="Proveedor" name="proveedor" placeholder="Ingrese la informacion del proveedor">
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