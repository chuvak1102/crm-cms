<h1>#Setup node "<?=$data['category']->getName()?>"</h1>

<div class="cont">
    <table class="setup_category">
        <tr>
            <td id="fieldset">
                <form action="" id="fields">
                    <div class="inline-input">
                        <div class="form-single">
                            <select name="fields[]">
                                <option value="1" selected>По умолчанию</option>
                            </select>
                            <select name="fieldType[]">
                                <option value="1" selected>По умолчанию</option>
                            </select>
                            <input type="text" name="canonical[]" placeholder="Название"  value="Название">
                            <input type="text" name="alias[]" placeholder="Алиас"  value="name">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="inline-input">
                        <div class="form-single">
                            <select name="fieldType[]">Тип данных
                                <option value="1" selected>Тип данных</option>
                                <option value="1">Строка</option>
                                <option value="2">Целое число</option>
                                <option value="3">Число с плавающей точкой</option>
                                <option value="4">Дата</option>
                            </select>
                            <input type="text" name="canonical[]" placeholder="Название">
                            <input type="text" name="alias[]" placeholder="Алиас(авто)">
                            <input type="text" name="params[]" placeholder="Значения поля">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="inline-input">
                        <div class="form-single">
                            <select name="fieldType[]">Тип данных
                                <option value="1" selected>Тип данных</option>
                                <option value="1">Строка</option>
                                <option value="2">Целое число</option>
                                <option value="3">Число с плавающей точкой</option>
                                <option value="4">Дата</option>
                            </select>
                            <input type="text" name="canonical[]" placeholder="Название поля">
                            <input type="text" name="alias[]" placeholder="Алиас поля">
                            <input type="text" name="params[]" placeholder="Значения поля">
                        </div>
                    </div>
                    <div class="clear"></div>

                </form>
            </td>
            <td id="removeset">
                <?foreach($data['fields'] as $i){?>
                    <button class="btn" id="<?$i->getId()?>_add">-</button>
                <?}?>
            </td>
            <td id="typeset">
                <?foreach($data['fields'] as $i){?>
                    <button class="btn" id="<?$i->getId()?>_add">+ <?=$i->getName()?></button>
                <?}?>
            </td>
        </tr>
    </table>

    <table class="setup_category">
        <tr>
            <td><button class="btn" id="_add">Сохранить</button></td>
        </tr>
    </table>

</div>

<!--            /admin/category/complete/1-->

<div id="set" style="display: none">
    <div class="inline-input">
        <div class="form-single">
            <select name="fields[]">
                <?foreach($data['fields'] as $i){?>
                    <option value="<?=$i->getId()?>"><?=$i->getName()?></option>
                <?}?>
            </select>
            <select name="fieldType[]">Тип данных
                <option value="1" selected>Тип данных</option>
                <option value="1">String</option>
                <option value="2">Integer</option>
                <option value="3">Float</option>
                <option value="4">DateTime</option>
            </select>
            <input type="text" name="canonical[]" placeholder="Название поля">
            <input type="text" name="alias[]" placeholder="Алиас поля">
            <input type="text" name="params[]" placeholder="Значения поля">
        </div>
    </div>
</div>


<?//dump($data)?>

