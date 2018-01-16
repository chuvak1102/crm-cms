<?use Framework\Core\App;?>
<div class="template">
    <div class="breadcrumbs">
        <a href="/admin/index/index/">Домой</a>
        <span>Продукты</span>
    </div>
    <h1 class="page">Контент:</h1>
    <div class="actions">
        <a class="btn" href="/admin/product/new/">Создать</a>
    </div>
    <div class="categories product">
        <ul>
            <?if(is_array($data['content'])){?>
                <?foreach($data['content'] as $i){?>
                    <li>
                        <a href=""><?=$i->getName()?>(<span>id <?=$i->getId()?></span>)</a>
                        <div class="control">
                            <a class="btn" href="/admin/product/show/<?=$i->getId()?>">Показать продукты</a>
                            <a class="btn red" href="/admin/product/delete/<?=$i->getId()?>">Удалить все</a>
                        </div>
                    </li>
                <?}?>
            <?}?>
        </ul>
    </div>
    <pre>
        <?print_r($data)?>
    </pre>
</div>

