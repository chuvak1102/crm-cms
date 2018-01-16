<?use Framework\Core\App;?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>

    <script src="https://use.fontawesome.com/bea432bde8.js"></script>
    <script src="/src/AdminBundle/Views/public/js/jquery.js"></script>

    <link rel="stylesheet" href="/src/AdminBundle/Views/public/css/styles.css">
<!--    <link rel="stylesheet" href="/src/AdminBundle/Views/public/css/framework.css">-->
</head>
<body>
<div class="wrapper">
    <div class="menu" id="menu">
        <a class="active" id="home_page" href="/admin" title="Главная"></a>
        <div id="category" title="Структура"></div>
        <div id="messages_page" title="Сообщения"></div>
        <div id="calendar_page" title="Календарь"></div>
        <div id="notepad_page" title="Блокнот"></div>
        <div id="documents_page" title="Прайсы"></div>
        <div id="search_page" title="Поиск"></div>
        <div id="important_page" title="Важно"></div>
        <div id="recycle_page" title="Корзина"></div>
        <div id="delivery_page" title="Заказы"></div>
        <div id="workers_page" title="Персонал"></div>
        <div id="card_page" title="Карточка сотрудника"></div>
        <div id="settings_page" title="Настройки системы"></div>
    </div>
    <div class="background" id="background">
        <div class="content" id="content">
            <?include App::$template?>
        </div>
    </div>
</div>

<script src="/src/AdminBundle/Views/public/js/admin.js"></script>
</body>
</html>
