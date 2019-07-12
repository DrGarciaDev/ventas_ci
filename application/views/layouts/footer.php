        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/template/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/template/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/template/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url();?>assets/template/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- FastClick -->
<script src="<?php echo base_url();?>assets/template/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/template/dist/js/demo.js"></script>
<script>
$(document).ready(function () {
    var base_url = "<?php echo base_url(); ?>";

    $(".btn-ajax-delete").on("click", function(e){
        //Previe que se ejecute el metodo por default que en este caso es el de la 
        //etiqueta a href
        e.preventDefault();
        //alert("eliminando");
        //Obtiene la ruta que se le dio en la vista list
        var ruta = $(this).attr("href");
        if (confirm("Realmente deseas eliminar la categoria ? ") ) {
            $.ajax({
                url: ruta,
                type: "POST",
                success:function(){
                    //alert(resp);
                    // redirijo sin poderse devolver
                    window.location.replace(base_url + "mantenimiento/categorias");

                    // redirección normal
                    //window.location.href = base_url + resp;
                }
            });
        }
    });

    $(".btn-view").on("click", function(){
        //Obtiene el id que esta en el atributo value
        var id = $(this).val();
        $.ajax({
            url: base_url + "mantenimiento/categorias/view/" + id,
            type: "POST",
            success:function(resp){
                $("#modal-default .modal-body").html(resp);
                //alert(resp);
            }
        });
    });
	
    $('#tabla_categorias').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        }
    });
	$('.sidebar-menu').tree();
});
</script>
</body>
</html>
