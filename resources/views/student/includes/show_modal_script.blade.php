<script>
    $(document).ready(function () {
        $(document).on('click', '.showbtn', function () {
            let student_id = $(this).val();

            // Show the modal
            $('#showModal').modal('show');

            // Use a longer delay to ensure the modal is fully shown before populating the fields
            setTimeout(function () {
                $.ajax({
                    type: 'GET',
                    url: "/student/show/" + student_id,
                    success: function (response) {

                        if (response && response.student) {

                            let name = response.student.name;
                            let email = response.student.email;
                            let username = response.student.username;
                            let phone = response.student.phone;
                            let dob = response.student.dob;
                            if ( response.student.profile){
                                let birthL = response.student.profile.birth_location;
                                let fatherN = response.student.profile.father_name;
                                let motherN = response.student.profile.mother_name;
                                $("#show_student_form input[name= 'birth_location']").val(birthL);
                                $("#show_student_form input[name= 'father_name']").val(fatherN);
                                $("#show_student_form input[name= 'mother_name']").val(motherN);
                            }
                            else {
                                $("#show_student_form input[name= 'birth_location']").val('');
                                $("#show_student_form input[name= 'father_name']").val('');
                                $("#show_student_form input[name= 'mother_name']").val('');
                            }

                            // $('#birth_location').val(birthL);
                            // $('#father_name').val(fatherN);

                            $("#show_student_form input[name='name']").val(name);
                            $("#show_student_form input[name='email']").val(email);
                            $("#show_student_form input[name='username']").val(username);
                            $("#show_student_form input[name='phone']").val(phone);
                            $("#show_student_form input[name='dob']").val(dob);

                        } else {
                            console.error("Invalid or missing student data in the response.");
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("AJAX Error:", status, error);
                    }
                });
            }, 500); // Delay for 500 milliseconds (0.5 seconds)
        });
    });
</script>
