$(document).ready(function()
{
    window.app.set = {

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

                        url : '/admin/category/setup/',
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
});
