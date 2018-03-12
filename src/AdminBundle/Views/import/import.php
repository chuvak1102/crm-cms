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

                        <?if(empty($data['saved'])){?>
                            <tr>
                                <td><input type="text" placeholder="NEW TAG NAME"></td>
                                <td><button type="button" class="btn" data-event="import_add_tag">+</button></td>
                            </tr>
                        <?}?>
                    </table>
                </td>
                <td>
                    <table>
                        <?foreach($data['columns'] as $i){?>
                            <tr>
                                <td><button type="button" class="btn" data-event="import_assign_tag" id="<?=$i?>"><?=$i?></button></td>
                                <?if($data['saved']){?>
                                    <?foreach($data['saved'] as $f){?>
                                        <?if($f->getKey() == $i){?>
                                            <td><input type="text" name="<?=$i?>" value="<?=$f->getColumn()?>"></td>
                                            <?break;?>
                                        <?}?>
                                    <?}?>
                                <?}else{?>
                                    <td><input type="text" name="<?=$i?>"></td>
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
    <?if(empty($data['saved'])){?>
        <table class="std_table">
            <tr>
                <td><button type="button" class="btn" data-event="import_save" id="<?=$data['set']->getId()?>">СОХРАНИТЬ</button></td>
            </tr>
        </table>
    <?}else{?>
        <table class="std_table">
            <tr>
                <td><button type="button" class="btn" data-event="import_execute" id="<?=$data['set']->getId()?>">НАЧАТЬ ИНМОРТ</button></td>
            </tr>
        </table>
    <?}?>
</div>
