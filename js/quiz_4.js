function prov() {
    otv1 = 'Протокол';
    otv2 = 'Физический';
    otv3 = 'Кадры';
    otv4 = 'Данные';
    otv5 = 'Сетевой';
    otv6 = '4';
    otv7 = 'Прикладной';

    otv_user1 = document.getElementById('4_1').value;
    otv_user2 = document.getElementById('4_2').value;
    otv_user3 = document.getElementById('4_3').value;
    otv_user4 = document.getElementById('4_4').value;
    otv_user5 = document.getElementById('4_5').value;
    otv_user6 = document.getElementById('4_6').value;
    otv_user7 = document.getElementById('4_7').value;

    var res = otv_user1.replace(/Протокол/gi, 'Протокол');
    var res = res.replace(/Пратокол/gi, 'Протокол');
    var res = res.replace(/Протокл/gi, 'Протокол');
    var res = res.replace(/Пратакол/gi, 'Протокол');

    var res_2 = otv_user2.replace(/Физический/gi, 'Физический');
    var res_2 = res_2.replace(/Физичиский/gi, 'Физический');
    var res_2 = res_2.replace(/Физический уровень/gi, 'Физический');
    var res_2 = res_2.replace(/Физичиский уровень/gi, 'Физический');

    var res_3 = otv_user3.replace(/Кадры/gi, 'Кадры');
    var res_3 = res_3.replace(/Кадр/gi, 'Кадры');
    var res_3 = res_3.replace(/Кадровый/gi, 'Кадры');
    var res_3 = res_3.replace(/Кадровой/gi, 'Кадры');

    var res_4 = otv_user4.replace(/Данные/gi, 'Данные');
    var res_4 = res_4.replace(/Даные/gi, 'Данные');

    var res_5 = otv_user5.replace(/Сетевой/gi, 'Сетевой');
    var res_5 = res_5.replace(/Сетивой/gi, 'Сетевой');
    var res_5 = res_5.replace(/Ситевой/gi, 'Сетевой');
    var res_5 = res_5.replace(/Ситивой/gi, 'Сетевой');
    var res_5 = res_5.replace(/Сетивой уровень/gi, 'Сетевой');
    var res_5 = res_5.replace(/Ситевой уровень/gi, 'Сетевой');
    var res_5 = res_5.replace(/Сетевой уровень/gi, 'Сетевой');

    var res_6 = otv_user6.replace(/4/gi, '4');
    var res_6 = res_6.replace(/Четвертым/gi, '4');
    var res_6 = res_6.replace(/Читвертым/gi, '4');
    var res_6 = res_6.replace(/Четвёртым/gi, '4');
    var res_6 = res_6.replace(/Читвёртым/gi, '4');

    var res_7 = otv_user7.replace(/Прикладной/gi, 'Прикладной');
    var res_7 = res_7.replace(/Прекладной/gi, 'Прикладной');
    var res_7 = res_7.replace(/Прикладной уровень/gi, 'Прикладной');
    var res_7 = res_7.replace(/Прекладной уровень/gi, 'Прикладной');

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
    vsego = 7;
    procent = Math.round(grade / vsego * 100);
    if (grade == 0) {
        procent = 0;
    }
    document.getElementById('rezultat').innerHTML = "Процент правильных ответов: " + procent + "%.";
}