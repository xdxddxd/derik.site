setInterval(() => {
    
    var horaAtual = new Date();
    var hora = horaAtual.getHours();
    var minuto = horaAtual.getMinutes();
    var segundo = horaAtual.getSeconds();
    var dia = horaAtual.getDate();
    var mes = horaAtual.getMonth() + 1;
    var ano = horaAtual.getFullYear();
    if(hora <10){
        hora = "0" + hora;
    }
    if(minuto < 10){
        minuto = "0" + minuto;
    }
    if(segundo < 10){
        segundo = "0" + segundo;
    }
    if(dia < 10){
        dia = "0" + dia;
    }
    if(mes < 10){
        mes = "0" + mes;
    }
    if(ano < 10){
        ano = "0" + ano;
    }
    
    var horaCompleta = hora + ":" + minuto + ":" + segundo;
    var dataCompleta = dia + "/" + mes + "/" + ano;

    $('#today').html(dataCompleta);
    $('#now').html(horaCompleta);

}, 1000);

async function volumeDisplay(e) {
    if(e.checked) {
        $('#volume-control').show();
    } else {
        $('#volume-control').hide();
    }
}

async function MenuDisplay(e) {
    if(e.checked) {
        $('#MenuDisplay').show();
    } else {
        $('#MenuDisplay').hide();
    }
}

async function volumeControl(v) {
    if(v >= 51){
        $('#volume-up').show();
        $('#volume-down').hide();
        $('#volume-mute').hide();
    } else if(v >= 1){
        $('#volume-up').hide();
        $('#volume-down').show();
        $('#volume-mute').hide();
    } else if (v == 0){
        $('#volume-up').hide();
        $('#volume-down').hide();
        $('#volume-mute').show();
    }
}