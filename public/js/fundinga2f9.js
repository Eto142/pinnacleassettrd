/*global $*/
window.funding_init = function () {
    var currency_badge = $('.currency_map .currency_badge a');
    var cards_wrapper = $('.funding-cards-grid');
    var deposit_cards = $('.funding-card');
    var selected_currency = '';
    var currency_list = $('.funding-card .acceptable-currency');
    currency_badge.on('click', function (event) {
        event.preventDefault();
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
            deposit_cards.removeClass('d-none');
        } else {
            currency_badge.parent().removeClass('active');
            deposit_cards.removeClass('d-none');
            $(this).parent().addClass('active');
            selected_currency = event.currentTarget.id.toUpperCase();
            currency_list.each(function() {
                if (!$(this).text().match(selected_currency)) {
                    $(this).parent().addClass('d-none');
                }
            });
            $('html, body').animate({
                scrollTop: cards_wrapper.offset().top - 225
            }, 1000);
        }
    });
}

window.funding_init();
