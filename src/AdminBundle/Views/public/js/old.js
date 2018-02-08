$(document).ready(function()
{
    var set = {

        menuCellWidth : 20,
        menuCellHeight : 23,
        menuNavHeight : 8,
        animationSpeed : 600,
        debug : true,

        page : {
            x : null,
            y : null,
            current : null,
            screen : 0,
            event : null,
            action : null,
            requestUri : null,
            data : null,
            bisy : false
        },

        map : {

            "p_1_1" : {

                icon : "fa fa-sitemap",
                url : "/admin/category/",
                color : "cyan",

                actions : {

                    category_new : {

                        on : {

                            mouseup : function(e)
                            {
                                set.page.event = "category_new";
                                set.page.data = null;
                                set.page.action = "category_new";
                                set.page.requestUri = "/admin/category/new/" + parseInt($(e.target).attr('id'));

                                sendToServer();
                            },

                            response : function(html)
                            {
                                nextScreen(html);
                            }

                        }
                    },

                    category_save :
                        {
                            on : {

                                mouseup : function(e)
                                {
                                    set.page.event = "category_save";
                                    set.page.data = {

                                        name : $('input[name="name"]').val(),
                                        alias : $('input[name="alias"]').val(),
                                        image : $('input[name="image"]').val(),
                                        description : $('textarea[name="description"]').val()

                                    };
                                    set.page.action = "category_save";
                                    set.page.requestUri = "/admin/category/save/" + parseInt($(e.target).attr('id'));

                                    sendToServer();
                                },

                                response : function(html)
                                {
                                    redirectToIndex(html);
                                }

                            }
                        },

                    category_setup : {

                        on : {
                            mouseup : function(e)
                            {
                                $.fn.render("/admin/category/setup/" + parseInt($(e.target).attr('id')))
                            }
                        }
                    },

                    category_show : {

                        url : '/admin/category/show/',
                        param : null,

                        on : {

                            click : function(e)
                            {
                                console.log($(this));
                                console.log(this);
                                console.log(parseInt($(e.target).attr('id')));
                            },

                            change : function()
                            {

                            }

                        }

                    },
                    category_template : {

                        url : '/admin/category/template/',
                        param : null,

                        on : {

                            click : function(e)
                            {
                                console.log($(this));
                                console.log(this);
                                console.log(parseInt($(e.target).attr('id')));
                            },

                            change : function()
                            {

                            }

                        }

                    },
                    category_remove : {

                        url : '/admin/category/remove/',
                        param : null,

                        on : {

                            click : function(e)
                            {
                                console.log($(this));
                                console.log(this);
                                console.log(parseInt($(e.target).attr('id')));
                            },

                            change : function()
                            {

                            }
                        }
                    }
                }
            },
            "p_1_2" : {
                icon : "fa fa-file-image",
                url : "/admin/category/empty/",
                color : "",
                actions : {}
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

    function debug() {
        if (set.debug === true) {
            for (var i = 0; i < arguments.length; ++i) {
                console.log(arguments[i]);
            }
        }
    }

    function resetPageParams()
    {
        set.page.x = null;
        set.page.y = null;
        set.page.current = null;
        set.page.screen = 0;
        set.page.event = null;
        set.page.action = null;
        set.page.requestUri = null;
        set.page.data = null;
        set.page.bisy = false;
    }

    // opening and closing menu pages
    $('table#menu tr td').click(function()
    {
        var pageId = $(this).attr('id');

        if(pageId && !set.page.bisy && pageId !== set.page.current)
        {
            open($('#' + pageId + ' > div.page' ));
        }
    });

    $('#home').click(function()
    {
        if(set.page.current && !set.page.bisy)
        {
            close($('#' + set.page.current + ' > div.page' ));
        }
    });

    function open(page)
    {
        set.page.bisy = true;
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
                        var screens = $('<ul></ul>');
                        var screen = $('<li></li>');
                        screens.addClass('screen');
                        screen.append(data);

                        screens.append(screen);

                        page.html(screens);
                        set.page.bisy = false;
                    },
                    error : function(data)
                    {
                        page.html("Ajax request error!");
                        set.page.bisy = false;
                    }
                });

            }, set.animationSpeed);

        }, 50);
    }

    function close(page)
    {
        set.page.bisy = true;

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

            resetPageParams();

        }, set.animationSpeed);
    }

    // show submenu
    $('#subm').click(function()
    {
        // if(set.page.current)
        // {
        //     var menu = $('.submenu');
        //     var ul = $("<ul></ul>");
        //
        //     for(i in set.map[set.page.current].actions)
        //     {
        //         var li = $("<li></li></hr>");
        //         li.html(set.map[set.page.current].actions[i].canonical);
        //         ul.append(li);
        //     }
        //
        //     menu.empty().append(ul);
        //     menu.slideToggle(200);
        // }
    });

    $('#back').mouseup(function()
    {
        // $('ul.screen').css({});

        if(!set.page.bisy)
        {
            set.page.bisy = true;

            if(set.page.screen > 0)
            {
                $( "ul.screen" ).animate({
                    marginLeft : - set.page.screen * 100 + 100 + "%"

                }, set.animationSpeed, function() {

                    //space and enter detect as click on focused element fix
                    // $(':focus').remove();
                });

                set.page.screen = set.page.screen - 1;
            } else {
                close($('#' + set.page.current + ' > div.page' ));
            }

            setTimeout(function()
            {
                set.page.bisy = false;
            }, set.animationSpeed);
        }

    });

    function nextScreen(html)
    {
        if(!set.page.bisy)
        {
            set.page.bisy = true;

            var page = $('ul.screen');
            var screens = $('ul.screen li');
            var newScreen = $('<li></li>');
            var currentScreenIndex = set.page.screen;

            if(screens[currentScreenIndex + 1] !== undefined)
            {
                for(var i = currentScreenIndex + 1; i < screens.length; i++)
                {
                    screens[i].remove();
                }
            }

            newScreen.html(html);

            page.append(newScreen);

            page.animate({
                marginLeft : - currentScreenIndex * 100 - 100 + "%"

            }, set.animationSpeed, function() {

            });

            set.page.screen = set.page.screen + 1;

            setTimeout(function()
            {
                set.page.bisy = false;

            }, set.animationSpeed);

        }
    }

    function redirectToIndex(html)
    {
        if(!set.page.bisy)
        {
            set.page.bisy = true;

            var page = $('ul.screen');
            var screens = $('ul.screen li');

            $(screens[0]).html(html);

            page.animate({
                marginLeft : "-0%"

            }, set.animationSpeed, function() {

                for(var i = 1; i < screens.length; i++)
                {
                    $(screens[i]).remove();
                }

            });

            set.page.screen = 0;

            setTimeout(function()
            {
                set.page.bisy = false;

            }, set.animationSpeed);

        }
    }

    function sendToServer()
    {
        $.ajax({
            url : set.page.requestUri,
            type : 'POST',
            data : set.page.data,
            success : function(response)
            {
                if(typeof set.map[set.page.current].actions[set.page.action].on.response === "function")
                {
                    set.map[set.page.current].actions[set.page.action].on.response(response);
                }
            }
        });
    }

    // check clicked element for some assigned action
    $(document).mouseup(function(e)
    {
        if(set.page.current)
        {
            for(i in set.map[set.page.current].actions)
            {
                if(i === $(e.target).data("event"))
                {
                    switch(e.type)
                    {
                        case 'mouseup' :
                        {
                            if(typeof set.map[set.page.current].actions[i].on.mouseup === "function")
                            {
                                set.map[set.page.current].actions[i].on.mouseup(e);
                            } else {
                                console.log('No callback function - click!');
                            }

                            return;
                        }

                        default :
                        {
                            console.log(e.type + ' event: no callback function assigned!');
                            return;
                        }
                    }
                }
            }

            if($(e.target).data('event') !== undefined)
            {
                console.log($(e.target).data('event') + ': no callback function assigned!')
            }
        }
    });

});