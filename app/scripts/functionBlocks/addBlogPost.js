$('#add-blog-post').click(function () {
    $('.form-container').fadeIn();
});
$('#frm-add-blog').submit(
    function(evt){
        evt.preventDefault();
        var formData = new FormData($(this)[0]);
        $.ajax({
            method: "POST",
            url: "../apis/api-add-blog-post.php",
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            dataType: "JSON"

        })
            .done(function(jData){
                    if(jData.status == 1){
                        showPopup({
                            content: 'Blog post successfully created',
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


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#fileToUpload").change(function() {
    readURL(this);
});