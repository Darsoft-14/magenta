$(document).ready(function() {
      clientes = $('#Clientes').DataTable({

      	//Para cambiar el lenguaje a español
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        },

        

        //para usar los botones
        responsive: "true",
        dom: 'Bfrtilp',
        buttons:[
              {
                extend:  'excelHtml5',
                text:    '<i class="fas fa-file-excel"></i>',
                className: 'btn btn-success'
              },
              ],

        lengthMenu: [ 7, 15, 20, 75, 100 ],

      });

      
});