
let animationSpeed = 750;

function showPopup(options) {

    // select popup block
    const popup = $('#popup');

    //remove all active modifying classes
    $(popup).removeClass('popup-success popup-warning popup-error popup-info popup-top popup-top_active popup-bottom_active popup-bottom hidden');

    //select components
    const popupIcon = $(popup).find('#popupIcon');
    const popupAction = $(popup).find('#popupAction');
    const popupContent = $(popup).find('#popupContent');

    //apply message content + define fallback message;
    $(popupContent).text(options.content || 'This is a fallback message');

    //HTML/SVG markup for icons - might have to update for SVGs
    const sSuccessIcon = '<i class="fas fa-check"></i>';
    const sWarningIcon = '<i class="fas fa-exclamation-triangle"></i>';
    const sErrorIcon = '<i class="fas fa-bug"></i>';
    const sInfoIcon = '<i class="fas fa-info"></i>';

    //state options
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

        case "info":
            $(popup).addClass('popup-info');
            $(popupIcon).html(sInfoIcon);
            break;
        default:
            $(popupIcon).html(sInfoIcon);
            break;

    }

    // position options
    switch (options.position) {

        case "top":
            $(popup).addClass('popup-top');
            setTimeout(function() {
                $(popup).addClass('popup-top_active')
            }, 250);
            break;

        case "bottom":
            $(popup).addClass('popup-bottom').addClass('popup-top_bot');
            setTimeout(function() {
                $(popup).addClass('popup-bottom_active');
            }, 250);
            break;
    }
}

function closePopup() {
    const popup = $('#popup');

    if($(popup).hasClass('popup-top')) {
        $(popup).removeClass('popup-top_active');

        setTimeout(function() {
            $(popup).removeClass('popup-top');
        }, animationSpeed)

    } else if($(popup).hasClass('popup-bottom')) {

        $(popup).removeClass('popup-bottom_active');

        setTimeout(function() {
            $(popup).removeClass('popup-bottom');
        }, animationSpeed)
    }
}

let messageTop = 'Top message';
let messageBot = 'Bottom message';

$('#openTop').on('click', function() {
    showPopup({
        content: messageTop,
        state: 'warning',
        position: 'top'
    })
});

$('#openBot').on('click', function() {
    console.log('clicked');
    showPopup({
        content: messageBot,
        state: 'error',
        position: 'bottom'
    })
})