<?use AdminBundle\Entity\Dictionary;?>
<?use AdminBundle\Entity\FieldTypes;?>
<?/* @var $i Dictionary */?>
<?/* @var $j FieldTypes */?>

<h1>#Словари</h1>

<div class="cont">
    <form action="">
        <table class="std_table">
            <tr>
                <td>Название</td>
                <td>Алиас(авто)</td>
                <td>Тип значения</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><input name="dictionary_name" type="text" placeholder="Новый словарь" value="Новый словарь"></td>
                <td><input name="dictionary_alias" type="text" placeholder="" value=""></td>
                <td>
                    <select name="dictionary_type">
                        <?foreach($data['fields'] as $i){?>
                            <option value="<?=$i->getId()?>"><?=$i->getName()?></option>
                        <?}?>
                    </select>
                </td>
                <td></td>
                <td><button type="button" class="btn" data-event="d_new">Добавить</button></td>
            </tr>
            <?if(!empty($data['dictionary'])){?>
                <?foreach($data['dictionary'] as $i){?>
                    <tr>
                        <td><?=$i->getName()?></td>
                        <td><?=$i->getAlias()?></td>
                        <td>
                            <?foreach($data['fields'] as $j){?>
                                <?if($j->getId() == $i->getType()){?>
                                    <?=$j->getName()?>
                                <?}?>
                            <?}?>
                        </td>
                        <td><button type="button" class="btn" data-event="d_show" id="<?=$i->getId()?>">Просмотр</button></td>
                        <td><button type="button" class="btn" data-event="d_remove" id="<?=$i->getId()?>">Удалить</button></td>
                    </tr>
                <?}?>
            <?}?>
        </table>
    </form>
</div>
