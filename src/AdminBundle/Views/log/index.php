<h1>DEBUG</h1>

<?dump($data)?>

<div class="template">
    <div class="breadcrumbs">
        <a href="/admin/index/index/">Домой</a>
        <span>Логи</span>
    </div>
    <h1 class="page">Логи</h1>
    <div class="actions">
        <a class="btn" href="/admin/log/remove/">Очистить</a>
    </div>

    <div class="categories">
        <div class="form">
            <ul class="log">
                <?if(is_array($data['log'])){?>
                    <?foreach($data['log'] as $i){?>
                        <?$message = 'User: '.$i['user'].' Message: '.$i['message'].' Date: '.$i['date'].' IP: '.$i['ip']?>

                        <?if($i['type'] == 'error'){?>
                            <li class="error"><?=$message?></li>
                        <?}else{?>
                            <li><?=$message?></li>
                        <?}?>
                    <?}?>
                <?}?>
            </ul>
        </div>
    </div>
</div>

