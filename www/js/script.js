$(document).ready(() => {

    $('.save-category').click(e => {

        e.preventDefault();

        let category = $(e.target)
            .parents('.category-row');

        console.log(
            {
                status: category.find('.category-status').hasClass('label-primary') === true ? 1 : 0,
                name: category.find('[name=name]').val(),
                parent: category.find('[name=parent]').val(),
                sort: category.find('[name=sort]').val(),
                id: category.find('[name=id]').val(),
            }
        );

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
});