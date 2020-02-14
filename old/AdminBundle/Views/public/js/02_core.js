$(document).ready(function()
{
    window.onerror = function(message, url, lineNumber) {
        alert("Global Error: " + message + "\n(" + url + ":" + lineNumber + ")");
    };

    window.app = {

        menuCellWidth : 20,
        menuCellHeight : 23,
        menuNavHeight : 8,
        animationSpeed : 340,
        spinnerDelay : 1000,
        debug : false,
        map : {},
        data : {},

        page : {
            x : null,
            y : null,
            current : null,
            screen : 0,
            event : null,
            requestUri : null,
            data : null,
            busy : false
        },

        reset : function()
        {
            this.page.x = null;
            this.page.y = null;
            this.page.current = null;
            this.page.screen = 0;
            this.page.event = null;
            this.page.requestUri = null;
            this.page.data = null;
            this.page.busy = false;
        },

        nextScreen : function(source, data, usingFormDataClass = false)
        {
            debug('...RENDER NEXT SCREEN...');

            if(!window.app.page.busy)
            {
                window.app.page.busy = true;

                let formData = usingFormDataClass ? false : "application/x-www-form-urlencoded";

                debug('lock animation');
                debug('beginning ajax...');

                $.ajax({
                    url : source,
                    type : 'POST',
                    method: 'POST',
                    data : data,
                    beforeSend: function(){
                        spinnerStop();
                        spinnerStart();
                    },
                    complete : function(){
                        spinnerStop();
                    },
                    processData: formData,
                    contentType: formData,
                    success : function(response)
                    {
                        debug('ajax success');

                        let page = $('ul.screen');
                        let screens = $('ul.screen li');
                        let newScreen = $('<li></li>');
                        let currentScreenIndex = window.app.page.screen;

                        debug('deleting next sibling screens...');

                        if(screens[currentScreenIndex + 1] !== undefined)
                        {
                            for(let i = currentScreenIndex + 1; i < screens.length; i++)
                            {
                                screens[i].remove();
                            }
                        }

                        debug('append html');

                        newScreen.html(response);

                        page.append(newScreen);

                        debug('changing screen...');

                        page.animate({

                            marginLeft : - currentScreenIndex * 100 - 100 + "%"

                        }, window.app.animationSpeed, function() {

                            debug('screen has been changed');

                            window.app.page.screen = window.app.page.screen + 1;

                            setTimeout(function()
                            {
                                debug('unlock animation');

                                window.app.page.busy = false;

                                debug('...RENDER COMPLETE...');

                            }, window.app.animationSpeed);
                        });
                    }
                });
            }
        },

        prevScreen : function(source, data, usingFormDataClass = false)
        {
            if(!window.app.page.busy)
            {
                debug('...RENDER PREV SCREEN...');
                debug('lock animation');
                window.app.page.busy = true;
                debug('beginning ajax...');

                let formData = usingFormDataClass ? false : "application/x-www-form-urlencoded";

                $.ajax({

                    url : source,
                    type : 'POST',
                    method: 'POST',
                    data : data,
                    processData: formData,
                    contentType: formData,
                    beforeSend: function(){
                        spinnerStop();
                        spinnerStart();
                    },
                    complete : function(){
                        spinnerStop();
                    },
                    success : function(response)
                    {
                        debug('ajax success');
                        let page = $('ul.screen');
                        let screens = $('ul.screen li');

                        debug('append html to first screen');
                        $(screens[0]).html(response);

                        debug('go to first screen...');

                        page.animate({
                            marginLeft : "-0%"

                        }, window.app.animationSpeed, function() {

                            debug('removing next sibling screens');
                            for(let i = 1; i < screens.length; i++)
                            {
                                $(screens[i]).remove();
                            }

                        });

                        window.app.page.screen = 0;

                        setTimeout(function()
                        {
                            debug('unlock animation');
                            window.app.page.busy = false;

                            debug('...RENDER COMPLETE...');
                        }, window.app.animationSpeed);
                    }
                });
            }
        },

        thisScreen : function(source, data, usingFormDataClass = false)
        {
            if(!window.app.page.busy)
            {
                debug('...RENDER PREV SCREEN...');
                debug('lock animation');
                window.app.page.busy = true;
                debug('beginning ajax...');

                let formData = usingFormDataClass ? false : "application/x-www-form-urlencoded";

                $.ajax({

                    url : source,
                    type : 'POST',
                    method: 'POST',
                    data : data,
                    processData: formData,
                    contentType: formData,
                    beforeSend: function(){
                        spinnerStop();
                        spinnerStart();
                    },
                    complete : function(){
                        spinnerStop();
                    },
                    success : function(response)
                    {
                        debug('ajax success');

                        let screens = $('ul.screen li');

                        debug('append html');

                        $(screens[window.app.page.screen]).html(response);

                        debug('unlock animation');

                        window.app.page.busy = false;
                    }
                });
            }
        }
    };

    function debug() {
        if (window.app.debug === true) {
            for (let i = 0; i < arguments.length; ++i) {
                console.log(arguments[i]);
            }
        }
    }

    function spinnerStart(){$('#spinner').show()}
    function spinnerStop(){$('#spinner').hide()}

    $.fn.close = function(page)
    {
        debug('...CLOSING SCREEN...');
        debug('lock animation');
        window.app.page.busy = true;

        let x = window.app.page.x;
        let y = window.app.page.y;

        let defaultHtmlButton = $("<button></button>");
        let defaultHtmlIcon = $("<i></i>");
        defaultHtmlButton.addClass("btn");
        defaultHtmlButton.addClass(window.app.map[window.app.page.current].color);
        defaultHtmlIcon.addClass(window.app.map[window.app.page.current].icon);
        let defaultHtml = defaultHtmlButton.append(defaultHtmlIcon);

        debug('inserting default html');
        page.html(defaultHtml);

        debug('closing screen...');
        $(page).css({
            'transition' : "all " + window.app.animationSpeed / 1000 + "s",
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
            debug('restore default css');
            $(page).css({
                'transition' : 'none',
                'position' : 'static',
                'width' : '100%',
                'height' : '100%'
            });

            window.app.reset();

            debug('unlock animation');

            window.app.page.busy = false;

            debug('...CLOSING COMPLETE...');

        }, window.app.animationSpeed);
    };

    $.fn.open = function(page)
    {
        debug('...OPENING SCREEN...');
        debug('lock animation');

        window.app.page.busy = true;
        window.app.page.current = $(page).parent().attr('id');

        let x = $(page).offset().left;
        let y = $(page).offset().top;

        window.app.page.x = x;
        window.app.page.y = y;

        debug('apply new css');
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
                'transition' : "all " + window.app.animationSpeed / 1000 + "s",
                'left' : 0,
                'top' : 0,
                'width' : '100%',
                'height' : '92%',
                'border' : 'none'
            });

            setTimeout(function()
            {
                debug('beginning ajax...');

                $.ajax({
                    url : window.app.map[window.app.page.current].url,
                    type : 'POST',
                    method: 'POST',
                    data : {

                    },
                    success : function(data)
                    {
                        debug('ajax complete');
                        let screens = $('<ul></ul>');
                        let screen = $('<li></li>');
                        screens.addClass('screen');
                        screen.append(data);

                        screens.append(screen);

                        debug('append html');
                        page.html(screens);
                        debug('unlock animation');
                        window.app.page.busy = false;

                        debug('...OPENING COMPLETE...');
                    },
                    error : function(data)
                    {
                        page.html("Ajax request error!");
                        window.app.page.busy = false;
                    }
                });

            }, window.app.animationSpeed);

        }, 50);
    };

