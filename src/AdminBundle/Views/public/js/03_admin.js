$(document).ready(function()
{
    app.map = {

        "p_1_1" : {

            icon : "fa fa-sitemap",
            url : "/admin/category/",
            color : "cyan",
            actions : {

                category_new : {

                    mouseup : function(e) {

                        app.nextScreen("/admin/category/new/" + parseInt($(e.target).attr('id')));
                    }
                },


                // may be new syntax
                category_new2(e){

                    app.nextScreen.render("templateName", data);
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

                import_execute_add : {

                    mouseup : function(e){

                        app.nextScreen("/admin/import/import_execute_add/" + $(e.target).attr("id"));
                    }
                },

                import_update_setup : {

                    mouseup : function(e){

                        app.nextScreen("/admin/import/import_update_setup/" + $(e.target).attr("id"));
                    }
                },

                import_execute_update : {

                    mouseup : function(e){

                        let data = {
                            "filter" : $('select[name="filter[]"]').map(function(){return this.value;}).get(),
                        };

                        app.nextScreen('/admin/import/import_execute_update/' + parseInt($(e.target).attr('id')), data);

                    }

                },

                import_execute_drop_add : {

                    mouseup : function(e){

                        app.nextScreen("/admin/import/import_execute_drop_add/" + $(e.target).attr("id"));
                    }
                },

                import_index : {

                    mouseup : function(e){

                        app.prevScreen("/admin/import/");
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
            url : "/admin/filter/",
            color : "blue",

            actions : {

                index : {

                    mouseup : function(){

                        alert();

                    }

                },

                shit : {

                    mouseup : function(e){

                        app.nextScreen("/admin/filter/shit/")

                    }

                },
                shit2 : {

                    mouseup : function(e){

                        app.nextScreen("/admin/filter/shit/13456")

                    }

                },
                shit3 : {

                    mouseup : function(e){

                        app.nextScreen("/admin/filter/shit/shit")

                    }

                },
                shit4 : {

                    mouseup : function(e){

                        app.nextScreen("/admin/filter/shit/shit/9999999999")

                    }

                },
                shit5 : {

                    mouseup : function(e){

                        app.nextScreen("/admin/filter/shit/shit/shit")

                    }

                },

            }
        },
        "p_3_1" : {
            icon : "fas fa-book",
            url : "/admin/dictionary/",
            color : "",
            actions : {

                d_new : {

                    mouseup : function(e){

                        let data = {
                            'dictionary_name' : $('input[name="dictionary_name"]').val(),
                            'dictionary_alias' : $('input[name="dictionary_alias"]').val(),
                            'dictionary_type' : $('select[name="dictionary_type"]').val(),
                        };

                        app.prevScreen("/admin/dictionary/new", data);
                    }

                },

                d_show : {

                    mouseup : function(e){

                        app.nextScreen("/admin/dictionary/show/" + $(e.target).attr("id"));

                    }

                },

                d_remove : {

                    mouseup : function(e){
                        if(confirm('Удалить?')){
                            app.prevScreen("/admin/dictionary/remove/" + $(e.target).attr("id"));
                        }
                    }

                },

                create_entry : {

                    mouseup : function(e){

                        let id = $(e.target).attr("id");
                        let f = $('form[name="create_record"]');
                        let form = new FormData(f[0]);

                        app.thisScreen("/admin/dictionary/create_entry/" + id, form, true);
                    }

                },

                remove_entry : {

                    mouseup : function(e){
                        app.thisScreen("/admin/dictionary/remove_entry/" + $(e.target).attr("id"));
                    }
                }
            }
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
            icon : "fab fa-amilia",
            url : "/admin/rus/",
            color : "",
            actions: {

                draw : {

                    mouseup: function(e){
                        app.data.lock = false;
                    },

                    mousemove : function(e){

                        let canvas = document.getElementById('in');
                        let context = canvas.getContext('2d');
                        let axis = canvas.getBoundingClientRect();
                        let brush = 26; // 26

                        function x(e){return (e.clientX - +axis.x - brush/2)}
                        function y(e){return (e.clientY - +axis.y - brush/2)}

                        if(app.data.lock && app.data.lock === true){
                            context.fillStyle="#444";
                            context.fillRect(x(e), y(e), brush, brush);
                        }
                    },

                    mousedown : function(e){
                        app.data.lock = true;
                    },

                    mouseout : function(e){
                        app.data.lock = false;
                    },
                },

                clear : {

                    mouseup : function(e){

                        const c = document.getElementById('in');
                        const c1 = c.getContext('2d');
                        const d = document.getElementById('out');
                        const d1 = d.getContext('2d');

                        d1.clearRect(0, 0, d.width, d.height);
                        c1.clearRect(0, 0, c.width, c.height);
                        // $('#result').val("");
                    }
                },

                trans : {

                    scan : function(a, b, pixelA = 30, pixelB = 30, resolution = 25, returnObj = false){

                        let s = 0; // main sum

                        let sMax = 204; // maximum color sum per pixel
                        let maxSum = sMax * resolution; // max color sum per matrix pixel
                        let accuracy = 0.40; // border value;
                        const canvas = document.getElementById('in').getContext('2d');

                        // find max sum per matrix pixel
                        for(let i = 0; i < resolution; i++){
                            let x = rand(a, a + pixelA);
                            let y = rand(b, b + pixelB);
                            let p = canvas.getImageData(x, y, 1, 1).data;
                            s = s + p[0] + p[1] + p[2];

                        }

                        function rand(a, b){
                            return Math.ceil(Math.random() * (b - a) + a)
                        }

                        return (s / maxSum) < accuracy ? 0 : 1;
                    },

                    offset : function(direction, IX, IY, pixelSize){

                        const self = this;
                        let rowSum = 0;

                        switch (direction) {
                            case "left" : {
                                for(let x = 0; x < IX; x++){
                                    for(let y = 0; y < IY; y++){
                                        if(x % pixelSize === 0 && y % pixelSize === 0){
                                            let s = self.scan(x, y, pixelSize, true);
                                            if(s === 0){
                                                if(y === IY - pixelSize){
                                                    rowSum++;
                                                    break;
                                                }
                                            } else {

                                                // for(let c = x; c < x + pixelSize; c++){
                                                //     let su = self.scanPoint(c, y + Math.round(pixelSize / 2));
                                                //     if(su > 0) {
                                                //
                                                //         return c;
                                                //     }
                                                // }

                                                return rowSum;
                                            }
                                        }
                                    }
                                }
                                return 0;
                            }

                            case "right" : {
                                for(let x = IX - pixelSize; x > 0; x--){
                                    for(let y = 0; y < IY; y++){
                                        if(x % pixelSize === 0 && y % pixelSize === 0){
                                            let s = self.scan(x, y, pixelSize);
                                            if(s === 0){
                                                if(y === IY - pixelSize){
                                                    rowSum++;
                                                    break;
                                                }
                                            } else {
                                                return rowSum;
                                            }
                                        }
                                    }
                                }
                                return 0;
                            }

                            case "top" : {

                                for(let y = 0; y < IY; y++){
                                    for(let x = 0; x < IX; x++){
                                        if(x % pixelSize === 0 && y % pixelSize === 0){
                                            let s = self.scan(x, y, pixelSize);
                                            if(s === 0){
                                                if(x === IX - pixelSize){
                                                    rowSum++;
                                                    break;
                                                }
                                            } else {
                                                return rowSum;
                                            }
                                        }
                                    }
                                }
                                return 0;
                            }

                            case "bottom" : {

                                for(let y = IY - pixelSize; y > 0; y--){
                                    for(let x = 0; x < IX; x++){
                                        if(x % pixelSize === 0 && y % pixelSize === 0){
                                            let s = self.scan(x, y, pixelSize);
                                            if(s === 0){
                                                if(x === IX - pixelSize){
                                                    rowSum++;
                                                    break;
                                                }
                                            } else {
                                                return rowSum;
                                            }
                                        }
                                    }
                                }
                                return 0;
                            }

                            default : break;
                        }

                    },

                    mouseup : function(){

                        const context = document.getElementById('in').getContext('2d');
                        const self = this;

                        // some settings
                        let IX = 300; // input matrix resolution X
                        let IY = 300; // input matrix resolution Y
                        let OX = 10; // out matrix x resolution
                        let OY = 10; // out matrix y resolution
                        let OL = 0; // new resolution offset left
                        let OR = 0; // new resolution offset right
                        let OB = 0; // new resolution offset bottom
                        let OT = 0; // new resolution offset top
                        let pixelSize = 30; // pixel size
                        let accuracy = 10; // % of pixels per matrix cell we randomly checking

                        // first, cut empty rows for scaling matrix
                        OL = self.offset("left", IX, IY, pixelSize);
                        OR = self.offset("right", IX, IY, pixelSize);
                        OT = self.offset("top", IX, IY, pixelSize);
                        OB = self.offset("bottom", IX, IY, pixelSize);

                        // determine new matrix resolution
                        let X0 = OL * pixelSize;
                        let X1 = IX - OR * pixelSize;
                        let Y0 = OT * pixelSize;
                        let Y1 = IY - OB * pixelSize;
                        let MX = (X1 - X0) / 10;
                        let MY = (Y1 - Y0) / 10;
                        accuracy = Math.round(((MX * MY) / 100) * accuracy);

                        // build main output matrix
                        let out = [];
                        let row = [];
                        let cnt = 0;
                        for(let y = Y0; y < Y1; y++){
                            for(let x = X0; x < X1; x++){
                                if(x % MX === 0 && y % MY === 0){
                                    let s = self.scan(x, y, MX, MY, accuracy);
                                    if(s > 0){
                                        row.push(1);
                                    } else {
                                        row.push(0);
                                    }
                                }
                            }
                            if(y % MY === 0){
                                out.push(row);
                                row = [];
                            }
                        }

                        // console.log(OT, OR, OB, OL);
                        // console.log(MX, MY);
                        // console.log(accuracy);
                        console.log(out);
                        self.send(out);
                        app.data.matrix = out;

                        // draw out matrix
                        const res = document.getElementById('out');
                        const resctx = res.getContext('2d');
                        context.fillStyle="#444";
                        for(let x = 0; x < out.length; x++){
                            for(let y = 0; y < out.length; y++){
                                if(out[x][y] === 1){
                                    resctx.fillRect(y * pixelSize, x * pixelSize, pixelSize, pixelSize);
                                }
                            }
                        }
                    },


                    send : function(matrix){

                        $.ajax({

                            url : "/admin/rus/send",
                            data : {matrix : matrix},
                            method : "POST",
                            success : function(r){
                                console.log((r));
                                app.data.number = JSON.parse(r).matrix.val;

                                let char = "...";

                                switch (app.data.number){
                                    case 11 :
                                        char = 'Й';
                                        break;
                                    case 21 :
                                        char = 'У';
                                        break;
                                    case 23 :
                                        char = 'Х';
                                        break;
                                }


                                $('#result').val($('#result').val() + "" + char);
                            },
                            error : function(r){
                                console.log(r);
                            }

                        })

                    }
                },

                yes : {
                    mouseup : function(){

                        $.ajax({

                            url : "/admin/rus/yes",
                            data : {
                                matrix : app.data.matrix,
                                number : app.data.number
                            },
                            method : "POST",
                            success : function(r){
                                console.log((r));
                                // $('#result').val(r);
                            },
                            error : function(r){
                                // console.log(r);
                            }

                        })
                    }
                },

                no : {
                    mouseup : function(){

                        $.ajax({

                            url : "/admin/rus/no",
                            data : {
                                matrix : app.data.matrix,
                                number : encodeURIComponent(app.data.number)
                            },
                            method : "POST",
                            success : function(r){
                                console.log((r));
                                // $('#result').val(r);
                            },
                            error : function(r){
                                // console.log(r);
                            }

                        })
                    }
                }
            }
        },
        "p_4_5" : {
            icon : "fas fa-equals",
            url : "/admin/number/",
            color : "",
            actions: {

                draw : {

                    mouseup: function(e){
                        app.data.lock = false;
                    },

                    mousemove : function(e){

                        let canvas = document.getElementById('in');
                        let context = canvas.getContext('2d');
                        let axis = canvas.getBoundingClientRect();
                        let brush = 26; // 26

                        function x(e){return (e.clientX - +axis.x - brush/2)}
                        function y(e){return (e.clientY - +axis.y - brush/2)}

                        if(app.data.lock && app.data.lock === true){
                            context.fillStyle="#444";
                            context.fillRect(x(e), y(e), brush, brush);
                        }
                    },

                    mousedown : function(e){
                        app.data.lock = true;
                    },

                    mouseout : function(e){
                        app.data.lock = false;
                    },
                },

                clear : {

                    mouseup : function(e){

                        const c = document.getElementById('in');
                        const c1 = c.getContext('2d');
                        const d = document.getElementById('out');
                        const d1 = d.getContext('2d');

                        d1.clearRect(0, 0, d.width, d.height);
                        c1.clearRect(0, 0, c.width, c.height);
                        // $('#result').val("");
                    }
                },

                trans : {

                    scan : function(a, b, pixelA = 30, pixelB = 30, resolution = 25, returnObj = false){

                        let s = 0; // main sum

                        let sMax = 204; // maximum color sum per pixel
                        let maxSum = sMax * resolution; // max color sum per matrix pixel
                        let accuracy = 0.40; // border value;
                        const canvas = document.getElementById('in').getContext('2d');

                        // find max sum per matrix pixel
                        for(let i = 0; i < resolution; i++){
                            let x = rand(a, a + pixelA);
                            let y = rand(b, b + pixelB);
                            let p = canvas.getImageData(x, y, 1, 1).data;
                            s = s + p[0] + p[1] + p[2];

                        }

                        function rand(a, b){
                            return Math.ceil(Math.random() * (b - a) + a)
                        }

                        return (s / maxSum) < accuracy ? 0 : 1;
                    },

                    offset : function(direction, IX, IY, pixelSize){

                        const self = this;
                        let rowSum = 0;

                        switch (direction) {
                            case "left" : {
                                for(let x = 0; x < IX; x++){
                                    for(let y = 0; y < IY; y++){
                                        if(x % pixelSize === 0 && y % pixelSize === 0){
                                            let s = self.scan(x, y, pixelSize, true);
                                            if(s === 0){
                                                if(y === IY - pixelSize){
                                                    rowSum++;
                                                    break;
                                                }
                                            } else {

                                                // for(let c = x; c < x + pixelSize; c++){
                                                //     let su = self.scanPoint(c, y + Math.round(pixelSize / 2));
                                                //     if(su > 0) {
                                                //
                                                //         return c;
                                                //     }
                                                // }

                                                return rowSum;
                                            }
                                        }
                                    }
                                }
                                return 0;
                            }

                            case "right" : {
                                for(let x = IX - pixelSize; x > 0; x--){
                                    for(let y = 0; y < IY; y++){
                                        if(x % pixelSize === 0 && y % pixelSize === 0){
                                            let s = self.scan(x, y, pixelSize);
                                            if(s === 0){
                                                if(y === IY - pixelSize){
                                                    rowSum++;
                                                    break;
                                                }
                                            } else {
                                                return rowSum;
                                            }
                                        }
                                    }
                                }
                                return 0;
                            }

                            case "top" : {

                                for(let y = 0; y < IY; y++){
                                    for(let x = 0; x < IX; x++){
                                        if(x % pixelSize === 0 && y % pixelSize === 0){
                                            let s = self.scan(x, y, pixelSize);
                                            if(s === 0){
                                                if(x === IX - pixelSize){
                                                    rowSum++;
                                                    break;
                                                }
                                            } else {
                                                return rowSum;
                                            }
                                        }
                                    }
                                }
                                return 0;
                            }

                            case "bottom" : {

                                for(let y = IY - pixelSize; y > 0; y--){
                                    for(let x = 0; x < IX; x++){
                                        if(x % pixelSize === 0 && y % pixelSize === 0){
                                            let s = self.scan(x, y, pixelSize);
                                            if(s === 0){
                                                if(x === IX - pixelSize){
                                                    rowSum++;
                                                    break;
                                                }
                                            } else {
                                                return rowSum;
                                            }
                                        }
                                    }
                                }
                                return 0;
                            }

                            default : break;
                        }

                    },

                    mouseup : function(){

                        const context = document.getElementById('in').getContext('2d');
                        const self = this;

                        // some settings
                        let IX = 300; // input matrix resolution X
                        let IY = 300; // input matrix resolution Y
                        let OX = 10; // out matrix x resolution
                        let OY = 10; // out matrix y resolution
                        let OL = 0; // new resolution offset left
                        let OR = 0; // new resolution offset right
                        let OB = 0; // new resolution offset bottom
                        let OT = 0; // new resolution offset top
                        let pixelSize = 30; // pixel size
                        let accuracy = 10; // % of pixels per matrix cell we randomly checking

                        // first, cut empty rows for scaling matrix
                        OL = self.offset("left", IX, IY, pixelSize);
                        OR = self.offset("right", IX, IY, pixelSize);
                        OT = self.offset("top", IX, IY, pixelSize);
                        OB = self.offset("bottom", IX, IY, pixelSize);

                        // determine new matrix resolution
                        let X0 = OL * pixelSize;
                        let X1 = IX - OR * pixelSize;
                        let Y0 = OT * pixelSize;
                        let Y1 = IY - OB * pixelSize;
                        let MX = (X1 - X0) / 10;
                        let MY = (Y1 - Y0) / 10;
                        accuracy = Math.round(((MX * MY) / 100) * accuracy);

                        // build main output matrix
                        let out = [];
                        let row = [];
                        let cnt = 0;
                        for(let y = Y0; y < Y1; y++){
                            for(let x = X0; x < X1; x++){
                                if(x % MX === 0 && y % MY === 0){
                                    let s = self.scan(x, y, MX, MY, accuracy);
                                    if(s > 0){
                                        row.push(1);
                                    } else {
                                        row.push(0);
                                    }
                                }
                            }
                            if(y % MY === 0){
                                out.push(row);
                                row = [];
                            }
                        }

                        // console.log(OT, OR, OB, OL);
                        // console.log(MX, MY);
                        // console.log(accuracy);
                        console.log(out);
                        self.send(out);
                        app.data.matrix = out;

                        // draw out matrix
                        const res = document.getElementById('out');
                        const resctx = res.getContext('2d');
                        context.fillStyle="#444";
                        for(let x = 0; x < out.length; x++){
                            for(let y = 0; y < out.length; y++){
                                if(out[x][y] === 1){
                                    resctx.fillRect(y * pixelSize, x * pixelSize, pixelSize, pixelSize);
                                }
                            }
                        }
                    },


                    send : function(matrix){

                        $.ajax({

                            url : "/admin/number/send",
                            data : {matrix : matrix},
                            method : "POST",
                            success : function(r){
                                console.log((r));
                                app.data.number = JSON.parse(r).matrix.val;
                                $('#result').val($('#result').val() + "" + JSON.parse(r).matrix.val);
                            },
                            error : function(r){
                                console.log(r);
                            }

                        })

                    }
                },

                yes : {
                    mouseup : function(){

                        $.ajax({

                            url : "/admin/number/yes",
                            data : {
                                matrix : app.data.matrix,
                                number : app.data.number
                            },
                            method : "POST",
                            success : function(r){
                                console.log((r));
                                // $('#result').val(r);
                            },
                            error : function(r){
                                // console.log(r);
                            }

                        })
                    }
                },

                no : {
                    mouseup : function(){

                        $.ajax({

                            url : "/admin/number/no",
                            data : {
                                matrix : app.data.matrix,
                                number : app.data.number
                            },
                            method : "POST",
                            success : function(r){
                                console.log((r));
                                // $('#result').val(r);
                            },
                            error : function(r){
                                // console.log(r);
                            }

                        })
                    }
                }
            }
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

