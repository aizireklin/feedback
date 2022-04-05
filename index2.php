<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Форма обратной связи</title>
</head>
<body>
    <header>
        <div class="header__img">
            <img src="http://www.amfr.ru/upload/iblock/5c8/MosPolitekh_logo_sportivnyy-klub.png" alt="mospolytech">
        </div>
        <h3>Feedback form</h3>
    </header>
    <main>
        <textarea name="" id="" cols="30" rows="10"><?
            var_dump(get_headers('https://httpbin.org/post'));
        ?></textarea>
    </main>
    <footer>
        Задание для самостоятельной работы
    </footer>
</body>
</html>