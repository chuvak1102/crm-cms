$(document).ready(function()
{
    var set = {

        map : {
            "p_1_1" : {
                icon : "fa-sitemap",
                url : "/admin/category/empty",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_1_2" : {
                icon : "fa-newspaper-o",
                url : "/admin/category/",
                screens : {
                    0 : {},
                    1 : {}
                },
                screen : 0
            },
            "p_1_3" : {
                icon : "fa-envelope badge",
                url : "/admin/category/",
                screens : {
                    0 : {}
                },
                screen : 0
            },
            "p_1_4" : {
                icon : "fa-newspaper-o",
                url : "/admin/category/",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_1_5" : {
                icon : "fa-user",
                url : "/admin/category/",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_2_1" : {
                icon : "",
                url : "/admin/category/",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_2_2" : {
                icon : "",
                url : "/admin/category/",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_2_3" : {
                icon : "fa-sitemap",
                url : "/admin/category/",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_2_4" : {
                icon : "",
                url : "/admin/category/",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_2_5" : {
                icon : "",
                url : "/admin/category/",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_3_1" : {
                icon : "",
                url : "/admin/category/",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_3_2" : {
                icon : "fa-gift",
                url : "/admin/category/",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_3_3" : {
                icon : "fa-photo",
                url : "/admin/category/",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_3_4" : {
                icon : "fa-shopping-cart",
                url : "/admin/category/",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_3_5" : {
                icon : "fa-upload",
                url : "/admin/category/",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_4_1" : {
                icon : "fa-bug",
                url : "/admin/category/",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_4_2" : {
                icon : "fa-bell badge",
                url : "/admin/category/",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_4_3" : {
                icon : "",
                url : "/admin/category/",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_4_4" : {
                icon : "fa-calendar",
                url : "/admin/category/",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_4_5" : {
                icon : "fa-sliders",
                url : "/admin/category3/",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            }
        },

        page : {
            x : null,
            y : null,
            current : null,
            inProcess : false,
            enabledListing : false,
            animationSpeed : 600
        },

        menuCellWidth : 20,
        menuCellHeight : 23,
        menuNavHeight : 8
    };

    // opening and closing menu pages
    $('table#menu tr td').click(function()
    {
        var pageId = $(this).attr('id');

        if(pageId && !set.page.inProcess && pageId !== set.page.current)
        {
            open($('#' + pageId + ' > div.page' ));
        }
    });

    $('#home').click(function()
    {
        if(set.page.current && !set.page.inProcess)
        {
            close($('#' + set.page.current + ' > div.page' ));
        }
    });

    function open(page)
    {
        set.page.inProcess = true;
        set.page.current = $(page).parent().attr('id');

        var x = $(page).offset().left;
        var y = $(page).offset().top;

        set.page.x = x;
        set.page.y = y;

        $(page).css({
            'position' : 'absolute',
            'zIndex' : 9999,
            'left' : x,
            'top' : y,
            'width' : '20%',
            'height' : '23%'
        });

        setTimeout(function()
        {
            $(page).css({
                'transition' : "all " + set.page.animationSpeed / 1000 + "s",
                'left' : 0,
                'top' : 0,
                'width' : '100%',
                'height' : '92%'
            });

            setTimeout(function()
            {
                $.ajax({
                    url : set.map[set.page.current].url,
                    type : 'POST',
                    data : {

                    },
                    success : function(data)
                    {
                        page.html(data);
                        set.page.inProcess = false;
                    },
                    error : function(data)
                    {
                        page.html("Ajax request error!");
                        set.page.inProcess = false;
                    }
                });

            }, set.page.animationSpeed);

        }, 50);
    }

    function close(page)
    {
        set.page.inProcess = true;

        var x = set.page.x;
        var y = set.page.y;

        var defaultHtmlButton = $("<button></button>");
        var defaultHtmlIcon = $("<i></i>");
        defaultHtmlButton.addClass("btn");
        defaultHtmlIcon.addClass("fa " + set.map[set.page.current].icon);
        var defaultHtml = defaultHtmlButton.append(defaultHtmlIcon);

        page.html(defaultHtml);

        $(page).css({
            'transition' : "all " + set.page.animationSpeed / 1000 + "s",
            'zIndex' : 'auto',
            'left' : x,
            'top' : y,
            'width' : '20%',
            'height' : '23%'
        });

        setTimeout(function()
        {
            $(page).css({
                'transition' : 'none',
                'position' : 'static',
                'width' : '100%',
                'height' : '100%'
            });

            set.page.x = null;
            set.page.y = null;
            set.page.current = null;
            set.page.inProcess = false;

        }, set.page.animationSpeed);
    }


    // sign out
    $('#logout').click(function()
    {
        confirm('Выйти?');
    })




});