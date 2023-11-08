$(document).ready(e => {
    $('.index-slider').bxSlider({
        minSlides: 3,
        maxSlides: 3,
        moveSlides: 1,
        // randomStart: true,
        touchEnabled: false,
        infiniteLoop: true,
        pager: false,
        auto: true,
        nextText: '.',
        prevText: '.',
        slideWidth: 600
    });

    $('.count-plus-btn').click(e => {

        let input = $(e.target).parent().find('input');

        let value = parseInt(input.val());
        let diff = parseInt($(e.target).data('plus-value'));
        let sum = value + diff;

        input.val(sum ? sum : "");
    });

    $('.count-minus-btn').click(e => {

        let input = $(e.target).parent().find('input');

        let value = parseInt(input.val());
        let diff = parseInt($(e.target).data('minus-value'));
        let sum = value - diff <= diff ? diff : value - diff;

        input.val(sum ? sum : "");
    });

    $('.count-value').on('focusout', e => {

        let input = $(e.target);
        let diff = parseInt(input.data('multiply-value'));
        let old = Math.abs(parseInt(input.val()));
        let sum = old ? Math.ceil(old / diff) * diff : diff;

        input.val(sum ? sum : "");
    });

    $('.cart-add').click(e => {

        let cont = $(e.target).parent().find('.count-container');
        let input = $(cont).find('input');
        let count = parseInt($(cont).find('input').attr('value'));
        let id = $(cont).find('input').data('product');
        let stored = $(e.target).parent().find('i.in-cart');

        let newVal = parseInt(input.val()) + stored.data('value');

        stored.html(`Добавлено ${newVal}шт. в <a href="/korzina-tovarov">корзину</a>`)
        stored.data('value', newVal);

        console.log(count, newVal);

        $.ajax({
            url: `/cart/add/${id}/${newVal}`,
            success: cart => {

                let price = JSON.parse(cart);

                $('#cart-global-cnt').html(price.total_count);
                $('#cart-global-price').html(price.total_price);
                $(e.target).next('.in-cart')
                    .css({display: "block"})
                    .html(`Добавлено ${newVal}шт. в <a href="/korzina-tovarov">корзину</a>`)
            },
            error: error => console.log(error),
        })
    });

    $('.cart-count-plus-btn').click(e => {

        let input = $(e.target).parent().find('input');

        let value = parseInt(input.val());
        let diff = parseInt($(e.target).data('plus-value'));
        let sum = value + diff;

        input.val(sum ? sum : "");

        let cont = $(e.target).parents('.count-container');
        let id = $(cont).find('input').data('product');

        $.ajax({
            url: `/cart/add/${id}/${sum}`,
            success: (e) => {
                window.location.reload();
            },
            error: error => console.log(error),
        });
    });

    $('.cart-count-minus-btn').click(e => {

        let input = $(e.target).parent().find('input');

        let value = parseInt(input.val());
        let diff = parseInt($(e.target).data('minus-value'));
        let sum = value - diff <= diff ? diff : value - diff;

        input.val(sum ? sum : "");

        let cont = $(e.target).parents('.count-container');
        let count = $(cont).find('input').val();
        let id = $(cont).find('input').data('product');

        $.ajax({
            url: `/cart/add/${id}/${count}`,
            success: () => {
                window.location.reload();
            },
            error: error => console.log(error),
        });
    });

    $('#callback').click(e => {
        $('#overlay').show();
        $('.callback').show();
    });

    $('#overlay').click(() => {
        $('#overlay').hide();
        $('.callback').hide();
    });

    $('form.callback').on('submit', e => {

        let name = $('form.callback [name=name]');
        let phone = $('form.callback [name=phone]');

        if (!name.val()) {
            name.css({"border": "1px solid red"});
            e.preventDefault();
        }

        if (!phone.val()) {
            phone.css({"border": "1px solid red"});
            e.preventDefault();
        }
    })
});