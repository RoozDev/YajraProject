<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>Laravel 8|7 Datatables Tutorial</title>
    <meta charset=utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--   sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
{{--    <script src="{{ asset('backend/assets/js/code.js') }}"></script>--}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('datatables/buttons.dataTable.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
{{--  datatable css --}}

    <!-- CSS -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"/>
    <link href='https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>

    <style>
        body {
            font-family: 'Vazir',sans-serif; /* Use 'Vazir' or your desired Persian font */
        }
    </style>

</head>
<body>





{{-- create modal --}}
@include('student.includes.create_student_modal')

{{--  edit modal --}}
@include('student.includes.edit_student_modal')
{{-- edit modal script--}}
@include('student.includes.edit_modal_script')


{{--  show modal --}}
@include('student.includes.show_student_modal')
{{-- show modal script --}}
@include('student.includes.show_modal_script')

<a href="{{ route('student.importt') }}" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Import</a>
<a href="{{ route('student.export') }}" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Download</a>
<a href="{{ route('student.pdf') }}" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Download Pdf</a>
    <table id="vazirFont" class="table table-bordered yajra-datatable">
        <thead>
        <tr>
            <th>شماره</th>
            <th>اسم</th>
            <th>ایمیل</th>
            <th>نام کاربری</th>
            <th>شماره</th>
            <th>تاریخ تولد</th>
            <th>عملیات</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>


</body>

{{--yajra datatable --}}
@include('student.includes.yajra_datatable')


{{-- toaster js --}}
@include('student.includes.toastr_alert_message')


{{-- delete sweet alert--}}
@include('student.includes.sweet_alert_delete')


<script src="{{ asset('datatables/datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('datatables/datatables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('datatables/buttons.flash.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('datatables/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('datatables/pdfmake.js') }}"></script>
<script type="text/javascript" src="{{ asset('datatables/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{ asset('datatables/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('datatables/buttons.print.min.js') }}"></script>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

{{-- pdf and excel scripts --}}
<!-- Script -->








</html>
