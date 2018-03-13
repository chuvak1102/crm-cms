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
                        set.find('select[name="FieldType[]"]').val(id);
                        set.find('input[name="canonical[]"]').val(name);
                        set.find('input[name="alias[]"]').val(alias);
                        set.find('select[name="DataType[]"]').val(id);

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
                            "FieldType" : $('select[name="FieldType[]"]').map(function(){return this.value;}).get(),
                            "canonical" : $('input[name="canonical[]"]').map(function(){return this.value;}).get(),
                            "alias" : $('input[name="alias[]"]').map(function(){return this.value;}).get(),
                            "DataType" : $('select[name="DataType[]"]').map(function(){return this.value;}).get(),
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
            color : "orange",
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

                        app.prevScreen("/admin/product/update/" + id, form, true);
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
            icon : "fab fa-mixcloud",
            url : "/admin/import/",
            color : "blue",
            actions : {

                import_new : {

                    mouseup : function(e){

                        app.prevScreen("/admin/import/new", {
                            "name" : $('form input[name="name"]').val(),
                            "type" : $('form select[name="type"]').val(),
                            "source" : $('form select[name="source"]').val(),
                            "table" : $('form select[name="table"]').val()
                        });
                    }
                },

                import_delete : {

                    mouseup : function(e){

                        if(confirm("Удалить?")){
                            app.prevScreen("/admin/import/delete/" + $(e.target).attr("id"));
                        }
                    }
                },

                import_begin : {

                    mouseup : function(e){

                        app.nextScreen("/admin/import/begin/" + $(e.target).attr("id"));
                    }
                },

                import_load_source : {

                    mouseup : function(e){

                        let id = $(e.target).attr("id");
                        let f = $('#import');
                        let form = new FormData(f[0]);

                        app.nextScreen("/admin/import/load/" + id, form, true);
                    }
                },

                import_select_tag : {

                    mouseup : function(e){

                        app.data.tag = $(e.target).attr("id");
                    }
                },

                import_assign_tag : {

                    mouseup : function(e){

                        let tag = $(e.target).attr("id");

                        if(app.data.tag){
                            $('input[name=' + tag + ']').val(app.data.tag);
                            app.data.tag = null;
                        } else {
                            $('input[name=' + tag + ']').val("");
                        }
                    }
                },

                import_add_tag : {

                    mouseup : function(e){

                        let input = $(e.target).parent().parent().find('input[type="text"]');

                        if(input.val()){

                            let tag = input.val();
                            let row = $('<tr></tr>');
                            let td_1 = $('<td></td>');
                            let td_2 = $('<td></td>');
                            let button = $('<button type="button" class="btn" ></button>');

                            button.html(tag);
                            button.attr("id", tag);
                            button.data("event", "import_select_tag");

                            td_1.append(button);
                            row.append(td_1);
                            row.append(td_2);

                            row.insertBefore(input.parent().parent());

                            input.val("");
                        }
                    }
                },

                import_save : {

                    mouseup : function(e){

                        let data = $('form[name="import"]').serialize();

                        app.prevScreen("/admin/import/save/" + $(e.target).attr("id"), data);
                    }
                },

                import_setup : {

                    mouseup : function(e){

                        app.nextScreen("/admin/import/setup/" + $(e.target).attr("id"));

                    }

                },























                import_execute : {

                    mouseup : function(e){

                        app.nextScreen("/admin/import/execute/" + $(e.target).attr("id"));
                    }
                },

            }
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
            icon : "fas fa-columns",
            url : "/admin/form/",
            color : "green",
            actions : {

                form_new : {
                    mouseup : function(){

                        app.nextScreen("/admin/form/new");
                    }
                },

                form_add_field : {

                    mouseup : function(e){

                        let id = parseInt($(e.target).attr('id'));
                        let alias = $(e.target).val();
                        let name = $(e.target).html();
                        let set = $('div#set > .inline-input').clone();

                        set.find('select[name="fields[]"]').val(id);
                        set.find('input[name="canonical[]"]').val(name);
                        set.find('input[name="column[]"]').val(alias);
                        set.find('input[name="name[]"]').val(name);

                        $('#fields').append(set);
                    }
                },

                form_save : {

                    mouseup : function(e){

                        $('div#set').remove();

                        let data = {
                            "form_name" : $('input[name="form_name"]').val(),
                            "form_alias" : $('input[name="form_alias"]').val(),
                            "fields" : $('select[name="fields[]"]').map(function(){return this.value;}).get(),
                            "canonical" : $('input[name="canonical[]"]').map(function(){return this.value;}).get(),
                            "column" : $('input[name="column[]"]').map(function(){return this.value;}).get(),
                            "name" : $('input[name="name[]"]').map(function(){return this.value;}).get(),
                            "value" : $('input[name="value[]"]').map(function(){return this.value;}).get(),
                            "required" : $('select[name="required[]"]').map(function(){return this.value;}).get()
                        };

                        app.prevScreen('/admin/form/create', data);
                    }
                },

                form_remove_field : {

                    mouseup : function(e){

                        $(e.target).parent().parent().remove();
                    }
                },

                form_show : {

                    mouseup : function(e){

                        app.nextScreen("/admin/form/show/" + $(e.target).attr("id"));
                    }
                },

                form_delete : {

                    mouseup : function(e){

                        app.prevScreen("/admin/form/delete/" + $(e.target).attr("id"));
                    }
                }
            }
        },
        "p_3_3" : {
            icon : "fa fa-calculator",
            url : "/admin/disabled/",
            color : ""
        },
        "p_3_4" : {
            icon : "fa fa-shopping-cart",
            url : "/admin/disabled/",
            color : "",
            actions : {



            }
        },
        "p_3_5" : {
            icon : "ffa fa-upload",
            url : "/admin/disabled/",
            color : ""
        },
        "p_4_1" : {
            icon : "fa fa-bug",
            url : "/admin/logs/",
            color : "pink"
        },
        "p_4_2" : {
            icon : "fa fa-bell",
            url : "/admin/disabled/",
            color : ""
        },
        "p_4_3" : {
            icon : "fab fa-apple",
            url : "/admin/category/",
            color : ""
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
    };

});

// "use strict";
//
//
// var user = {};
//
// Object.defineProperty(user, "name", {
//     value: "Вася",
//     writable: false, // запретить присвоение "user.name="
//     configurable: false // запретить удаление "delete user.name"
// });
//
// // Теперь попытаемся изменить это свойство.
//
// // в strict mode присвоение "user.name=" вызовет ошибку
// user.name = "Петя";
//
// console.log(user.name)
