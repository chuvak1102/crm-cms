<div class="template">
    <div class="breadcrumbs">
        <a href="/admin/index/index/">Домой</a>
        <span>Редактирование продукта</span>
    </div>
    <h1 class="page">Редактировать продукт в категории: <span><?=$data['category']->getName()?></span></h1>
    <div class="actions">
        <a class="btn" href="/admin/product/">Отмена</a>
    </div>
    <div class="categories">
        <div class="form">
            <form action="/admin/product/update/<?=$data['category']->getId().'_'.$data['product']['id']?>" method="post" enctype="multipart/form-data">
                <?if(!empty($data['fields'])){?>
                    <?foreach($data['fields'] as $i){?>

                        <?if($i->getType() == 1){?>
                            <p class="pt-10 pb-10 fw-b"><?=$i->getCanonical()?></p>
                            <input type="text" value="<?=$data['product'][$i->getAlias()]?>" name="<?=$i->getAlias()?>">
                        <?}?>

                        <?if($i->getType() == 2){?>
                            <p class="pt-10 pb-10 fw-b"><?=$i->getCanonical()?></p>
                            <textarea name="<?=$i->getAlias()?>"><?=$data['product'][$i->getAlias()]?></textarea>
                        <?}?>

                        <?if($i->getType() == 3){?>
                            <p class="pt-10 pb-10 fw-b"><?=$i->getCanonical()?></p>
                            <input type="file" value="<?=$data['product'][$i->getAlias()]?>" name="<?=$i->getAlias()?>">
                        <?}?>

                        <?if($i->getType() == 5){?>
                            <p class="pt-10 pb-10 fw-b"><?=$i->getCanonical()?></p>
                            <select name="<?=$i->getAlias()?>" id="">
                                <?$opt = explode(';', $i->getParams())?>
                                <?foreach($opt as $j){?>
                                    <option value="<?=$data['product'][$i->getAlias()]?>"><?=$j?></option>
                                <?}?>
                            </select>
                        <?}?>

                        <?if($i->getType() == 8){?>
                            <p class="pt-10 pb-10 fw-b"><?=$i->getCanonical()?></p>
                            <input value="<?=substr($data['product'][$i->getAlias()], 0, 10)?>" type="date" name="<?=$i->getAlias()?>">
                        <?}?>

                        <?if($i->getType() == 9){?>
                            <p class="pt-10 pb-10 fw-b"><?=$i->getCanonical()?></p>
                            <input value="<?=substr($data['product'][$i->getAlias()], 0, 10)?>T<?=substr($data['product'][$i->getAlias()], 11, 5)?>" type="datetime-local" name="<?=$i->getAlias()?>">
                        <?}?>
                    <?}?>
                <?}?>
                <div class="h-20"></div>
                <button class="btn" type="submit">Сохранить</button>
            </form>
        </div>
    </div>
</div>

