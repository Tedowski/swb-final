const collBtn = $('.btn-collapsible');

$(collBtn).hover(function() {
    const content = document.querySelector('.collap__content');

    if (content.style.maxHeight){
        content.style.maxHeight = null;
    } else {
        content.style.maxHeight = content.scrollHeight + "px";
    }
});