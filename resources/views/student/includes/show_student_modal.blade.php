 <!-- Modal -->
    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content ">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">نمایش دانش آموز</h5>
                </div>
                <div class="modal-body">
                    <form class="row g-3" id="show_student_form">
                        @csrf

                    <div class="col-md-6">
                        <label for="birth_location" class="form-label">محل تولد :</label>
                        <input name="birth_location"
                               type="text"
                               class="form-control"
                               id="birth_location">

                    </div>

                    <div class="col-md-6">
                        <label for="father_name" class="form-label">نام / اسم پدر</label>
                        <input name="father_name"
                               type="text"
                               class="form-control"
                               id="father_name">

                    </div>

                    <div class="col-md-6">
                        <label for="mother_name" class="form-label">نام / اسم مادر</label>
                        <input name="mother_name"
                               type="text"
                               class="form-control"
                               id="mother_name">

                    </div>

                        <div class="col-md-6">
                            <label for="name" class="form-label">نام / اسم</label>
                            <input name="name"
                                   id="name_show"
                                   type="text"
                                   class="form-control">

                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label">پست الکترونیک / ایمیل</label>
                            <input name="email"
                                   type="email"
                                   class="form-control"
                                   id="email_show">

                        </div>

                        <div class="col-md-6">
                            <label for="username" class="form-label">نام کاربری</label>
                            <input name="username"
                                   type="text"
                                   class="form-control"
                                   id="username_show">

                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">شماره تماس موبایل / خانه</label>
                            <input name="phone"
                                   type="text"
                                   class="form-control"
                                   id="phone_show">

                        </div>

                        <div class="col-md-6">
                            <label for="dob" class="form-label">تاریخ تولد</label>
                            <input name="dob"
                                   type="date"
                                   class="form-control"
                                   id="dob_show">

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
