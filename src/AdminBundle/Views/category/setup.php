<div class="btn-set" id="btn-set">
    <a class="active" href="javascript:void(0)" id="new-field">Добавить поле</a>
    <a class="active" href="/admin/category/">Отмена</a>
</div>

<div class="template">
    <h2 class="td-u">Настроить поля в категории: <span><?= $data['name']?></span></h2>

    <div class="">
        <div class="form">
            <form id="setup-form" action="/admin/category/complete/<?=$data['to']?>" method="post">

                <h2>Поля по умолчанию:</h2>

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
                <div class="inline-input">
                    <div class="form-single">
                        <select name="fields[]">
                            <option value="1" selected>По умолчанию</option>
                        </select>
                        <select name="fieldType[]">
                            <option value="1" selected>По умолчанию</option>
                        </select>
                        <input type="text" name="canonical[]" placeholder="Алиас"  value="Алиас">
                        <input type="text" name="alias[]" placeholder="Алиас"  value="alias">
                    </div>
                </div>

                <button class="btn" type="submit">Сохранить</button>

                <h2>Дополнительные поля:</h2>

            </form>
        </div>
    </div>
</div>
<div id="set" style="display: none">
    <div class="inline-input">
        <div class="form-single">
            <select name="fields[]">
                <option value="1" selected>Тип поля</option>
                <option value="1">Короткий текст</option>
                <option value="2">Текст</option>
                <option value="3">Файл</option>
                <option value="4">Несколько файлов</option>
                <option value="5">Выбор</option>
                <option value="6">Множественный выбор</option>
                <option value="7">Отметка</option>
                <option value="8">Дата</option>
                <option value="9">Дата/Время</option>
            </select>
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
            <a class="btn red f-r m-5 remove" href="javascript:void(0)">X</a>
        </div>
    </div>
</div>


<?dump($data)?>

