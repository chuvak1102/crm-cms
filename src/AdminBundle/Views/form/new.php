<h1>#Новая форма</h1>

<div class="cont">
    <table class="setup_category">
        <tr>
            <td id="fieldset">
                <form id="fields" method="post">
                    <input type="text" name="form_name" placeholder="Название формы" required>
                    <input type="text" name="form_alias" placeholder="Алиас(авто)">
                </form>
            </td>

            <td id="typeset">
                <?foreach($data['fields'] as $i){?>
                    <button type="button" data-event="form_add_field" class="btn" id="<?=$i->getId()?>" value="<?=$i->getAlias()?>"><?=$i->getName()?></button>
                <?}?>
            </td>
        </tr>
    </table>

    <table class="setup_category">
        <tr>
            <td><button type="button" data-event="form_save" style="width: 100%" class="btn">СОХРАНИТЬ</button></td>
        </tr>
    </table>
</div>

<div id="set" style="display: none">
    <div class="inline-input">
        <div class="form-single">
            <select name="fields[]" required>
                <?foreach($data['fields'] as $i){?>
                    <option value="<?=$i->getId()?>"><?=$i->getName()?> / <?=$i->getType()?> </option>
                <?}?>
            </select>
            <input type="text" name="canonical[]" placeholder="Название" required>
            <input type="text" name="column[]" placeholder="Колонка" required>
            <input type="text" name="name[]" placeholder="Label" required>
            <input type="text" name="value[]" placeholder="Значение" required>
            <select name="required[]" required>
                <option value="0" selected>Обязательное (Нет)</option>
                <option value="1">Обязательное (Да)</option>
            </select>
            <button data-event="form_remove_field" class="btn" type="button">&ndash;</button>
        </div>
    </div>
</div>