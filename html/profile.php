<!DOCTYPE html>
<html>
<?php session_start(); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Обратная связь" />
    <title>Stadydara Профиль</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style_zap.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/register.css">
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
            <h2 class="second-text_title">Профиль</h2>
            <main>
                <div class="main-content">
                    <div class="userdata">
                        <h3>Загрузка файлов</h3>
                        <form class="box" action="profile.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="file" id="upload" class="input-file">
                            <label for="upload" class="btn btn-tertiary js-labelFile">
                                <i class="icon fa fa-check"></i>
                                <span class="js-fileName">Загрузить файл</span>
                            </label>
                            <input type="submit" name="button" value="ВВОД">
                        </form>
                        <?php
                        require_once("dbconnect.php");
                        ini_set('display_errors', 'off');
                        $uploadname = basename($_FILES['file']['name']);
                        $uploadpath = '../files/' . $uploadname;
                        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadpath)) {
                            $result = mysqli_query($connect, "INSERT INTO files (name, path) VALUES ('$uploadname','$uploadpath')") or die("Error : " . mysqli_error());
                            echo 'Файл загружен';
                        } else echo '';
                        ini_set('display_errors', 'On');
                        ?>
                    </div>
                </div>
                <div class="main-content">
                    <h3>Список загруженных файлов</h3>
                    <?php
                    mysqli_query($connect, "SET NAMES UTF8");

                    //$_SESSION['login']=$log; не работает

                    $query = "SELECT * FROM files";
                    $result2 = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($connect));
                    if ($result2) {
                        $numrows = mysqli_num_rows($result2);
                        echo "<table>";
                        echo "<thead>";
                        echo "<tr><th>Файл</th><th>Дата и время</th><th>Статус</th></tr>";
                        echo "</thead>";
                        echo "<tfoot>";
                        for ($i = 0; $i < $numrows; ++$i) {
                            $row = mysqli_fetch_array($result2);
                            echo "<tr>";
                            echo "<td>";
                            echo "<a style='text-decoration:none; target='_blank' href=\"{$row["path"]}\">{$row["name"]}</a>";
                            echo "</td>";

                            echo "<td>";
                            echo "{$row["data"]}";
                            echo "</td>";

                            echo "<td>";
                            echo "{$row["status"]}";
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tfoot>";
                        echo "</table>";
                        mysqli_free_result($result2);
                    }
                    ?>

                </div>
                <div class="statistic">
                    <div class="views_l">
                        <h3>Статистика просмотров лекций</h3>
                        <?php
                        mysqli_query($connect, "SET NAMES UTF8");
                        $query2 = "SELECT * FROM teorya";
                        $result3 = mysqli_query($connect, $query2) or die("Ошибка " . mysqli_error($connect));
                        if ($result3) {
                            $numrows = mysqli_num_rows($result3);
                            echo "<table>";
                            echo "<thead>";
                            echo "<tr><th>Тема</th><th>Просмотры</th></tr>";
                            echo "</thead>";
                            echo "<tfoot>";
                            for ($i = 0; $i < $numrows; ++$i) {
                                $row1 = mysqli_fetch_array($result3);
                                echo "<tr>";
                                echo "<td>";
                                echo "<a href='" . $row1['path'] . "' style='text-decoration:none;'>{$row1['teory_name']}</a>";
                                echo "</td>";

                                echo "<td>";
                                echo "{$row1["views"]}";
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tfoot>";
                            echo "</table>";
                            mysqli_free_result($result3);
                        }
                        ?>
                    </div>
                    <div class="views_l">
                        <h3>Статистика прохождения тестов</h3>
                        <?php
                        mysqli_query($connect, "SET NAMES UTF8");
                        $query3 = "SELECT * FROM teorya";
                        $result4 = mysqli_query($connect, $query3) or die("Ошибка " . mysqli_error($connect));
                        if ($result4) {
                            $numrows = mysqli_num_rows($result4);
                            echo "<table>";
                            echo "<thead>";
                            echo "<tr><th>Тема</th><th>Просмотры</th></tr>";
                            echo "</thead>";
                            echo "<tfoot>";
                            for ($i = 0; $i < $numrows; ++$i) {
                                $row2 = mysqli_fetch_array($result4);
                                echo "<tr>";
                                echo "<td>";
                                echo "<a href='" . $row2['path'] . "' style='text-decoration:none;'>{$row2['teory_name']}</a>";
                                echo "</td>";

                                echo "<td>";
                                echo "{$row2["views2"]}";
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tfoot>";
                            echo "</table>";
                            mysqli_free_result($result4);
                        }
                        ?>
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

        </main>

    </div>
    </div>
    </div>

</body>

</html>