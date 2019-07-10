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
                        <a href="<?php echo base_url(); ?>mantenimiento/categorias/add" class="btn btn-primary">
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
                                        <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $categoria->id; ?>"><span class="fa fa-search"></span></button>
                                        <a href="<?php echo base_url(); ?>mantenimiento/categorias/edit/<?php echo $categoria->id; ?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                        <a href="<?php echo base_url(); ?>mantenimiento/categorias/delete/<?php echo $categoria->id; ?>" class="btn btn-danger btn-ajax-delete"><span class="fa fa-remove"></span></a>
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


<div class="modal fade" tabindex="-1" role="dialog" id="modal-default">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de la categoria</h4>
      </div>
      <div class="modal-body">
        <!-- En esta clase se muestra por medio de JQuery los dato obtenidos por medio de AJAX -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->