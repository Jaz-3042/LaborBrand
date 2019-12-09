<?php require("../../partials/routes.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Crear vehiculo</title>
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
                        <h1>Crear un Vehiculo</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= $baseURL; ?>/Vistas/">LabordBrand</a></li>
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
                    <h3 class="card-title">vehiculo</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="id" class="col-sm-2 col-form-label">id</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="id" name="id"  placeholder="Ingrese id">
                            </div>
                        </div>

                                <div class="form-group row">
                                    <label for="N_Placa" class="col-sm-2 col-form-label">N_Placa</label>
                                    <div class="col-sm-10">
                                        <input required type="text" class="form-control" id="N_Placa" name="N_Placa"  placeholder="Ingrese número de placa">
                                    </div>
                                </div>

                                        <div class="form-group row">
                                            <label for="Color" class="col-sm-2 col-form-label">Color</label>
                                            <div class="col-sm-10">
                                                <input required type="text" class="form-control" id="Color" name="Color"  placeholder="Ingrese Color">
                                            </div>
                                        </div>

                                                <div class="form-group row">
                                                    <label for="Modelo" class="col-sm-2 col-form-label">Modelo</label>
                                                    <div class="col-sm-10">
                                                        <input required type="text" class="form-control" id="Modelo" name="Modelo"  placeholder="Ingrese Modelo">
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
