<ul class="screen">
    <li>

        <div class="p-30">
            <?if(!empty($data['category'])){?>
                <?foreach($data['category'] as $i){?>

                    <div class="category" style="margin-left: <?=$i['level']*30?>px" id="<?=$i['id']?>">
                        <div class="left"><img src="/web/files/<?=$i['image']?>" alt=""></div>
                        <div class="right"><?=$i['name']?></div>
                    </div>

                <?}?>
            <?}?>
        </div>
    </li>
    <li>

    </li>
    <li>
        <div class="tree">
            <div class="up btn-set" id="btn-set">
                <a class="active" href="/admin/category/new/1">Создать категорию</a>
            </div>
            <div class="mid">
                <div id="mid-lft">
                    <div class="categories">
                        <ul>
                            <?if(!empty($data['category'])){?>
                                <?foreach($data['category'] as $i){?>
                                    <li class="<?=$i['level'] == 1 ? 'green' : ''?>" style="padding-left: <?=20 + $i['level']*15?>px" id="<?=$i['id']?>">
                                        <?=$i['name']?>
                                    </li>
                                <?}?>
                            <?}?>
                        </ul>
                    </div>
                </div>
                <div id="mid-rgt">
                    123
                </div>
            </div>
            <div class="clear"></div>
            <div class="down">
            </div>
        </div>
        <div class="clear"></div>
    </li>
</ul>
