<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Stadydara Тесты</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/teory1.css">
    <link rel="stylesheet" href="../css/test.css">
    <link rel="stylesheet" href="../css/footer.css">

</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="header_cont">
                <a class="logo_link" href="index_.php"><img class="logo" src="../images/sd.svg" alt="stadydara" height="70" width="150"></a>
                <nav class="header-menu menu">
                    <ul class="menu-list">
                    <li><a class="menu-link" href="index_.php">ГЛАВНАЯ</a></li>
                        <li><a class="menu-link" href="about_.php">О ПРОЕКТЕ</a></li>
                        <li><a class="menu-link" href="teory_2_.php">ЛЕКЦИИ</a></li>
                        <li><a class="menu-link" href="test_2_.php">ТЕСТЫ</a></li>
                        <li><a class="menu-link" href="calc_.php">КАЛЬКУЛЯТОР</a></li>
                        <li><a href="../html/exit.php" class="menu-link">ВЫХОД</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="content">
            <h1 class="teory">Тесты</h1>
            <div class="teory-items">
                <div class="teory-item">
                    <div class="dropdown">
                        <div id="myDropdown" class="dropdown-content tab">
                            <input type="text" placeholder="Поиск" id="myInput" onkeyup="filterFunction()">
                            <form action="#"><button class="tablinks">1. Основные определения</button></form>
                            <form action="#"><button class="tablinks">2. История КС</button></form>
                            <form action="#"><button class="tablinks">3. Модель OSI</button></form>
                            <form action="#"><button class="tablinks">4. Уровни модели OSI</button></form>
                            <form action="#"><button class="tablinks">5. Классификация КС</button></form>
                            <form action="#"><button class="tablinks">6. Топология КС</button></form>
                            <form action="#"><button class="tablinks">7. Виды сетевых адресов</button></form>
                        </div>
                    </div>
                    <div class="tabs">
                        <div class="tabcontent">
                            <h3>1. Основные определения</h3>
                            <div class="quiz">
                                <p>Вопрос 1: Что такое компьютерная сеть?Напишите определение <input type="text" id="z_1"></p>
                                <p>Вопрос 2: Передача электронной информации с помощью физически движущихся носителей <input type="text" id="z_2"></p>
                                <p>Вопрос 3: Перечислите через запятую 3 глобальные сети<input type="text" id="z_3"></p>
                                <p>Вопрос 4: Сколько существует поколений развития компбютерных технологий?<input type="text" id="z_4"></p>
                                <p>Вопрос 5: Расшифруйте аббревиатуру ЛВС<input type="text" id="z_5"></p>
                                <p>Вопрос 6: Расшифруйте аббревиатуру ГВС<input type="text" id="z_6"></p>
                                <p>Вопрос 7: Год начала создание ARPAnet<input type="text" id="z_7"></p>
                                <p>Вопрос 8: Год, в который TCP/IP стал стандартным протоколом интернета<input type="text" id="z_8"></p>

                            </div>
                            <button onclick="proverit();">ПРОВЕРИТЬ</button>
                            <div id="rezultat"></div>
                        </div>
                    </div>
                </div>
                <footer>
                    <div class="f-main">
                        <div class="f-text">
                            <p>&copy; StadyDara</p>
                            <div class="links">
                                <p><a href="https://vk.com/deniellanoilton"><img src="../images/vk.png" alt="vk" width="30" height="30"></a></p>
                                <p><a href="https://wa.me/79533730266"><img src="../images/whatsapp.png" alt="w" width="30" height="30"></a></p>
                                <p><a href="https://t.me/mifidara"><img src="../images/telegram.png" alt="t" width="30" height="30"></a></p>
                                <p><a href="mailto:kasheckinadd@gmail.com"><img src="../images/email.png" alt="e" width="30" height="30"></a></p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

    </div>
    </div>
</body>
<script src="../js/quiz.js"></script>
<script>
    function filterFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("button");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
</script>

</html>