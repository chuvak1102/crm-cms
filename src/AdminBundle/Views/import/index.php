<h1>#Импорт данных</h1>

<div class="cont">
    <form action="">
        <table class="std_table">
            <tr>
                <td>Название</td>
                <td>Тип Файла</td>
                <td>Источник файла</td>
                <td>Таблица для записи</td>
            </tr>
            <tr>
                <td>
                    <input name="name" type="text" placeholder="Название" value="Новая выгрузка">
                </td>
                <td>
                    <select name="type">
                        <option value="CSV">CSV</option>
                        <option value="XML">XML</option>
                        <option value="DBF">DBF</option>
                    </select>
                </td>
                <td>
                    <select name="source">
                        <option value="local">Локальный</option>
                        <option value="remote">URL</option>
                    </select>
                </td>
                <td>
                    <select name="table">
                        <?foreach($data['tables'] as $i){?>
                            <option value="<?=$i->getAlias()?>"><?=$i->getName()?></option>
                        <?}?>
                    </select>
                </td>
                <td>
                    <button type="button" class="btn" data-event="import_new">СОХРАНИТЬ</button>
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
                        <td>
                            <select>
                                <option value="<?=$i->getSource()?>"><?=$i->getSource()?></option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="<?=$i->getTable()?>"><?=$i->getTable()?></option>
                            </select>
                        </td>
                        <td>
                            <button type="button" class="btn" data-event="import_start_all" id="<?=$i->getId()?>">ЗАГРУЗИТЬ ВСЕ</button>
                            <button type="button" class="btn" data-event="import_start_update" id="<?=$i->getId()?>">ЗАГРУЗИТЬ С ОБНОВЛЕНИЕМ</button>
                            <button type="button" class="btn" data-event="import_start_drop_update" id="<?=$i->getId()?>">УДАЛИТЬ ВСЕ И ЗАГРУЗИТЬ</button>
                            <button type="button" class="btn" data-event="import_delete" id="<?=$i->getId()?>">УДАЛИТЬ ВЫГРУЗКУ</button>
                        </td>
                    </tr>
                <?}?>
            <?}?>
        </table>
    </form>
</div>
