$(document).ready(function() {
    $("form").submit(function(e) {
        e.preventDefault();
        $('.champ+div').text('');
        $('.champ').removeClass('is-invalid');

        console.log("submit");

        var fd = new FormData();

        console.log(fd);

        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                location.reload(true);
            },
            error: function(data) {
                $.each(data.responseJSON.errors, function(key, value) {
                    var input = 'form .champ[name=' + key + ']';
                    $(input).addClass('is-invalid');
                    $(input + " + div").html(value);
                });
            }
        });
    });
});