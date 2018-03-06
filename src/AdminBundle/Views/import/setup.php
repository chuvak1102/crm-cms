<h1>Файлы </h1>

<div class="cont">
    <form action="/admin/import/load/<?=$data['set']->getId()?>" id="import" enctype="multipart/form-data" method="post">
        <?if($data['set']->getSource() == 'local'){?>
            <p>Выберите файл</p>
            <table class="std_table">
                <tr>
                    <td><input type="file" name="file"></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn" data-event="import_load_file" id="<?=$data['set']->getId()?>">ПРОДОЛЖИТЬ</button></td>
                </tr>
            </table>
        <?}else{?>
            <p>Ссылка на файл</p>
            <table class="std_table">
                <tr>
                    <td><input type="text" name="url"></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn" data-event="import_load_url" id="<?=$data['set']->getId()?>">ПРОДОЛЖИТЬ</button></td>
                </tr>
            </table>
        <?}?>
    </form>
</div>







































