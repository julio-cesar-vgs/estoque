$(document).ready(function () {
    $('#tabelaDissertacoes').DataTable({
        "sSearch": "Procurar:",
        "responsive": true,

        columnDefs: [
            {responsivePriority: 1, targets: 0},
            {responsivePriority: 3, targets: -1},
            {responsivePriority: 2, targets: -2},
        ],

        "lengthMenu": [[10, 20, 30, -1], [10, 20, 30, "Todos"]],
        "language": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "Exibir _MENU_ resultados",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
        }
    });
});