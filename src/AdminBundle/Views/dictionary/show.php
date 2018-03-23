<?
use AdminBundle\Entity\DictionaryData;
use AdminBundle\Services\FieldType as Type;
use AdminBundle\Entity\FieldTypes;
/* @var $i FieldTypes */
/* @var $j DictionaryData */
?>

<h1>Словарь: <?=$data['dictionary']->getName()?></h1>

<div class="cont">
    <form action="" method="post" name="create_record">
        <table class="std_table">
            <tr>
                <td>Имя</td>
<!--                <td>Ключ</td>-->
                <td>Значение</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="text" name="entry_name"></td>
<!--                <td><input type="text" name="entry_key"></td>-->
                <td>
                    <?foreach($data['field_types'] as $i){?>
                        <?if($i->getId() == $data['dictionary']->getType()){?>
                            <?if($i->getId() == Type::TEXT){?>
                                <input type="text" name="entry_value">
                            <?}elseif($i->getId() == Type::TEXT_AREA){?>
                                <input type="text" name="entry_value">
                            <?}elseif($i->getId() == Type::DATE){?>
                                <input type="date" name="entry_value">
                            <?}elseif($i->getId() == Type::DATETIME){?>
                                <input type="datetime-local" name="entry_value">
                            <?}elseif($i->getId() == Type::FILE){?>
                                <input type="file" name="entry_value">
                            <?}else{?>
                                <input type="text" name="entry_value">
                            <?}?>
                        <?}?>
                    <?}?>
                </td>
                <td><button type="button" class="btn" data-event="create_entry" id="<?=$data['dictionary']->getId()?>">Добавить</button></td>
            </tr>
            <?if($data['fields']){?>
                <?foreach($data['fields'] as $j){?>
                    <tr>
                        <td><?=$j->getName()?></td>
<!--                        <td>--><?//=$j->getKey()?><!--</td>-->
                        <td><?=$j->getValue()?></td>
                        <td><button type="button" class="btn" data-event="remove_entry" id="<?=$j->getId()?>">Удалить</button></td>
                    </tr>
                <?}?>
            <?}?>
        </table>
    </form>
</div>
