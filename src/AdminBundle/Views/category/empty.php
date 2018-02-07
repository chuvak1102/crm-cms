
<ul class="screen ">
    <li class="screen_1 cyan aqua1">
        <h1>Structure</h1>

        <div class="p-10">
            <?if(!empty($data['category'])){?>
                <?foreach($data['category'] as $i){?>
                    <div class="category" style="margin-left: <?=$i['level']*30?>px" id="<?=$i['id']?>">
                        <div class="left"><img src="/web/files/<?=$i['image']?>" alt=""></div>
                        <div class="right">
                            <?=$i['name']?>
                            <div class="buttons">
                                <ul>
                                    <li><a href=""><i class="fa fa-arrow-left"></i></a></li>
                                    <li><a href=""><i class="fa fas fa-pencil-alt"></i></a></li>
                                    <li><a href=""><i class="fas fa-plus-circle"></i></a></li>
                                    <li><a href=""><i class="fas fa-trash-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?}?>
            <?}?>
        </div>
    </li>
    <li class="screen_2 aqua2">
        <div class="p-30">
            <?if(!empty($data['category'])){?>
                <?foreach($data['category'] as $i){?>
                    <div class="category" style="margin-left: <?=$i['level']*30?>px" id="<?=$i['id']?>">
                        <div class="left"><img src="/web/files/<?=$i['image']?>" alt=""></div>
                        <div class="right">
                            <?=$i['name']?>
                            <div class="buttons">
                                <ul>
                                    <li><a href=""><i class="fa fa-arrow-left"></i></a></li>
                                    <li><a href=""><i class="fa fas fa-pencil-alt"></i></a></li>
                                    <li><a href=""><i class="fas fa-plus-circle"></i></a></li>
                                    <li><a href=""><i class="fas fa-trash-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?}?>
            <?}?>
        </div>
    </li>
    <li class="screen_3 aqua3">
        <div class="p-30">
            <?if(!empty($data['category'])){?>
                <?foreach($data['category'] as $i){?>
                    <div class="category" style="margin-left: <?=$i['level']*30?>px" id="<?=$i['id']?>">
                        <div class="left"><img src="/web/files/<?=$i['image']?>" alt=""></div>
                        <div class="right">
                            <?=$i['name']?>
                            <div class="buttons">
                                <ul>
                                    <li><a href=""><i class="fa fa-arrow-left"></i></a></li>
                                    <li><a href=""><i class="fa fas fa-pencil-alt"></i></a></li>
                                    <li><a href=""><i class="fas fa-plus-circle"></i></a></li>
                                    <li><a href=""><i class="fas fa-trash-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?}?>
            <?}?>
        </div>
    </li>
    <li class="screen_4 aqua4">
        <div class="p-30">
            <?if(!empty($data['category'])){?>
                <?foreach($data['category'] as $i){?>
                    <div class="category" style="margin-left: <?=$i['level']*30?>px" id="<?=$i['id']?>">
                        <div class="left"><img src="/web/files/<?=$i['image']?>" alt=""></div>
                        <div class="right">
                            <?=$i['name']?>
                            <div class="buttons">
                                <ul>
                                    <li><a href=""><i class="fa fa-arrow-left"></i></a></li>
                                    <li><a href=""><i class="fa fas fa-pencil-alt"></i></a></li>
                                    <li><a href=""><i class="fas fa-plus-circle"></i></a></li>
                                    <li><a href=""><i class="fas fa-trash-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?}?>
            <?}?>
        </div>
    </li>
    <li class="screen_5 aqua5">
        <div class="p-30">
            <?if(!empty($data['category'])){?>
                <?foreach($data['category'] as $i){?>
                    <div class="category" style="margin-left: <?=$i['level']*30?>px" id="<?=$i['id']?>">
                        <div class="left"><img src="/web/files/<?=$i['image']?>" alt=""></div>
                        <div class="right">
                            <?=$i['name']?>
                            <div class="buttons">
                                <ul>
                                    <li><a href=""><i class="fa fa-arrow-left"></i></a></li>
                                    <li><a href=""><i class="fa fas fa-pencil-alt"></i></a></li>
                                    <li><a href=""><i class="fas fa-plus-circle"></i></a></li>
                                    <li><a href=""><i class="fas fa-trash-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?}?>
            <?}?>
        </div>
    </li>
</ul>
