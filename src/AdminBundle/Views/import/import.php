<h1>Импорт данных в <?=$data['set']->getName()?></h1>

<div class="cont">
    <table class="std_table import">
        <tr>
            <td>Название тега</td>
            <td>Значение</td>
            <td>Название поля в базе</td>
            <td>Тег для записи</td>
        </tr>
    </table>
    <form action="" method="post" name="import">
        <table class="std_table import">
            <tr>
                <td>
                    <table>
                        <?foreach($data['tags'] as $k => $v){?>
                            <tr>
                                <td><button type="button" class="btn" data-event="select_tag" id="<?=$k?>"><?=$k?></button></td>
                                <td><?=$v?></td>
                            </tr>
                        <?}?>
                    </table>
                </td>
                <td>
                    <table>
                        <?foreach($data['columns'] as $i){?>
                            <tr>
                                <td><button type="button" class="btn" data-event="accept_tag" id="<?=$i?>"><?=$i?></button></td>
                                <td> >>> </td>
                                <td><input type="text" name="<?=$i?>"></td>
                            </tr>
                        <?}?>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<div class="cont">
    <table class="std_table">
        <tr>
            <td><button type="button" class="btn">НАЧАТЬ ИМПОРТ</button></td>
        </tr>
    </table>
</div>

<?dump($data)?>