<?use AdminBundle\Services\FieldType as Type;?>
<?use AdminBundle\Entity\CategoryFields;?>
<?use AdminBundle\Entity\DictionaryData;?>
<?use AdminBundle\Entity\Category;?>
<?/* @var $j DictionaryData */?>
<?/* @var $i CategoryFields */?>
<?/* @var $category Category */?>
<?$category = $data['category']?>

<h1>#Редактировать материал: <?=$category->getName()?></h1>

<div class="cont">
    <div class="mat">
        <form action="/admin/product/update/<?=$category->getId().'_'.$data['product']['id']?>" method="post" enctype="multipart/form-data">
            <?if(!empty($data['fields'])){?>
                <?foreach($data['fields'] as $i){?>
                    <?if($i->getAlias() != 'category'){?>
                        <?if($i->getFieldType() == Type::TEXT){?>
                            <p><?=$i->getCanonical()?></p>
                            <input type="text" value="<?=$data['product'][$i->getAlias()]?>" name="<?=$i->getAlias()?>">
                        <?}?>

                        <?if($i->getFieldType() == Type::TEXT_AREA){?>
                            <p><?=$i->getCanonical()?></p>
                            <textarea name="<?=$i->getAlias()?>"><?=$data['product'][$i->getAlias()]?></textarea>
                        <?}?>

                        <?if($i->getFieldType() == Type::FILE){?>
                            <p><?=$i->getCanonical()?></p>
                            <input type="file" value="<?=$data['product'][$i->getAlias()]?>" name="<?=$i->getAlias()?>">
                        <?}?>

                        <?if($i->getFieldType() == Type::SELECT){?>
                            <p><?=$i->getCanonical()?></p>
                            <select name="<?=$i->getAlias()?>" id="">
                                <?$opt = explode(';', $i->getParams())?>
                                <?foreach($opt as $j){?>

                                    <?if($data['product'][$i->getAlias()] == $j){?>
                                        <option selected value="<?$j?>"><?=$j?></option>
                                    <?}else{?>
                                        <option value="<?=$j?>"><?=$j?></option>
                                    <?}?>
                                <?}?>
                            </select>
                        <?}?>

                        <?if($i->getFieldType() == Type::DATE){?>
                            <p><?=$i->getCanonical()?></p>
                            <input value="<?=substr($data['product'][$i->getAlias()], 0, 10)?>" type="date" name="<?=$i->getAlias()?>">
                        <?}?>

                        <?if($i->getFieldType() == Type::DATETIME){?>
                            <p><?=$i->getCanonical()?></p>
                            <input value="<?=substr($data['product'][$i->getAlias()], 0, 10)?>T<?=substr($data['product'][$i->getAlias()], 11, 5)?>" type="datetime-local" name="<?=$i->getAlias()?>">
                        <?}?>

                        <?if($i->getFieldType() == Type::DICTIONARY){?>
                            <p><?=$i->getCanonical()?></p>
                            <select name="<?=$i->getAlias()?>">
                                <?$fields = $data['dictionary'][$i->getParams()]?>

                                <?foreach($fields as $j){?>
                                    <?if($j->getName() == $data['product'][$i->getAlias()]){?>
                                        <option value="<?=$j->getName()?>" selected><?=$j->getName()?></option>
                                    <?}else{?>
                                        <option value="<?=$j->getName()?>" ><?=$j->getName()?></option>
                                    <?}?>
                                <?}?>
                            </select>
                        <?}?>
                    <?}?>
                <?}?>
            <?}?>
            <button data-event="material_edit_save" id="<?=$category->getId().'_'.$data['product']['id']?>" class="btn" type="button">СОХРАНИТЬ</button>
        </form>
    </div>
</div>
