$(function () {
    $('#showPrevNews').click(function () {
        getNewsPage($('#currentPage').val(), "Previous");
    });

    $('#showNextNews').click(function () {
        getNewsPage($('#currentPage').val(), "Next");
    });
});

function getNewsPage(currentPage,command) {
    $.ajax({
        type: "POST",
        data: { "currentPage": currentPage,"command": command },
        dataType: 'html',
        url: "/Home/GetNewsPage",
        success: function (data) {
            $(window).scrollTop(0);
            $('#blog_cover').html(data);
            $('#showPrevNews').click(function () {
                getNewsPage($('#currentPage').val(), "Previous");
            });

            $('#showNextNews').click(function () {
                getNewsPage($('#currentPage').val(), "Next");
            });
        },
        error: function (e) {
            throw e;
        }
    });
}