(function( $ ){

    let green = 'green';

    $.fn.helpPassword = function(options) {

        // default options all off
        let settings = $.extend({
            lowerCase: false,
            upperCase: false,
            number: false,
            specialChar: false,
            length: false,
            constraints: {
                min: 8,
                max: 0,
            }
        }, options );

        // Define helper container to append

        let HELPER_CONTAINER = '<div class="input__helper-list">';

        if(settings.lowerCase) {
            HELPER_CONTAINER += '<div class="helper-item" data-check="lower">\n' +
'                                   <div class="icon-check-switch">\n' +
'                                       <i class="fas fa-circle"></i>\n' +
'                                       <i class="fas fa-check-circle"></i>\n' +
'                                   </div>\n' +
'                                   <p>lowercase character</p>\n' +
'                                </div>';
        }
        if(settings.upperCase) {
            HELPER_CONTAINER += '<div class="helper-item" data-check="upper">\n' +
                '                   <div class="icon-check-switch">\n' +
                '                       <i class="fas fa-circle"></i>\n' +
                '                       <i class="fas fa-check-circle"></i>\n' +
                '                   </div>\n' +
                '                   <p>uppercase character</p>\n' +
                '                </div>';
        }
        if(settings.number) {
            HELPER_CONTAINER += '<div class="helper-item" data-check="number">\n' +
                '                   <div class="icon-check-switch">\n' +
                '                       <i class="fas fa-circle"></i>\n' +
                '                       <i class="fas fa-check-circle"></i>\n' +
                '                   </div>\n' +
                '                   <p>a number</p>\n' +
                '                </div>';
        }
        if(settings.specialChar) {
            HELPER_CONTAINER += '<div class="helper-item" data-check="special">\n' +
                '                   <div class="icon-check-switch">\n' +
                '                       <i class="fas fa-circle"></i>\n' +
                '                       <i class="fas fa-check-circle"></i>\n' +
                '                   </div>\n' +
                '                   <p>special character</p>\n' +
                '                </div>';
        }
        if(settings.length) {
            let iMin = settings.constraints.min;
            let iMax = settings.constraints.max;

            let constraints = `at least ${iMin} characters`;

            if(iMax !== 0) {
                constraints = `between ${iMin} and ${iMax} characters`
            }

            HELPER_CONTAINER += '<div class="helper-item" data-check="length">\n' +
                '                    <div class="icon-check-switch">\n' +
                '                         <i class="fas fa-circle"></i>\n' +
                '                         <i class="fas fa-check-circle"></i>\n' +
                '                    </div>\n' +
                `                    <p>${constraints}</p>\n` +
                '                </div>';
        }

        HELPER_CONTAINER += '</div>';

        // Append helper container to parent

        let parent = $(this).closest('.form__input-group');
        parent.append(HELPER_CONTAINER);

        // On input tester

        this.on('input', function() {
            let iMin = parseInt($(this).attr('data-min'));
            let iMax = parseInt($(this).attr('data-max'));

           let val = $(this).val();

           let helpers = $(this).closest('.form__input-group').find('.input__helper-list');

            if(settings.lowerCase) {
                let HELPER_LOWER = $(helpers).find('.helper-item[data-check="lower"]');
                (/[a-z]/.test(val)) ? $(HELPER_LOWER).addClass('checked') : $(HELPER_LOWER).removeClass('checked');
            }
            if(settings.upperCase) {
                let HELPER_UPPER = $(helpers).find('.helper-item[data-check="upper"]');
                (/[A-Z]/.test(val)) ? $(HELPER_UPPER).addClass('checked') : $(HELPER_UPPER).removeClass('checked');
            }
            if(settings.number) {
                let HELPER_NUMBER = $(helpers).find('.helper-item[data-check="number"]');
                (/[0-9]/.test(val)) ? $(HELPER_NUMBER).addClass('checked') : $(HELPER_NUMBER).removeClass('checked');
            }
            if(settings.specialChar) {
                let HELPER_SPECIAL = $(helpers).find('.helper-item[data-check="special"]');
                (/[!@#$%^&*(),.?":{}|<>_-]/.test(val)) ? $(HELPER_SPECIAL).addClass('checked') : $(HELPER_SPECIAL).removeClass('checked');
            }
            if(settings.length) {
                let HELPER_SPECIAL = $(helpers).find('.helper-item[data-check="length"]');
                (val.length >= iMin && val.length <= iMax) ? $(HELPER_SPECIAL).addClass('checked') : $(HELPER_SPECIAL).removeClass('checked');
            }
        });

        return this;
    };
})( jQuery );