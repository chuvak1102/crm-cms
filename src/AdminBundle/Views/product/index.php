<h1>#Продукты</h1>

<div class="cont">
    <div class="mat">
        <table>
            <?if(is_array($data['category'])){?>
                <?foreach($data['category'] as $i){?>
                    <?if(!empty($i->getAlias())){?>
                        <tr>
                            <td><?=$i->getName()?>( <span>id <?=$i->getId()?></span> )</td>
                            <td>
                                <button type="button" class="btn" data-event="material_new" id="<?=$i->getId()?>">ДОБАВИТЬ МАТЕРИАЛ</button>
                            </td>
                            <td>
                                <button type="button" class="btn" data-event="material_show" id="<?=$i->getId()?>">СПИСОК МАТЕРИАЛОВ</button>
                            </td>
                            <td>
                                <button type="button" class="btn" data-event="material_drop_all" id="<?=$i->getId()?>">УДАЛИТЬ ВСЕ</button>
                            </td>
                        </tr>
                    <?}?>
                <?}?>
            <?}?>
        </table>
    </div>
</div>

<?//dump($data)?>
