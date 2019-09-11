$( ".remove-subscriber" ).each(function(  ) {
    $(this).click(function () {
        let sSubscriberId = this.id;
        console.log(this.id);
        $.ajax({
            method: "GET",
            url: "../apis/api-remove-subscriber.php",
            data: {"subscriber-id":sSubscriberId},
            dataType: "JSON"
        })
            .done(function (jData) {
                //console.log(jData);
                if (jData.status == 1) {
                    showPopup({
                        content: 'Subscriber successfully deleted from list',
                        state: 'success',
                        position: 'top'
                    });
                }
            })
            .fail(function (ex) {
                console.log(ex);
                showPopup({
                    content: 'Cannot process your request (AJAX error)',
                    state: 'error',
                    position: 'top'
                });
            });

        return false;
    })
});