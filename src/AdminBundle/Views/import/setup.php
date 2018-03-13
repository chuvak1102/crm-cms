<h1>Импорт данных в <?=$data['set']->getName()?></h1>

<div class="cont">
    <table class="std_table import">
        <tr>
            <td>Название тега</td>
            <td>Значение</td>
            <td>Поля в таблице</td>
            <td>Тег для записи</td>
        </tr>
    </table>
    <form action="" method="post" name="import">
        <table class="std_table import">
            <tr>
                <td>
                    <table>
                        <?foreach($data['tags'] as $k => $v){?>
                            <tr>
                                <td><button type="button" class="btn" data-event="import_select_tag" id="<?=$k?>"><?=$k?></button></td>
                                <td><?=$v?></td>
                            </tr>
                        <?}?>
                        <tr>
                            <td><input type="text" placeholder="NEW TAG NAME"></td>
                            <td><button type="button" class="btn" data-event="import_add_tag">+</button></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table>
                        <?foreach($data['columns'] as $i){?>
                            <?$exist = false?>
                            <tr>
                                <td><button type="button" class="btn" data-event="import_assign_tag" id="<?=$i?>"><?=$i?></button></td>
                                <?if($data['saved']){?>
                                    <?foreach($data['saved'] as $f){?>
                                        <?if($f->getKey() == $i){?>
                                            <?$exist = true?>
                                            <td><input type="text" name="<?=$i?>" value="<?=$f->getColumn()?>"></td>
                                            <?break?>
                                        <?}?>
                                    <?}?>

                                    <?if(!$exist){?>
                                        <td><input type="text" name="<?=$i?>" value=""></td>
                                    <?}?>

                                <?}else{?>
                                    <td><input type="text" name="<?=$i?>" value=""></td>
                                <?}?>
                            </tr>
                        <?}?>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<div class="cont">
    <table class="std_table">
        <tr>
            <td><button type="button" class="btn" data-event="import_save" id="<?=$data['set']->getId()?>">СОХРАНИТЬ НАСТРОЙКИ</button></td>
            <td><button type="button" class="btn" data-event="import_execute_add" id="<?=$data['set']->getId()?>">ЗАГРУЗИТЬ ВСЕ</button></td>
            <td><button type="button" class="btn" data-event="import_update_setup" id="<?=$data['set']->getId()?>">ОБНОВИТЬ</button></td>
            <td><button type="button" class="btn" data-event="import_execute_drop_add" id="<?=$data['set']->getId()?>">УДАЛИТЬ ВСЕ И ЗАГРУЗИТЬ</button></td>
        </tr>
    </table>
</div>
