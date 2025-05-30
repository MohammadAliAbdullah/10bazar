var table = $("#productDataTable").DataTable({
    processing: true,
    serverSide: true,
    responsive: true,
    lengthChange: true,
    autoWidth: false,
    pageLength: 10,
    ajax: {
        url: window.routes.productList,
        data: function (d) {
            d.search = d.search.value; // Ensure custom search support
        }
    },
    columns: [{
        data: 'DT_RowIndex',
        name: 'DT_RowIndex',
        orderable: false,
        searchable: false
    },
    {
        data: 'title',
        name: 'title'
    },
    {
        data: 'slug',
        name: 'slug'
    },
    {
        data: 'thumb',
        name: 'thumb',
    },
    {
        data: 'category',
        name: 'category'
    },
    {
        data: 'brand',
        name: 'brand'
    },
    {
        data: 'status',
        name: 'status'
    },
    {
        data: 'created_at',
        name: 'created_at'
    },
    {
        data: 'action',
        name: 'action',
        orderable: false,
        searchable: false
    }
    ],
    dom: '<"row mb-3"<"col-md-3"l><"col-md-6 text-center"B><"col-md-3"f>>' +
        '<"row"<"col-sm-12"tr>>' +
        '<"row mt-3"<"col-md-5"i><"col-md-7"p>>',
    buttons: [{
        extend: 'copy',
        text: '<i class="fas fa-copy"></i>',
        titleAttr: 'Copy'
    },
    {
        extend: 'csv',
        text: '<i class="fas fa-file-csv"></i>',
        titleAttr: 'Export CSV'
    },
    {
        extend: 'excel',
        text: '<i class="fas fa-file-excel"></i>',
        titleAttr: 'Export Excel'
    },
    {
        extend: 'pdf',
        text: '<i class="fas fa-file-pdf"></i>',
        titleAttr: 'Export PDF'
    },
    {
        extend: 'print',
        text: '<i class="fas fa-print"></i>',
        titleAttr: 'Print'
    },
    {
        extend: 'colvis',
        text: '<i class="fas fa-columns"></i>',
        titleAttr: 'Column Visibility'
    }
    ]
});