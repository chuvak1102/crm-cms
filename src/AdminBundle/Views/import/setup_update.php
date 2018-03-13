<h1>#Настройки обновления</h1>

<form action="" enctype="multipart/form-data" method="post">
    <div class="cont">
        <p>Поля для поиска совпадений (по порядку с учетом индексов)</p>
        <table class="std_table">
            <tr>
                <td>
                    <select name="filter[]" id="">
                        <option value="">Укажите</option>
                        <?foreach($data['columns'] as $i){?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?}?>
                    </select>
                </td>
                <td>
                    <select name="filter[]" id="">
                        <option value="">Укажите</option>
                    </select>
                </td>
                <td>
                    <select name="filter[]" id="">
                        <option value="">Укажите</option>
                    </select>
                </td>
                <td>
                    <select name="filter[]" id="">
                        <option value="">Укажите</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
</form>

<div class="cont">
    <table class="std_table">
        <tr>
            <td><button type="button" class="btn" data-event="import_execute_update" id="<?=$data['import']->getId()?>">ИМПОРТ</button></td>
        </tr>
    </table>
</div>

