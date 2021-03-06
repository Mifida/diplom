<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Stadydara О проекте</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/ab.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="header_cont">
                <a class="logo_link" href="index.php"><img class="logo" src="../images/sd.svg" alt="stadydara" height="70" width="150"></a>
                <nav class="header-menu menu">
                    <ul class="menu-list">
                    <li><a class="menu-link" href="../html_a/index_a.php">ГЛАВНАЯ</a></li>
                        <li><a class="menu-link" href="../html_a/about_a.php">О ПРОЕКТЕ</a></li>
                        <li><a class="menu-link" href="../html/register.php">РЕГИСТРАЦИЯ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="content">
            <div class="text">
                <h2>Общие сведения</h2>
                <p>С целью повышения производительности труда, функциональной эффективности в предметной области разработана ИС, которая позволит сократить время, требуемое на выполнение таких операций, как изучение основ компьютерных сетей и оптимизация учебного процесса.</p>
                <p>Рассматриваемая предметная область предполагает обработку данных о студентах, преподавателях, учебном плане и тестировании.
                    Разработанная система обеспечивает:</p>
                <ul>
                    <li>хранение большого объема данных;</li>
                    <li>простой и удобный доступ к контенту через дружественный интерфейс;</li>
                    <li>вывод результатов тестирования;</li>
                    <li>поиск по теоретическим материалам;</li>
                    <li>справочную систему.</li>
                </ul>
                <p>Кроме этого ИС имеет способность к изменениям и настройке на новые функциональные области, возможность расширения приложений и включение новых приложений, обладает возможностями развития.</p>
                <p>Для реализации системы выбрано следующее программное обеспечение:</p>
                <ul>
                    <li>Xampp – кроссплатформенная сборка веб-сервера, содержащая Apache, MySQL, интерпретатор скриптов PHP, язык программирования Perl и большое количество дополнительных библиотек, позволяющих запустить полноценный веб-сервер;</li>
                    <li>MySQL – свободная реляционная система управления базами данных;</li>
                    <li>Visual Studio Code — редактор исходного кода, разработанный Microsoft для Windows, Linux и macOS.</li>
                </ul>
                <p>В основе информационной системы находится реляционная многотабличная база данных (БД) "diplom".</p>
                <p>Структура БД разработана на основе информационного анализа предметной области и включает № таблиц:</p>
                <ul>
                    <li>Users</li>
                    <li>Teorya</li>
                </ul>
                <h2>Работа в ИС</h2>
                <p>Дизайн проекта определен спецификой предметной области. На первом этапе работы с системой пользователь вводит логин и пароль для аутентификации (рис. №1).</p>
                <p class="image">
                    <img src="../images/sc1.PNG" alt="1" height="400px"><br>
                    <span>рис. №1</span>
                </p>
                <p>На этой же странице зарегистрированный пользователь может выполнить авторизацию (рис. №2).</p>
                <p class="image">
                    <img src="../images/sc4.PNG" alt="2" height="400px"><br>
                    <span>рис. №2</span>
                </p>
                <p>Далее можно приступить к работе в системе начиная с главной страницы сайта «Главная» Сайт включает в себя главное меню (рис. №3)., в котором закреплены следующие ссылки: главная, теория, тесты, справка, рекомендации и регистрация. Для работы со всеми компонентами системы предусмотрена справка, ссылка к которой прописана в главном меню. Она позволит ознакомиться с сайтом перед началом или во время работы.</p>
                <p>Следует упомянуть о том, что неавторизированные пользователи не смогут увидеть разделы "теория" и "тесты".</p>
                <p class="image">
                    <img src="../images/sc2.PNG" alt="2" width="800px"><br>
                    <span>рис. №3</span>
                </p>
                <p>Перейдя на страницу «Теория» пользователю предоставляются все доступные для изучения теоретические материалы. Для удобства слева страницы предусмотрен перечень ссылок (рис. №4), представленный в виде кнопок с названиями тем. Кроме того, в верхней части списка предусмотрен поиск по названиям тем, который необходим при большом количестве теоретических материалов.</p>
                <p class="image">
                    <img src="../images/sc3.PNG" alt="4" height="400px"><br>
                    <span>рис. №4</span>
                </p>
                <p>На странице "Тесты" левое меню идентично, но при нажатии на одну из ссылок, пользователь будет направлен на страницу с тестом по интересующей теме. Тест с открытым типом вопросов, другими словами, пользователю необходимо ввести ответ на вопрос вручную. В ответах прердусмотрено допущение некоторых орфографических ошибок, но рекомендуется воздержаться от написания лишних пробелов и символов, которые не требуются в вопросе.</p>
                <p>На странице "Калькулятор" пользователю предоставляется простой калькулятор IP адресов (рис. №5). Пользователю нужно ввести IP адрес и количество бит (единиц) в маске подсети. При неправильном написании IP адреса будет показана соответствующая ошибка, а для того, чтобы этого избежать, под строкой ввода есть пример написания IP адреса. Ввод маски подсети реализован в виде ползунка, такое решение было принято для ограничения вводимого числа (от 0 до 30). После ввода всех данных и нажатия на кнопку "Посчитать" в правом блоке будут показаны все соответствующие параметры.</p>
                <p class="image">
                    <img src="../images/calc.PNG" alt="5" height="400px"><br>
                    <span>рис. №5</span>
                </p>
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

</html>