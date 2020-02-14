<?use AdminBundle\Entity\Category;?>
<?/* @var $category Category */?>
<?$category = $data['category']?>

<h1>#Редактировать раздел "<?=$category->getName()?>"</h1>

<div class="save_category">
    <div class="lft">
        <input type="text" name="name" placeholder="Название"
               value="<?if(!empty($category->getName())) echo $category->getName()?>"
        >
        <input type="text" name="alias" placeholder="Алиас(авто)"
               value="<?if(!empty($category->getAlias())) echo $category->getAlias()?>"
        >
        <select name="template" id="">
            <option value="">Шаблон</option>
            <?foreach($data['templates'] as $j){?>
                <?if($category->getTemplate() == $j){?>
                    <option selected value="<?=$j?>"><?=$j?></option>
                <?}else{?>
                    <option value="<?=$j?>"><?=$j?></option>
                <?}?>
            <?}?>
        </select>
        <input type="text" name="image" placeholder="Изображение">
        <textarea name="description" id="" cols="30" rows="10" placeholder="Описание"></textarea>
        <button data-event="category_edit_save" type="button" class="btn" id="<?=$category->getId()?>_category_edit_save">Сохранить</button>
    </div>
    <div class="rgt">
        <ul>
            <?if(!empty($data['tree'])){?>
                <?foreach($data['tree'] as $i){?>
                    <?if($i->getId() == $category->getId()){?>
                        <li class="green" style="padding-left: <?=$i->getLvl()*20?>px"><?=$i->getName()?></li>
                    <?}else{?>
                        <li style="padding-left: <?=$i->getLvl()*20?>px"><?=$i->getName()?></li>
                    <?}?>
                <?}?>
            <?}?>
        </ul>
    </div>
</div>