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


        console.log(category.find('.category-status').hasClass('label-primary') === true ? 1 : 0);
        console.log(category.find('[name=name]').val());
        console.log(category.find('[name=parent]').val());
        console.log(category.find('[name=sort]').val());
        console.log(category.find('[name=id]').val());

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



    console.log('adm');



});