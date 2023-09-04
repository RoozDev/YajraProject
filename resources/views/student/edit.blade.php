@extends('layouts.index')
@section('content')
    <form class="row g-3 mt-5" method="post" action="{{ route('student.update',$student->id) }}">
        @csrf
        <div class="col-md-12">
            <label for="name" class="form-label">نام / اسم</label>
            <input name="name"
                   type="text"
                   class="form-control"
                   id="name"
                   value="{{ $student['name'] }}"
                   placeholder="نام خود را وارد کنید...">

        </div>
        <div class="col-md-12">
            <label for="email" class="form-label">پست الکترونیک / ایمیل</label>
            <input name="email"
                   type="email"
                   class="form-control"
                   id="email"
                   value="{{ $student['email'] }}"
                   placeholder="پست الکترونیک / ایمیل خود را وارد کنید...">

        </div>
        <div class="col-md-12">
            <label for="username" class="form-label">نام کاربری</label>
            <input name="username"
                   type="text"
                   class="form-control"
                   id="username"
                   value="{{ $student['username'] }}"
                   placeholder="نام کاربری خود را وارد کنید...">

        </div>
        <div class="col-md-12">
            <label for="phone" class="form-label">شماره تماس موبایل / خانه</label>
            <input name="phone"
                   type="text"
                   class="form-control"
                   id="phone"
                   value="{{ $student['phone'] }}"
                   placeholder="شماره تماس موبایل / خانه خود را وارد کنید...">

        </div>
        <div class="col-md-12">
            <label for="dob" class="form-label">تاریخ تولد</label>
            <input name="dob"
                   type="date"
                   value="{{ $student['dob'] }}"
                   class="form-control"
                   id="dob"
                   placeholder="تاریخ تولد خود را وارد کنید...">

        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
@endsection
