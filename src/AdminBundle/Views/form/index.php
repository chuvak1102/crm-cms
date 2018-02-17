<h1>#Формы</h1>

<div class="cont">
    <div class="mat">
        <table>
            <?if(!empty($data['forms']) && is_array($data['forms'])){?>
                <?foreach($data['forms'] as $i){?>
                    <tr>
                        <td><?= $i['name'] ?></td>
                        <td><button type="button" class="btn" data-event="form_show" id="<?=$i['id']?>">ПОКАЗАТЬ</button></td>
                        <td><button type="button" class="btn" data-event="form_delete" id="<?=$i['id']?>">УДАЛИТЬ</button></td>
<!--                        <td><button type="button" class="btn" data-event="form_edit" id="--><?//=$i['id']?><!--">РЕДАКТИРОВАТЬ</button></td>-->
                    </tr>
                <?}?>
            <?}?>
        </table>
    </div>
</div>

<div class="cont">
    <div class="mat">
        <table>
            <tr>
                <td><button type="button" class="btn" data-event="form_new">СОЗДАТЬ</button></td>
            </tr>
        </table>
    </div>
</div>