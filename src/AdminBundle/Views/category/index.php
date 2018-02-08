<h1>#Structure</h1>

<?if(!empty($data['category'])){?>
    <?foreach($data['category'] as $i){?>
        <div class="tree">
            <div class="tree-single">
                <div class="img"><img src="/web/files/<?=$i['image']?>" alt=""></div>
                <div class="name"><?=$i['name']?></div>
                <div class="info">
                    <span>ID: <?=$i['id']?></span>
                    <span>Level: <?=$i['level']?></span>
                    <span>Products: <?=$i['level']?></span>
                </div>
                <div class="desc"><?=$i['description']?></div>
            </div>
            <div class="tree-single">
                <button data-event="category_new" id="<?=$i['id']?>_new">INSERT NODE</button>
                <button data-event="category_setup" id="<?=$i['id']?>_setup">SETUP</button>
                <button data-event="category_show" id="<?=$i['id']?>_show">SHOW</button>
                <button data-event="category_template" id="<?=$i['id']?>_template">SELECT TEMPLATE</button>
                <button data-event="category_remove" id="<?=$i['id']?>_remove">REMOVE</button>
            </div>
            <div class="tree-single">
                <p>Создано: 01.01.2018</p>
                <p>Шаблон: index</p>
                <p>Активно: Да</p>
                <p>Путь: /subroot/subroot/</p>
            </div>

            <div class="cat-tri" style="left: <?=$i['level']*30?>px"></div>
            <div class="clear"></div>
        </div>

    <?}?>
<?}?>