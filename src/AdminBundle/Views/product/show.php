<div class="template">
    <div class="breadcrumbs">
        <a href="/admin/index/index/">Домой</a>
        <span>Прподукты</span>
    </div>
    <h1 class="page">Продукты в категории: <span><?= $data['category']->getName()?></span></h1>
    <div class="actions">
        <a class="btn" href="/admin/product/new/<?=$data['category']->getId()?>">Создать</a>
    </div>
    <div class="categories product">
        <ul>
            <?if(is_array($data['products'])){?>
                <?foreach($data['products'] as $i){?>
                    <li>
                        <a href=""><?=$i['name']?>
                            (<span>id <?=$i['id']?></span>)
                        </a>
                        <div class="control">
                            <a class="btn" href="/admin/product/edit/<?=$i['category'].'_'.$i['id']?>">Редактировать</a>
                            <a class="btn red" href="/admin/product/delete/<?=$data['category']->getId().'_'.$i['id']?>">Удалить</a>
                        </div>
                    </li>
                <?}?>
            <?}?>
        </ul>
    </div>
</div>

