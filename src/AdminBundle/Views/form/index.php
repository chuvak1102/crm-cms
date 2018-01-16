<div class="template">
    <div class="breadcrumbs">
        <a href="/admin/index/index/">Домой</a>
        <span>Формы</span>
    </div>
    <h1 class="page">Формы</h1>
    <div class="actions">
        <a class="btn" href="/admin/form/new/">Создать</a>
    </div>

    <div class="categories">
        <ul>
            <?if(is_array($data['forms'])){?>
                <?foreach($data['forms'] as $i){?>
                    <li>
                        <a href=""><?=$i['name']?></a>
                        <div class="control">
                            <a class="btn btn" href="/admin/form/show/<?=$i['id']?>">Показать</a>
                            <a class="btn btn" href="/admin/form/edit/<?=$i['id']?>">Редактировать</a>
                            <a class="btn red" href="/admin/form/delete/<?=$i['id']?>">X</a>
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