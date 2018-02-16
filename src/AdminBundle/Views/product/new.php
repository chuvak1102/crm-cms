<h1>#Добавить материал в <?=$data['category']->getName()?></h1>

<div class="cont">
    <div class="mat">
        <?if(!empty($data['fields'])){?>
            <div class="form">
                <form action="/admin/product/save/<?=$data['category']->getId()?>" method="post" enctype="multipart/form-data">
                    <?foreach($data['fields'] as $i){?>
                        <?if($i->getAlias() == 'category'){?>

                        <?}else{?>
                            <?if($i->getType() == 1){?>
                                <p><?=$i->getCanonical()?></p>
                                <input type="text" name="<?=$i->getAlias()?>">
                            <?}?>
                            <?if($i->getType() == 2){?>
                                <p><?=$i->getCanonical()?></p>
                                <textarea name="<?=$i->getAlias()?>" cols="50" rows="50" placeholder="<?=$i->getCanonical()?>"></textarea>
                            <?}?>
                            <?if($i->getType() == 3){?>
                                <p><?=$i->getCanonical()?></p>
                                <input type="file" name="<?=$i->getAlias()?>">
                            <?}?>
                            <?if($i->getType() == 5){?>
                                <p><?=$i->getCanonical()?></p>
                                <select name="<?=$i->getAlias()?>" id="">
                                    <?$opt = explode(';', $i->getParams())?>
                                    <?foreach($opt as $j){?>
                                        <option value="<?= $j ?>"><?=$j?></option>
                                    <?}?>
                                </select>
                            <?}?>
                            <?if($i->getType() == 9){?>
                                <p><?=$i->getCanonical()?></p>
                                <input type="date" name="<?=$i->getAlias()?>">
                            <?}?>
                            <?if($i->getType() == 10){?>
                                <p><?=$i->getCanonical()?></p>
                                <input type="datetime-local" name="<?=$i->getAlias()?>">
                            <?}?>
                        <?}?>
                    <?}?>
                    <button data-event="material_save" class="btn" type="button" id="<?=$data['category']->getId()?>">Сохранить</button>
                </form>
            </div>
        <?}else{?>
            <div class="form">
                <h1>Поля не настроены</h1>
            </div>
        <?}?>
    </div>
</div>
