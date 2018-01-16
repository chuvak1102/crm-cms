$(document).ready(function(){

    $('#new-field').click(function(){
        $('#setup-form').append($('#set').html());
    });

    $('#setup-form').on('click', 'a.remove', function(e){
        $(e.target).parent().remove();
    });

    $(document).on('change', 'select#template', function()
    {
        var template = $(this).val();
        var data = template.split('___');

        $.ajax({
            url : '/admin/category/template',
            type : 'POST',
            data : {
                "template" : data[0],
                "category" : data[1]
            },
            success : function(data){
                console.log(data + ' ok ');
            },
            error : function(data){
                alert(data + ' error ');
            }
        })
    });

    $('a.btn.red').click(function(e){
        if(!confirm('Удалить?')){
            e.preventDefault();
        }
    });

    $(document).on('click', 'a.btn.red', function(e)
    {
        if(!confirm('Удалить?'))
        {
            e.preventDefault();
        }
    });

    $('.tree .mid ul li').click(function()
    {
        $('.tree .mid ul li').removeClass('active');
        $(this).addClass('active');

        $.ajax({
            url : '/admin/category/btn-set/'+$(this).attr('id'),
            success : function(res)
            {
                $('#btn-set').empty().html(res);
            }
        });
    })

});