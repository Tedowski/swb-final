$( ".remove-blog-post" ).each(function(  ) {
    $(this).click(function () {
        let sBlogId = this.id;
        //console.log(this.id);
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
                }
            })
            .fail(function () {
                console.log('Ajax error');
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