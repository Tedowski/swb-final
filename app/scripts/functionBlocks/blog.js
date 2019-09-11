$(".read-more-blog-post").each(function () {
    $(this).click(function () {
        let sBlogId = this.id;
        console.log(sBlogId);
        window.location.replace("post?id=" + sBlogId, "");

    })
})
