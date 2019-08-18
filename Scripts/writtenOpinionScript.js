$(function () {
    $('form').submit(function (e) {
        e.preventDefault();
        var form = $(this);
        if (validateForm()) {
            $('#chatwithdoctorcarousel').show();
            $("#formsubmit").attr('disabled', 'disabled');
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
                    if (data.message != "Success" && data.message != "free") {
                        $("#formsubmit").removeAttr('disabled');
                        jQuery.msgBox({
                            title: "iClinic",
                            content: data.message,
                            type: "info"
                        });
                    }
                    else if (data.message == "free") {
                        jQuery.msgBox({
                            content: "Welcome to iClinic Healthcare Services. This service is the part of your corporate package. Please choose next to continue.",
                            type: "confirm",
                            buttons: [{ value: "Next" }, { value: "Cancel" }],
                            success: function (result) {
                                $("input.msgButton").attr('disabled', 'disabled');
                                if (result == "Next") {
                                    $.ajax({
                                        type: "POST",
                                        url: "/Base/IsServiceFreeForUser",
                                        data:'',
                                        contentType: "application/json",
                                        success: function (response) {
                                            if (response == "success") {
                                                window.location.href = "/WrittenOpinion/FillDetails/";
                                            }
                                            else {
                                                $("#formsubmit").removeAttr('disabled');
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
                                    $("#formsubmit").removeAttr('disabled');
                                }
                            }
                        });
                    }
                    else  if (data.redirectURL) {
                            window.location.href = data.redirectURL;
                        }
                }
            });
        }
        else {
            return false;
        }
    });
});

function validateForm() {
    var name = $.trim($('#name').val());
    var mobile = $.trim($("#phoneNumber").val());
    var email = $.trim($('#email').val());
    var phoneCode = $.trim($("#phoneCode").val());
    var speciality = $('#DoctorDetails_SpecialityId').val();

    var query = $.trim($('#query').val());

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
    else if (emailcheck(email) == false) {
        // $('#emailError').text('Please enter a valid E-mail Address.').show();
        jQuery.msgBox({
            title: "iClinic",
            content: "Please enter a valid E-mail Address.",
            type: "info"
        });
        return false;
    }
    if (phoneCode == null || phoneCode == "") {
        // $('#phoneError').text('Please select your Phone Code.').show();
        jQuery.msgBox({
            title: "iClinic",
            content: "Please select your Phone Code.",
            type: "info"
        });
        return false;
    }
  else  if (speciality == "") {
        // $('#emailError').text('Please enter a valid E-mail Address.').show();
        jQuery.msgBox({
            title: "iClinic",
            content: "Please Select a Speciality!",
            type: "info"
        });
        return false;
    }
  else  if (query == "") {
        // $('#emailError').text('Please enter a valid E-mail Address.').show();
        jQuery.msgBox({
            title: "iClinic",
            content: "Please write a query!",
            type: "info"
        });
        return false;
    }
    
    return true;
}

function emailcheck(str) {
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