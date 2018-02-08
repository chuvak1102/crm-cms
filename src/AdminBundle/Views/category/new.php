<h1>#Insert Node into "<?=$data['category']->getName()?>"</h1>

<div class="save_category">
    <div class="lft">
        <input type="text" name="name" placeholder="Название категории">
        <input type="text" name="alias" placeholder="Алиас категории">
        <input type="text" name="image" placeholder="Изображение категории">
        <textarea name="description" id="" cols="30" rows="10" placeholder="Описание категории"></textarea>
        <button data-event="category_save" class="btn" id="<?=$data['category']->getId()?>_category_save">SAVE</button>
    </div>
    <div class="rgt">
        <ul>
            <?if(!empty($data['tree'])){?>
                <?foreach($data['tree'] as $i){?>
                    <?if($i['id'] == $data['category']->getId()){?>
                        <li style="padding-left: <?=$i['level']*20?>px"><?=$i['name']?></li>
                        <li class="green" style="padding-left: <?=$i['level']*20 + 20?>px">placeholder</li>
                    <?}else{?>
                        <li style="padding-left: <?=$i['level']*20?>px"><?=$i['name']?></li>
                    <?}?>
                <?}?>
            <?}?>
        </ul>
    </div>
</div>