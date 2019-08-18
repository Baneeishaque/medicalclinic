$(function () {
    $("form").submit(function (e) {
        e.preventDefault();
        if (validateForm()) {
            $("#formsubmit").attr("disabled", "disabled");
            {
                $.ajax({
                    url: this.action,
                    type: this.method,
                    data: $(this).serialize(),
                    headers: { "Content-type": "application/x-www-form-urlencoded" },
                    beforeSend: function () {
                    },
                    complete: function () {
                    },
                    success: function (data) {
                        if (data.message != "success" && data.message != "free" && data.message != "success radiology") {
                            $("#formsubmit").removeAttr("disabled");
                            $('#chatwithdoctorcarousel').hide();
                            jQuery.msgBox({
                                title: "iClinic",
                                content: data.message,
                                type: "info"
                            });
                        }
                        else if (data.message == "success") {
                            $.trim($('#name').val(""));
                            $.trim($('#email').val(""));
                            $.trim($("#phoneNumber").val(""));
                            $.trim($('#address').val(""));
                            window.location.href = "";
                        }
                        else if (data.message == "success radiology") {
                           window.location.href = "";
                        }
                        else{
                            jQuery.msgBox({
                                title: "iClinic",
                                content: data.message,
                                type: "info"
                            });
                        }
                    }
                });
            }
        }
    });

});
function validateForm() {
    var name = $.trim($('#name').val());
    var email = $.trim($('#email').val());
    var contactno = $.trim($("#phoneNumber").val());
    var address = $.trim($('#address').val());
    var capchta = $.trim($('#capchta').val());
    var terms = $("#terms1").is(':checked');
    var captcha = $('#recaptcha-anchor').is(':checked');
    var flag = false;

    if (name == "") {
        jQuery.msgBox({
            title: "iClinic",
            content: "Please enter your name.",
            type: "info"
        });
    }
    else if (email == "") {
        jQuery.msgBox({
            title: "iClinic",
            content: "Please enter your email.",
            type: "info"
        });
    }
    else if (echeck(email) == false) {
    }
    else if (contactno == "") {
        jQuery.msgBox({
            title: "iClinic",
            content: "Please enter your contact no.",
            type: "info"
        });
    }
    else if (address == "") {
        jQuery.msgBox({
            title: "iClinic",
            content: "Please enter your location.",
            type: "info"
        });
    }
    else if (terms == false) {
        jQuery.msgBox({
            title: "iClinic",
            content: "Please check terms & conditions",
            type: "info"
        });
    }

    else {
        flag = true;
    }
    return flag;
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

