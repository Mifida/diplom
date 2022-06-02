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
                            <?php
                            require_once 'dbconnect.php';
                            mysqli_query($connect, "SET NAMES UTF8");
                            $sql = mysqli_query($connect, "SELECT * FROM teorya");
                            while ($result2 = mysqli_fetch_array($sql)) { ?>
                                <?php echo "<a href='" . $result2['path4'] . "' style='text-decoration:none;'><button class='tablinks'>" . $result2['teory_name'] . "</button></a>"; ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="tabs">
                        <div class="tabcontent">
                            <h3>1. Классификация компьютерных сетей</h3>
                            <div class="quiz">
                                <p>Вопрос 1: Какая сеть объединяет компьютеры на небольшой территории?<input type="text" id="2_1"></p>
                                <p>Вопрос 2: Какая сеть объединяет компьютеры, рассредоточенные на тысячи километров?<input type="text" id="2_2"></p>
                                <p>Вопрос 3: Как называется сеть, предназначенная для обслуживания территории крупного города?<input type="text" id="2_3"></p>
                                <p>Вопрос 4: Какое количество пунктов входит в классификацию сетей по масштабу подразделений?<input type="text" id="2_4"></p>
                                <p>Вопрос 5: Напишите слово, означающее сети общего доступа<input type="text" id="2_5"></p>
                                <p>Вопрос 6: Как называется сеть, в которой все компьютеры равноправны?<input type="text" id="2_6"></p>
                                <p>Вопрос 7: Напишите название сети с выделенным сервером<input type="text" id="2_7"></p>
                                <p>Вопрос 8: Напишите пропущенное число: низкоскоростные сети - до _____ Мбит/с<input type="text" id="2_8"></p>
                                <p>Вопрос 9: Напишите пропущенное число: среднескоростные сети- до _____ Мбит/с<input type="text" id="2_9"></p>

                            </div>
                            <button onclick="prov();">ПРОВЕРИТЬ</button>
                            <div id="rezultat"></div>
                            <?php
                            // Узнаем, были ли посещения за сегодня
                            $resu = mysqli_query($connect, "SELECT `views2` FROM `teorya`") or die("Проблема при подключении к БД");

                            // Если сегодня еще не было посещений
                            if (mysqli_num_rows($resu)) {
                                // Заносим в базу дату посещения и устанавливаем кол-во просмотров и уник. посещений в значение 1
                                mysqli_query($connect, "UPDATE `teorya` SET `views2`=`views2`+1 WHERE `id_teory`='1'");
                            }
                            ?>
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
<script src="../js/quiz_2.js"></script>
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