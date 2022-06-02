function prov() {
    otv1 = 'Локальная';
    otv2 = 'Глобальная';
    otv3 = 'Городская';
    otv4 = '4';
    otv5 = 'Интернет';
    otv6 = 'Одноранговая';
    otv7 = 'Иерархическая';
    otv8 = '10';
    otv9 = '100';

    otv_user1 = document.getElementById('2_1').value;
    otv_user2 = document.getElementById('2_2').value;
    otv_user3 = document.getElementById('2_3').value;
    otv_user4 = document.getElementById('2_4').value;
    otv_user5 = document.getElementById('2_5').value;
    otv_user6 = document.getElementById('2_6').value;
    otv_user7 = document.getElementById('2_7').value;
    otv_user8 = document.getElementById('2_8').value;
    otv_user9 = document.getElementById('2_9').value;

    var res = otv_user1.replace(/Локальная/gi, 'Локальная');
    var res = res.replace(/Лакальная/gi, 'Локальная');
    var res = res.replace(/Локалная/gi, 'Локальная');
    var res = res.replace(/Лакалная/gi, 'Локальная');
    var res = res.replace(/Локальная сеть/gi, 'Локальная');
    var res = res.replace(/Лакальная сеть/gi, 'Локальная');
    var res = res.replace(/Локалная сеть/gi, 'Локальная');
    var res = res.replace(/Лакалная сеть/gi, 'Локальная');

    var res_2 = otv_user2.replace(/Глобальная/gi, 'Глобальная');
    var res_2 = res_2.replace(/Глабальная/gi, 'Глобальная');
    var res_2 = res_2.replace(/Глабалная/gi, 'Глобальная');
    var res_2 = res_2.replace(/Глобалная/gi, 'Глобальная');
    var res_2 = res_2.replace(/Глобальная сеть/gi, 'Глобальная');
    var res_2 = res_2.replace(/Глабальная сеть/gi, 'Глобальная');
    var res_2 = res_2.replace(/Глобалная сеть/gi, 'Глобальная');
    var res_2 = res_2.replace(/Глабалная сеть/gi, 'Глобальная');

    var res_3 = otv_user3.replace(/Городская/gi, 'Городская');
    var res_3 = res_3.replace(/Гародская/gi, 'Городская');
    var res_3 = res_3.replace(/Горадская/gi, 'Городская');
    var res_3 = res_3.replace(/Горотская/gi, 'Городская');
    var res_3 = res_3.replace(/Гаротская/gi, 'Городская');
    var res_3 = res_3.replace(/Горатская/gi, 'Городская');
    var res_3 = res_3.replace(/Гаратская/gi, 'Городская');
    var res_3 = res_3.replace(/Гарадская/gi, 'Городская');
    var res_3 = res_3.replace(/Гародская сеть/gi, 'Городская');
    var res_3 = res_3.replace(/Горадская сеть/gi, 'Городская');
    var res_3 = res_3.replace(/Горотская сеть/gi, 'Городская');
    var res_3 = res_3.replace(/Гаротская сеть/gi, 'Городская');
    var res_3 = res_3.replace(/Горатская сеть/gi, 'Городская');
    var res_3 = res_3.replace(/Гаратская сеть/gi, 'Городская');
    var res_3 = res_3.replace(/Гарадская сеть/gi, 'Городская');

    var res_4 = otv_user4.replace(/4/gi, '4');
    var res_4 = res_4.replace(/Четыре/gi, '4');
    var res_4 = res_4.replace(/Чатыре/gi, '4');
    var res_4 = res_4.replace(/Четыри/gi, '4');
    var res_4 = res_4.replace(/Чатыри/gi, '4');

    var res_5 = otv_user5.replace(/Интернет/gi, 'Интернет');
    var res_5 = res_5.replace(/Инторнет/gi, 'Интернет');
    var res_5 = res_5.replace(/Ентернет/gi, 'Интернет');
    var res_5 = res_5.replace(/Енторнет/gi, 'Интернет');
    var res_5 = res_5.replace(/Internet/gi, 'Интернет');

    var res_6 = otv_user6.replace(/Одноранговая/gi, 'Одноранговая');
    var res_6 = res_6.replace(/Адноранговая/gi, 'Одноранговая');
    var res_6 = res_6.replace(/Однаранговая/gi, 'Одноранговая');
    var res_6 = res_6.replace(/Однорангавая/gi, 'Одноранговая');
    var res_6 = res_6.replace(/Аднаранговая/gi, 'Одноранговая');
    var res_6 = res_6.replace(/Аднарангавая/gi, 'Одноранговая');
    var res_6 = res_6.replace(/Однарангавая/gi, 'Одноранговая');
    var res_6 = res_6.replace(/Адноранговая сеть/gi, 'Одноранговая');
    var res_6 = res_6.replace(/Однаранговая сеть/gi, 'Одноранговая');
    var res_6 = res_6.replace(/Однорангавая сеть/gi, 'Одноранговая');
    var res_6 = res_6.replace(/Аднаранговая сеть/gi, 'Одноранговая');
    var res_6 = res_6.replace(/Аднарангавая сеть/gi, 'Одноранговая');
    var res_6 = res_6.replace(/Однарангавая сеть/gi, 'Одноранговая');

    var res_7 = otv_user7.replace(/Иерархическая/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Иирархическая/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Еерархическая/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Еирархическая/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Иерорхическая/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Иирорхическая/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Иерархичиская/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Иирархичиская/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Еерархичиская/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Еирархичиская/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Иерорхичиская/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Иирорхичиская/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Иирархическая сеть/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Еерархическая сеть/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Еирархическая сеть/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Иерорхическая сеть/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Иирорхическая сеть/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Иерархичиская сеть/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Иирархичиская сеть/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Еерархичиская сеть/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Еирархичиская сеть/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Иерорхичиская сеть/gi, 'Иерархическая');
    var res_7 = res_7.replace(/Иирорхичиская сеть/gi, 'Иерархическая');

    var res_8 = otv_user8.replace(/10/gi, '10');
    var res_8 = res_8.replace(/Десять/gi, '10');
    var res_8 = res_8.replace(/Дисять/gi, '10');
    var res_8 = res_8.replace(/Десеть/gi, '10');

    var res_9 = otv_user9.replace(/100/gi, '100');
    var res_9 = res_9.replace(/Сто/gi, '100');
    var res_9 = res_9.replace(/Сотня/gi, '100');

    grade = 0;

    if (res == otv1) {
        grade += 1;
    }
    if (res_2 == otv2) {
        grade += 1;
    }
    if (res_3 == otv3) {
        grade += 1;
    }
    if (res_4 == otv4) {
        grade += 1;
    } 
    if (res_5 == otv5) {
        grade += 1;
    } 
    if (res_6 == otv6) {
        grade += 1;
    } 
    if (res_7 == otv7) {
        grade += 1;
    } 
    if (res_8 == otv8) {
        grade += 1;
    } 
    if (res_9 == otv9) {
        grade += 1;
    }
    vsego = 9;
    procent = Math.round(grade / vsego * 100);
    if (grade == 0) {
        procent = 0;
    }
    document.getElementById('rezultat').innerHTML = "Процент правильных ответов: " + procent + "%.";
}