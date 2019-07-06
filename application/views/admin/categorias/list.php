<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Categorias
        <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="" class="btn btn-primary btn-flat">
                            <span class="fa fa-plus"></span> Agregar Categoria
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <table id="tabla_categorias" name="tabla_categorias" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($categorias)) { ?>
                                <?php foreach ($categorias as $categoria) { ?>
                            <tr>
                                <th><?php echo $categoria->id; ?></th>
                                <td><?php echo $categoria->nombre; ?></td>
                                <td><?php echo $categoria->descripcion; ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-info"><span class="fa fa-eye"></span></a>
                                        <a href="#" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                        <a href="#" class="btn btn-danger"><span class="fa fa-remove"></span></a>
                                    </div>
                                </td>
                            </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
