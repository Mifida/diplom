<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Stadydara Главная</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/calc.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
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
            <div class="calc">
                <div id="main">

                    <div class="sisi cal">
                        <div class="form">
                            <div class="isi2">
                                <div class="pageHeader">
                                    Калькулятор IP
                                </div>
                                <div id="form-IP">
                                    <input type="text" class="borderLine" name="ip" id="ip" placeholder="Введите IP адрес">
                                    <p class="help abu">Пример: 192.168.0.0</p>
                                    <div id="range">
                                        <p>
                                            <label for="amount" class="help">Количество бит в маске : </label>
                                            <span id="amount"></span>
                                        </p>
                                        <div id="slider-Per"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tombol">
                            <div id="kirim">Посчитать</div>
                        </div>
                    </div>
                    <div class="sisi hasil addMargin">
                        <div id="konten">
                            <div class="isi">
                                <div class="pageHeader">
                                    Результат
                                </div>
                                <div id="tag">
                                    <div id="judul" class="hasilJudul">
                                        Адрес сети
                                    </div>
                                    <div id="network" class="spasi hasilJudul">
                                    </div>
                                </div>
                                <div id="tag">
                                    <div id="judul" class="hasilJudul">
                                        Широковещательный адрес
                                    </div>
                                    <div id="broadcast" class="spasi hasilJudul">
                                    </div>
                                </div>
                                <div id="tag">
                                    <div id="judul" class="hasilJudul">
                                        Маска подсети
                                    </div>
                                    <div id="dnsHasil" class="spasi hasilJudul">
                                    </div>
                                </div>
                                <div id="tag">
                                    <div id="judul" class="hasilJudul">
                                        Первый хост
                                    </div>
                                    <div id="firstHost" class="spasi hasilJudul">
                                    </div>
                                </div>
                                <div id="tag">
                                    <div id="judul" class="hasilJudul">
                                        Последний хост
                                    </div>
                                    <div id="lastHost" class="spasi hasilJudul">
                                    </div>
                                </div>
                            </div>
                        </div>
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
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script>
    $(document).ready(function() {
        var per = 0;

        function cekIP(ip) {
            ip = ip.split(".");
            var betul = true;
            if (ip.length != 4)
                betul = false;
            else {
                for (var i = 0; i < ip.length; i++) {
                    if (parseInt(ip[i]) >= 0 && parseInt(ip[i]) <= 255) {
                        for (var j = 0; j < ip[i].length; j++) {
                            if (parseInt(ip[i][j]) >= 0 && parseInt(ip[i][j]) <= 255) {
                                betul = true;
                            } else {
                                betul = false;
                                break;
                            }
                        }
                        if (betul == false)
                            break;
                    } else {
                        betul = false;
                        break;
                    }
                }
            }
            return betul;
        }
        $("#kirim").click(function() {
            if (cekIP($("#ip").val()) == false) {
                $("#main .cal").toggleClass("shake");
                $("input#ip").addClass("error");
                $("p.help").html("Wrong Format");
                $("p.help").removeClass("abu").addClass("red");
                $("#main .hasil").removeClass("removeMargin");
                $("#main .cal .form").removeClass("shadow");
            } else {
                $("input#ip").removeClass("error");
                $("p.help").html("Пример: 192.168.0.0");
                $("p.help").removeClass("red").addClass("abu");
                $("#main .hasil").addClass("removeMargin");
                $("#main .cal .form").addClass("shadow");
                /*IP*/
                var ip = $("#ip").val();
                ip = ip.split(".");

                function jadiInt(arr) {
                    for (var i = 0; i < arr.length; i++)
                        arr[i] = parseInt(arr[i]);
                    return arr;
                }
                ip = jadiInt(ip);
                var listIP = [8, 16, 24, 32];
                var dns = [255, 255, 255, 255];
                var daftarBiner = [0, 1, 3, 7, 15, 31, 63, 127, 255];
                var wildCard = [0, 0, 0, 0];
                var indexDnsNsisaL = [];

                function cariAntara(n) {
                    var an = 0;
                    var arr = [];
                    var index = 0;
                    for (var i = 0; i < listIP.length; i++) {
                        if (listIP[i] > n) {
                            arr.push(listIP[i] - n);
                            arr.push(index);
                        }
                        index++;
                    }
                    return arr;
                }
                var sisa = cariAntara(per)[0];
                /*DNS*/
                var indexDns = cariAntara(per)[1];

                function cariDns(index) {
                    for (var i = 0; i < dns.length; i++) {
                        if (i > index)
                            dns[i] = 0;
                        else if (i == index)
                            dns[i] = dns[i] - daftarBiner[sisa];
                    }
                }
                cariDns(indexDns);
                var dnsHasil = "";

                function cetak(arr) {
                    var hasil = "";
                    for (var i = 0; i < arr.length; i++) {
                        hasil += arr[i];
                        i < arr.length - 1 ? hasil += "." : "";
                    }
                    return hasil;
                }
                dnsHasil = cetak(dns);
                $("#dnsHasil").html(dnsHasil);
                $("#network").html(cetak(ip));
                var firstHost = ip;
                firstHost[3] += 1;
                $("#firstHost").html(cetak(firstHost));
                /*Broadcast*/
                function cariBroadcast() {
                    for (var i = 0; i < ip.length; i++) {
                        if (i > indexDns)
                            ip[i] = 255;
                        else if (i == indexDns)
                            ip[i] = ip[i] + daftarBiner[sisa];
                    }
                }
                cariBroadcast();
                ip[3] -= 1;
                $("#broadcast").html(cetak(ip));
                var lastHost = ip;
                lastHost[3] -= 1;
                $("#lastHost").html(cetak(lastHost));
                /*WildCard*/
                function cariWildCard() {
                    var i = 0;
                    for (i < script; wildCard.length; i++)
                        wildCard[i] = Math.abs(dns[i] - 255);
                }
                cariWildCard();
                $("#wildCard").html(cetak(wildCard));
            }
        });
        $("span#kanan").click(function() {
            $("#main .hasil").removeClass("removeMargin");
            $("#main .cal .form").removeClass("shadow");
        });
        $("#slider-Per").slider({
            range: "max",
            min: 1,
            max: 30,
            value: 1,
            slide: function(event, ui) {
                $("#amount").html(ui.value);
                per = ui.value;
            }
        });
        $("#amount").val($("#slider-Per").slider("value"));
    });
</script>

</html>