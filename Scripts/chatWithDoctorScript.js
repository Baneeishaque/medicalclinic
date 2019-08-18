(function () {
    $(function () {
        $('#btnstartchat').click(function () {
            $('#chatwithdoctorcarousel').show();
            StartChat();
        });
    });

    function validateForm() {
        $('.inlineERR').hide();
        var name = $.trim($('#name').val());
        var mobile = $.trim($("#phoneNumber").val());
        var email = $.trim($('#email').val());
        var phoneCode = $.trim($("#phoneCode").val());

        if (name == "" || name == "" || name == "Enter Your Name") {
            //  $('#nameError').text('Please enter your name.').show();
            jQuery.msgBox({
                title: "iClinic",
                content: "Please enter your name.",
                type: "info"
            });
            return false;
        }
        else if ((email == null) || (email == "")) {
            //$('#emailError').text('Please enter your E-mail Address.').show();
            jQuery.msgBox({
                title: "iClinic",
                content: "Please enter your E-mail Address.",
                type: "info"
            });
            return false;
        }
        else if (echeck(email) == false) {
            // $('#emailError').text('Please enter a valid E-mail Address.').show();
            jQuery.msgBox({
                title: "iClinic",
                content: "Please enter a valid E-mail Address.",
                type: "info"
            });
            return false;
        }
        else if (mobile != null && mobile != "") {
            if (phoneCode == null || phoneCode == "") {
                // $('#phoneError').text('Please select your Phone Code.').show();
                jQuery.msgBox({
                    title: "iClinic",
                    content: "Please select your Phone Code.",
                    type: "info"
                });
                return false;
            }
        }
        return true;
    }

    function echeck(str) {
        var at = "@";
        var dot = ".";
        var lat = str.indexOf(at);
        var lstr = str.length;
        var ldot = str.indexOf(dot);
        if (str.indexOf(at) == -1) {
            return false;
        }

        if (str.indexOf(at) == -1 || str.indexOf(at) == 0 || str.indexOf(at) == lstr) {
            return false;
        }

        if (str.indexOf(dot) == -1 || str.indexOf(dot) == 0 || str.indexOf(dot) == lstr) {
            return false;
        }

        if (str.indexOf(at, (lat + 1)) != -1) {
            return false;
        }

        if (str.substring(lat - 1, lat) == dot || str.substring(lat + 1, lat + 2) == dot) {
            return false;
        }

        if (str.indexOf(dot, (lat + 2)) == -1) {
            return false;
        }

        if (str.indexOf(" ") != -1) {
            return false;
        }

        return true;
    }

    function StartChat() {
        var res = validateForm();

        if (res) {
            var DTO = {
                "name": $.trim($('#name').val()),
                "email": $.trim($("#email").val()),
                "phoneCode": $.trim($('#phoneCode').val()),
                "phoneNumber": $.trim($('#phoneNumber').val())
            };
            $("#btnstartchat").attr("disabled", "disabled");
            $.ajax({
                type: 'POST',
                url: "/ChatWithDoctor/StartChat",
                data: DTO,
                success: function (data) {
                    if (data.message != "Success" && data.message != "free") {
                        $("#btnstartchat").removeAttr("disabled");
                        $('#chatwithdoctorcarousel').hide();
                        jQuery.msgBox({
                            title: "iClinic",
                            content: data.message,
                            type: "info"
                        });
                    }
                    else if (data.message == "free") {
                        $("#btnstartchat").removeAttr("disabled");
                        jQuery.msgBox({
                            content: "Welcome to iClinic Healthcare Services. This service is the part of your corporate package. Please choose next to continue.",
                            type: "confirm",
                            buttons: [{ value: "Next" }, { value: "Cancel" }],
                            success: function (result) {
                                $("input.msgButton").attr('disabled', 'disabled');
                                if (result == "Next")
                                {
                                    $.ajax({
                                        type: "POST",
                                        url: "/Base/IsServiceFreeForUser",
                                        contentType: "application/json",
                                        success: function (response) {
                                            if (response == "success") {
                                                window.location.href = "ChatWithDoctor/OnlineDoctorChatStep2";
                                            }
                                            else {
                                                $("#btnstartchat").removeAttr("disabled");
                                                jQuery.msgBox({
                                                    title: "iClinic",
                                                    content: "Some error occured",
                                                    type: "info"
                                                });
                                            }
                                        }
                                    });
                                }
                                else {
                                    $('#chatwithdoctorcarousel').hide();
                                    $("#btnstartchat").removeAttr("disabled");
                                }
                            }
                        });
                    }
                    else if (data.redirectURL != "") {
                        window.location.href = data.redirectURL;
                    }

                },
                error: function (err) {

                }
            });
        }
    }

})();

