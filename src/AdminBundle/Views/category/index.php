<ul class="screen">
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
    <li>
        SCREEN 2
    </li>
    <li>
        SCREEN 3
    </li>
</ul>
