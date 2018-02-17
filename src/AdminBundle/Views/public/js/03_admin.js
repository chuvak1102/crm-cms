$(document).ready(function()
{
    app.map = {

        "p_1_1" : {

            icon : "fa fa-sitemap",
            url : "/admin/category/",
            color : "cyan",
            actions : {

                category_new : {

                    mouseup : function(e){

                        app.nextScreen("/admin/category/new/" + parseInt($(e.target).attr('id')));
                    }
                },

                category_save : {

                    mouseup : function(e){

                        let data = {
                            name : $('input[name="name"]').val(),
                            alias : $('input[name="alias"]').val(),
                            image : $('input[name="image"]').val(),
                            template : $('select[name="template"]').val(),
                            description : $('textarea[name="description"]').val()
                        };

                        app.prevScreen("/admin/category/save/" + parseInt($(e.target).attr('id')), data)
                    }
                },

                category_edit : {

                    mouseup : function(e){

                        app.nextScreen("/admin/category/edit/" + parseInt($(e.target).attr('id')))
                    }
                },

                category_edit_save : {

                    mouseup : function(e){

                        let data = {
                            name : $('input[name="name"]').val(),
                            alias : $('input[name="alias"]').val(),
                            image : $('input[name="image"]').val(),
                            template : $('select[name="template"]').val(),
                            description : $('textarea[name="description"]').val()
                        };

                        app.prevScreen("/admin/category/edit-save/" + parseInt($(e.target).attr('id')), data);
                    }
                },

                category_setup : {

                    mouseup : function(e){

                        app.nextScreen("/admin/category/setup/" + parseInt($(e.target).attr('id')))
                    }
                },

                category_setup_add_field : {

                    mouseup : function(e){

                        let id = parseInt($(e.target).attr('id'));
                        let alias = $(e.target).val();
                        let name = $(e.target).html();
                        let set = $('div#set > .inline-input').clone();
                        set.find('select[name="fields[]"]').val(id);
                        set.find('input[name="canonical[]"]').val(name);
                        set.find('input[name="alias[]"]').val(alias);
                        set.find('select[name="fieldType[]"]').val(id);

                        $('#fields').append(set);
                    }
                },

                category_setup_remove_field : {

                    mouseup : function(e){

                        $(e.target).parent().parent().remove();
                    }
                },

                category_setup_save : {

                    mouseup : function(e){

                        $('div#set').remove();

                        let data = {
                            "fields" : $('select[name="fields[]"]').map(function(){return this.value;}).get(),
                            "canonical" : $('input[name="canonical[]"]').map(function(){return this.value;}).get(),
                            "alias" : $('input[name="alias[]"]').map(function(){return this.value;}).get(),
                            "fieldType" : $('select[name="fieldType[]"]').map(function(){return this.value;}).get(),
                            "params" : $('input[name="params[]"]').map(function(){return this.value;}).get()
                        };

                        app.prevScreen('/admin/category/complete/' + parseInt($(e.target).attr('id')), data);
                    }
                },

                category_remove : {

                    mouseup : function(e){

                        if(confirm('Удалить?')){

                            app.prevScreen("/admin/category/delete/" + parseInt($(e.target).attr('id')))
                        }
                    }
                },
            }
        },
        "p_1_2" : {
            icon : "fa fa-file-image",
            url : "/admin/constructor/",
            color : "",
            actions : {

                binder_add : {

                    mouseup : function(e){
                        app.prevScreen("/admin/constructor/save", $('form').serialize());
                    }
                },

                binder_remove : {

                    mouseup : function(e){
                        app.prevScreen("/admin/constructor/delete/" + $(e.target).attr("id"));
                    }
                }

            }
        },
        "p_1_3" : {
            icon : "fa fa-envelope",
            url : "/admin/disabled/",
            color : "",
        },
        "p_1_4" : {
            icon : "fa fa-cubes",
            url : "/admin/product/",
            color : "purple",
            actions : {

                material_new : {

                    mouseup : function(e){
                        app.nextScreen("/admin/product/new/" + $(e.target).attr("id"));
                    }
                },

                material_show : {

                    mouseup : function(e){
                        app.nextScreen("/admin/product/show/" + $(e.target).attr("id"));
                    }
                },

                material_delete : {

                    mouseup : function(e){
                        app.prevScreen("/admin/product/delete/" + $(e.target).attr("id"))
                    }
                },

                material_edit : {

                    mouseup : function(e){
                        app.nextScreen("/admin/product/edit/" + $(e.target).attr("id"))
                    }
                },

                material_edit_save : {

                    mouseup : function(e){

                        let id = $(e.target).attr("id");
                        let f = $('form');
                        let form = new FormData(f[0]);

                        app.prevScreen("/admin/product/update/" + id, form, true)
                    }

                },

                material_drop_all : {

                    mouseup : function(e){
                        alert($(e.target).attr("id"));
                    }
                },

                material_save : {

                    mouseup : function(e){

                        let id = $(e.target).attr("id");
                        let f = $('form');
                        let form = new FormData(f[0]);

                        app.prevScreen("/admin/product/save/" + id, form, true);
                    }
                }
            }
        },
        "p_1_5" : {
            icon : "fa fa-user",
            url : "/admin/disabled/",
            color : ""
        },
        "p_2_1" : {
            icon : "fa fa-align-center",
            url : "/admin/disabled/",
            color : ""
        },
        "p_2_2" : {
            icon : "fa fa-clone",
            url : "/admin/disabled/",
            color : ""
        },
        "p_2_3" : {
            icon : "fa fa-sitemap",
            url : "/admin/disabled/",
            color : ""
        },
        "p_2_4" : {
            icon : "fa fa-comment",
            url : "/admin/disabled/",
            color : ""
        },
        "p_2_5" : {
            icon : "fa fa-camera-retro",
            url : "/admin/category/",
            color : "blue"
        },
        "p_3_1" : {
            icon : "fas fa-book",
            url : "/admin/disabled/",
            color : ""
        },
        "p_3_2" : {
            icon : "fa fa-gift",
            url : "/admin/category/",
            color : "green"
        },
        "p_3_3" : {
            icon : "fa fa-calculator",
            url : "/admin/disabled/",
            color : ""
        },
        "p_3_4" : {
            icon : "fa fa-shopping-cart",
            url : "/admin/disabled/",
            color : "orange"
        },
        "p_3_5" : {
            icon : "ffa fa-upload",
            url : "/admin/disabled/",
            color : ""
        },
        "p_4_1" : {
            icon : "fa fa-bug",
            url : "/admin/logs/",
            color : ""
        },
        "p_4_2" : {
            icon : "fa fa-bell",
            url : "/admin/disabled/",
            color : ""
        },
        "p_4_3" : {
            icon : "fab fa-apple",
            url : "/admin/category/",
            color : "pink"
        },
        "p_4_4" : {
            icon : "fa fa-calendar",
            url : "/admin/disabled/",
            color : ""
        },
        "p_4_5" : {
            icon : "fas fa-battery-half",
            url : "/admin/disabled/",
            color : ""
        }
    }
});