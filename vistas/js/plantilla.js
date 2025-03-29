window.addEventListener('load', function() {
    initializeDataTable("#tblSedes");
    initializeDataTable("#tblUsuarios");
});
function initializeDataTable(selector) {
    $(selector).DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "lengthMunu": [10, 25, 50, 100],
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
        "buttons":["csv", "excel", "pdf"]
    }).buttons().container().appendTo(selector + '_wrapper .col-md-6:eq(0)');
}