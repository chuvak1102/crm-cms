<h1>#Добавить подраздел в "<?=$data['category']->getName()?>"</h1>

<div class="save_category">
    <div class="lft">
        <form action="" method="post">
            <input type="text" name="name" placeholder="Название">
            <input type="text" name="alias" placeholder="Алиас(авто)">
            <select name="template" id="">
                <option value="">Шаблон</option>
                <?foreach($data['templates'] as $j){?>
                    <option value="<?=$j?>"><?=$j?></option>
                <?}?>
            </select>
            <input type="text" name="image" placeholder="Изображение">
            <textarea name="description" id="" cols="30" rows="10" placeholder="Описание"></textarea>
            <button type="button" data-event="category_save" class="btn" id="<?=$data['category']->getId()?>_category_save">СОХРАНИТЬ</button>
        </form>
    </div>
    <div class="rgt">
        <ul>
            <?if(!empty($data['tree'])){?>
                <?foreach($data['tree'] as $i){?>
                    <?if($i['id'] == $data['category']->getId()){?>
                        <li style="padding-left: <?=$i['level']*20?>px"><?=$i['alias']?></li>
                        <li class="green" style="padding-left: <?=$i['level']*20 + 20?>px">placeholder</li>
                    <?}else{?>
                        <li style="padding-left: <?=$i['level']*20?>px"><?=$i['alias']?></li>
                    <?}?>
                <?}?>
            <?}?>
        </ul>
    </div>
</div>