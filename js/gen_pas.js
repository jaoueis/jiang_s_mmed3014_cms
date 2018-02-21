$(document).ready(function () {
    $('.genPasClick').click(function () {
        $.ajax({
            type   : 'POST',
            url    : '../phpscripts/gen_pas.php',
            success: function (data) {
                $('.pasInput').val(data);
            }
        });
    });
});
//reference: https://stackoverflow.com/questions/27716499/how-to-call-a-php-script-function-on-a-html-button-click