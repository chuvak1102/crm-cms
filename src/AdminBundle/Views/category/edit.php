<h1>#Редактировать раздел "<?=$data['category']->getName()?>"</h1>

<div class="save_category">
    <div class="lft">
        <input type="text" name="name" placeholder="Название"
               value="<?if(!empty($data['category']->getName())) echo $data['category']->getName()?>"
        >
        <input type="text" name="alias" placeholder="Алиас(авто)"
               value="<?if(!empty($data['category']->getAlias())) echo $data['category']->getAlias()?>"
        >
        <select name="template" id="">
            <option value="">Шаблон</option>
            <?foreach($data['templates'] as $j){?>
                <?if($data['category']->getTemplate() == $j){?>
                    <option selected value="<?=$j?>"><?=$j?></option>
                <?}else{?>
                    <option value="<?=$j?>"><?=$j?></option>
                <?}?>
            <?}?>
        </select>
        <input type="text" name="image" placeholder="Изображение">
        <textarea name="description" id="" cols="30" rows="10" placeholder="Описание"></textarea>
        <button data-event="category_edit_save" type="button" class="btn" id="<?=$data['category']->getId()?>_category_edit_save">Сохранить</button>
    </div>
    <div class="rgt">
        <ul>
            <?if(!empty($data['tree'])){?>
                <?foreach($data['tree'] as $i){?>
                    <?if($i->getId() == $data['category']->getId()){?>
                        <li class="green" style="padding-left: <?=$i->getLvl()*20?>px"><?=$i->getName()?></li>
                    <?}else{?>
                        <li style="padding-left: <?=$i->getLvl()*20?>px"><?=$i->getName()?></li>
                    <?}?>
                <?}?>
            <?}?>
        </ul>
    </div>
</div>