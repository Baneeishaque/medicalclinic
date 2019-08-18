$(function () {
    $('#searchText').val('');

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