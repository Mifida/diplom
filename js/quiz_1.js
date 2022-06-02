function prov() {
    otv1 = 'Arpanet';
    otv2 = 'Телекоммуникация';
    otv3 = '1';

    otv_user1 = document.getElementById('1_1').value;
    otv_user2 = document.getElementById('1_2').value;
    otv_user3 = document.getElementById('1_3').value;

    var res = otv_user1.replace(/Arpanet/gi, 'Arpanet');
    var res = res.replace(/Arpa net/gi, 'Arpanet');
    var res = res.replace(/Advanced Research Projects Agency network/gi, 'Arpanet');

    var res_2 = otv_user2.replace(/Телекоммуникация/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Телекомуникация/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Телекомммуникация/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Теле комуникация/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Телекомуникация/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Теликомуникация/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Телекамуникация/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Телекомуникации/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Телекомммуникации/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Теле комуникации/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Телекомуникации/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Теликомуникации/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Телекамуникации/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/теле коммуникация/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/теле коммуникации/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/телекоммуникации/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Теликоммуникация/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Теликамунникация/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Телекомуникацыя/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Телекомммуникацыя/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Теле комуникацыя/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Телекомуникацыя/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Теликомуникацыя/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Телекамуникацыя/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Телекомуникацыи/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Телекомммуникацыи/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Теле комуникацыи/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Телекомуникацыи/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Теликомуникацыи/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Телекамуникацыи/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/теле коммуникацыя/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/теле коммуникацыи/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/телекоммуникацыи/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Теликоммуникацыя/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Теликамунникацыя/gi, 'Телекоммуникация');
    var res_2 = res_2.replace(/Телекамунекацыи/gi, 'Телекоммуникация');
    
    

    grade = 0;

    if (res == otv1) {
        grade += 1;
    }
    if (res_2 == otv2) {
        grade += 1;
    }

    vsego = 8;
    procent = Math.round(grade / vsego * 100);
    if (grade == 0) {
        procent = 0;
    }
    document.getElementById('rezultat').innerHTML = "Процент правильных ответов: " + procent + "%.";
}