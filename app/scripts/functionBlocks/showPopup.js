function showPopup(options) {
    const popup = $('#popup');

    $(popup).removeClass('popup-success popup-warning popup-error popup-top popup-bottom hidden');

    const popupIcon = $(popup).find('#popupIcon');
    const popupAction = $(popup).find('#popupAction');
    const popupContent = $(popup).find('#popupContent');

    $(popupContent).text(options.content || 'This is a fallback message');

    const sSuccessIcon = '<i class="fas fa-check"></i>';
    const sWarningIcon = '<i class="fas fa-exclamation-triangle"></i>';
    const sErrorIcon = '<i class="fas fa-bug"></i>';
    const sInfoIcon = '<i class="fas fa-info"></i>';

    switch (options.state) {

        case "success":
            $(popup).addClass('popup-success');
            $(popupIcon).html(sSuccessIcon);
            break;

        case "warning":
            $(popup).addClass('popup-warning');
            $(popupIcon).html(sWarningIcon);
            break;

        case "error":
            $(popup).addClass('popup-error');
            $(popupIcon).html(sErrorIcon);
            break;
        default:
            $(popup).addClass('popup-info');
            $(popupIcon).html(sInfoIcon);
            break;

    }

    switch (options.position) {

        case "top":
            $(popup).addClass('popup-top');
            break;

        case "bottom":
            $(popup).addClass('popup-bottom');
            break;
    }
}

// function closePopup() {
//     const popup = $('#popup');
//
//     if($(popup).hasClass('popup-top')) {
//         TweenMax.to(popup, .5, {
//             y: -200,
//             ease: Power1.easeIn,
//             onComplete: function() {
//                 $('#popup').removeClass('popup-top').addClass('hidden');
//             }
//         })
//     } else if($(popup).hasClass('popup-bottom')) {
//         TweenMax.to(popup, .5, {
//             y: 200,
//             ease: Power1.easeIn,
//             onComplete: function() {
//                 $('#popup').removeClass('popup-bottom').addClass('hidden');
//             }
//         })
//     }
// }

let message = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolor eaque eius enim eos illum nobis obcaecati quibusdam rerum suscipit.';

showPopup({
    content: message,
    position: 'top'
})