$('[name="ModalMensagem"]').on('click', function() {
    modalMensagem(this.id);
});
$(document).ready(function() {
    $('table.display').DataTable({
        "paging": true,
        "pagingType": "full_numbers",
        "searching": true,
        "ordering": false,
        "info": true,
        "bScrollCollapse": true,
        "select": false,
        "lengthMenu": [
            [5, 10, 20, -1],
            [5, 10, 20, "Todos"]
        ],
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "Nenhum resultado encontrado",
            "sEmptyTable": "Nenhum dado encontrado",
            "sInfo": "Mostrando de _START_ a _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando de 0 a 0 de um total de 0 registros",
            "sInfoFiltered": "(filtrado de um total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Carregando...",
            "oPaginate": {
                "sFirst": "Primeiro",
                "sLast": "Último",
                "sNext": "Seguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
});