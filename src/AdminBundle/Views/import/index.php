<h1>#Импорт данных</h1>

<div class="cont">
    <form action="">
        <table class="std_table">
            <tr>
                <td>Название</td>
                <td>Тип данных</td>
<!--                <td>Источник данных</td>-->
                <td>Таблица для записи</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <input name="name" type="text" placeholder="Название" value="Новая выгрузка">
                </td>
                <td>
                    <select name="type">
<!--                        <option value="CSV">CSV</option>-->
                        <option value="XML">XML</option>
<!--                        <option value="DBF">DBF</option>-->
                    </select>
                </td>
<!--                <td>-->
<!--                    <select name="source">-->
<!--                        <option value="local">Файл</option>-->
<!--                        <option value="remote">Ссылка</option>-->
<!--                    </select>-->
<!--                </td>-->
                <td>
                    <select name="table">
                        <?foreach($data['tables'] as $i){?>
                            <option value="<?=$i->getAlias()?>"><?=$i->getName()?></option>
                        <?}?>
                    </select>
                </td>
                <td>

                </td>
                <td>
                    <button type="button" class="btn" data-event="import_new">Сохранить</button>
                </td>
            </tr>
            <?if(is_array($data['import'])){?>
                <?foreach($data['import'] as $i){?>
                    <tr>
                        <td>
                            <input type="text" value="<?=$i->getName()?>">
                        </td>
                        <td>
                            <select>
                                <option value="<?=$i->getType()?>"><?=$i->getType()?></option>
                            </select>
                        </td>
<!--                        <td>-->
<!--                            <select>-->
<!--                                <option value="--><?//=$i->getSource()?><!--">--><?//=$i->getSource()?><!--</option>-->
<!--                            </select>-->
<!--                        </td>-->
                        <td>
                            <select>
                                <option value="<?=$i->getTable()?>"><?=$i->getTable()?></option>
                            </select>
                        </td>
                        <td>
                            <button type="button" class="btn" data-event="import_begin" id="<?=$i->getId()?>">Импорт</button>

                        </td>
                        <td>
                            <button type="button" class="btn" data-event="import_delete" id="<?=$i->getId()?>">Удалить</button>
                        </td>
                    </tr>
                <?}?>
            <?}?>
        </table>
    </form>
</div>
