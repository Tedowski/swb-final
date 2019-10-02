$(function () {
    $("textarea").each(function () {
        this.style.height = (this.scrollHeight+40)+'px';
    });
});

const addLinkBtn = $('.add-link-btn');

$(addLinkBtn).on('click', (e) => {
    const _this = e.target;
    const textarea = $(_this).closest('.input-wrapper').find('.textarea');

    const linkMarkup = '<a href="" class="link" target="_blank"></a>';

    $(textarea).val($(textarea).val() + linkMarkup);
});

// function autoresize(textarea) {
//     textarea.style.height = '0';     //Reset height, so that it not only grows but also shrinks
//     textarea.style.height = (textarea.scrollHeight+10) + 'px';    //Set new height
// }
//

// $('.textarea').keyup(function () {
//     const value = $(this).val();
//     if (value.indexOf('href') >= 0) {
//
//     }
// });