var Imtech = {};
Imtech.Pager = function () {
    this.paragraphsPerPage = 10;
    this.currentPage = 1;
    this.pagingControlsContainer = "#pagingControls";

    this.numPages = function () {
        var numPages = 0;
        var n;
        n = document.getElementById("hiddenTotalPages").value;
        if (this.paragraphs != null && this.paragraphsPerPage != null) {
            numPages = Math.ceil(n / this.paragraphsPerPage);
        }
        return numPages;
    };

    this.showSearchedPage = function (page, searchQuery) {
        this.currentPage = page;
        var end = page * this.paragraphsPerPage;
        var start = end - this.paragraphsPerPage + 1;
        document.getElementById("hiddenPageValue").value = page;

        var jsonObject = { start: start, end: end, searchQuery: searchQuery };
        var jsonString = JSON.stringify(jsonObject);

        $.ajax({
            type: "POST",
            url: "/PatientForum/CommunityGetSearchTopicsWithPaging",
            data: jsonString,
            contentType: "application/json",
            success: function (data) {
                if (data == null || data == "null") {
                    document.getElementById("noresult").innerHTML = "";
                    document.getElementById("noresult").style.display = "";
                    document.getElementById("noresult").innerHTML = "<b>Nothing found </b><br/><br/>Sorry, but nothing matched your search criteria. Please try again with some different keywords.";
                    document.getElementById("searchResultsFor").style.display = "none";
                } else {
                    var jsonData = JSON.parse(data);
                    document.getElementById("noresult").innerHTML = "";
                    document.getElementById("noresult").style.display = "none";
                    if(searchQuery != "All"){
                    document.getElementById("searchResultsFor").style.display = "";
                    document.getElementById("searchResultsFor").innerHTML = 'Search results for “<em>' + searchQuery + '</em> ”';
                }
                    $("#searchResultContainer").empty();
                    for (var i = 0; i < jsonData.length; i++) {
                        $("#searchResultContainer").append("<div class='community-left-content-row'>" +
                            "<span><a href='/patient-forum/" + CleanUrlForTopicPost(jsonData[i].title) + "/" + jsonData[i].id + "'>" + jsonData[i].title + "</a>" +
                            " category <a href='/patient-forum/search/" + CleanUrlForSearch(jsonData[i].category) + "'>" + jsonData[i].category + "</a></span>" +
                            "<p>" + jsonData[i].topicDescription + "</p>" +
                            "<div class='community-left-content-read'><span><a href='/patient-forum/" + CleanUrlForTopicPost(jsonData[i].title) + "/" + jsonData[i].id + "'>Read More</a></span></div></div>");
                    }
                }
            }
        });

        var pagingControls = "#Paging";
        renderControls(pagingControls, this.currentPage, this.numPages(),searchQuery);
    };
    
    this.showPage = function (page, searchQuery) {
        this.currentPage = page;
        var end = page * this.paragraphsPerPage;
        var start = end - this.paragraphsPerPage + 1;
        document.getElementById("hiddenPageValue").value = page;

        var jsonObject = { start: start, end: end, searchQuery: searchQuery };
        var jsonString = JSON.stringify(jsonObject);

        $.ajax({
            type: "POST",
            url: "/PatientForum/CommunityGetSearchTopicsWithPaging",
            data: jsonString,
            contentType: "application/json",
            success: function (data) {
                if (data == null || data == "null") {
                    document.getElementById("noresult").innerHTML = "";
                    document.getElementById("noresult").style.display = "";
                    document.getElementById("noresult").innerHTML = "<b>Nothing found </b><br/><br/>Sorry, but nothing matched your search criteria. Please try again with some different keywords.";
                    document.getElementById("searchResultsFor").style.display = "none";
                } else {
                    var jsonData = JSON.parse(data);
                    document.getElementById("noresult").innerHTML = "";
                    document.getElementById("noresult").style.display = "none";
                    if (searchQuery != "All") {
                        document.getElementById("searchResultsFor").style.display = "";
                        document.getElementById("searchResultsFor").innerHTML = 'Search results for “<em>' + searchQuery + '</em> ”';
                    }
                    $("#searchResultContainer").empty();
                    for (var i = 0; i < jsonData.length; i++) {
                        $("#searchResultContainer").append("<div class='community-left-content-row'>" +
                            "<span><a href='/patient-forum/" + CleanUrlForTopicPost(jsonData[i].title) + "/" + jsonData[i].id + "'>" + jsonData[i].title + "</a>" +
                            " category <a href='/patient-forum/search/" + CleanUrlForSearch(jsonData[i].category) + "'>" + jsonData[i].category + "</a></span>" +
                            "<p>" + jsonData[i].topicDescription + "</p>" +
                            "<div class='community-left-content-read'><span><a href='/patient-forum/" + CleanUrlForTopicPost(jsonData[i].title) + "/" + jsonData[i].id + "'>Read More</a></span></div></div>");
                    }
                }
            }
        });
        var pagingControls = "#Paging";
        renderControls(pagingControls, this.currentPage, this.numPages(), searchQuery);
    };

    var renderControls = function(container, currentPage, numPages, searchQuery) {
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
            var pagingControls = "Results Page";
            if (currentPage > 1) {
                pagingControls += " <a href='javascript:void(0)' onclick=\"pager.showSearchedPage(" + (currentPage - 1) + ",'" + searchQuery + "')\"><</a> ";
            }

            if (startingNode > 1) {
                pagingControls += " <a href='javascript:void(0)' onclick=\"pager.showSearchedPage(1,'" + searchQuery + "')\">1</a> ";
            }

            for (var i = startingNode; i <= lastNode; i++) {
                if (i != currentPage) {
                    pagingControls += " <a href='#' onclick=\"pager.showSearchedPage(" + i + ",'" + searchQuery + "'); return false;\">" + i + "</a> ";
                } else {
                    pagingControls += " <a style='text-decoration: none;font-size: 15px;font-weight: bold;font-family: Tahoma;'>" + i + "</a> ";
                }
            }

            if (lastNode != numPages) {
                pagingControls += " <a href='javascript:void(0)' onclick=\"pager.showSearchedPage(" + numPages + ",'" + searchQuery + "')\">" + numPages + "</a> ";
            }

            //add next button
            if (currentPage < numPages) {
                pagingControls += " <a href='javascript:void(0)' onclick=\"pager.showSearchedPage(" + (currentPage + 1) + ",'" + searchQuery + "')\">></a> ";
            }

            pagingControls += "";
            $(container).html(pagingControls);
        } else {
            $(container).html("");
        }
    };
};

