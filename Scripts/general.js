// JavaScript by TeckStack.com

$(document).ready(function() {
    $("#loginclick").click(function (e) {
        $("body").append('<div class="overlay"></div>');
		$(".loginpopup").show();
		
		$(".close").click(function(e) {
		    $(".loginpopup, .overlay").hide();
		});
    });
});