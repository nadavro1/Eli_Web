
//---------log in------------------


$(function() {
    $('#log-in').on('submit', function (forgot) {
        forgot.preventDefault();
        valid = true;
        if ($('#user_login').val() == '') {
            message = "אנא הכנס שם משתמש";
            valid = false;
        }
        if ($('#password_login').val() == '' && valid) {
            message = "אנא הכנס סיסמה";
            valid = false;
        }
        if(!valid){
            $('.show3').css("text-align", "center");
            $('.show3').css("color", "#E67A73");
            $('.show3').css("font-weight","bold");
            $('.show3').css("padding-left","3%");
            $('.show3').html(message);

            return valid;
        }
        $.ajax({
            type: 'post',
            url: 'validation-for-login.php/',
            data: $('#log-in').serialize(),
            success: function (data) {



                var message = data;
                if (message=="Logged in"){
                    window.location.href="userProfile.php";
//
//
//                        $('.show3').css("text-align", "center");
//                        $('.show3').css("color", "#E67A73");
//                        $('.show3').css("font-weight","bold");
//                        $('.show3').css("padding-left","3%");
//                        $('.show3').html(message);
                }
                else{
                    $('.show3').css("text-align", "center");
                    $('.show3').css("color", "#E67A73");
                    $('.show3').css("font-weight","bold");
                    $('.show3').css("padding-left","3%");
                    $('.show3').html(message);
                }
            }
        });
    });
});