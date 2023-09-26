
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ادیت دانش آموز</h5>
                </div>
                <div class="modal-body">
                    <form class="row g-3 mt-5" method="post" action="{{ route('student.update') }}">
                        @csrf
                        <div class="col-md-12 datepicker">
                            <label for="dob" class="form-label">تاریخ تولد</label>
                            <input class="form-control" name="dob" id="dob" data-jdp>
                            {{--                            <input name="dob"--}}
                            {{--                                   type="date"--}}
                            {{--                                   class="form-control"--}}
                            {{--                                   id="dob"--}}
                            {{--                                   placeholder="تاریخ تولد خود را وارد کنید..."--}}
                            {{--                                   data-jdp>--}}

                        </div>
                        <div class="col-md-12">
                            <input type="hidden" name="student_id" id="student_id">
                            <label for="name" class="form-label">نام / اسم</label>
                            <input name="name"
                                   type="text"
                                   class="form-control"
                                   id="name"
                                   placeholder="نام خود را وارد کنید...">

                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label">پست الکترونیک / ایمیل</label>
                            <input name="email"
                                   type="email"
                                   class="form-control"
                                   id="email"
                                   placeholder="پست الکترونیک / ایمیل خود را وارد کنید...">

                        </div>
                        <div class="col-md-12">
                            <label for="username" class="form-label">نام کاربری</label>
                            <input name="username"
                                   type="text"
                                   class="form-control"
                                   id="username"
                                   placeholder="نام کاربری خود را وارد کنید...">

                        </div>

                        <div class="col-md-12">
                            <label for="phone" class="form-label">شماره تماس موبایل / خانه</label>
                            <input name="phone"
                                   type="text"
                                   class="form-control "
                                   id="phone"
                                   placeholder="شماره تماس موبایل / خانه خود را وارد کنید...">

                        </div>


                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">تایید</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>

        jalaliDatepicker.startWatch({
            container: '.modal',
            minDate: "attr",
            maxDate: "attr",
            minTime: "attr",
            maxTime: "attr",
            initDate: "attr",
            hideAfterChange: true,
            autoHide: true,
            showTodayBtn: true,
            showEmptyBtn: true,
            topSpace: 10,
            bottomSpace: 30,
            dayRendering(opt,input){
                return {
                    isHollyDay:opt.day==1
                }
            }

        });



    </script>
