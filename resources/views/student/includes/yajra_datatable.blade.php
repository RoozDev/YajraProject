
<script type="text/javascript">
    $(function () {

        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            "oLanguage": {
                "sLengthMenu": " نمایش رکورد های _MENU_ در هر صفحه",
                "sZeroRecords": "متاسفانه هیچ ریکوردی پیدا نشد !",
                "sInfo": "نمایش _START_ تا _END_ از مجموع _TOTAL_",
                "sInfoEmpty": "نمایش 0 تا 0 از مجموع 0 ریکورد",
                "sProcessing": "در حال بارگذاری...",
                "sInfoFiltered": "(filtered from _MAX_ total records)",
                "sSearch": "جستجو : ",
            },
            "language": {
                "paginate": {
                    "previous": "قبلی",
                    "next": "بعدی",
                    "Search": "جستجو:"
                }
            },
            ajax: "{{ route('student.index') }}",
            dom: 'Blfrtip',
            buttons: [
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5], // Column index which needs to export
                        encoding: 'utf8', // Specify UTF-8 encoding
                        customize: function (doc) {
                            // Embed a custom Persian font for the PDF
                            doc.content[1].table.widths = ['*', '*', '*', '*', '*', '*'];
                            doc.content[1].table.body.forEach(function (row) {
                                row.forEach(function (cell) {
                                    cell.font = 'Tajik Nastaliq';
                                });
                            });

                            // Set the direction to RTL
                            doc.content[1].alignment = 'right'; // Right-to-left alignment
                            doc.defaultStyle.alignment = 'right';

                            // You can also specify other RTL-related settings as needed
                            // For example, margin-right and margin-left adjustments
                            // doc.pageMargins = [20, 20, 20, 20]; // Example margin adjustments
                        }
                    },

                },
                {
                    extend: 'csv',
                    exportOptions: {
                        columns: [0,5] // Column index which needs to export
                    }
                },
                {
                    extend: 'excel',
                }
            ],
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'username', name: 'username'},
                {data: 'phone', name: 'phone'},
                {data: 'dob', name: 'dob'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });

    });
</script>

