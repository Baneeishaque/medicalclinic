$(function () {
    if ($('#testName').val() == "nirogyamdplus") {
        $('#nirogyamdplusfooter').hide();
    }
    else if ($('#testName').val() == "biotdplus") {
        $('#biotdplusfooter').hide();
    }
    else if ($('#testName').val() == "healthkundlibandg") {
        $('#healthkundli').hide();
    }
    else if ($('#testName').val() == "hypertension") {
        $('#hypertensionpanel').hide();
    }
    else if ($('#testName').val() == "obesity") {
        $('#obesityprofile').hide();
    }
    else if ($('#testName').val() == "womenjoy") {
        $('#womenjoytestfooter').hide();
    }
    else if ($('#testName').val() == "nirogyamdtwoplus") {
        $('#nirogyamdtwoplusfooter').hide();
    }
    else if ($('#testName').val() == "womenanti") {
        $('#womenantistresstest').hide();
    }
    else if ($('#testName').val() == "seniorcitizen") {
        $('#seniorcitizenpacakage').hide();
    }
    else if ($('#testName').val() == "menonly") {
        $('#menonlyfooter').hide();
    }
    $('#viewtestdetails').click(function () {
        if ($('#nirogyam_details') !== null) {
            $('#nirogyam_details').show();
        }
        else {
            $('#nirogyam_details').hide();
        }
        $('#bottom_right_header').animate({
            'top': '490px'
        }, 0);
        $('html, body').animate({
            scrollTop: $("#bottom_right_header").offset().top
        }, 1000);
    });
    $('#viewalloffers').click(function () {
        //$('#bottom_right_header').animate({
        //    'top': '490px'
        //}, 0);
        $('html, body').animate({
            scrollTop: $("#viewalltestoffers").offset().top
        }, 1000);
    });
    $('#orderonphone').click(function () {
        orderpathonPhone();
    });
    $('#callmeSubmit').click(function () {
        if (validateCallmeForm()) {
            var name = $('#firstname').val();
            var contactno = $('#contact').val();        
            var email = "NA";
            var location = "NA";
            var test = $('#testName').val();
            var discount = $('#discount').val();
            var mrp = $('#mrp').val();
            var offerprice = $('#offerprice').val();
            var labmodel = {};
            labmodel.CustomerName = name;
            labmodel.ContactNo = contactno;
            labmodel.Address = location;
            labmodel.Email = email;
            labmodel.PathLabTests = test;
            labmodel.Discount = discount;
            labmodel.MRP = mrp;
            labmodel.OfferPrice = offerprice;
            var labmodeleJson = JSON.stringify(labmodel);
            $.ajax({
                type: "POST",
                url: "/DiagnoPackages/OrderPathLabTestOnPhone",
                data: labmodeleJson,
                contentType: "application/json",
                success: function (data) {
                    if (data.message == 'success') {
                        $('#firstname').val("");
                        $('#contact').val("");
                       
                        jQuery.msgBox({
                            title: "iClinic",
                            content: "Thank you for posting your query.",
                            type: "info"
                        });
                    }
                    else {
                        jQuery.msgBox({
                            title: "iClinic",
                            content: data.message,
                            type: "info"
                        });
                    }
                }
            });
        }
    });
    $('#booktestSubmit').click(function () {
        if (validateForm()) {
            var name = $('#name').val();
            var contactno = $('#mobileno').val();
            var email = $('#email').val();
            var location = $('#location').val();
            var test = $('#testName').val();
            var discount = $('#discount').val();
            var mrp = $('#mrp').val();
            var offerprice = $('#offerprice').val();
            var labmodel = {};
            labmodel.CustomerName = name;
            labmodel.ContactNo = contactno;
            labmodel.Address = location;
            labmodel.Email = email;
            labmodel.PathLabTests = test;
            labmodel.Discount = discount;
            labmodel.MRP = mrp;
            labmodel.OfferPrice = offerprice;
            var labmodeleJson = JSON.stringify(labmodel);
            $.ajax({
                type: "POST",
                url: "/DiagnoPackages/OrderPathLabTest",
                data: labmodeleJson,
                contentType: "application/json",
                success: function (data) {
                    if (data.message == 'success') {
                        $('#name').val("");
                        $('#mobileno').val("");
                        $('#email').val("");
                        $('#location').val("");
                        jQuery.msgBox({
                            title: "iClinic",
                            content: "Thank you for posting your query. We have sent an email regarding details, kindly check your in-box.",
                            type: "info"
                        });
                    }
                    else {
                        jQuery.msgBox({
                            title: "iClinic",
                            content: data.message,
                            type: "info"
                        });
                    }
                }
            });
        }


    });
});
function validateCallmeForm() {
    var name = $('#firstname').val();
    var contactno = $('#contact').val();
    var flag = false;
    if (name == '') {
        jQuery.msgBox({
            title: "iClinic",
            content: "Please enter your name",
            type: "info"
        });
    }
    else if (contactno == '') {
        jQuery.msgBox({
            title: "iClinic",
            content: "Please enter your contact no.",
            type: "info"
        });

    }
    else {
        flag = true;
    }
    return flag;
}
function validateForm() {
    var name = $('#name').val();
    var contactno = $('#mobileno').val();
    var email = $('#email').val();
    var location = $('#location').val();
    var flag = false;
    if (name == '') {
        jQuery.msgBox({
            title: "iClinic",
            content: "Please enter your name",
            type: "info"
        });
    }
    else if (email == '') {
        jQuery.msgBox({
            title: "iClinic",
            content: "Please enter your email",
            type: "info"
        });

    }
    else if (echeck(email) == false) {
    }
    else if (contactno == '') {
        jQuery.msgBox({
            title: "iClinic",
            content: "Please enter your contact no.",
            type: "info"
        });

    }
    else if (location == '') {
        jQuery.msgBox({
            title: "iClinic",
            content: "Please enter your location",
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
function orderpathonPhone() {
    var overlay = $('<div id="overlay_path_packages"></div>');
    overlay.show();
    overlay.appendTo(document.body);
    $('.popup_path_packages').show();
    $('.close_path_packages').click(function () {
        $('.popup_path_packages').hide();
        overlay.appendTo(document.body).remove();
        return false;
    });

    $('.x').click(function () {
        $('.popup_path_packages').hide();
        overlay.appendTo(document.body).remove();
        return false;
    });
};