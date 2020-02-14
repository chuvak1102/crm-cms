<h1>#Материалы в разделе: <?= $data['category']->getName()?></h1>

<div class="cont">
    <div class="mat">
        <table>
            <?if(is_array($data['products'])){?>
                <?foreach($data['products'] as $i){?>
                    <tr>
                        <td><?=$i['name']?>( <span>id <?=$i['id']?></span> )</td>
                        <td>
                            <button type="button" class="btn" data-event="material_edit" id="<?=$i['category'].'_'.$i['id']?>">РЕДАКТИРОВАТЬ</button>
                        </td>
                        <td>
                            <button type="button" class="btn" data-event="material_delete" id="<?=$data['category']->getId().'_'.$i['id']?>">УДАЛИТЬ</button>
                        </td>
                        <td>

                        </td>
                    </tr>
                <?}?>
            <?}?>
        </table>
    </div>
</div>
