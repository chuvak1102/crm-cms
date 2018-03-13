<h1>#Источник данных для: <?=$data['set']->getName()?></h1>

<div class="cont">
    <form action="/admin/import/load/<?=$data['set']->getId()?>" id="import" enctype="multipart/form-data" method="post">

        <p>Файл</p>
        <table class="std_table">
            <tr>
                <td><input type="file" name="file"></td>
            </tr>
        </table>

        <p>Ссылка</p>
        <table class="std_table">
            <tr>
                <td><input type="text" name="url"></td>
            </tr>
        </table>

        <table class="std_table">
            <tr>
                <td><button type="button" class="btn" data-event="import_load_source" id="<?=$data['set']->getId()?>">Сохранить / Изменить</button></td>
            </tr>
        </table>

        <?if(!empty($data['set']->getLocation())){?>
            <table class="std_table">
                <tr>
                    <td><button type="button" class="btn" data-event="import_setup" id="<?=$data['set']->getId()?>">Использовать существующий</button></td>
                </tr>
            </table>
        <?}?>
    </form>
</div>

<?dump($data)?>






































