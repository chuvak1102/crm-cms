$(document).ready(function()
{
    // menu nav functions
    $('#menu div').click(function(e)
    {
        if(!$(e.target).hasClass('active'))
        {
            $('#menu div, a').removeClass('active');
            $('#'+ e.target.id).addClass('active');
            $.ajax({
                url: "/admin/"+$(e.target).attr('id'),
                success: function(response){
                    expand(response);
                }
            });
        }
    });

    function expand(response){
        $('#content')
            .animate({
                "opacity" : 0
            }, 300, function() {
                $(this).empty();
                $(this).html(response);
                $(this).animate({
                    "opacity" : 1
                }, 500, function() {

                });
            });
    }

    $(document).on('click', '#new-field', function(){
        $('#setup-form').append($('#set').html());
    });

    $(document).on('click', '#setup-form a.remove', function(e){
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

    $(document).on('click', 'a.btn.red', function(e){
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

    $(document).on('click', '.tree .mid ul li', function()
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