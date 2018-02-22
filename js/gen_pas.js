$(document).ready(function () {
    $('.genPasClick').click(function () {
        $.ajax({
            type   : 'POST',
            url    : 'phpscripts/gen_pas.php', //Path may need to be changed based on localhost browse route
            success: function (data) {
                var msg = 'Please make sure the generated password is safely stored in somewhere.';
                alert(msg);
                $('.pasInput').val(data);
            }
        });
    });
});
//reference: https://stackoverflow.com/questions/27716499/how-to-call-a-php-script-function-on-a-html-button-click