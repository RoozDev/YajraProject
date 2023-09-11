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
                    url: "/students/show/" + student_id,
                    success: function (response) {

                        if (response && response.student) {

                            let birthL = response.student.profile.birth_location;
                            let fatherN = response.student.profile.father_name;
                            let motherN = response.student.profile.mother_name;
                            let name = response.student.name;
                            let email = response.student.email;
                            let username = response.student.username;
                            let phone = response.student.phone;
                            let dob = response.student.dob;


                            $('#birth_location').val(birthL);
                            $('#father_name').val(fatherN);
                            $('#mother_name').val(motherN);
                            $("#show_student_form input[name='name']").val(name);
                            $('#email_show').val(email);
                            $('#username_show').val(username);
                            $('#phone_show').val(phone);
                            $('#dob_show').val(dob);

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
