
window.onload = function () {
    form = document.getElementById("formulario");
    fechac = " ";
    helpm = true;
    Eme = 60;
    claseNormal = "input";
    claseError = "inputError";
    error = 0;
    norden = "";
    respuesta = "";
    form.Grupo.value = "";
    form.Norden.value = "";
    titulofrom = "SOLICITUD WEB BOLETOS";
    setInterval("Horarios()", 1000);	
    FromReset();
    ClearCanal();
    form.selectCiudad.selectedIndex = 0;
    numcard = 0;
	//PopupMen(29);	
    llenarEmpresas();
    llenarCiudades();
}

function maskara() {
    jQuery(function ($) {
        $.mask.definitions['H'] = '[012]';
        $.mask.definitions['I'] = '[0]';
        $.mask.definitions['J'] = '[1]';
        $.mask.definitions['N'] = '[0123456789]';

        $.mask.definitions['T'] = '[3456]';

        $.mask.definitions['P'] = '[2345678]';

        $.mask.definitions['V'] = '[567]';
        $.mask.definitions['W'] = '[01]';
        $.mask.definitions['X'] = '[0123]';

        $("#inputRuc").mask("HNNNNNNNNNIIJ");
        $("#inputOrden").mask("1VW#X#####");
        $("#inputTelefono").mask("(0P) ### ####? ext ####");
        $("#inputCelular").mask("09 #### ####");
        $("#tnumero").mask("T### #### #### ##?##");
        $("#inputRecord").mask("******");
        $("#inputTourcode").mask("******?***");
        $("#boletos").mask("### ##########?");

    });
    mascara = true;
}

function TituloSolicitud() {
    tituloF = "SOLICITUD ";
    if (emergencia())
        tituloF = " EMERGENCIA ";
    tituloS = "";
    tituloC = "";
    tituloT = "";

    if (form.selectCiudad.value == "UIO")
        tituloC = "UIO";
    else if (form.selectCiudad.value == "GYE")
        tituloC = "GYE";
    if (form.selectBoletos.value == "NACIONALES")
        tituloT = "NACIONALES";
    else if (form.selectBoletos.value == "INTERNACIONALES")
        tituloT = "INTERNACIONALES";
    if (form.selectServicio.value == "EMISION")
        tituloS = "EMISI&Oacute;N";
    else if (form.selectServicio.value == "REVISION")
        tituloS = "REVISI&Oacute;N";
    else if (form.selectServicio.value == "ANULACION")
        tituloS = "ANULACI&Oacute;N";
    else if (form.selectServicio.value == "REMBOLSO")
        tituloS = "REMBOLSO";

    return tituloF + tituloS + " WEB " + tituloC + " BOLETOS " + tituloT;
}

function selectadd(selectx, texto) {
    var option = document.createElement("option");

    option.text = texto;
    if (texto == "Seleccione...") {
        option.value = "";
    } else {
        option.value = texto;
    }
    try {
        selectx.add(option, selectx.options[null]);
    }
    catch (e) {
        selectx.add(option, null);
    }
}