function GetLatestTopic() {
    $.ajax({
        type: "POST",
        url: "/PatientForum/CommunityGetLatestNewTopics",
        data: "{}",
        contentType: "application/json",
        success: function (data) {
            if (data == null || data == "null") {
                document.getElementById("noresults").innerHTML = "";
                document.getElementById("noresults").style.display = "";
                document.getElementById("noresults").innerHTML = "<br/>Sorry, No Featured articles found";
                document.getElementById("articleresults").style.display = "none";
            } else {
                var jsonData = JSON.parse(data);
                document.getElementById("noresults").innerHTML = "";
                document.getElementById("noresults").style.display = "none";
                for (var i = 0; i < jsonData.length; i++) {
                    $("#articleresults").append("<div class='community-left-content-row'>" +
                        "<span><a href='/patient-forum/" + CleanUrlForTopicPost(jsonData[i].title) + "/" + jsonData[i].id + "'>" + jsonData[i].title + "</a>" +
                        " category <a href='/patient-forum/search/" + CleanUrlForSearch(jsonData[i].category) + "'>" + jsonData[i].category + "</a></span>" +
                        "<p>" + jsonData[i].topicDescription + "</p>" +
                        "<div class='community-left-content-read'><span><a href='/patient-forum/" + CleanUrlForTopicPost(jsonData[i].title) + "/" + jsonData[i].id + "'>Read More</a></span></div></div>");
                }
            }
        }
    });
}
