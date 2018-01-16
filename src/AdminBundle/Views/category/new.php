<div class="template">
    <div class="breadcrumbs">
        <a href="/admin/index/index/">Домой</a>
        <span>Новая категория</span>
    </div>
    <h1 class="page">Создать категорию в: <span><?= $data['name']?></span></h1>
    <div class="actions">
        <a class="btn" href="/admin/category/index/">Отмена</a>
    </div>
    <div class="categories">
        <div class="form">
            <form action="/admin/category/save/<?=$data['to']?>" method="post">
                <input type="text" name="name" placeholder="Название категории">
                <input type="text" name="alias" placeholder="Алиас категории">
                <input type="text" name="image" placeholder="Изображение категории">
                <textarea name="description" id="" cols="30" rows="10" placeholder="Описание категории"></textarea>
                <button class="btn" type="submit">Сохранить</button>
            </form>
        </div>
    </div>
    <pre>
</pre>
</div>

