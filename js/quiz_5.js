function prov() {
    otv1 = 'Физическая';
    otv2 = 'Логическая';
    otv3 = 'Информационная';
    otv4 = 'Дерево';
    otv5 = 'Кольцо';
    otv6 = 'Звезда';

    otv_user1 = document.getElementById('6_1').value;
    otv_user2 = document.getElementById('6_2').value;
    otv_user3 = document.getElementById('6_3').value;
    otv_user4 = document.getElementById('6_4').value;
    otv_user5 = document.getElementById('6_5').value;
    otv_user6 = document.getElementById('6_6').value;

    var res = otv_user1.replace(/Физическая/gi, 'Физическая');
    var res = res.replace(/Фезическая/gi, 'Физическая');
    var res = res.replace(/Физичиская/gi, 'Физическая');
    var res = res.replace(/Фезичиская/gi, 'Физическая');

    var res_2 = otv_user2.replace(/Логическая/gi, 'Логическая');
    var res_2 = res_2.replace(/Лагическая/gi, 'Логическая');
    var res_2 = res_2.replace(/Логичиская/gi, 'Логическая');
    var res_2 = res_2.replace(/Лагичиская/gi, 'Логическая');

    var res_3 = otv_user3.replace(/Информационная/gi, 'Информационная');
    var res_3 = res_3.replace(/Информацыонная/gi, 'Информационная');
    var res_3 = res_3.replace(/Информационая/gi, 'Информационная');

    var res_4 = otv_user4.replace(/Дерево/gi, 'Дерево');
    var res_4 = res_4.replace(/Дериво/gi, 'Дерево');

    var res_5 = otv_user5.replace(/Кольцо/gi, 'Кольцо');
    var res_5 = res_5.replace(/Кальцо/gi, 'Кольцо');

    var res_6 = otv_user6.replace(/Звезда/gi, 'Звезда');
    var res_6 = res_6.replace(/Звизда/gi, 'Звезда');

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
    vsego = 6;
    procent = Math.round(grade / vsego * 100);
    if (grade == 0) {
        procent = 0;
    }
    document.getElementById('rezultat').innerHTML = "Процент правильных ответов: " + procent + "%.";
}