$('div.checkbox-group.required :checkbox:checked').length > 0;

$(document).ready(function() {
    $('.contar').characterCounter();
});
$(document).ready(function(){
    $('.tooltipped').tooltip();
});
$(document).ready(function(){
    $('select').formSelect();
});
$(document).ready(function(){
    $('.datepicker').datepicker();
});
$(document).ready(function(){
    $('.timepicker').timepicker();
});
$(document).ready(function(){
    $('.tabs').tabs();
});
$(document).ready(function(){
    $('.modal').modal();
});

function janelasPgto(){
    var janelas = document.getElementById('selectJanelas').value;
    switch (janelas) {
        case '1':
            document.getElementById("divJanela2").style.display = "none";
            document.getElementById("divJanela3").style.display = "none";
            document.getElementById("divJanela4").style.display = "none";
        break;
        case '2':
            document.getElementById("divJanela2").style.display = "block";
            document.getElementById("divJanela3").style.display = "none";
            document.getElementById("divJanela4").style.display = "none";
        break;
        case '3':
            document.getElementById("divJanela2").style.display = "block";
            document.getElementById("divJanela3").style.display = "block";
            document.getElementById("divJanela4").style.display = "none";
        break;
        case '4':
            document.getElementById("divJanela2").style.display = "block";
            document.getElementById("divJanela3").style.display = "block";
            document.getElementById("divJanela4").style.display = "block";
        break;
    }
}

function tipoVencimento1(){
    var tipo = document.getElementById('selectVencimento1').value;
    switch (tipo){
        case '1':
            document.getElementById("divVenc1").style.display = "block";
            document.getElementById("divNDias1").style.display = "block";
            document.getElementById("labelVenc1").innerHTML  = "Limite de vencimento";
            break;
        case '2':
            document.getElementById("divVenc1").style.display = "block";
            document.getElementById("divNDias1").style.display = "none";
            document.getElementById("labelVenc1").innerHTML  = "Vencimento";
            break;
        case '3':
            document.getElementById("divVenc1").style.display = "none";
            document.getElementById("divNDias1").style.display = "none";
            break;
    }
}

function tipoVencimento2(){
    var tipo = document.getElementById('selectVencimento2').value;
    switch (tipo){
        case '1':
            document.getElementById("divVenc2").style.display = "block";
            document.getElementById("divNDias2").style.display = "block";
            document.getElementById("labelVenc2").innerHTML  = "Limite de vencimento";
            break;
        case '2':
            document.getElementById("divVenc2").style.display = "block";
            document.getElementById("divNDias2").style.display = "none";
            document.getElementById("labelVenc2").innerHTML  = "Vencimento";
            break;
        case '3':
            document.getElementById("divVenc2").style.display = "none";
            document.getElementById("divNDias2").style.display = "none";
            break;
    }
}

function tipoVencimento3(){
    var tipo = document.getElementById('selectVencimento3').value;
    switch (tipo){
        case '1':
            document.getElementById("divVenc3").style.display = "block";
            document.getElementById("divNDias3").style.display = "block";
            document.getElementById("labelVenc3").innerHTML  = "Limite de vencimento";
            break;
        case '2':
            document.getElementById("divVenc3").style.display = "block";
            document.getElementById("divNDias3").style.display = "none";
            document.getElementById("labelVenc3").innerHTML  = "Vencimento";
            break;
        case '3':
            document.getElementById("divVenc3").style.display = "none";
            document.getElementById("divNDias3").style.display = "none";
            break;
    }
}

function tipoVencimento4(){
    var tipo = document.getElementById('selectVencimento4').value;
    switch (tipo){
        case '1':
            document.getElementById("divVenc4").style.display = "block";
            document.getElementById("divNDias4").style.display = "block";
            document.getElementById("labelVenc4").innerHTML  = "Limite de vencimento";
            break;
        case '2':
            document.getElementById("divVenc4").style.display = "block";
            document.getElementById("divNDias4").style.display = "none";
            document.getElementById("labelVenc4").innerHTML  = "Vencimento";
            break;
        case '3':
            document.getElementById("divVenc4").style.display = "none";
            document.getElementById("divNDias4").style.display = "none";
            break;
    }
}

    