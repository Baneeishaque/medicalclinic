var Imtech = {};
var jsonOnlineData = [];
Imtech.Pager = function () {
    this.paragraphsPerPage = 10;
    this.currentPage = 1;
    this.pagingControlsContainer = "#pagingControls";

    this.numPages = function (total) {
        var numPages = 0;
        var n;
        n = parseInt(total);
        if (this.paragraphs != null && this.paragraphsPerPage != null) {
            numPages = Math.ceil(n / this.paragraphsPerPage);
        }
        return numPages;
    };

    this.showPage = function (page, field, searchText) {
        if (field == "Country" && searchText == "") {
            field = "";
            searchText = "India";
        }
        this.currentPage = page;
        var end = page * this.paragraphsPerPage;
        var start = end - this.paragraphsPerPage + 1;
        
        var jsoniClinicDoctorObject = {
            start: start,
            end: end,
            searchText: searchText,
            field: field
        };
        var iClinicDoctorJson = JSON.stringify(jsoniClinicDoctorObject);
        $.ajax({
            type: "POST",
            url: "/ChatWithDoctor/GetIclinicDoctors",
            data: iClinicDoctorJson,
            contentType: "application/json",
            success: function (data) {
                jsonOnlineData = JSON.parse(data);
                if (jsonOnlineData != null) {
                    if (jsonOnlineData.length <= 0) {
                        $('#btnstartchat').hide();
                        $('#ca-nav-next').hide();
                        $('#ca-nav-prev').hide();
                        $('#doctorlist').html("<li><b>No Online doctors are available.</b> <br /> <br /> Please try after sometime " +
                            "<br> OR <br> Contact <a style='text-decoration:underline' href='mailto:support@icliniccare.com'>support@icliniccare.com</a></li>");
                    } else {
                        $('#doctorlist').html("");
                        $('#doctorlist').jcarousel({
                            scroll: 2,
                            size: jsonOnlineData.length,
                            initCallback: doctorlist_initCallback,
                            itemLoadCallback: { onBeforeAnimation: doctorlist_itemLoadCallback },
                            buttonNextHTML: null,
                            buttonPrevHTML: null
                        });
                        $('#btnstartchat').show();
                    }
                } else {
                    $('#btnstartchat').hide();
                    $('#ca-nav-next').hide();
                    $('#ca-nav-prev').hide();
                    $('#doctorlist').html("<li><b>No Online doctors are available.</b><br /> <br /> Please try after sometime " +
                        "<br> OR <br> Contact <a style='text-decoration:underline' href='mailto:support@icliniccare.com'>support@icliniccare.com</a></li>");
                }
            }
        });
    };
};

// Carousel Binding //
function doctorlist_initCallback(carousel1) {
    jQuery('.jcarousel-control a').bind('click', function() {
        carousel1.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
        return false;
    });
    jQuery('#ca-nav-next').bind('click', function() {
        carousel1.next();
        return false;
    });
    jQuery('#ca-nav-prev').bind('click', function() {
        carousel1.prev();
        return false;
    });
}

function doctorlist_itemLoadCallback(carousel1, state) {
    for (var i = carousel1.first; i <= carousel1.last; i++) {
        if (carousel1.has(i)) {
            continue;
        }
        if (i > jsonOnlineData.length) {
            break;
        }
        carousel1.add(i, doctorlist_getItemHTML(jsonOnlineData[i - 1]));
    }
}

function doctorlist_getItemHTML(item) {
    var doctorHtml = "";
    //Main Div
    doctorHtml += "<li class='ca-item'>";
    doctorHtml += "<div class='ca-item-main'>";
    //Online/Offline Image
    doctorHtml += "<div class='img_doctor_uiv6'>";
    if (item.LoginStatus == "Online") {
        doctorHtml += "<div class='online_uiv6_online_icon'>Online</div>";
    } else {
        doctorHtml += "<div class='online_uiv6_online_icon_red'>Busy</div>";
    }
    //Doctor Image
    doctorHtml += "<img src='" + item.doctor_image + "' width='72' height='72' />";
    doctorHtml += "</div>";
    //Doctor Name and Qualification
    doctorHtml += "<a href='/Profile/Index/" + item.id + "'><div class='slider_text_uiv6'>";
    doctorHtml += "<span id='title_uiv6'>" + item.title + " " + item.doctor_name + "</span> " + item.qualification + "</div></a>";
    doctorHtml += "</div>";
    doctorHtml += "</li>";
    return doctorHtml;
}