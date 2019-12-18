<?php require("../../partials/routes.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= getenv('TITLE_SITE') ?> | Crear Modelo</title>
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
                        <h1> Crear un Nuevo Modelo</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= $baseURL; ?>/Vistas/">labordbrand</a></li>
                            <li class="breadcrumb-item active">Inicio</li>
                        </ol>
                    </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">

        <!-- Horizontal Form -->
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form class="form-horizontal" method="post" id="frmCreateModelo" name="frmCreateModelo" action="../../../App/Controladores/ModeloControlador.php?action=create">
            <div class="card-body">
                <div class="form-group row">
                    <label for="Nombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input required type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese nombre del Modelo">
                    </div>
                </div>
                 <div class="form-group row">
                   <label for="Color" class="col-sm-2 col-form-label">Marca_Id</label>
                     <div class="col-sm-10">
                         <input required type="text" class="form-control" id="Marca_Id" name="Marca_Id" placeholder="Ingrese Marca">
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
