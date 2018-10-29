$(document).ready(function () {

    //Check username availabity

    $('#username').blur(function () {
        var username = $(this).val();
        $.ajax({
            url: "check/checkuser.php",
            method: "POST",
            data: {
                username: username
            },
            datatype: "text",
            success: function (data) {
                $('#userstatus').html(data);
            }
        });
    });


    //Auto Complete Textbox
    $('#skill').keyup(function () {
        var skill = $(this).val();
        if (skill != '') {
            $.ajax({
                url: "check/checkskill.php",
                method: "POST",
                data: {
                    skill: skill
                },
                dataType: "text",
                success: function (data) {
                    $('#statusskill').fadeIn();
                    $('#statusskill').html(data);
                }
            });
        }
    });

    $(document).on('click', 'li', function () {
        $('#skill').val($(this).text());
        $('#statusskill').fadeOut();
    });


    //Show Password Button

    $('#button').on('click', function () {
        var pass = $('#password');
        var fieldType = pass.attr('type');
        if (fieldType == 'password') {
            var fieldType = pass.attr('type', 'text');
            $(this).text('Hide password');
        } else {
            var fieldType = pass.attr('type', 'password');
            $(this).text('Show password');
        }
    });



});