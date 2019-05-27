frontend.user = {
    initialize: function ()
    {
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#profile_pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgtoupload").change(function () {
            readURL(this);
        });
        var this_class = this;
        frontend.user.refresh_validator();
       // frontend.user.login_validator();
    },
    refresh_validator: function () {
        $.validate({
            modules : 'security',
            form: '#register-form',
            onSuccess: function () {
                $.ajax({
                    type: 'POST',
                    url: BASE_URL + '/register/add',
                    data: $('#register-form').serialize(),
                    datatype: 'json',
                    success: function (data) {
                        var data = $.parseJSON(data);
                        if (data.status == 1) {
                             $('#msg').html(data.msg);
                        } else {
                            return false;
                        }
                    },
                });
            },
        });
    },
//    login_validator: function () {
//        $.validate({
//            form: '#login-form',
//            onSuccess: function () {
//                $.ajax({
//                    type: 'POST',
//                    url: BASE_URL + '/login',
//                    data: $('#login-form').serialize(),
//                    datatype: 'json',
//                    success: function (data) {
//                        var data = $.parseJSON(data);
//                        if (data.status == 1) {
//                             $('#msg').html(data.msg);
//                        } else {
//                            return false;
//                        }
//                    },
//                });
//            },
//        });
//    },
}
