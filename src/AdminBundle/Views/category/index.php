<h1>#Structure</h1>

<?//dump($data)?>

<?if(!empty($data['category'])){?>
    <?foreach($data['category'] as $i){?>
        <div class="tree">
            <div class="tree-single">
                <div class="img"><img src="/web/files/<?=$i->getImage()?>" alt=""></div>
                <div class="name"><?=$i->getName()?></div>
                <div class="info">
                    <span>ID: <?=$i->getId()?></span>
                    <span>Level: <?=$i->getLvl()?></span>
                    <span>Products: <?=$i->getLvl()?></span>
                </div>
                <div class="desc"><?=$i->getDescription()?></div>
            </div>
            <div class="tree-single">
                <?if($i->getId() == 1){?>
                    <button data-event="category_new" id="<?=$i->getId()?>_new">INSERT NODE</button>
                <?}else{?>
                    <button data-event="category_new" id="<?=$i->getId()?>_new">INSERT NODE</button>
                    <button data-event="category_setup" id="<?=$i->getId()?>_setup">SETUP</button>
                    <button data-event="category_show" id="<?=$i->getId()?>_show">SHOW</button>
                    <button data-event="category_template" id="<?=$i->getId()?>_template">SELECT TEMPLATE</button>
                    <button data-event="category_remove" id="<?=$i->getId()?>_remove">REMOVE</button>
                <?}?>
            </div>
            <div class="tree-single">
                <p>Создано: </p>
                <p>Шаблон: <?=$i->getTemplate()?></p>
                <p>Активно: Да</p>
                <p>Путь: /subroot/subroot/</p>
            </div>

            <div class="cat-tri" style="left: <?=$i->getLvl()*30?>px"></div>
            <div class="clear"></div>
        </div>

    <?}?>
<?}?>