$('#frm-send-newsletter').submit(
    function(){
        $.ajax({
            method: "POST",
            url: "../apis/api-send-newsletter.php",
            data: $('#frm-send-newsletter').serialize(),
            dataType: "JSON"

        })
            .done(function(jData){
                    if(jData.status == 1){
                        showPopup({
                            content: 'You have successfully send newsletter e-mail to all SWB subscribers',
                            state: 'success',
                            position: 'top'
                        });
                    }
                    else if(jData.status == 0 ){
                        showPopup({
                            content: jData.message,
                            state: 'warning',
                            position: 'top'
                        });
                    }

                }
            )
            .fail(function(ex){
                    console.log(ex);

                    showPopup({
                        content: 'Cannot process your request (AJAX error)',
                        state: 'error',
                        position: 'top'
                    });
                }
            );
        return false;
    }
)
