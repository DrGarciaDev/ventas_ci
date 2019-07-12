<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Categorias
        <small>Editar</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>mantenimiento/categorias" class="btn btn-danger">
                            <span class="fa fa-arrow-left"></span> Regresar
                        </a>
                    </div>
                </div>
            </div>
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger alert-dismissible">
                    <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata('error'); ?></p>
                </div>
            <?php } ?>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url(); ?>mantenimiento/categorias/update" method="POST">
                        <input type="hidden" id="id_categoria" name="id_categoria" value="<?php echo $categoria->id; ?>">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $categoria->nombre; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion:</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $categoria->descripcion; ?>" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
