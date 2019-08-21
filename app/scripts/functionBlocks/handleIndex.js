$('#formIndex').submit(function () {

    $.ajax({
        method: "POST",
        url: "../apis/api-handle-index.php",
        data: $('#formIndex').serialize(),
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
                // console.log(jData.message);
                showPopup({
                    content: jData.message,
                    state: 'success',
                    position: 'top'
                });
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