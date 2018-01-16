<div class="template">
    <div class="breadcrumbs">
        <a href="/admin/index/index/">Домой</a>
        <span>Новый продукт</span>
    </div>
    <h1 class="page">Создать продукт в категории: <span><?=$data['category']->getName()?></span></h1>
    <div class="actions">
        <a class="btn" href="/admin/category/">Отмена</a>
    </div>
    <div class="categories">
        <?if(!empty($data['fields'])){?>
            <div class="form">
                <form action="/admin/product/save/<?=$data['category']->getId()?>" method="post" enctype="multipart/form-data">
                    <?foreach($data['fields'] as $i){?>
                        <?if($i->getType() == 1){?>
                            <p class="pt-10 pb-10 fw-b"><?=$i->getCanonical()?></p>
                        <input type="text" name="<?=$i->getAlias()?>">
                        <?}?>

                        <?if($i->getType() == 2){?>
                            <p class="pt-10 pb-10 fw-b"><?=$i->getCanonical()?></p>
                            <textarea name="<?=$i->getAlias()?>" cols="50" rows="50" placeholder="<?=$i->getCanonical()?>"></textarea>
                            <script>
                                CKEDITOR.replace("<?=$i->getAlias()?>");
                            </script>
                        <?}?>

                        <?if($i->getType() == 3){?>
                            <p class="pt-10 pb-10 fw-b"><?=$i->getCanonical()?></p>
                        <input type="file" name="<?=$i->getAlias()?>">
                        <?}?>

                        <?if($i->getType() == 5){?>
                            <p class="pt-10 pb-10 fw-b"><?=$i->getCanonical()?></p>
                            <select name="<?=$i->getAlias()?>" id="">
                                <?$opt = explode(';', $i->getParams())?>
                                <?foreach($opt as $j){?>
                                    <option value="<?= $j ?>"><?=$j?></option>
                                <?}?>
                            </select>
                        <?}?>

                        <?if($i->getType() == 8){?>
                            <p class="pt-10 pb-10 fw-b"><?=$i->getCanonical()?></p>
                        <input type="date" name="<?=$i->getAlias()?>">
                        <?}?>

                        <?if($i->getType() == 9){?>
                            <p class="pt-10 pb-10 fw-b"><?=$i->getCanonical()?></p>
                        <input type="datetime-local" name="<?=$i->getAlias()?>">
                        <?}?>
                    <?}?>
                    <div class="h-20"></div>
                    <button class="btn" type="submit">Сохранить</button>
                </form>
            </div>
        <?}else{?>
            <div class="form">
                <h2>Отсутствует конфигурация полей</h2>
            </div>
        <?}?>

    </div>
</div>