function checaNum(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

function ClearFrom() {
    for (i = 10; i <= 75; i++) {
        form.elements[i].value = "";
        form.elements[i].className = claseNormal;
    }	
    form.selectPasajerosEmitir.selectedIndex = 1;
    form.selectCiudad.selectedIndex = 0;
    form.selectBoletos.selectedIndex = 0;
    form.selectOperador.selectedIndex = 0;
    form.selectServicio.selectedIndex = 0;
    form.selectTipo.selectedIndex = 0;
//	form.selectTipo2.selectedIndex = 0;
    form.selectBan2.selectedIndex = 0;
    form.selectBan3.selectedIndex = 0;
    form.inputComentario.value="";
    form.tvtc.selectedIndex = 0;
    form.taereo.selectedIndex = 0;
    form.temisor.selectedIndex = 0;
    form.tpago.selectedIndex = 0;
    form.tplazo.selectedIndex = 0;
    form.tmes.selectedIndex = 0;
    form.tanio.selectedIndex = 0;
    form.tauto.selectedIndex = 0;
    form.selectPago.selectedIndex = 0;
    form.chkCondiciones.checked = true;
    $("#inputPwdAgente").removeAttr("readonly");
    $("#inputPwdAgente").css("background-color","white");
    
    document.getElementById("boladd").value = "&nbsp;&nbsp;&nbsp;>> &nbsp;&nbsp;&nbsp;";
    document.getElementById("boldel").value = "&nbsp;&nbsp;&nbsp;<<&nbsp;&nbsp;&nbsp;";
    document.getElementById("depadd").value = "&nbsp;&nbsp;&nbsp;>>&nbsp;&nbsp;&nbsp;";
    document.getElementById("depdel").value = "&nbsp;&nbsp;&nbsp;<<&nbsp;&nbsp;&nbsp;";
    document.getElementById("tadd").value = "Agregar tarjeta";
    document.getElementById("tdel").value = "Borrar tarjetas";
    
    clearFileInput('file1');
    
//	form.selectCiudad.prototype;
    document.getElementById("selectCiudad").focus();

}

function ClearCanal() {
    form.auto_canal1.checked = false;
    form.auto_canal2.checked = false;
    form.auto_canal3.checked = false;
    form.auto_canal4.checked = false;

    document.getElementById('sCanal1').className = "Normal";
    document.getElementById('sCanal2').className = "Normal";
    document.getElementById('sCanal3').className = "Normal";
    document.getElementById('sCanal4').className = "Normal";

    form.auto_canal1.className = "input";
    form.auto_canal2.className = "input";
    form.auto_canal3.className = "input";
    form.auto_canal4.className = "input";

    form.canal1.value = false;
    form.canal2.value = false;
    form.canal3.value = false;
    form.canal4.value = false;
    auto_canal_update1(0);
    auto_canal_update2(0);
    auto_canal_update3(0);
    auto_canal_update4(0);
}

function ocultarFila(num, ver) {
    dis = ver ? '' : 'none';
    //console.log(num);
    
    tr = document.getElementById('formu').getElementsByTagName('tr')[num];
    //console.log(tr);
    tr.style.display = dis;
}
function filaVisual(classNombre, mostrarBool) {
    //console.log(classNombre);
    dis = mostrarBool ? '' : 'none';
    $('tr.'+classNombre).css("display",dis);
}
function classVisual(classNombre, mostrarBool) {
    //console.log(classNombre);
    dis = mostrarBool ? '' : 'none';
    $('.'+classNombre).css("display",dis);
}
function llenarEmpresas() {
    $.ajax({
        type: "POST",
        data: {action: 'dbEmp'},
        url: 'DBJSONInt.php',
        dataType: 'json',
        success: function (data) {
            var select = $("#selectEmpresaRec"), options = '', hdnEmpresa = $("#selectEmpresaRecibe");
            select.empty();            
            for (var i = 0; i < data.length; i++)
            {
                options += "<option selected value='" + data[i]['id'] + "'>" + data[i]['reg'] + "</option>";
                hdnEmpresa.val( data[i]['id']);
            }

            select.append(options);
        }
    });

}

function llenarCiudades() {
    $.ajax({
        type: "POST",
        data: {action: 'dbCiu'},
        url: 'DBJSONInt.php',
        dataType: 'json',
        success: function (data) {
            var select = $("#selectCiudad"), options = '';
            select.empty();
            select.append(" <OPTION selected>Seleccione...</OPTION>");
            for (var i = 0; i < data.length; i++)
            {
                options += "<option value='" + data[i]['id'] + "'>" + data[i]['reg'] + "</option>";
            }

            select.append(options);
        }
    });

}

function clearFileInput(ctrlId)
{
    var oldInput = document.getElementById(ctrlId);
    
    var newInput = document.createElement("input");
    
    newInput.type = "file";
    newInput.id = oldInput.id;
    newInput.name = oldInput.name;
    newInput.className = oldInput.className;
    newInput.style.cssText = oldInput.style.cssText;
    // copy any other relevant attributes
    
    oldInput.parentNode.replaceChild(newInput, oldInput);
}