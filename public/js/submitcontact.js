$(document).ready(function() {
    $(".submit").click(function(e) {
        e.preventDefault();
        var route = $(this).attr('route');
        var fields = $("#contact").serialize();
        $.ajax({
            type: $("#contact").attr('method'),
            url: route,
            data: fields,
            success: function(response) {
                if (response === "ok") {
                    location.href = "/command/complete";
                } else {
                    $("#message").show();
                    $("#contact").reset();
                }
            }
        });
    });

    $('.edit-avatar').change(function(e) {
        e.preventDefault();
        $(".loading").show();
        formdata = new FormData();
        if ($(this).prop('files').length > 0) {
            file = $(this).prop('files')[0];
            formdata.append("avatar", file);
        }
        formdata.append('_token', $(this).attr("token"));
        var link = $(this).attr("target");
        jQuery.ajax({
            url: link,
            type: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            success: function(result) {
                if (result === "ok") {
                    location.reload(true);
                }
                $(".loading").hide();
            }
        });
    });


});