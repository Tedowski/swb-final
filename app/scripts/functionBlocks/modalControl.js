function openModal(title) {
    $('.modal').addClass('open');
    $('.modal').find('.title h5').text(title);
    $('body').css('overflow-y', 'hidden');
}