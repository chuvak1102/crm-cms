<h1>#Импорт успешно завершен!</h1>
<div class="cont">
    <table class="std_table">
        <tr>
            <td>Добавлено записей</td>
            <td>Удалено записей</td>
            <td>Обновлено записей</td>
            <td>Время выполнения</td>
        </tr>
        <tr>
            <td><?= $data['inserts'] ?></td>
            <td><?= $data['removed'] ?></td>
            <td><?= $data['updated'] ?></td>
            <td><?= $data['execution_time'] ?></td>
        </tr>
    </table>
</div>

<div class="cont">
    <table class="std_table">
        <tr>
            <td><button type="button" class="btn" data-event="import_index">OK</button></td>
        </tr>
    </table>
</div>