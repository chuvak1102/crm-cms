$(document).ready(function()
{
    var set = {

        menuCellWidth : 20,
        menuCellHeight : 23,
        menuNavHeight : 8,
        animationSpeed : 600,

        page : {
            x : null,
            y : null,
            current : null,
            screen : 0,
            inProcess : false,
            enabledListing : false
        },

        map : {

            "p_1_1" : {

                icon : "fa fa-sitemap",
                url : "/admin/category/",
                color : "cyan",
                activeElement : null,
                activeElements : {

                    0 : {

                        name : "category",
                        selector : $('div.category'),
                        actions : {

                            0 : {

                                name : "new",
                                canonical : "Insert Node Here",
                                url : '/admin/category/new',
                                param : null,
                                destination : "/admin/category/save/",

                                getData : function()
                                {
                                    return {
                                        name : $('input[name="name"]').val(),
                                        alias : $('input[name="alias"]').val(),
                                        image : $('input[name="image"]').val(),
                                        description : $('textarea[name="description"]').val()
                                    }
                                }
                            },

                            1 : {
                                name : "setup",
                                canonical : "Setup Node",
                                url : '/admin/category/setup',
                                param : null
                            },

                            2 : {
                                name : "show",
                                canonical : "Show Contents",
                                url : '/admin/category/show',
                                param : null
                            }

                        }

                    }

                },

                actions : {

                    0 : {
                        name : "new",
                        canonical : "Insert Node Here",
                        url : '/admin/category/new',
                        param : null,
                        destination : "/admin/category/save/",
                        data : {
                            name : $('input[name="name"]').val(),
                            alias : $('input[name="alias"]').val(),
                            image : $('input[name="image"]').val(),
                            description : $('textarea[name="description"]').val()
                        }
                    },

                    1 : {
                        name : "setup",
                        canonical : "Setup Node",
                        url : '/admin/category/setup',
                        param : null
                    },

                    2 : {
                        name : "show",
                        canonical : "Show Contents",
                        url : '/admin/category/show',
                        param : null
                    }
                }
            },
            "p_1_2" : {
                icon : "fa fa-file-image",
                url : "/admin/category/empty",
                color : "",
                screens : {
                    0 : {},
                    1 : {}
                },
                screen : 0
            },
            "p_1_3" : {
                icon : "fa fa-envelope",
                url : "/admin/category/",
                color : "",
                screens : {
                    0 : {},
                    1 : {}
                },
                screen : 0

            },
            "p_1_4" : {
                icon : "fa fa-cubes",
                url : "/admin/category/",
                color : "purple",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_1_5" : {
                icon : "fa fa-user",
                url : "/admin/category/",
                color : "",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_2_1" : {
                icon : "fa fa-align-center",
                url : "/admin/category/",
                color : "",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_2_2" : {
                icon : "fa fa-clone",
                url : "/admin/category/",
                color : "",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_2_3" : {
                icon : "fa fa-sitemap",
                url : "/admin/category/",
                color : "",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_2_4" : {
                icon : "fa fa-comment",
                url : "/admin/category/",
                color : "",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_2_5" : {
                icon : "fa fa-camera-retro",
                url : "/admin/category/",
                color : "blue",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_3_1" : {
                icon : "fas fa-book",
                url : "/admin/category/",
                color : "",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_3_2" : {
                icon : "fa fa-gift",
                url : "/admin/category/",
                color : "green",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_3_3" : {
                icon : "fa fa-calculator",
                url : "/admin/category/",
                color : "",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_3_4" : {
                icon : "fa fa-shopping-cart",
                url : "/admin/category/",
                color : "orange",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_3_5" : {
                icon : "ffa fa-upload",
                url : "/admin/category/",
                color : "",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_4_1" : {
                icon : "fa fa-bug",
                url : "/admin/category/",
                color : "",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_4_2" : {
                icon : "fa fa-bell",
                url : "/admin/category/",
                color : "",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_4_3" : {
                icon : "fab fa-apple",
                url : "/admin/category/",
                color : "pink",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_4_4" : {
                icon : "fa fa-calendar",
                url : "/admin/category/",
                color : "",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            },
            "p_4_5" : {
                icon : "fas fa-battery-half",
                url : "/admin/category3/",
                color : "",
                screens : {
                    0 : {},
                    1 : {},
                    2 : {}
                },
                screen : 0
            }
        }
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
            'zIndex' : 10,
            'left' : x,
            'top' : y,
            'width' : '20%',
            'height' : '23%'
        });

        setTimeout(function()
        {
            $(page).css({
                'transition' : "all " + set.animationSpeed / 1000 + "s",
                'left' : 0,
                'top' : 0,
                'width' : '100%',
                'height' : '92%',
                'border' : 'none'
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

            }, set.animationSpeed);

        }, 50);
    }

    function close(page)
    {
        set.page.inProcess = true;

        var x = set.page.x;
        var y = set.page.y;

        var defaultHtmlButton = $("<button></button>");
        var defaultHtmlIcon = $("<i></i>");
        defaultHtmlButton.addClass("btn").addClass(set.map[set.page.current].color);
        defaultHtmlIcon.addClass(set.map[set.page.current].icon);
        var defaultHtml = defaultHtmlButton.append(defaultHtmlIcon);

        page.html(defaultHtml);

        $(page).css({
            'transition' : "all " + set.animationSpeed / 1000 + "s",
            'zIndex' : 'auto',
            'left' : x,
            'top' : y,
            'width' : '20%',
            'height' : '23%',
            'borderLeft' : '1px solid #ededed',
            'borderBottom' : '1px solid #b6b6b6',
            'borderRight' : '1px solid #b6b6b6',
            'borderTop' : '1px solid #ededed'
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

        }, set.animationSpeed);
    }

    // show submenu
    $('#subm').click(function()
    {
        if(set.page.current)
        {
            var menu = $('.submenu');
            var ul = $("<ul></ul>");

            for(i in set.map[set.page.current].actions)
            {
                var li = $("<li></li></hr>");
                li.html(set.map[set.page.current].actions[i].canonical);
                ul.append(li);
            }

            menu.empty().append(ul);
            menu.slideToggle(200);
        }
    });

    function nextScreen()
    {

    }

    function prevScreen()
    {

    }

    function goToScreen(screen)
    {

    }

    function sendToServer(data)
    {
        var page = [set.page.current];
        var param =

        $.ajax({
            url : set.map[set.page.current].url,
            type : 'POST',
            data : data,
            success : function(response)
            {
                return response;
            },
            error : function(response)
            {
                return false;
            }
        });
    }

    // p_1_1
    $(document).on('click', 'div.category', function(){

        $('div.category').removeClass('active');
        $(this).addClass('active');
    });

    // category hover
    $( ".category .right .buttons" ).hover(
        function() {

            $( this ).append( $( "<span> ***</span>" ) );
        }, function() {

            $( this ).find( "span:last" ).remove();
        }
    );

});