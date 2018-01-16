<?$c = $data['category']?>

<?if($c->getId() == 1){?>

    <a class="active" href="/admin/category/new/1">Создать категорию</a>
<?}else{?>

    <?if($c->getSetup() != 1){?>
        <a class="active" href="/admin/category/setup/<?=$c->getId()?>">Настроить поля</a>
    <?}else{?>
        <a class="active" href="/admin/product/show/<?=$c->getId()?>">Показать материалы</a>
        <a class="active" href="/admin/product/new/<?=$c->getId()?>">Добавить материал</a>
    <?}?>

    <select id="template">
        <option value="">Страница:</option>
        <?if(!empty($data['templates'])){?>
            <?foreach($data['templates'] as $j){?>
                <?if($j == $c->getTemplate()){?>
                    <option selected value="<?=$j.'___'.$c->getId()?>">Страница: <?=$j?></option>
                <?}else{?>
                    <option value="<?=$j.'___'.$c->getId()?>">Страница: <?=$j?></option>
                <?}?>
            <?}?>
        <?}?>
    </select>

    <a href="/admin/category/new/<?=$c->getId()?>">Создать подкатегорию</a>

    <a class="btn red active" href="/admin/category/delete/<?=$c->getId()?>">Удалить</a>
<?}?>


