<script>
    $(document).ready(function (){
        $(document).on('click','.editbtn',function (){
            let student_id = $(this).val();
            $('#editModal').modal('show');
            $.ajax({
                type: 'GET',
                url: "/students/"+student_id,
                success: function (response){
                    // Check if response.student exists before accessing properties
                    if (response && response.student) {
                        $('#student_id').val(student_id);
                        $('#name').val(response.student.name);
                        $('#email').val(response.student.email);
                        $('#username').val(response.student.username);
                        $('#phone').val(response.student.phone);
                        $('#dob').val(response.student.dob);
                    } else {
                        // Handle invalid or missing response data
                        console.error("Invalid or missing student data in the response.");
                    }
                },
                error: function (xhr, status, error) {
                    // Handle AJAX errors here
                    console.error("AJAX Error:", status, error);
                }
            });
        });
    });
</script>
