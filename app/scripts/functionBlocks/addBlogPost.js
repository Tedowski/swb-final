$('#add-blog-post').click(function () {
    $('.form-container').fadeIn();
});
$('#frm-add-blog').submit(
    function(){
        $.ajax({
            method: "POST",
            url: "../apis/api-add-blog-post.php",
            data: $('#frm-add-blog').serialize(),
            dataType: "JSON"

        })
            .done(function(jData){
                    if(jData.status == 1){
                        console.log('blog post successfully created');
                    }
                    else if(jData.status == 0 ){
                        console.log(jData.message);
                    }
                    else{
                        console.log('something is wrong');
                    }
                }
            )
            .fail(function(){
                    console.log('error');
                }
            );
        return false;
    }
)
