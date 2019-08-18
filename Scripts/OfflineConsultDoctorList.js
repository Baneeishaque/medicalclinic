var Imtech = {};
Imtech.Pager = function () {
    this.paragraphsPerPage = 6;
    this.currentPage = 1;
    this.pagingControlsContainer = "#pagingControls";

    this.numPages = function () {
        var numPages = 0;
        var n = 0;
        n = document.getElementById("totalDoctors").value;
        if (this.paragraphs != null && this.paragraphsPerPage != null) {
            numPages = Math.ceil(n / this.paragraphsPerPage);
        }
        return numPages;
    };
    this.showPage = function (page, speciality) {
        this.currentPage = page;
        var end = page * this.paragraphsPerPage;
        var start = end - this.paragraphsPerPage + 1;
            document.getElementById("pageHiddenValuesd").value = page;
        var url = "";
        var pagingControls = "";
            url = "/WrittenOpinion/GetDoctors";
        $.ajax({
            type: "POST",
            url: url,
            data: "{start:'" + start + "',end : '" + end + "',speciality : '" + speciality + "'}",
            contentType: "application/json",
            success: function (data) {
                var jsonData = JSON.parse(data);
                    var msg =
                        "<tr><td>S. No.</td><td><a onclick=\"javascript:doctorSort('id')\" style='cursor:pointer'>Doctor Id</a></td><td><a onclick=\"javascript:doctorSort('name')\" style='cursor:pointer'>Doctor Name</td><td></td></tr>";
                    var count = 1;
                    if (jsonData.length > 0) {
                        for (var i = 0; i < jsonData.length; i++) {
                            count++;
                            if (count % 2 != 0) {
                                msg +=
                                    "<tr><td>" + jsonData[i].sno + "</td><td>" + jsonData[i].id + "</td><td>" + jsonData[i].doctor_name + "</td>" +
                                        "<td><span><a class='addpopup' onclick=\"javascript:add_doctor('" + jsonData[i].id + "','" + jsonData[i].doctor_name + "','" + jsonData[i].speciality + "')\">Add</a>" +
                                        "</span></td></tr>";
                            } else {
                                msg +=
                                    "<tr><td  class='row'>" + jsonData[i].sno + "</td><td class='row'>" + jsonData[i].id + "</td><td class='row'>" + jsonData[i].doctor_name + "</td>" +
                                        "<td  class='row'><span><a class='addpopup' onclick=\"javascript:add_doctor('" + jsonData[i].id + "','" + jsonData[i].doctor_name + "','" + jsonData[i].speciality + "')\">Add</a>" +
                                        "</span></td></tr>";
                            }
                        }
                        if (count < 6) {
                            for (var i = 0; i < (6 - count); i++) {
                                msg += "<tr><td colspan='4'></td></tr>";
                            }
                        }
                    } else {
                        msg += "<tr><td colspan='4'>No Doctor Found for this Speciality</td></tr>";
                        msg += "<tr><td colspan='4'></td></tr>";
                        msg += "<tr><td colspan='4'></td></tr>";
                        msg += "<tr><td colspan='4'></td></tr>";
                        msg += "<tr><td colspan='4'></td></tr>";
                    }
                document.getElementById("doctor_box").innerHTML = msg;
            }
        });
            pagingControls = "#pagingControls1";
        renderControls(pagingControls, this.currentPage, this.numPages(),speciality);
    };

    var renderControls = function (container, currentPage, numPages, speciality) {
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
            var pagingControls = "Page: <ul>";
            //alert("start : "+startingNode+"  , last : "+lastNode);
            //add previous button
            if (currentPage > 1) {
                pagingControls += "<li><a href='javascript:void(0)' onclick=\"pager.showPage(" + (currentPage - 1) + ",'" + speciality + "')\">Prev</a></li>";
            }

            if (startingNode > 1) {
                pagingControls += "<li><a href='javascript:void(0)' onclick=\"pager.showPage(1,'" + speciality + "')\">1</a> ... </li>";
            }

            for (var i = startingNode; i <= lastNode; i++) {
                if (i != currentPage) {
                    pagingControls += "<li><a href='#' onclick=\"pager.showPage(" + i + ",'" + speciality + "'); return false;\">" + i + "</a></li>";
                } else {
                    pagingControls += "<li>" + i + "</li>";
                }
            }

            if (lastNode != numPages) {
                pagingControls += "<li> ... <a href='javascript:void(0)' onclick=\"pager.showPage(" + numPages + ",'" + speciality + "')\">" + numPages + "</a></li>";
            }

            //add next button
            if (currentPage < numPages) {
                pagingControls += "<li><a href='javascript:void(0)' onclick=\"pager.showPage(" + (currentPage + 1) + ",'" + speciality + "')\">Next</a></li>";
            }

            pagingControls += "</ul>";
            $(container).html(pagingControls);
        }
    };
};