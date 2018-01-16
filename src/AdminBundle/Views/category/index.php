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
                            <li style="padding-left: <?=20 + $i['level']*15?>px" id="<?=$i['id']?>">
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



