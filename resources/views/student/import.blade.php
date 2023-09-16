@extends('layouts.index')
@section('content')
    <div class="container">
<form class="row g-3" method="post" action="{{ route('student.impor') }}" enctype="multipart/form-data">
    @csrf
    <div class="col-md-12">
        <label for="inputEmail4" class="form-label">Xlsx File Import</label>
        <input type="file" name="import_file" class="form-control" id="inputEmail4">
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit">Upload</button>

    </div>
</form>
    </div>
@endsection
