$(function () {
    $('#searchText').val('');

    $('#showPrevBlogs').click(function () {
        getBlogPage("Previous");
    });

    $('#showNextBlogs').click(function () {
        getBlogPage("Next");
    });
    
    $('#btnSearch').click(function () {
        var qry = $.trim($('#searchText').val());
        if (qry != "") {
            window.location.href = "/blog/search/" + qry;
        }
        else {
            $.msgBox({
                title: "iClinic",
                content: "Enter some query to find results !",
                type: "info"
            });
        }
    });

    $('#searchText').keyup(function (event) {
        var qry = $.trim($(this).val());
        if (event.which == 13) {
            if (qry != "") {
                window.location.href = "/blog/search/" + qry;
            }
            else {
                $.msgBox({
                    title: "iClinic",
                    content: "Enter some query to find results !",
                    type: "info"
                });
            }
        }
    });
});

function getBlogPage(command) {
    $.ajax({
        type: "POST",
        data: { "command": command },
        dataType: 'html',
        url: "/Blog/GetBlogPage",
        success: function (data) {
            $(window).scrollTop(0);
            $('#blogList').html(data);
            $('#showPrevBlogs').click(function () {
                getBlogPage("Previous");
            });

            $('#showNextBlogs').click(function () {
                getBlogPage("Next");
            });
        },
        error: function (e) {
            throw e;
        }
    });
}