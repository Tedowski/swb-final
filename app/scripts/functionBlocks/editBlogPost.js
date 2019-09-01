$( ".remove-blog-post" ).each(function(  ) {
    $(this).click(function () {
        let sBlogId = this.id;
        console.log(this.id);
        $.ajax({
            method: "GET",
            url: "../apis/api-remove-blog-post.php",
            data: {"blog-id":sBlogId},
            dataType: "JSON"
        })
            .done(function (jData) {
                //console.log(jData);
                if (jData.status == 1) {
                    //show message that blog post was deleted
                    showPopup({
                        content: 'Blog post successfully deleted',
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
    })
});

$(".edit-blog-post").each(function () {
    $(this).click(function () {
        let sBlogId = this.id;
        console.log(sBlogId);
        window.location.replace("post?id=" + sBlogId, "");

    })
})



$('#frm-edit-blog').submit(
    function(){
        $.ajax({
            method: "POST",
            url: "../apis/api-edit-blog-post.php",
            data: $('#frm-edit-blog').serialize(),
            dataType: "JSON"

        })
            .done(function(jData){
                    if(jData.status == 1){
                        showPopup({
                            content: 'Blog post successfully edited',
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
