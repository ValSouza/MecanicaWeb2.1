<!DOCTYPE html>
<html>

<head>
    <?php
    include_once '../../template/_head.php';
    ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php
        include_once '../../template/_topo.php';
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include_once '../../template/_menu.php';
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Mecanica: Modelos</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Administrador</a></li>
                                <li class="breadcrumb-item active">Modelos</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cadastre os seus modelos aqui..</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="modelos.php">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Nome do modelo</label>
                                        <input type="text" class="form-control" id="modelo" placeholder="digite aqui.." name="modelo">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Selecione a marca</label>
                                        <select class="form-control" name="modelo" id="modelo">
                                        <option value="">Selecione</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <center>
                                <button name="btnCadastrar" class="btn btn-outline-success">Cadastrar</button>
                                <button name="btnCancelar" class="btn btn-outline-warning">Cancelar</button>
                            </center>
                        </form>
                    </div>

                    <hr>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Marcas cadastradas</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 300px;">
                                            <input type="text" name="buscarMarcas" class="form-control float-right" placeholder="digite nome da marca...">

                                            <div class="input-group-append">
                                                <button type="submit" name="btnBuscar" class="btn btn-default"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nome da marca</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>(marcas)</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-xs">Alterar</a>
                                                    <a href="#" class="btn btn-danger btn-xs">Excluir</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
        include_once '../../template/_footer.php';
        ?>

        <!-- jQuery -->
        <?php
        include_once '../../template/_scripts.php';
        ?>
</body>

</html>