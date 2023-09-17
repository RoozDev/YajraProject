<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>Laravel 8|7 Datatables Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--   sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
{{--    <script src="{{ asset('backend/assets/js/code.js') }}"></script>--}}
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">


    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"/>
    <link href='https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>



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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

{{-- pdf and excel scripts --}}
<!-- Script -->

<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>




</html>
