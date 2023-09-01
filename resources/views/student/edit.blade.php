@extends('layouts.index')
@section('content')
    <form class="row g-3 mt-5" method="post" action="{{ route('student.store') }}">
        @csrf
        <div class="col-md-12">
            <label for="inputName4" class="form-label">نام / اسم</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="inputName4" placeholder="نام خود را وارد کنید...">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">پست الکترونیک / ایمیل</label>
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail4" placeholder="پست الکترونیک / ایمیل خود را وارد کنید...">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="inputUsername4" class="form-label">نام کاربری</label>
            <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="inputUsername4" placeholder="نام کاربری خود را وارد کنید...">
            @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="inputPassword4" class="form-label">شماره تماس موبایل / خانه</label>
            <input name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" id="inputPassword4" placeholder="شماره تماس موبایل / خانه خود را وارد کنید...">
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="inputPassword4" class="form-label">تاریخ تولد</label>
            <input name="dob" type="date" class="form-control @error('dob') is-invalid @enderror" id="inputPassword4" placeholder="تاریخ تولد خود را وارد کنید...">
            @error('dob')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
@endsection
