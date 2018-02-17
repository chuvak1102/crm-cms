<h1>#Конструктор страниц</h1>

<div class="cont">
    <div class="constructor">
        <table width="100%">
            <tr>
                <td>Шаблон</td>
                <td>Функция</td>
                <td>Иня на странице</td>
                <td>Свойства</td>
                <td>Действие</td>
            </tr>
            <?if(is_array($data['constructor'])){?>
                <?foreach($data['constructor'] as $i){?>
                    <tr>
                        <td><?=$i['page']?></td>
                        <td><?= $i['method']?></td>
                        <td><?= $i['variable']?></td>
                        <td><?=$i['parameters']?></td>
                        <td><button type="button" class="btn" data-event="binder_remove" id="<?=$i['id']?>">УДАЛИТЬ</button></td>
                    </tr>
                <?}?>
            <?}?>
        </table>
    </div>
</div>

<div class="cont">
    <div class="constructor">
        <form action="">
            <table width="100%">
                <tr>
                    <td class="ta-l">
                        <select name="page">
                            <?if(!empty($data['page'])){?>
                                <?foreach($data['page'] as $i){?>
                                    <option value="<?=$i?>"><?=$i?></option>
                                <?}?>
                            <?}?>
                        </select>
                    </td>
                    <td>
                        <select name="method">
                            <option value="GetCTypeByAlias">GetCTypeByAlias</option>
                            <option value="GetProductTreeByNode">GetProductTreeByNode</option>
                        </select>
                    </td>
                    <td>
                        <input name="variable" type="text" placeholder="Переменная" class="w-100">
                    </td>
                    <td>
                        <input name="parameters" type="text" placeholder="Параметры" class="w-100">
                    </td>
                    <td>
                        <button type="button" class="btn" data-event="binder_add">ДОБАВИТЬ</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
