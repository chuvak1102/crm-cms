<h1>#Словари</h1>

<div class="cont">
    <form action="">
        <table class="std_table">
            <tr>
                <td>Название</td>
                <td>Алиас(авто)</td>
                <td>Тип</td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td><input name="name" type="text" placeholder="Новый словарь" value="Новый словарь"></td>
                <td><input name="alias" type="text" placeholder="" value=""></td>
                <td>
                    <select name="type">
                        <?foreach($data['fields'] as $i){?>
                            <option value="<?=$i->getId()?>"><?=$i->getName()?></option>
                        <?}?>
                    </select>
                </td>
                <td></td>
                <td><button type="button" class="btn" data-event="d_new">Добавить</button></td>
            </tr>
        </table>
    </form>
</div>

<?dump($data)?>

