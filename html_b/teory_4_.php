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
                                <?php echo "<a href='" . $result2['path3'] . "' style='text-decoration:none;'><button class='tablinks'>" . $result2['teory_name'] . "</button></a>"; ?>
                            <?php } 
                            
                            // Узнаем, были ли посещения за сегодня
                            $resu = mysqli_query($connect, "SELECT `views` FROM `teorya`") or die("Проблема при подключении к БД");

                            // Если сегодня еще не было посещений
                            if (mysqli_num_rows($resu)) {
                                // Заносим в базу дату посещения и устанавливаем кол-во просмотров и уник. посещений в значение 1
                                mysqli_query($connect, "UPDATE `teorya` SET `views`=`views`+1 WHERE `id_teory`='3'");
                            }
                            
                            ?>
                        </div>
                    </div>
                    <div id="1" class="tabcontent">
                        <h2>3. Модель OSI</h2>
                        <h3>Понятие протокола</h3>
                        <p>Протоколы необходимы, чтобы участники обмена информацией понимали друг друга. В работе компьютерных сетей задействуется множество протоколов, относящихся к разным сетевым уровням. Например, сетевая карта компьютера следует протоколу, который описывает перевод цифровых данных в передающийся по проводам аналоговый сигнал; браузер связывается с сайтом в Интернете при помощи транспортного протокола TCP; сервер и браузер общаются, используя протокол HTTP.</p>
                        <p>Иными словами, протокол — это набор соглашений между разработчиками ПО и аппаратуры. Текст протокола отвечает на вопрос: “Что нужно сделать, чтобы программы и устройства могли взаимодействовать с другими программами/устройствами, поддерживающими протокол”.</p>
                        <h3>OSI</h3>
                        <p>OSI - это аббревиатура от Open Systems Interconnection, что в переводе буквально означает “Взаимодействие открытых систем”. Речь не идет об Open Source, открытые системы в данном случае являются системами, построенными на основе открытых (общедоступных) спецификаций, соответствующих стандартам.</p>
                        <p> OSI разделяет все протоколы на 7 таких уровней:
                            <img src="../images/osi.PNG" alt="osi">
                        <p>Модель OSI не включает описание протоколов; они определяются в отдельных стандартах. Исторически вышло, что на практике модель взаимодействия открытых систем не применяется. Раньше существовали её буквальные реализации, содержащие ровно 7 слоев. Однако со временем их вытеснил менее предписывающий набор протоколов TCP/IP, на котором построен современный Интернет.</p>
                        <h3>Физический уровень</h3>
                        <p>Данный этап устроен сравнительно проще других, ведь кроме единиц и нулей в нем нет других систем измерений, данный уровень не анализирует информацию и именно поэтому является самым нижним из уровней. На нем в основном осуществляется передача информации. Главный параметр загруженности – бит.</p>
                        <p>Основная цель физического уровня представить нуль и единицу в качестве сигналов, передаваемые по среде передачи данных.</p>
                        <p>Например, есть некий канал связи (КС), отправляемое сообщение, отправитель и соответственно получатель. У КС есть свои характеристики:</p>
                        <ul>
                            <li>&bull; Пропускная способность, измеряемая, в бит/c, то есть, сколько данных мы можем передать за единицу времени;</li>
                            <li>&bull; Задержка, сколько времени пройдет, прежде чем сообщение дойдет от отправителя к получателю;</li>
                            <li>&bull; Количество ошибок, если ошибки возникают часто, то протоколы должны обеспечивать исправление ошибок. А если редко, то их можно исправлять на вышестоящих уровнях, на пример на транспортном.</li>
                        </ul>
                        <p>В качестве канала передачи информации используются:</p>
                        <ul>
                            <li>&bull; Кабели: телефонный, коаксиал, витая пара, оптический;</li>
                            <li>&bull; Беспроводные технологии, такие как, радиоволны, инфракрасное излучение;</li>
                            <li>&bull; Спутниковые КС;</li>
                            <li>&bull; Беспроводная оптика или лазеры, применяются редко, из-за низкой скорости и большого количества помех.</li>
                        </ul>
                        <h3>Канальный уровень</h3>
                        <p>Далее располагается канальный уровень модели osi. На этом слое пересылаются не биты, а целые сообщения (кадры, фреймы). Канальный уровень получает с физического поток бит, находит начало и конец сообщения и упаковывает биты в кадр. Также происходит обнаружение и коррекция ошибок. В многоточечных сетевых соединениях, где один и тот же канал связи используется разными компьютерами, канальный уровень дополнительно обеспечивает физическую адресацию и управление доступом к разделяемой среде передачи данных.</p>
                        <p>Часть задач, которые в теории решают протоколы этого уровня, решена в спецификациях Ethernet и Wi-Fi, но есть кое-что еще. Сетевые интерфейсы в многоточечном соединении опознают друг друга по специальным шестибайтовым идентификаторам, mac-адресам. При настройке сети сетевые адаптеры должны знать, кто из них отвечает за какой сетевой адрес (ip-адрес), чтобы отправлять пакеты (блоки данных, передаваемые в пакетном режиме) по назначению. Для автоматического построения таблиц соответствия ip- и mac-адресов используется протокол ARP (Address Resolution Protocol).</p>
                        <p>В соединениях “точка-точка” ARP не нужен. Зато часто применяется протокол PPP (Point to Point Protocol). Кроме структуры кадра и контроля его целостности, он содержит правила для установления соединения, проверки состояния линии связи и аутентификации участников.</p>
                        <h3>Сетевой уровень</h3>
                        <p>Этап напоминает процесс распределения информации. К примеру, все пользователя делиться на группы, а пакеты данных расходятся в соответствии с IP адресами, состоящими из 32 битов. Именно благодаря работе маршрутизаторов на этой инстанции, устраняются все различия сетей. Это процесс так называемой логической маршрутизации.</p>
                        <p>Основная задача состоит в создании составных сетей построенных на основе сетевых технологий разного канального уровня: Ethernet, Wi-Fi, MPLS. Сетевой уровень — это «основа» интернета.</p>
                        <p>Мы можем передавать информацию от одного компьютера к другому через Ethernet и Wi-Fi, тогда зачем нужен еще один уровень? У технологии канального уровня (КУ) есть две проблемы, во-первых, технологии КУ отличаются друг от друга, во-вторых, есть ограничение по масштабированию.</p>
                        <p>Работа ведется не с отдельными адресами, как на канальном уровне, а с блоками адресов. Пакеты, для которых не известен путь следования отбрасываются, а не пересылаются обратно на все порты. И существенное отличие от канального, возможность нескольких соединений между устройствами сетевого уровня и все эти соединения будут активными.</p>
                        <h3>Транспортный уровень</h3>
                        <p>Пакеты, передаваемые по сети при помощи протоколов сетевого уровня, обычно ограничены в размерах. Они могут доставляться не в том порядке, в котором были отправлены, теряться, или, наоборот, дублироваться. Прикладным программам требуется более высокий уровень сервиса, обеспечивающий надежность доставки данных и простоту работы. За это как раз отвечают протоколы транспортного уровня модели osi. Они следят за доставкой пакетов, отправляя и анализируя соответствующие подтверждения, нумеруют пакеты и расставляют их в нужном порядке после получения.</p>
                        <p>Как говорилось выше, протоколы сетевого уровня не гарантируют доставку пакета. Отправленный пакет может потеряться или, наоборот, прийти в двух экземплярах, а пакеты, отправленные раньше других, могут прийти к получателю позже. Содержимое такого пакета обычно называют дейтаграммой (datagram).</p>
                        <p>Одним из самых простых транспортных протоколов является UDP (user datagram protocol). Участники сетевого взаимодействия, работающие на одном компьютере, идентифицируются целыми числами, называемыми номерами портов (или просто портами). Протокол UDP предписывает добавлять к передаваемым через сеть данным номер порта отправителя и получателя, длину дейтаграммы и ее контрольную сумму. Все это “заворачивается” в пакет в соответствии с соглашениями протокола IP. При этом ответственность о подтверждениях, повторных отправках, о делении информации на небольшие порции и о последующем восстановлении исходной последовательности лежит на авторе программ. Поэтому UDP не защищает от возможности потери, дублирования пакета и нарушения порядка получения  обеспечивается только целостность данных внутри одной дейтаграммы.</p>
                        <p>Транспортный уровень гарантирует доставку данных, он использует подтверждение от получателя, если подтверждение не пришло транспортный снова отправляет подтверждение данных. Гарантия следования сообщений.</p>
                        <h3>Сеансовый уровень</h3>
                        <p>Сеансовый (сессия) – это набор сетевых взаимодействий, целенаправленных на решение единственной задачи.</p>
                        <p>Сейчас сетевое взаимодействие усложнилось и не состоит из простых вопросов и ответов, как было раньше. Например, Вы загружаете веб страничку, чтобы показать в браузере, сначала нужно загрузить сам текст веб страницы (.html), стилевой файл (.css), который описывает элементы оформления веб страницы, загрузка изображений. Таким образом, чтобы выполнить задачу, загрузить веб страницу, необходимо реализовать несколько, отдельных сетевых операций.</p>
                        <p>Сеансовый определяет, какая будет передача информации между 2-мя прикладными процессами: полудуплексной (по очередная передача и прием данных); или дуплексной (одновременная передача и прием информации).</p>
                        <h3>Уровень представления</h3>
                        <p>Функции – представить данные, передаваемых между прикладными процессами, в необходимой форме.</p>
                        <p>Для описания этого уровня, используют автоматический перевод в сети с различных языков. Например, Вы набираете номер телефона, говорите на русском, сеть автоматом переводит на французский язык, передает информацию в Испанию, там человек поднимает трубку и слышит Ваш вопрос на испанском языке. Это задача, пока не реализована.</p>
                        <p>Для защиты отправляемых данных по сети используется шифрование: secure sockets layer, а также transport layer security, эти технологии позволяют шифровать данные которые отправляются по сети.</p>
                        <p>Протоколы прикладного уровня используют TSL/SSL и их можно отличить по букве s в конце. Например, https, ftps и другие. Если в браузере Вы видите, что используется протокол https и замок, это значит, что производится защита данных по сети при помощи шифрования.</p>
                        <h3>Прикладной уровень</h3>
                        <p>Необходим для взаимодействия между собой сетевых приложений, таких как web, e-mail, skype и тд.</p>
                        <p>По сути, представляет собой комплект спецификаций, позволяющих пользователю осуществлять вход на страницы для поиска нужной ему информации. Проще говоря, задачей application является обеспечение доступа к сетевым службам. Содержимое этого уровня очень разнообразно.</p>
                        <p>Функции:</p>
                        <ul>
                            <li>&bull; Решение задач, отправка файлов; управление заданиями и системой;</li>
                            <li>&bull; Определение пользователей по их логину, e-mail адресу, паролям, электронным подписям;</li>
                            <li> &bull; Запросы на соединение с иными прикладными процессами.</li>
                        </ul>
                        </p>
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