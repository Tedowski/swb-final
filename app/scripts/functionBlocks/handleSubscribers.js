$('#frm-newsletter').submit(
    function(){
        $.ajax({
            method: "POST",
            url: "apis/api-get-new-subscriber.php",
            data: $('#frm-newsletter').serialize(),
            dataType: "JSON"

        })
            .done(function(jData){
                    if(jData.status == 1){
                        showPopup({
                            content: 'You have successfully subscribed to our newsletter',
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
            .fail(function(){


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
