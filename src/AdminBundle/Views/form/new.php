<div class="template">
    <div class="breadcrumbs">
        <a href="/admin/">Домой</a>
        <span>Поля</span>
    </div>
    <h1 class="page">Новая форма</span></h1>
    <div class="actions">
        <a class="btn" href="javascript:void(0)" id="new-field">Добавить</a>
        <a class="btn" href="/admin/category/">Отмена</a>
    </div>
    <div class="categories">
        <div class="form">
            <form id="setup-form" action="/admin/form/create" method="post">
                <button class="btn" type="submit">Сохранить</button>
                <div class="h-20"></div>
                <input type="text" name="form_name" placeholder="Название">
                <input type="text" name="form_alias" placeholder="Алиас">
            </form>
        </div>
    </div>
    <pre>
        <?print_r($data)?>
    </pre>
</div>

<div id="set" style="display: none">
    <div class="form-single">
        <select name="fields[]">
            <?foreach($data['fields'] as $i){?>
                <option value="<?=$i['id']?>"><?=$i['name']?> / <?=$i['type']?></option>
            <?}?>
        </select>
        <input type="text" name="canonical[]" placeholder="Название" required>
        <input type="text" name="column[]" placeholder="Колонка" required>
        <input type="text" name="name[]" placeholder="Имя" required>
        <input type="text" name="value[]" placeholder="Значение">
        <select name="required[]" required>
            <option value="0" selected>Обязательное (Нет)</option>
            <option value="1">Обязательное (Да)</option>
        </select>
        <a class="btn red f-r m-5 remove" href="javascript:void(0)">X</a>
    </div>
</div>