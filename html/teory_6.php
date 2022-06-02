<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Stadydara Лекции</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/teory1.css">
    <link rel="stylesheet" href="../css/footer.css">

</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="header_cont">
                <a class="logo_link" href="index.php"><img class="logo" src="../images/sd.svg" alt="stadydara" height="70" width="150"></a>
                <nav class="header-menu menu">
                    <ul class="menu-list">
                        <li><a class="menu-link" href="index.php">ГЛАВНАЯ</a></li>
                        <li><a class="menu-link" href="about.php">О ПРОЕКТЕ</a></li>
                        <li><a class="menu-link" href="teory_2.php">ЛЕКЦИИ</a></li>
                        <li><a class="menu-link" href="test_2.php">ТЕСТЫ</a></li>
                        <li><a class="menu-link" href="calc.php">КАЛЬКУЛЯТОР</a></li>
                        <li><a class="menu-link" href="profile.php">ПРОФИЛЬ</a></li>
                        <li><a href="../html/exit.php" class="menu-link">ВЫХОД</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="content">
            <h1 class="teory">Лекции</h1>
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
                                <?php echo "<a href='" . $result2['path'] . "' style='text-decoration:none;'><button class='tablinks'>" . $result2['teory_name'] . "</button></a>"; ?>
                            <?php }

                            // Узнаем, были ли посещения за сегодня
                            $resu = mysqli_query($connect, "SELECT `views` FROM `teorya`") or die("Проблема при подключении к БД");

                            // Если сегодня еще не было посещений
                            if (mysqli_num_rows($resu)) {
                                // Заносим в базу дату посещения и устанавливаем кол-во просмотров и уник. посещений в значение 1
                                mysqli_query($connect, "UPDATE `teorya` SET `views`=`views`+1 WHERE `id_teory`='5'");
                            }

                            ?>
                        </div>
                    </div>
                    <div id="1" class="tabcontent">
                        <h2>5. IP адрес</h2>
                        <p>IP-адрес — уникальный сетевой адрес узла в компьютерной сети, построенной на основе стека протоколов TCP/IP (TCP/IP – это набор интернет-протоколов, о котором мы поговорим в дальнейших статьях). IP-адрес представляет собой серию из 32 двоичных бит (единиц и нулей). Так как человек невосприимчив к большому однородному ряду чисел, такому как этот 11100010101000100010101110011110 (здесь, к слову, 32 бита информации, так как 32 числа в двоичной системе), было решено разделить ряд на четыре 8-битных байта и получилась следующая последовательность: 11100010.10100010.00101011.10011110. Это не сильно облегчило жизнь и было решение перевести данную последовательность в, привычную нам, последовательность из четырёх чисел в десятичной системе, то есть 226.162.43.158. 4 разряда также называются октетами. Данный IP адрес определяется протоколом IPv4. По такой схеме адресации можно создать более 4 миллиардов IP-адресов.</p>
                        <p>Максимальным возможным числом в любом октете будет 255 (так как в двоичной системе это 8 единиц), а минимальным – 0.</p>
                        <p>Далее давайте разберёмся с тем, что называется классом IP (именно в этом моменте в лабораторной работе была неточность).</p>
                        <p>IP-адреса делятся на 5 классов (A, B, C, D, E). A, B и C — это классы коммерческой адресации. D – для многоадресных рассылок, а класс E – для экспериментов.</p>
                        <img src="../images/ip.PNG" alt="full" height="200px">
                        <p>Теперь о «цвете» IP. IP бывают белые и серые (или публичные и частные). Публичным IP адресом называется IP адрес, который используется для выхода в Интернет. Адреса, используемые в локальных сетях, относят к частным. Частные IP не маршрутизируются в Интернете.</p>
                        <p>Публичные адреса назначаются публичным веб-серверам для того, чтобы человек смог попасть на этот сервер, вне зависимости от его местоположения, то есть через Интернет. Например, игровые сервера являются публичными, как и сервера Хабра и многих других веб-ресурсов. Большое отличие частных и публичных IP адресов заключается в том, что используя частный IP адрес мы можем назначить компьютеру любой номер (главное, чтобы не было совпадающих номеров), а с публичными адресами всё не так просто. Выдача публичных адресов контролируется различными организациями</p>
                        <img src="../images/obcjags540lf9awybau8r70fv-e.png" alt="full" height="150px">
                        <p>Из таблицы частных IP адресов вы можете увидеть третий столбец, в котором написана маска подсети. Маска подсети — битовая маска, определяющая, какая часть IP-адреса узла сети относится к адресу сети, а какая — к адресу самого узла в этой сети.</p>
                        <p>У всех IP адресов есть две части сеть и узел.</p>
                        <p>Сеть – это та часть IP, которая не меняется во всей сети и все адреса устройств начинаются именно с номера сети.</p>
                        <p>Узел – это изменяющаяся часть IP. Каждое устройство имеет свой уникальный адрес в сети, он называется узлом.</p>
                        <p>Маску принято записывать двумя способами: префиксным и десятичным. Например, маска частной подсети A выглядит в десятичной записи как 255.0.0.0, но не всегда удобно пользоваться десятичной записью при составлении схемы сети. Легче записать маску как префикс, то есть /8.</p>
                        <img src="../images/mask.png" alt="full" height="600px">
                        <br>Высчитаем сколько устройств (в IP адресах — узлов) может быть в сети, где у одного компьютера адрес 172.16.13.98 /24.</br>172.16.13.0 – адрес сети<br>172.16.13.1 – адрес первого устройства в сети<br>172.16.13.254 – адрес последнего устройства в сети<br>172.16.13.255 – широковещательный IP адрес<br>172.16.14.0 – адрес следующей сети</p>
                        <p>Итого 254 устройства в сети</p>
                        <p>Если остались какие-то вопросы, рекомендую к просмотру данный видеоролик:</p>
                        <iframe width="600" height="355" src="https://www.youtube.com/embed/dgzMVnvGSDc" allowfullscreen></iframe>
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
</body>
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