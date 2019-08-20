$('#adminLoginForm').submit(function () {

    $.ajax({
        method: "POST",
        url: "../apis/api-login.php",
        data: $('#adminLoginForm').serialize(),
        dataType: "JSON"
    })
    .done(function (jData) {
        if(jData.status == 0) {
            showPopup({
                content: jData.message,
                state: 'warning',
                position: 'top'
            });
        } else if(jData.status == 1) {
            location.href = 'dashboard.php';
        }
    })
    .fail(function () {
        showPopup({
            content: 'Cannot process your request (AJAX error)',
            state: 'error',
            position: 'top'
        });
    });

    return false;
});