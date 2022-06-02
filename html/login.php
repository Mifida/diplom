<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Stadydara Логин</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="header_cont">
                <a class="logo_link" href="../html_a/index_a.php"><img class="logo" src="../images/sd.svg" alt="stadydara" height="70" width="150"></a>
                <nav class="header-menu menu">
                    <ul class="menu-list">
                        <li><a class="menu-link" href="../html_a/index_a.php">ГЛАВНАЯ</a></li>
                        <li><a class="menu-link" href="../html_a/about_a.php">О ПРОЕКТЕ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="content">
            <div class="forms">

                <div class="reg-form">
                    <form class="box" action="login.php" method="post">
                        <h2 class="second-text_title">
                            Вход
                        </h2>

                        <input type="text" name="login" placeholder="Логин" required=" ">
                        <input type="text" name="name" required=" " placeholder="Имя">
                        <input type="password" name="password" placeholder="Пароль" required=" ">
                        <input type="submit" name="button" value="ВВОД">
                    </form>

                    <?php
                    require_once("dbconnect.php");
                    
                    ini_set('display_errors', 'Off');
                    if (isset($_POST["login"])) {
                        $login = $_POST["login"];
                    }
                    if (isset($_POST["name"])) {
                        $name = $_POST["name"];
                    }
                    if (isset($_POST["password"])) {
                        $password = md5($_POST["password"]);
                    }
                    if (isset($_POST["button"])) {
                        $button = $_POST["button"];
                    }
                    session_start();
                    if (isset($button)) {
                        $result = mysqli_query($connect, "SELECT * FROM users WHERE login = '$login' AND password = '$password' AND name='$name'") or die("Error : " . mysqli_error());
                        while ($a = mysqli_fetch_array($result)) {
                            $role = $a['role'];  
                        }
                        if ($role == '0') {
                            ?>
                          <br><a class="subtext" href='profile.php'><?php echo "Страница преподавателя"; ?></a><?php
                        } else { ?>
                          <br><a class="subtext" href='../html_b/index_.php'><?php echo " Главная страница "; ?></a><?php 
                            
                        }

                        if (mysqli_num_rows($result) < 1) {
                           ?><br><p class="subtext"><?php echo "Неправильный логин или пароль"; ?></p><?php
                        } else {
                            $_SESSION['login'] = $login;
                            $_SESSION['name'] = $name;
                            $_SESSION['password'] = $password;
                            ?>
                          <br><p class="subtext"><?php echo "Авторизация прошла успешно!"; ?></p><?php
                        }
                    } else {
                        ?>
                          <p class="subtext alert"><?php echo "Заполните поля"; ?></p><?php
                    }
                    mysqli_close($connect);
                    ?>
                </div>
                <br><a href="register.php" class="subtext">У меня еще нет аккаунта</a>
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
        </div></div>
        
</body>

</html>