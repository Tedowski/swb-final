$(function () {
    $("textarea").each(function () {
        this.style.height = (this.scrollHeight+10)+'px';
    });
});

function autoresize(textarea) {
    textarea.style.height = '0px';     //Reset height, so that it not only grows but also shrinks
    textarea.style.height = (textarea.scrollHeight+10) + 'px';    //Set new height
}

$('.textarea').keyup(function () {
    autoresize(this);
});