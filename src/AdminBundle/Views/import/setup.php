<h1>IMPORT setup</h1>

<div class="cont">
    <form action="" enctype="multipart/form-data">
        <?if($data['set']->getSource() == 'local'){?>
            <p>Выберите файл</p>
            <table class="std_table">
                <tr>
                    <td><input type="file" name="file"></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn" data-event="import_setup">ПРОДОЛЖИТЬ</button></td>
                </tr>
            </table>
        <?}else{?>
            <p>Ссылка на файл</p>
            <table class="std_table">
                <tr>
                    <td><input type="text" name="url"></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn" data-event="import_setup">ПРОДОЛЖИТЬ</button></td>
                </tr>
            </table>
        <?}?>
    </form>
</div>

<?dump($data)?>





































