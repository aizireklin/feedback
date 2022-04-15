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
        <form action="https://httpbin.org/post" method="POST">
            <p><input type="submit" value="Написать письмо"></p>
            <div>
                <label for="username">Имя пользователя</label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <label for="email">Электронная почта</label>
                <input type="text" id="email" name="email">
            </div>
            <div>
                <select name="type_appeal">
                    <option value="claim">Жалоба</option>
                    <option value="offer">Предложение</option>
                    <option value="gratitude">Благодарность</option>
                </select>
            </div>
            <div>
                <textarea name="text" cols="30" rows="10"></textarea>
            </div>
            <div>
                <p>Варианты ответа</p>
                <div>
                    <input type="checkbox" name="checkbox_sms" id="checkbox_sms" value="смс">
                    <label for="checkbox_sms">СМС</label>
                </div>
                <div>
                    <input type="checkbox" name="checkbox_email" id="checkbox_email" value="email">
                    <label for="checkbox_email">Email</label>
                </div>
            </div>
            <button type="submit">Отправить</button>
        </form>
        <a href="index2.php">
            Посмотреть форму
        </a>
    </main>
    <footer>
        Задание для самостоятельной работы
    </footer>
</body>
</html>
