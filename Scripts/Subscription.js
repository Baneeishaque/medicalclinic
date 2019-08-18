var Imtech = {};
Imtech.Pager = function () {
    this.paragraphsPerPage = 10;
    this.currentPage = 1;
    this.pagingControlsContainer = "#pagingControls";
    this.numPages = function (total) {
        var numPages = 0;
        var n;
        n = Number(total);
        n = document.getElementById("totalPatients").value;
        if (this.paragraphs != null && this.paragraphsPerPage != null) {
            numPages = Math.ceil(n / this.paragraphsPerPage);
        }
        return numPages;
    };
    this.showPage = function (page) {
        this.currentPage = page;
        var end = page * this.paragraphsPerPage;
        var start = end - this.paragraphsPerPage + 1;
        document.getElementById("pageHiddenValuesd").value = page;
        $.ajax({
            type: "POST",
            url: "/HealthPlans/GetSubscription",
            data: "{start:'" + start + "',end : '" + end + "',field : 'SubscriptionTypeID',flag : '0'}",
            contentType: "application/json",
            success: function (data) {
                var jsonData = JSON.parse(data);
                if (jsonData.length > 0) {
                    for (var i = 0; i < jsonData.length; i++) {
                       // document.getElementById(i + "1").innerHTML = '<h3>' + jsonData[i].SubscritionType + '</h3><span class="normal_text" >' + jsonData[i].SubscriptionPrice + '  ' + jsonData[i].SubscriptionCurrency + '</span>';
                       // document.getElementById(i + "2").innerHTML = jsonData[i].SubscriptionDescription;
                       // document.getElementById(i + "3").innerHTML = jsonData[i].SubscriptionDetails;
                       //document.getElementById(i + "4").innerHTML = ' <ul><li><a href="Payment/Subscription/' + jsonData[i].SubscriptionId + '">SUBSCRIBE NOW</a></li></ul>';
                        document.getElementById(i + "1").value = jsonData[i].SubscriptionId;
                    }
                } else {
                    document.getElementById("noresult").innerHTML = "";
                    document.getElementById("noresult").innerHTML = "No items has been added yet.";
                    document.getElementById("noresult").style.display = "";
                    document.getElementById("listloading").style.display = "none";
                }
            }
        });
    };
    var renderControls = function (container, currentPage, numPages) {
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
            var pagingControls = "<ul class=\"Pageing\">";
            if (currentPage > 1) {
                pagingControls += "<li><a href='javascript:void(0)' onclick=\"pager.showPage(" + (currentPage - 1) + ")\">Prev</a></li>";
            }

            if (startingNode > 1) {
                pagingControls += "<li><a href='javascript:void(0)' onclick=\"pager.showPage(1)\">1</a> </li><li> ... </li>";
            }

            for (var i = startingNode; i <= lastNode; i++) {
                if (i != currentPage) {
                    pagingControls += "<li><a href='#' onclick=\"pager.showPage(" + i + "); return false;\">" + i + "</a></li>";
                } else {
                    pagingControls += "<li><a class=\"listpaging\">" + i + "</a></li>";
                }
            }

            if (lastNode != numPages) {
                pagingControls += "<li> ... </li><li> <a href='javascript:void(0)' onclick=\"pager.showPage(" + numPages + ")\">" + numPages + "</a></li>";
            }

            //add next button
            if (currentPage < numPages) {
                pagingControls += "<li><a href='javascript:void(0)' onclick=\"pager.showPage(" + (currentPage + 1) + ")\">Next</a></li>";
            }

            pagingControls += "</ul>";
            $(container).html(pagingControls);
        }
        else {
            $(container).html("");
        }
    };
};