<?use AdminBundle\Services\FieldType as Type;?>
<?use AdminBundle\Entity\CategoryFields;?>
<?use AdminBundle\Entity\DictionaryData;?>
<?use AdminBundle\Entity\Category;?>
<?/* @var $j DictionaryData */?>
<?/* @var $i CategoryFields */?>
<?/* @var $category Category */?>
<?$category = $data['category']?>

<h1>#Добавить материал в <?=$category->getName()?></h1>

<div class="cont">
    <div class="mat">
        <?if(!empty($data['fields'])){?>
            <div class="form">
                <form action="/admin/product/save/<?=$category->getId()?>" method="post" enctype="multipart/form-data">
                    <?foreach($data['fields'] as $i){?>
                        <?if($i->getAlias() == 'category'){?>

                        <?}else{?>
                            <?if($i->getFieldType() == Type::TEXT){?>
                                <p><?=$i->getCanonical()?></p>
                                <input type="text" name="<?=$i->getAlias()?>">
                            <?}?>
                            <?if($i->getFieldType() == Type::TEXT_AREA){?>
                                <p><?=$i->getCanonical()?></p>
                                <textarea name="<?=$i->getAlias()?>" cols="50" rows="50" placeholder="<?=$i->getCanonical()?>"></textarea>
                            <?}?>
                            <?if($i->getFieldType() == Type::FILE){?>
                                <p><?=$i->getCanonical()?></p>
                                <input type="file" name="<?=$i->getAlias()?>">
                            <?}?>
                            <?if($i->getFieldType() == Type::SELECT){?>
                                <p><?=$i->getCanonical()?></p>
                                <select name="<?=$i->getAlias()?>" id="">
                                    <?$opt = explode(';', $i->getParams())?>
                                    <?foreach($opt as $j){?>
                                        <option value="<?= $j ?>"><?=$j?></option>
                                    <?}?>
                                </select>
                            <?}?>
                            <?if($i->getFieldType() == Type::DATE){?>
                                <p><?=$i->getCanonical()?></p>
                                <input type="date" name="<?=$i->getAlias()?>">
                            <?}?>
                            <?if($i->getFieldType() == Type::DATETIME){?>
                                <p><?=$i->getCanonical()?></p>
                                <input type="datetime-local" name="<?=$i->getAlias()?>">
                            <?}?>

                            <?if($i->getFieldType() == Type::DICTIONARY){?>
                                <p><?=$i->getCanonical()?></p>
                                <select name="<?=$i->getAlias()?>">
                                    <?$fields = $data['dictionary'][$i->getParams()]?>
                                    <?foreach($fields as $j){?>
                                        <option value="<?=$j->getName()?>"><?=$j->getName()?></option>
                                    <?}?>
                                </select>
                            <?}?>
                        <?}?>
                    <?}?>
                    <button data-event="material_save" class="btn" type="button" id="<?=$category->getId()?>">Сохранить</button>
                </form>
            </div>
        <?}else{?>
            <div class="form">
                <h1>Поля не настроены</h1>
            </div>
        <?}?>
    </div>
</div>