// check clicked element for some assigned action
//     $(document).mouseup(function(e)
//     {
//         if($(e.target).data("event") !== undefined)
//         {
//             let controller = window.app.map[window.app.page.current].actions;
//             let action = $(e.target).data("event");
//             let callback = e.type;
//
//             if(typeof controller[action] === "object")
//             {
//                 if(typeof controller[action][callback] === "function")
//                 {
//                     controller[action][callback](e);
//
//                 } else {
//
//                     console.error($(e.target).data('event') + ': no callback function assigned!')
//                 }
//             } else {
//
//                 console.error('Action ' + action + ' does not exist!')
//             }
//         }
//     });

    // opening and closing menu pages
    $('table#menu tr td').mouseup(function()
    {
        let pageId = $(this).attr('id');

        if(pageId && !window.app.page.busy && pageId !== window.app.page.current)
        {
            $.fn.open($('#' + pageId + ' > div.page' ));
        }
    });

    $('#home').mouseup(function()
    {
        if(window.app.page.current && !window.app.page.busy)
        {
            $.fn.close($('#' + window.app.page.current + ' > div.page' ));
        }
    });

    $('#back').mouseup(function()
    {
        if(!window.app.page.busy && window.app.page.current)
        {
            window.app.page.busy = true;

            if(window.app.page.screen > 0)
            {
                $( "ul.screen" ).animate({
                    marginLeft : - window.app.page.screen * 100 + 100 + "%"

                }, window.app.animationSpeed, function() {

                    //space and enter detect as click on focused element fix
                    // $(':focus').remove();
                });

                window.app.page.screen = window.app.page.screen - 1;
            } else {
                $.fn.close($('#' + window.app.page.current + ' > div.page' ));
            }

            setTimeout(function()
            {
                window.app.page.busy = false;
            }, window.app.animationSpeed);
        }
    });

    // event processor
    function initializeEvent(e){
        if($(e.target).data("event") !== undefined)
        {
            let controller = window.app.map[window.app.page.current].actions;
            let action = $(e.target).data("event");
            let callback = e.type;

            if(typeof controller[action] === "object")
            {
                if(typeof controller[action][callback] === "function")
                {

                    controller[action][callback](e);
                } else {

                    // console.warn("event: " + callback + ", handler: none");
                }
            } else {

                // console.warn("event: " + callback + ", handler: none");
            }
        }
    }

    // set allowed event types
    $(document).mousemove(function(e){initializeEvent(e);});
    $(document).mousedown(function(e){initializeEvent(e);});
    $(document).mouseup(function(e){initializeEvent(e);});
    $(document).mouseout(function(e){initializeEvent(e);});

    $(document).keydown(function(e){initializeEvent(e);});
    $(document).keypress(function(e){initializeEvent(e);});
    $(document).keyup(function(e){initializeEvent(e);});

});
