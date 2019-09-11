$('#frm-add-subscriber').submit(
    function(){
        $.ajax({
            method: "POST",
            url: "../apis/api-get-new-subscriber.php",
            data: $('#frm-add-subscriber').serialize(),
            dataType: "JSON"

        })
            .done(function(jData){
                    if(jData.status == 1){
                        showPopup({
                            content: 'You have successfully add a new subscribed to newsletter',
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
