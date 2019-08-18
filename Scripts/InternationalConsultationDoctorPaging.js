var Imtech = {};
Imtech.Pager = function () {
    this.paragraphsPerPage = 4;
    this.currentPage = 1;
    this.pagingControlsContainer = "#pagingControls";

    this.numPages = function (total) {
        var numPages = 0;
        var n;
        n = Number(total);
        //n = document.getElementById("totalDoctors").value;
        if (this.paragraphs != null && this.paragraphsPerPage != null) {
            numPages = Math.ceil(n / this.paragraphsPerPage);
        }
        return numPages;
    };

    this.showSearchedPage = function (page, field, flag, searchQuery) {
        document.getElementById("doctor_box2").style.display = "none";
        document.getElementById("loading12").style.display = "";
        this.currentPage = page;
        var end = page * this.paragraphsPerPage;
        var start = end - this.paragraphsPerPage + 1;
        document.getElementById("pageHiddenValuesd").value = page;

        $.ajax({
            type: "POST",
            url: "/InternationalConsultation/DoctorInfo",
            data: "{start:'" + start + "',end : '" + end + "',field : '" + field + "',flag : '" + flag + "',searchQuery : '" + searchQuery + "'}",
            contentType: "application/json",
            success: function (data) {
                var jsonData = JSON.parse(data);
                var html = "";
                if (jsonData.length > 0) {
                    for (var i = 0; i < jsonData.length; i++) {
                        html += "<div style='width:615px;margin: 10px;height: 150px;font-family:Tahoma;'>";
                        html += "<div style='width:130px;float:left;margin-left: 12px;'>" +
                            "<a href='/Profile/Index/" + jsonData[i].id + "'><img alt='" + jsonData[i].doctorname + "' src='" +
                            jsonData[i].doctorimage +
                            "' width='160' height='120' style='float: right;font-family: Tahoma;border: 4px solid #e5e5e5;'/></a></div>";
                        html += "<div style='width:450px;float: right;margin-top: -8px;margin-right:8px;'>";
                        html += "<a href='/Profile/Index/" + jsonData[i].id + "'><h1 style='overflow: hidden;float: left;height:31px;line-height:33px;color:#005aca;'>" + jsonData[i].title + " " +
                            jsonData[i].doctorname + "</h1></a>";
                        html += "<p style='width:450px;overflow:hidden;float:left;'><span style='font-weight:bold;font-size:14px;line-height: 30px;margin-top:0px;'>Qualification: </span><span style='font-size:14px;line-height: 30px'>" +
                            jsonData[i].Qualification +
                            "</span></br><span style='font-weight:bold;font-size:14px;line-height: 30px'>Associated With: </span><span style='font-size:14px;line-height: 30px'>";
                        html += jsonData[i].Clinic +
                            "</span></br><span style='font-weight:bold;font-size:14px;line-height: 30px'>Speciality: </span><span style='font-size:14px;line-height: 30px'>";
                        html += jsonData[i].Speciality + "</span></p>";
                        html += "</div></div><div style='border-bottom:1px solid #e5e5e5'></div><div style='height: 10px;clear:both'></div></div>";
                    }
                    document.getElementById("doctor_box2").style.display = "";
                    document.getElementById("loading12").style.display = "none";
                    document.getElementById("doctor_box2").innerHTML = html;
                } else {
                    document.getElementById("nodoctorresult").innerHTML = "";
                    document.getElementById("nodoctorresult").innerHTML = "<b>Nothing found </b><br/><br/>Sorry, but nothing matched your search criteria. Please try again with some different keywords.";
                    document.getElementById("nodoctorresult").style.display = "";
                    document.getElementById("loading12").style.display = "none";
                }
            },
            error: function () {
                document.getElementById("loading12").style.display = "none";
            }
        });
        $.ajax({
            type: "POST",
            url: "/InternationalConsultation/GetDoctorsCount",
            data: "{}",
            contentType: "application/json",
            success: function (data) {
                var pagingControls = "#doctorPaging";
                renderControls(pagingControls, window.pager.currentPage, window.pager.numPages(data.result), field, flag, searchQuery);
            }
        });
    };

    var renderControls = function (container, currentPage, numPages, field, flag, searchQuery) {
        var nodesRange = 10;
        var startingNode = currentPage - 5;
        if (startingNode <= 0) {
            startingNode = 1;
        }
        var lastNode = startingNode + nodesRange - 1;
        if (lastNode > numPages) {
            lastNode = numPages;
        }

        if (numPages > 1) {
            var pagingControls = "<div><ul class='Pageing'>";
            if (currentPage > 1) {
                pagingControls += "<li><a href='javascript:void(0)' onclick=\"pager.showSearchedPage(" + (currentPage - 1) + ",'" + field + "','" + flag + "','" + searchQuery + "') \">Prev</a></li>";
            }

            if (startingNode > 1) {
                pagingControls += "<li><a href='javascript:void(0)' onclick=\"pager.showSearchedPage(1,'" + field + "','" + flag + "','" + searchQuery + "') \">1</a> ... </li>";
            }

            for (var i = startingNode; i <= lastNode; i++) {
                if (i != currentPage) {
                    pagingControls += "<li><a href='javascript:void(0)' onclick=\"pager.showSearchedPage(" + i + ",'" + field + "','" + flag + "','" + searchQuery + "'); \">" + i + "</a></li>";
                } else {
                    pagingControls += "<li><a style='text-underline:none'>" + i + "</a></li>";
                }
            }

            if (lastNode != numPages) {
                pagingControls += "<li> ... </li> <li><a href='javascript:void(0)' onclick=\"pager.showSearchedPage(" + numPages + ",'" + field + "','" + flag + "','" + searchQuery + "') \">" + numPages + "</a></li>";
            }

            //add next button
            if (currentPage < numPages) {
                pagingControls += "<li><a href='javascript:void(0)' onclick=\"pager.showSearchedPage(" + (currentPage + 1) + ",'" + field + "','" + flag + "','" + searchQuery + "') \">Next</a></li>";
            }

            pagingControls += "</ul></div>";
            $(container).html(pagingControls);
        } else {
            $(container).html("");
        }
    };

    this.showHospitalPage = function (page, field, flag, searchQuery) {
        document.getElementById("hospital_box").style.display = "none";
        document.getElementById("loading1").style.display = "";
        this.currentPage = page;
        var end = page * this.paragraphsPerPage;
        var start = end - this.paragraphsPerPage + 1;
        document.getElementById("pageHiddenValuesh").value = page;

        $.ajax({
            type: "POST",
            url: "/InternationalConsultation/HospitalInfo",
            data: "{start:'" + start + "',end : '" + end + "',field : '" + field + "',flag : '" + flag + "',searchQuery : '" + searchQuery + "'}",
            contentType: "application/json",
            success: function (data) {
                var jsonData = JSON.parse(data);
                var html = "";
                if (jsonData.length > 0) {
                    for (var i = 0; i < jsonData.length; i++) {
                        html += "<div style='width:615px;margin: 10px;height: 95px;font-family:Tahoma;'>";

                        html += "<div style='width:130px;float:left;margin-left: 10px;'>";

                        html += "<img src='" + jsonData[i].imageURL + "'";
                        /*
                        //temp code to be remove after next build (commented on: 21/Jan/2015)
                        if (jsonData[i].name == "Pushpanjali Crosslay Hospital") {
                            html += "<img src='https://icc-prodreport.s3.amazonaws.com/HospitalImages/pushpanjali_crosslay_hospital.png' ";
                        } else if (jsonData[i].name == "Delhi E.N.T. Hospital") {
                            html += "<img src='https://icc-prodreport.s3.amazonaws.com/HospitalImages/Delhi_ENTHospital.png' ";
                        } else if (jsonData[i].name == "Global Hospitals") {
                            html += "<img src='https://icc-prodreport.s3.amazonaws.com/HospitalImages/Global_Hospitals.png' ";
                        } else if (jsonData[i].name == "Medicheck Hospital") {
                            html += "<img src='https://icc-prodreport.s3.amazonaws.com/HospitalImages/MedicheckHospital.png' ";
                        } else if (jsonData[i].name == "Fortis Hospital") {
                            html += "<img src='https://icc-prodreport.s3.amazonaws.com/HospitalImages/Fortis_Hospital_gurgoan.png' ";
                        } else if (jsonData[i].name == "Artemis Medicare Services Ltd") {
                            html += "<img src='https://icc-prodreport.s3.amazonaws.com/HospitalImages/Artemis_Medicare_Services_Ltd_gurgoan.png' ";
                        } else if (jsonData[i].name == "Enhance Aesthetic & Cosmetic Studio Pvt. Ltd.") {
                            html += "<img src='https://icc-prodreport.s3.amazonaws.com/HospitalImages/default.png' ";
                        }
                        else if (jsonData[i].name == "Nova speciality surgery") {
                            html += "<img src='https://icc-prodreport.s3.amazonaws.com/HospitalImages/Nova_speciality_surgery_New_delhi.png'";
                        } else if (jsonData[i].name == "Max HealthCare") {
                            html += "<img src='https://icc-prodreport.s3.amazonaws.com/HospitalImages/Max_Hospital_mohali.png' ";
                        }
                        else if (jsonData[i].name == "ISIS Hospital IVF & Multispecialty Centre") {
                            html += "<img src='https://icc-prodreport.s3.amazonaws.com/HospitalImages/default.png' ";
                        } else if (jsonData[i].name == "Medica Synergie") {
                            html += "<img src='https://icc-prodreport.s3.amazonaws.com/HospitalImages/Medica_synergie _hospital_kolkata.png' ";
                        }
                        else if (jsonData[i].name.toLowerCase().indexOf("singhania") > 0) {
                            html += "<img src='https://icc-prodreport.s3.amazonaws.com/HospitalImages/PSRIHospital.png'";
                        }
                        else if (jsonData[i].name == "Max Hospital") {
                            html += "<img src='https://icc-prodreport.s3.amazonaws.com/HospitalImages/Max_Hospital_mohali.png'";
                        }
                        else if (jsonData[i].name == "Asian Hospital") {
                            html += "<img src='https://icc-prodreport.s3.amazonaws.com/HospitalImages/Asian_Hospital_faridabad.png'";
                        }
                        else {

                            html += "<img src='https://icc-prodreport.s3.amazonaws.com/HospitalImages/default.png' ";
                        }

                        */
                        html += "Title='" + jsonData[i].name + "' alt='" + jsonData[i].name + "' width='70' height='80' " +
                            "style='float: right;font-family: Tahoma;border: 4px solid #e5e5e5;'/></div>";

                        html += "<div style='width:450px;float: right;margin-right: 10px;'>";

                        html += "<h1 style='width:400px;overflow: hidden;float: left;color:#005aca;'> " + jsonData[i].name + "</h1>";

                        html += "<p style='width:450px;overflow:hidden;'><span style='font-size:14px;line-height: 30px'>" +
                            jsonData[i].state + ", " + jsonData[i].country + "</span></p>";

                        html += "</div></div><div style='border-bottom:1px solid #e5e5e5'></div><div style='height: 10px;clear:both'></div></div>";
                    }
                    document.getElementById("hospital_box").style.display = "";
                    document.getElementById("loading1").style.display = "none";
                    document.getElementById("hospital_box").innerHTML = html;
                } else {
                    document.getElementById("nohospitalresult").innerHTML = "";
                    document.getElementById("nohospitalresult").innerHTML = "<b>Nothing found </b><br/><br/>Sorry, but nothing matched your search criteria. Please try again with some different keywords.";
                    document.getElementById("nohospitalresult").style.display = "";
                    document.getElementById("loading1").style.display = "none";
                }
            },
            error: function () {
                document.getElementById("loading1").style.display = "none";
            }
        });
        $.ajax({
            type: "POST",
            url: "/InternationalConsultation/GetHospitalsCount",
            data: "{}",
            contentType: "application/json",
            success: function (data) {
                var pagingControls = "#hospitalPaging";
                renderHospitalControls(pagingControls, window.pager.currentPage, window.pager.numPages(data.result), field, flag, searchQuery);
            }
        });
    };

    var renderHospitalControls = function (container, currentPage, numPages, field, flag, searchQuery) {
        var nodesRange = 10;
        var startingNode = currentPage - 5;
        if (startingNode <= 0) {
            startingNode = 1;
        }
        var lastNode = startingNode + nodesRange - 1;
        if (lastNode > numPages) {
            lastNode = numPages;
        }

        if (numPages > 1) {
            var pagingControls = "<div><ul class=\"Pageing\">";
            if (currentPage > 1) {
                pagingControls += "<li><a href=\"javascript:void(0)\" onclick=\"pager.showHospitalPage(" + (currentPage - 1) + ",'" + field + "','" + flag + "','" + searchQuery + "'); \">Prev</a></li>";
            }

            if (startingNode > 1) {
                pagingControls += "<li><a href=\"javascript:void(0)\" onclick=\"pager.showHospitalPage(1,'" + field + "','" + flag + "','" + searchQuery + "'); \">1</a> ... </li>";
            }

            for (var i = startingNode; i <= lastNode; i++) {
                if (i != currentPage) {
                    pagingControls += "<li><a href=\"javascript:void(0)\" onclick=\"pager.showHospitalPage(" + i + ",'" + field + "','" + flag + "','" + searchQuery + "'); \">" + i + "</a></li>";
                } else {
                    pagingControls += "<li><a style=\"text-underline:none\">" + i + "</a></li>";
                }
            }

            if (lastNode != numPages) {
                pagingControls += "<li> ... </li> <li><a href=\"javascript:void(0)\" onclick=\"pager.showHospitalPage(" + numPages + ",'" + field + "','" + flag + "','" + searchQuery + "'); \">" + numPages + "</a></li>";
            }

            //add next button
            if (currentPage < numPages) {
                pagingControls += "<li><a href=\"javascript:void(0)\" onclick=\"pager.showHospitalPage(" + (currentPage + 1) + ",'" + field + "','" + flag + "','" + searchQuery + "'); \">Next</a></li>";
            }

            pagingControls += "</ul></div>";
            $(container).html(pagingControls);
        } else {
            $(container).html("");
        }
    };

    this.showiClinicPage = function (page, field, flag, searchQuery) {
        document.getElementById("center_box").style.display = "none";
        document.getElementById("loading2").style.display = "";
        this.currentPage = page;
        var end = page * this.paragraphsPerPage;
        var start = end - this.paragraphsPerPage + 1;
        document.getElementById("pageHiddenValuesc").value = page;

        $.ajax({
            type: "POST",
            url: "/InternationalConsultation/CentersInfo",
            data: "{start:'" + start + "',end : '" + end + "',field : '" + field + "',flag : '" + flag + "',searchQuery : '" + searchQuery + "'}",
            contentType: "application/json",
            success: function (data) {
                var jsonData = JSON.parse(data);
                var html = "";
                if (jsonData.length > 0) {
                    for (var i = 0; i < jsonData.length; i++) {
                        html += "<div style='width:615px;margin: 10px;height: 100px;font-family:Tahoma;'>";

                        html += "<div style='width:130px;float:left;margin-left: 10px;'>";

                        html += "<img alt='" + jsonData[i].name + "' src='" + jsonData[i].centerimage + "' width='160' height='95''";

                        //if (jsonData[i].name == "Amritdhara Hospital") {
                        //    html += "<img src='/images/AMRITDHARA Hospitals.jpg' ";
                        //} else if (jsonData[i].name == "Pushpanjali Crosslay Hospital") {
                        //    html += "<img src='/images/pushanjali.jpg' ";
                        //} else if (jsonData[i].name == "Talwar Nursing Home") {
                        //    html += "<img src='/images/TALWAR NURSING HOME Hospitals.jpg' ";
                        //} else if (jsonData[i].name == "Vodafone Guwahati") {
                        //    html += "<img src='/images/vodafone.jpg' ";
                        //} else if (jsonData[i].name == "Vodafone Ranchi") {
                        //    html += "<img src='/images/vodafone.jpg' ";
                        //} else if (jsonData[i].name == "Aircel Ranchi") {
                        //    html += "<img src='/images/aircel.jpg' ";
                        //} else if (jsonData[i].name == "Asarfi Hospital Pvt. Ltd.") {
                        //    html += "<img src='/images/Asarfi Hospital Pvt. Ltd.jpg' ";
                        //} else if (jsonData[i].name == "Medica Hospital Pvt. Ltd. (KGMH)") {
                        //    html += "<img src='/images/Medica Hospital Pvt. Ltd. (KGMH).jpg' ";
                        //}
                        //else {
                      
                        
                        html += "Title='" + jsonData[i].name + "' alt='" + jsonData[i].name + "' width='70' height='80' " +
                            "style='float: right;font-family: Tahoma;border: 4px solid #e5e5e5;'/></div>";

                        html += "<div style='width:450px;float: right;margin-right: 10px;'>";

                        html += "<h1 style='width:400px;overflow: hidden;float: left;color:#005aca;'> " + jsonData[i].name + "</h1>";

                        html += "<p style='width:450px;overflow:hidden;'><span style='font-size:14px;line-height: 30px'>" +
                            jsonData[i].state + ", " + jsonData[i].country + "</span></p>";

                        html += "</div></div><div style='border-bottom:1px solid #e5e5e5'></div><div style='height: 10px;clear:both'></div></div>";
                    }
                    document.getElementById("center_box").style.display = "";
                    document.getElementById("loading2").style.display = "none";
                    document.getElementById("center_box").innerHTML = html;
                } else {
                    document.getElementById("nocenterresult").innerHTML = "";
                    document.getElementById("nocenterresult").innerHTML = "<b>Nothing found </b><br/><br/>Sorry, but nothing matched your search criteria. Please try again with some different keywords.";
                    document.getElementById("nocenterresult").style.display = "";
                    document.getElementById("loading2").style.display = "none";
                }
            },
            error: function () {
                document.getElementById("loading2").style.display = "none";
            }
        });
        $.ajax({
            type: "POST",
            url: "/InternationalConsultation/GetCentersCount",
            data: "{}",
            contentType: "application/json",
            success: function (data) {
                var pagingControls = "#centerPaging";
                renderiClinicControls(pagingControls, window.pager.currentPage, window.pager.numPages(data.result), field, flag, searchQuery);
            }
        });
    };

    var renderiClinicControls = function (container, currentPage, numPages, field, flag, searchQuery) {
        var nodesRange = 10;
        var startingNode = currentPage - 5;
        if (startingNode <= 0) {
            startingNode = 1;
        }
        var lastNode = startingNode + nodesRange - 1;
        if (lastNode > numPages) {
            lastNode = numPages;
        }

        if (numPages > 1) {
            var pagingControls = "<div><ul class=\"Pageing\">";
            if (currentPage > 1) {
                pagingControls += "<li><a href=\"javascript:void(0)\" onclick=\"pager.showiClinicPage(" + (currentPage - 1) + ",'" + field + "','" + flag + "','" + searchQuery + "') \">Prev</a></li>";
            }

            if (startingNode > 1) {
                pagingControls += "<li><a href=\"javascript:void(0)\" onclick=\"pager.showiClinicPage(1,'" + field + "','" + flag + "','" + searchQuery + "') \">1</a> ... </li>";
            }

            for (var i = startingNode; i <= lastNode; i++) {
                if (i != currentPage) {
                    pagingControls += "<li><a href=\"javascript:void(0)\" onclick=\"pager.showiClinicPage(" + i + ",'" + field + "','" + flag + "','" + searchQuery + "'); \">" + i + "</a></li>";
                } else {
                    pagingControls += "<li><a style=\"text-underline:none\">" + i + "</a></li>";
                }
            }

            if (lastNode != numPages) {
                pagingControls += "<li> ... </li> <li><a href=\"javascript:void(0)\" onclick=\"pager.showiClinicPage(" + numPages + ",'" + field + "','" + flag + "','" + searchQuery + "') \">" + numPages + "</a></li>";
            }

            //add next button
            if (currentPage < numPages) {
                pagingControls += "<li><a href=\"javascript:void(0)\" onclick=\"pager.showiClinicPage(" + (currentPage + 1) + ",'" + field + "','" + flag + "','" + searchQuery + "') \">Next</a></li>";
            }

            pagingControls += "</ul></div>";
            $(container).html(pagingControls);
        } else {
            $(container).html("");
        }
    };
};
