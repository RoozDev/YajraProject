
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
            ordering: false,
            dom: 'Bfrtip',
            "searching":true,
            "paging":true,

            buttons: [
                {
                    extend: 'csv',
                    text: 'CSV',
                    charset: 'utf-8',
                    extension: '.csv',
                    fieldSeparator: '',
                    fieldBoundary: ',',
                    filename: 'export',
                    bom: true
                },
                ['copy', 'excel', 'pdf', 'print']
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

