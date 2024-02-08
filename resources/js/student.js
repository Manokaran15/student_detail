$(document).ready(function() {
//     $('body').on('click','.add_student', function(e){
//         e.preventDefault();
//         var name = $('.student_name').val();
//         var roll_number = $('.roll_number').val();
//         var date_of_birth = $('.date_of_birth').val();
//         var tamil_mark = $('.tamil_mark').val();
//         var english_mark = $('.english_mark').val();
//         var maths_mark = $('.maths_mark').val();
//         var science_mark = $('.science_mark').val();
//         var history_mark = $('.history_mark').val();
//         var geography_mark = $('.geography_mark').val();

//         $.ajax({
//             type: "POST",
//             url: "/student",
//             data:{
//                 'name' : name,
//                 'roll_number' : roll_number,
//                 'date_of_birth' : date_of_birth,
//                 'tamil_mark' : tamil_mark,
//                 'english_mark' : english_mark,
//                 'maths_mark' : maths_mark,
//                 'science_mark' : science_mark,
//                 'history_mark' : history_mark,
//                 'geography_mark' : geography_mark,
//             },
//             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
//         }).done(function (response) {
//             toastr.success(response);
//             // window.location.href = "/";
//         }).fail(function (error) {
//             toastr.error(error.responseJSON.errors);
//         });
//     })
});

