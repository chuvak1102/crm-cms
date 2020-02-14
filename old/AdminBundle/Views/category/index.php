<?use AdminBundle\Entity\Category;?>
<?/* @var $i Category */?>
<?$category = $data['category']?>

<h1>#Структура контента</h1>

<?if(!empty($category)){?>
    <?foreach($category as $i){?>
        <div class="tree">
            <div class="tree-single">
                <div class="img"><img src="/web/files/<?=$i->getImage()?>" alt=""></div>
                <div class="info">
                    <span>ID: <?=$i->getId()?></span>
                    <span>Уровень: <?=$i->getLvl()?></span>
                    <span>Продуктов: <?=$i->getLvl()?></span>
                </div>
                <div class="desc"><?=$i->getName()?></div>
            </div>
            <div class="tree-single">
                <?if($i->getId() == 1){?>
                    <button data-event="category_new" type="button" id="<?=$i->getId()?>_new">ДОБАВИТЬ ПОДРАЗДЕЛ</button>
                <?}else{?>
                    <button data-event="category_new" type="button" id="<?=$i->getId()?>_new">ДОБАВИТЬ ПОДРАЗДЕЛ</button>
                    <?if($i->getLvl() == 1 && $i->getSetup() != 1){?>
                        <button data-event="category_setup" type="button" id="<?=$i->getId()?>_setup">НАСТРОЙКА ПОЛЕЙ</button>
                    <?}?>
                    <button data-event="category_edit" type="button" id="<?=$i->getId()?>_edit">ПРАВКА</button>
                    <button data-event="category_remove" type="button" id="<?=$i->getId()?>_remove">УДАЛИТЬ</button>
                <?}?>
            </div>
            <div class="tree-single">
                <p>Создано: <?=$i->getCreated()->format('d-m-Y H:i')?></p>
                <p>Шаблон: <?=$i->getTemplate()?></p>
                <p>Активно: Да</p>
                <p>URL: <?=$i->url?></p>
                <p>Описание: <?=$i->getDescription()?></p>
            </div>

            <?if($i->getSetup() == 0 && $i->getLvl() == 1){?>
                <div class="cat-tri" style="left: <?=$i->getLvl()*30?>px; border-top: 30px solid #ED413D"></div>
            <?}else{?>
                <div class="cat-tri" style="left: <?=$i->getLvl()*30?>px"></div>
            <?}?>

            <div class="clear"></div>
        </div>

    <?}?>
<?}?>