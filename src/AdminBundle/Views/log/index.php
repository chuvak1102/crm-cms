<?use AdminBundle\Entity\Log;?>
<?/* @var $i Log */?>

<h1>#Лог приложения</h1>

<div class="cont">
    <div class="log">
        <table>
            <?if(!empty($data['log']) && is_array($data['log'])){?>
                <tr>
                    <td>ID</td>
                    <td>Юзер</td>
                    <td>Текст</td>
                    <td>Создано</td>
                    <td>IP</td>
                </tr>
                <?foreach($data['log'] as $i){?>
                    <tr>
                        <td><?=$i->getId()?></td>
                        <td><?=$i->getUser()?></td>
                        <td><?=$i->getMessage()?></td>
                        <td><?=$i->getDate()->format('d-m-Y H:i')?></td>
                        <td><?=$i->getIp()?></td>
                    </tr>
                <?}?>
            <?}?>
        </table>
    </div>
</div>
