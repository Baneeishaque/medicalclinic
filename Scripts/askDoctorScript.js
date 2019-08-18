$(function () {
    //$("#query").keyup(function () {
    //    if ($(this).val().length>10) {
    //        $(this).css('color', 'Red');
    //        var value = $('.query').val();
    //        var len = value.length;
    //        if (len > 10) {
    //            value =
    //        $("#query").append("<span class='label label-important'>" + value + '</span>');
    //        }
    //    } else {
    //        $(this).css('color', 'black');
    //    }
    //});
    $('#IsPaidService').change(function () {
        if ($('#IsPaidService').is(":checked")) {
            $('#query').attr({ maxLength: 1500 });
            $('#capchta').hide();
            $("#query").removeAttr("disabled");
        }
        else {
            var email = $.trim($('#email').val());
            $.ajax({
                type: "POST",
                url: "/AskaDoctor/IsAskDoctorFreeServiceFroUser",
                data: "{email:'" + email + "'}",
                contentType: "application/json",
                success: function (data) {
                    if (data.message == "exceedlimit") {
                        $('#IsPaidService').val("True");
                        $('#ExceedLimitService').val("true");
                        $('#query').attr({ maxLength: 1500 });
                        $('#capchta').hide();
                    }
                    else {
                        $('#ExceedLimitService').val("false");
                        $('#capchta').show();
                    }

                }
            });
          
        }
    });
    $('#email').change(function () {
        var email = $.trim($('#email').val());
        $.ajax({
            type: "POST",
            url: "/AskaDoctor/IsAskDoctorFreeServiceFroUser",
            data: "{email:'" + email + "'}",
            contentType: "application/json",
            success: function (data) {
                if (data.message == "exceedlimit") {
                    $('#IsPaidService').val("True");
                    $('#ExceedLimitService').val("true");
                    $('#query').attr({ maxLength: 1500 });
                    $('#capchta').hide();
                }
                else {
                    $('#ExceedLimitService').val("false");
                    $('#capchta').show();
                }
      
            }
        });
    });
    $(".editQuery").change(function () {
        $("#query").removeAttr('readonly');
    });
    $("form").submit(function (e) {
        e.preventDefault();
        if (validateForm()) {
            $('#chatwithdoctorcarousel').show();
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
                        if (data.message != "Success" && data.message != "free") {
                            $("#formsubmit").removeAttr("disabled");
                            $('#chatwithdoctorcarousel').hide();
                            jQuery.msgBox({
                                title: "iClinic",
                                content: data.message,
                                type: "info"
                            });
                        }
                        else if (data.message == "free") {
                            jQuery.msgBox({
                                content: "Welcome to iClinic Healthcare Services. This service is the part of your  package. Please choose next to continue.",
                                type: "confirm",
                                buttons: [{ value: "Next" }, { value: "Cancel" }],
                                success: function (result) {
                                    $("input.msgButton").attr('disabled', 'disabled');
                                    if (result == "Next") {
                                        $.ajax({
                                            type: "POST",
                                            url: "/Base/IsServiceFreeForUser",
                                            contentType: "application/json",
                                            success: function (response) {
                                                if (response == "success") {
                                                    window.location.href = "AskaDoctor/FillDetails";
                                                }
                                                else {
                                                    $('#chatwithdoctorcarousel').hide();
                                                    $("#formsubmit").removeAttr("disabled");
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
                        else if (data.redirectURL != "") {
                            window.location.href = data.redirectURL;
                        }
                    }
                });
            }
        }
    });
});
//function len() {
//if (!$('#IsPaidService').is(":checked") && $('#IsPaidService').val()!="True") {
//    if ($('#query').val().length > 159) {
//        $('#query').attr('disabled','disabled');
//        jQuery.msgBox({
//            title: "iClinic",
//            content: "The maximum character limit upto 160 characters now you have exceed the limit. If you want to write more than 160 characters then choose 'Extended my query' option.",
//            type: "info"
//        });
//       return false;
//    }
//    else {
//        //$("#query").removeAttr("disabled");
//        return true;
//    }
//}
//else {
//    return true;
//}
//}
function validateForm() {
    $('.inlineERR').hide();
    var name = $.trim($('#name').val());
    var query = $.trim($('#query').val());
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
    } else if ((email == null) || (email == "")) {
        //$('#emailError').text('Please enter your E-mail Address.').show();
        jQuery.msgBox({
            title: "iClinic",
            content: "Please enter your E-mail Address.",
            type: "info"
        });
        return false;
    } else if (emailidcheck(email) == false) {
        // $('#emailError').text('Please enter a valid E-mail Address.').show();
        jQuery.msgBox({
            title: "iClinic",
            content: "Please enter a valid E-mail Address.",
            type: "info"
        });
        return false;
    } else if (query == "") {
        // $('#emailError').text('Please enter a valid E-mail Address.').show();
        jQuery.msgBox({
            title: "iClinic",
            content: "Please write a query!",
            type: "info"
        });
        return false;
    }
    else if (!$('#IsPaidService').is(":checked") && $('#IsPaidService').val()!="True") {
        if ($('#query').val().length < 50 || $('#query').val().length > 160) {
            jQuery.msgBox({
                title: "iClinic",
                content: "The maximum character limit upto 160 characters now you have exceed the limit. If you want to write more than 160 characters then choose 'Extended my query' option.",
                type: "info"
            });
            return false;
        }
        else {
            return true;
        }
    }
    else
    {
        return true;
    }
}

function emailidcheck(str) {
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


