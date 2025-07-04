// Initialize DataTable
$("#dataTable").DataTable({
    responsive: true,
    lengthChange: true,
    autoWidth: false,
    pageLength: 10,
    ordering: true,
    buttons: [{
        extend: 'copy',
        text: '<i class="lni-clipboard"></i>',
        titleAttr: 'Copy'
    },
    {
        extend: 'csv',
        text: '<i class="lni-files"></i>',
        titleAttr: 'Export CSV'
    },
    {
        extend: 'print',
        text: '<i class="lni lni-printer"></i>',
        titleAttr: 'Print'
    },
    {
        extend: 'colvis',
        text: '<i class="lni lni-cog"></i>',
        titleAttr: 'Column Visibility'
    }
    ],
    dom: '<"row mb-3"<"col-md-3"l><"col-md-6 text-center"B><"col-md-3"f>>' +
        '<"row"<"col-sm-12"tr>>' +
        '<"row mt-3"<"col-md-5"i><"col-md-7"p>>',
}).buttons().container().appendTo('#dataTable_wrapper .col-md-6');
