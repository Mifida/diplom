<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Stadydara Регистрация</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/register.css">
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
                    </ul>
                </nav>
            </div>
        </div>
        <div class="content">
            <div class="forms">

                <div class="reg-form">
                    <form class="box" action="register.php" method="post" enctype="multipart/form-data">
                        <h2 class="second-text_title">
                            Регистрация
                        </h2>
                        <input type="text" name="name" placeholder="Имя" required=" ">
                        <input type="text" name="login" placeholder="Логин" required=" ">
                        <input type="password" name="password" placeholder="Пароль" required=" ">
                        <input type="submit" name="button" value="ВВОД">
                    </form>
                    <a href="login.php" class="subtext">У меня уже есть аккаунт</a>
                    <?php
                    require_once("dbconnect.php");
                    if (isset($_POST["name"])) {
                        $name = $_POST["name"];
                    }
                    if (isset($_POST["login"])) {
                        $login = $_POST["login"];
                    }
                    if (isset($_POST["password"])) {
                        $password = md5($_POST["password"]);
                    }
                    if (isset($_POST["button"])) {
                        $button = $_POST["button"];
                    }
                    if (isset($button)) {
                        $result = mysqli_query($connect, "INSERT INTO users(name, login, password) VALUES ('$name','$login','$password')") or die("Error " . mysqli_error());
                        if ($result) { ?>
                            <br><a class="subtext" href='../html/login.php'><?php echo " Войти в аккаунт "; ?></a><?php
                            exit();
                        }
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
    </div>
   
</body>

</html>