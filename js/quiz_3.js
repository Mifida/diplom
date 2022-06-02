function prov() {
    otv1 = 'Активное';
    otv2 = 'Пассивному';
    otv3 = 'Коаксиальный';
    otv4 = '4';
    otv5 = 'Витая пара';
    otv6 = 'Оптоволоконный';

    otv_user1 = document.getElementById('3_1').value;
    otv_user2 = document.getElementById('3_2').value;
    otv_user3 = document.getElementById('3_3').value;
    otv_user4 = document.getElementById('3_4').value;
    otv_user5 = document.getElementById('3_5').value;
    otv_user6 = document.getElementById('3_6').value;

    var res = otv_user1.replace(/Активное/gi, 'Активное');
    var res = res.replace(/Октивное/gi, 'Активное');
    var res = res.replace(/Активнае/gi, 'Активное');
    var res = res.replace(/Октивнае/gi, 'Активное');

    var res_2 = otv_user2.replace(/Пассивному/gi, 'Пассивному');
    var res_2 = res_2.replace(/Поссивному/gi, 'Пассивному');
    var res_2 = res_2.replace(/Пасивному/gi, 'Пассивному');
    var res_2 = res_2.replace(/Посивному/gi, 'Пассивному');
    var res_2 = res_2.replace(/Пассивнаму/gi, 'Пассивному');
    var res_2 = res_2.replace(/Поссивнаму/gi, 'Пассивному');
    var res_2 = res_2.replace(/Пасивнаму/gi, 'Пассивному');
    var res_2 = res_2.replace(/Посивнаму/gi, 'Пассивному');
    var res_2 = res_2.replace(/Поссивное/gi, 'Пассивному');
    var res_2 = res_2.replace(/Пасивное/gi, 'Пассивному');
    var res_2 = res_2.replace(/Посивное/gi, 'Пассивному');
    var res_2 = res_2.replace(/Пассивнае/gi, 'Пассивному');
    var res_2 = res_2.replace(/Поссивнае/gi, 'Пассивному');
    var res_2 = res_2.replace(/Пасивнае/gi, 'Пассивному');
    var res_2 = res_2.replace(/Посивнае/gi, 'Пассивному');

    var res_3 = otv_user3.replace(/Коаксиальный/gi, 'Коаксиальный');
    var res_3 = res_3.replace(/Кааксиальный/gi, 'Коаксиальный');
    var res_3 = res_3.replace(/Коаксеальный/gi, 'Коаксиальный');
    var res_3 = res_3.replace(/Кааксеальный/gi, 'Коаксиальный');
    var res_3 = res_3.replace(/Коаксиалный/gi, 'Коаксиальный');
    var res_3 = res_3.replace(/Кааксиалный/gi, 'Коаксиальный');
    var res_3 = res_3.replace(/Коаксеалный/gi, 'Коаксиальный');
    var res_3 = res_3.replace(/Кааксеалный/gi, 'Коаксиальный');

    var res_4 = otv_user4.replace(/4/gi, '4');
    var res_4 = res_4.replace(/Четыре/gi, '4');
    var res_4 = res_4.replace(/Чатыре/gi, '4');
    var res_4 = res_4.replace(/Четыри/gi, '4');
    var res_4 = res_4.replace(/Чатыри/gi, '4');

    var res_5 = otv_user5.replace(/Витая пара/gi, 'Витая пара');
    var res_5 = res_5.replace(/Ветая пара/gi, 'Витая пара');
    var res_5 = res_5.replace(/Витая/gi, 'Витая пара');
    var res_5 = res_5.replace(/Ветая/gi, 'Витая пара');

    var res_6 = otv_user6.replace(/Оптоволоконный/gi, 'Оптоволоконный');
    var res_6 = res_6.replace(/Оптаволоконный/gi, 'Оптоволоконный');
    var res_6 = res_6.replace(/Оптоволоконый/gi, 'Оптоволоконный');
    var res_6 = res_6.replace(/Оптаволоконый/gi, 'Оптоволоконный');
    var res_6 = res_6.replace(/Волоконно-оптический/gi, 'Оптоволоконный');
    var res_6 = res_6.replace(/Волоконно оптический/gi, 'Оптоволоконный');
    var res_6 = res_6.replace(/Волоконно-аптический/gi, 'Оптоволоконный');

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