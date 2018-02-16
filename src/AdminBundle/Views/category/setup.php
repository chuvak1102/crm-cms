<h1>#Настройка полей: "<?=$data['category']->getName()?>"</h1>

<div class="cont">
    <table class="setup_category">
        <tr>
            <td id="fieldset">
                <form action="/admin/category/complete/" id="fields" method="post">
                    <div class="inline-input">
                        <div class="form-single">
                            <select name="fields[]">
                                <option value="1" selected>По умолчанию</option>
                            </select>
                            <select name="fieldType[]">
                                <option value="1" selected>По умолчанию</option>
                            </select>
                            <input type="text" name="canonical[]" placeholder="Название" value="Название">
                            <input type="text" name="alias[]" placeholder="Алиас"  value="name">
                            <input type="text" name="params[]" placeholder="Параметры(;)">
                        </div>
                    </div>

                    <div class="inline-input">
                        <div class="form-single">
                            <select name="fields[]">
                                <option value="1" selected>По умолчанию</option>
                            </select>
                            <select name="fieldType[]">
                                <option value="1" selected>По умолчанию</option>
                            </select>
                            <input type="text" name="canonical[]" placeholder="Название" value="Алиас">
                            <input type="text" name="alias[]" placeholder="Алиас"  value="alias">
                            <input type="text" name="params[]" placeholder="Параметры(;)">
                        </div>
                    </div>
                </form>
            </td>

            <td id="typeset">
                <?foreach($data['fields'] as $i){?>
                    <button type="button" data-event="category_setup_add_field" class="btn" id="<?=$i->getId()?>_add" value="<?=$i->getAlias()?>"><?=$i->getName()?></button>
                <?}?>
            </td>
        </tr>
    </table>

    <table class="setup_category">
        <tr>
            <td><button type="button" data-event="category_setup_save" style="width: 100%" class="btn" id="<?=$data['category']->getId()?>_complete">СОХРАНИТЬ</button></td>
        </tr>
    </table>
</div>

<!--            /admin/category/complete/1-->

<div id="set" style="display: none">
    <div class="inline-input">
        <div class="form-single">
            <select name="fields[]">Тип поля
                <?foreach($data['fields'] as $i){?>
                    <option value="<?=$i->getId()?>"><?=$i->getName()?></option>
                <?}?>
            </select>
            <select name="fieldType[]">Тип данных
                <?foreach($data['datatype'] as $i){?>
                    <option value="<?=$i->getType()?>"><?=$i->getName()?></option>
                <?}?>
            </select>
            <input type="text" name="canonical[]" placeholder="Название поля">
            <input type="text" name="alias[]" placeholder="Алиас(авто)">
            <input type="text" name="params[]" placeholder="Параметры(;)">
            <button data-event="category_setup_remove_field" class="btn" type="button">&ndash;</button>
        </div>
    </div>
</div>
