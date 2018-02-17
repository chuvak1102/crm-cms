<h1>#Редактировать материал: <?=$data['category']->getName()?></h1>

<div class="cont">
    <div class="mat">
        <form action="/admin/product/update/<?=$data['category']->getId().'_'.$data['product']['id']?>" method="post" enctype="multipart/form-data">
            <?if(!empty($data['fields'])){?>
                <?foreach($data['fields'] as $i){?>
                    <?if($i->getAlias() != 'category'){?>
                        <?if($i->getType() == 1){?>
                            <p><?=$i->getCanonical()?></p>
                            <input type="text" value="<?=$data['product'][$i->getAlias()]?>" name="<?=$i->getAlias()?>">
                        <?}?>

                        <?if($i->getType() == 2){?>
                            <p><?=$i->getCanonical()?></p>
                            <textarea name="<?=$i->getAlias()?>"><?=$data['product'][$i->getAlias()]?></textarea>
                        <?}?>

                        <?if($i->getType() == 3){?>
                            <p><?=$i->getCanonical()?></p>
                            <input type="file" value="<?=$data['product'][$i->getAlias()]?>" name="<?=$i->getAlias()?>">
                        <?}?>

                        <?if($i->getType() == 5){?>
                            <p><?=$i->getCanonical()?></p>
                            <select name="<?=$i->getAlias()?>" id="">
                                <?$opt = explode(';', $i->getParams())?>
                                <?foreach($opt as $j){?>

                                    <?if($data['product'][$i->getAlias()] == $j){?>
                                        <option selected value="<?=$j?>"><?=$j?></option>
                                    <?}else{?>
                                        <option value="<?=$j?>"><?=$j?></option>
                                    <?}?>
                                <?}?>
                            </select>
                        <?}?>

                        <?if($i->getType() == 9){?>
                            <p><?=$i->getCanonical()?></p>
                            <input value="<?=substr($data['product'][$i->getAlias()], 0, 10)?>" type="date" name="<?=$i->getAlias()?>">
                        <?}?>

                        <?if($i->getType() == 10){?>
                            <p><?=$i->getCanonical()?></p>
                            <input value="<?=substr($data['product'][$i->getAlias()], 0, 10)?>T<?=substr($data['product'][$i->getAlias()], 11, 5)?>" type="datetime-local" name="<?=$i->getAlias()?>">
                        <?}?>
                    <?}?>
                <?}?>
            <?}?>
            <button data-event="material_edit_save" id="<?=$data['category']->getId().'_'.$data['product']['id']?>" class="btn" type="button">СОХРАНИТЬ</button>
        </form>
    </div>
</div>


