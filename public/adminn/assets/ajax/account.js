$(document).ready(function() {
    $("#content").html($(".detroit").html()).load("/account/profile", function(response, status, request) {
        this;

    });
    $(".account").click(function(e) {
        e.preventDefault();
        var active = this;
        $(".detroit").show();
        setTimeout(() => {
            $("#content").html($(".detroit").html()).load($(this).attr('href'), function(response, status, request) {
                this;

            });
        }, 1500);

    });
});