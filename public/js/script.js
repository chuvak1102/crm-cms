$(document).ready(() => {

    $('.save-category').click(e => {

        let category = $(e.target)
            .parents('.category-row');

        $.ajax({
            url: "/category/save",
            data: {
                status: category.find('.category-status').hasClass('label-primary') === true ? 1 : 0,
                name: category.find('[name=name]').val(),
                parent: category.find('[name=parent]').val(),
                sort: category.find('[name=sort]').val(),
                id: category.find('[name=id]').val(),
            },
            success: e => window.location.reload(),
            error: e => alert('Ошибка')
        });
    });

    $('.category-status').click(e => {

        if ($(e.target).hasClass('label-default')) {
            $(e.target)
                .removeClass('label-default')
                .addClass('label-primary');
        } else {
            $(e.target)
                .removeClass('label-primary')
                .addClass('label-default');
        }
    });

    $('.checkbox-all').click(e => {

        $(e.target)
            .parents('.checkbox-container')
            .find('.checkbox-check')
            .map((i, el) => {
                el.checked = $(e.target)[0].checked
            });
    });

    $('.print-price').click(e => {

        let ids = '';

        $('.checkbox-check').map((i, el) => {
            ids += (el.checked ? `&id[]=${$(el).data('value')}` : '')
        });

        window.open(`/product/print?${ids}`);
    });

    $('[name=client_search]').on('input', e => {

        if ($(e.target).val().length >= 3) {

            $.ajax({
                url: "/order/getClient",
                data: {str: $(e.target).val()},
                success: (json) => {

                    let list = $('.float-list.client');

                    let items = JSON.parse(json);

                    list.find('li').remove();
                    items.map(e => {
                        list.append(`<li id=${e.user_id}>[${e.user_id}] <span>${e.name}</span></li>`);
                    });
                    list.addClass('show');
                }
            });
        }
    });

    $('.float-list.client').on('click', 'li', e => {

        let list = $('.float-list.client');
        let id = parseInt($(e.target).attr('id'));
        let order = $('[name=client_search]').data('order');

        list.find('li').remove();
        list.hide();

        $.ajax({
            url: "/order/setClient",
            data: {
                client: id,
                order: order
            },
            success: (r) => window.location.reload()
        });
    });
});