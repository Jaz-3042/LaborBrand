<?php require("../../partials/routes.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Crear Compra_Repuesto</title>
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
                        <h1>Crear una Nueva Compra_Repuesto</h1>
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
                            <label for="Valor_Costo" class="col-sm-2 col-form-label">Valor del costo</label>
                            <div class="col-sm-10">
                                <input required type="number" class="form-control" id="Valor_Costo" name="Valor_Costo" placeholder="Ingrese el valor del costo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Compra_Id" class="col-sm-2 col-form-label">Compra_Id</label>
                            <div class="col-sm-10">
                                <input required type="number" class="form-control" id="Compra_Id" name="Compra_Id" placeholder="Ingrese el Id de compra">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Valor_Costo" class="col-sm-2 col-form-label">Valor del costo</label>
                            <div class="col-sm-10">
                                <input required type="number" class="form-control" id="Valor_Costo" name="Valor_Costo" placeholder="Ingrese el valor del costo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Compra_id" class="col-sm-2 col-form-label">Compra id</label>
                            <div class="col-sm-10">
                                <input required type="number" class="form-control" id="Compra_id" name="Compra_id" placeholder="Ingrese la Compra_id">
                        </div>
                    </div>
                        <div class="form-group row">
                            <label for="Repuesto_id" class="col-sm-2 col-form-label">Repuesto_id</label>
                            <div class="col-sm-10">
                                <input required type="number" class="form-control" id="Repuesto_id" name="Repuesto_id" placeholder="Ingrese el Repuesto_id">
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