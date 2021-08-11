//add category datatables//
$(document).ready(function() {
    // $('#addcategorytable').DataTable();
    $('#example').DataTable({
        "scrollY": 300,
        "scrollX": true
    });


});


// common ajax function //


$(document).on('submit', '.form_operation', function() {
    var url = $(this).attr('action');
    // alert(url);


    $.ajax({
        type: 'POST',
        url: url,
        data: new FormData($(".form_operation")[0]),
        contentType: false,
        processData: false,
        success: function(fb) {
            var resp = $.parseJSON(fb);
            if (resp.status == 'true') {


                swal({
                    title: resp.message,
                    text: "Press OK !",
                    icon: "success",
                    button: "OK!",
                });
                // alert(resp.message);
                setTimeout(function() {
                    window.location.href = resp.reload;
                }, 2000);
            } else {


                alert(resp.message);
            }
        }
    });

    return false;
});

// only for add_attendence because it cause some problem in reloading //
$(document).on('submit', '.attendence_form_operation', function() {
    var url = $(this).attr('action');



    $.ajax({
        type: 'POST',
        url: url,
        data: new FormData($(".attendence_form_operation")[0]),
        contentType: false,
        processData: false,
        success: function(fb) {
            var resp = $.parseJSON(fb);
            if (resp.status == 'true') {

                swal({
                    title: resp.message,
                    text: "Press OK !",
                    icon: "success",
                    button: "OK!",
                });

                // alert(resp.message);
                setTimeout(function() {
                    location.reload();
                    // window.location.href = resp.reload;
                }, 1000);
            } else {


                alert(resp.message);
            }
        }
    });

    return false;
});

// for update attendence //

$('.attendence_update_form_operation').submit(function() {
    url = $(this).attr('action');
    alert(url);
    var status = $('#status').val();
    var date = $('#date').val();
    var remarks = $('#remarks').val();
    var student_id = $('#student_id').val();

    var data = { 'status': status, 'date': date, 'remarks': remarks }

    $.post(url, data, function(fb) {
        if (fb.match('1')) {
            alert('attendence Updated Successfully');
            setTimeout(function() {

                window.location.href = BASE_URL + 'index.php/attendence/add_attendence/' + student_id;
            }, 1000);
        } else {
            alert('not updated');
        }
    })
    return false;

})

// for exam Management class select //

$(document).on('change', '#category', function() {

    data = $(this).val();
    // alert(data);
    if (data != '') {
        $.post(BASE_URL + 'exam/find_class', { 'category': data }, function(fb) {
            // alert(fb);
            $('#class').html(fb);

        })
    } else {
        $('#class').html("<option value=''>Select</option>");
    }
})


// for LOGIN SYSTEM //

$(document).on('submit', '.login_form', function() {
    url = $(this).attr('action');
    // alert(url);

    var std_email = $('#std_email').val();
    var std_password = $('#std_password').val();

    $.post(url, { 'std_email': std_email, 'std_password': std_password }, function(fb) {

        if (fb.match('1')) {
            swal({
                title: "Successfully Login!",
                text: "Press OK !",
                icon: "success",
                button: "OK!",
            })

            setTimeout(function() {
                window.location.href = BASE_URL + 'index.php/admin';
            }, 2000);
            // window.location.href = BASE_URL + 'index.php/admin';

        } else if (fb.match(2)) {
            swal({
                title: "Successfully Login!",
                text: "Press OK !",
                icon: "success",
                button: "OK!",
            })

            setTimeout(function() {
                window.location.href = BASE_URL + 'index.php/student_account';
            }, 2000);
            // window.location.href = BASE_URL + 'index.php/student_account';
        } else {
            // alert("username and Password Incorrect");

            swal({
                title: "Username Or Password are Incorrect!",
                text: "check username and password !",
                icon: "warning",
                button: "OK!",
            })
        }

    });


    return false;
})



// for result //

$(document).on('change', '#select_student', function() {
    id = $('#select_student').val();
    class1 = $('#st_' + id).attr('data-val');
    $.post(BASE_URL + 'index.php/result/find_exam', { 'class': class1 }, function(fb) {
        $('#exam').html(fb);
    })
})


// for status change //

$(document).on('change', '.change_status', function() {

    // alert("change status");

    tbl = $(this).attr('data-table');
    id = $(this).attr('data-id');

    // console.log(tbl);
    // console.log(id);
    data = $("input[name='status_" + id + " ']:checked").val();

    alert(data);

    // alert(data);
    // if (data != 1)
    //     data = 0;

    // $.post(BASE_URL + 'index.php/admin/change_status/' + tbl + '/' + id, { 'status': data }, function(fb) {
    //     if (fb.match('1')) {
    //         alert('Status Successfully Changed');
    //     } else {
    //         alert('status not changed');
    //     }
    // })

})



// delete btn //

// $(document).on('click', '#deletebtn', function(e) {

//     e.preventDefault();
//     // alert('are you sure');
//     swal("Are you sure you want to do this?", {
//         buttons: ["Oh noez!", "Aww yiss!"],
//     });


// })