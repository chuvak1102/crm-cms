<div class="template">
    <div class="breadcrumbs">
        <a href="/admin/">Домой</a>
        <span>Конструктор страниц</span>
    </div>

    <h1 class="page">Конструктор страниц</h1>
    <div class="actions">
        <a class="btn" href="#">Кнопка</a>
        <a class="btn" href="#">Кнопка</a>
        <a class="btn" href="#">Кнопка</a>
        <a class="btn red" href="/admin/constructor/delete/">Удалить</a>
        <!--        <a class="btn danger" href="#">DELETE ALL</a>-->
    </div>
    <div class="categories">
        <ul>
            <?if(is_array($data['constructor'])){?>

                <?foreach($data['constructor'] as $i){?>
                    <li>
                        <a href="" class="blue">
                            Страница: <span><?=$i['page']?>  </span>
                            Метод: <span><?= $i['method'] ?>  </span>
                            Переменная: <span><?= $i['variable'] ?>  </span>
                            Параметры: <span><?=$i['parameters']?></span>
                        </a>
                        <div class="control">
                            <a class="btn red" href="/admin/constructor/delete/<?= $i['id']?>">Удалить</a>
                        </div>
                    </li>
                <?}?>
            <?}?>
        </ul>
        <div class="clear"></div>
        <div class="h-20"></div>
        <form action="/admin/constructor/save/" method="post">
            <table width="90%">
                <tr>
                    <td class="ta-l">
                        <select name="page" id="template">
                            <?if(!empty($data['page'])){?>
                                <option value="" selected>Страница</option>
                                <?foreach($data['page'] as $i){?>
                                    <option value="<?=$i?>"><?=$i?></option>
                                <?}?>
                            <?}?>
                        </select>
                    </td>
                    <td class="ta-l">
                        <select name="method" id="template">
                            <option value="">Метод</option>
                            <option value="GetCTypeByAlias">GetCTypeByAlias</option>
                            <option value="GetProductTreeByNode">GetProductTreeByNode</option>
                        </select>
                    </td>
                    <td class="ta-l">
                        <input name="variable" type="text" placeholder="Переменная" class="w-100">
                    </td>
                    <td class="ta-l">
                        <input name="parameters" type="text" placeholder="Параметры" class="w-100">
                    </td>
                </tr>
            </table>
            <button class="btn" type="submit">ADD</button>
        </form>
    </div>
</div>
