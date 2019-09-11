$(".edit-testimon").each(function () {
    $(this).click(function () {
        let iTestimonId = this.id;
        console.log(iTestimonId);
        window.location.replace("testimonial?id=" + iTestimonId, "");

    })
})


$('#frm-add-testimon').submit(
    function(){
        $.ajax({
            method: "POST",
            url: "../apis/api-add-testimonial.php",
            data: $('#frm-add-testimon').serialize(),
            dataType: "JSON"

        })
            .done(function(jData){
                    if(jData.status == 1){
                        showPopup({
                            content: 'Testimonial successfully edited',
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

$( ".remove-testimon" ).each(function(  ) {
    $(this).click(function () {
        let sTestimonId = this.id;
        console.log(this.id);
        $.ajax({
            method: "GET",
            url: "../apis/api-remove-testimonial.php",
            data: {"testimon-id":sTestimonId},
            dataType: "JSON"
        })
            .done(function (jData) {
                //console.log(jData);
                if (jData.status == 1) {
                    //show message that blog post was deleted
                    showPopup({
                        content: 'Testimonial successfully deleted',
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

$('#frm-edit-testimon').submit(
    function(){
        $.ajax({
            method: "POST",
            url: "../apis/api-edit-testimonial.php",
            data: $('#frm-edit-testimon').serialize(),
            dataType: "JSON"

        })
            .done(function(jData){
                    if(jData.status == 1){
                        showPopup({
                            content: 'Testimonial successfully edited',
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