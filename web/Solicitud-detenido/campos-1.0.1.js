//

$(document).ready(function(){
/*
	$("button").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    }); 


	$('#formulario').ajaxForm({
		beforeSubmit: validate,
		success: function(data, statusText, xhr, form) {
			
			form = document.getElementById("formulario");
			
			document.getElementById('Norden').value = data;
			if("ERROR1" == data){
				PopupMen(4,"");
			}else if("ERROR2" == data){
				PopupCls();
			}else{
				document.getElementById('Norden').disabled = 1;
				document.getElementById('ttcard').disabled = 1;
				document.getElementById('timelimit').disabled = 1;
				document.getElementById('emergencia').disabled = 1;
				document.getElementById('Grupo').disabled = 1;
				document.getElementById('planpiloto').disabled = 1;
				document.getElementById('canal1').disabled = 1;
				document.getElementById('canal2').disabled = 1;
				document.getElementById('canal3').disabled = 1;
				document.getElementById('canal4').disabled = 1;
				document.getElementById('depoN').disabled = 1;
				document.getElementById('boleN').disabled = 1;
				document.getElementById('canal1').value = "";
				document.getElementById('canal2').value = "";
				document.getElementById('canal3').value = "";
				document.getElementById('canal4').value = "";
//				document.getElementById('boletos').value = "";
				document.getElementById('auto_canal1').value = false;
				document.getElementById('auto_canal2').value = false;
				document.getElementById('auto_canal3').value = false;
				document.getElementById('auto_canal4').value = false;
	
				PopupMen(3,norden);
				ClearFrom();
				ClearCard();
				ClearCanal();
				ClearB();
				DClearB();
			}
		},
		error: function(jqXHR, textStatus, error) {
	        alert( "error: " + jqXHR.responseText);
		}

    });	
	function validate(formData, jqForm, options) {
		PopupCls();
		PopupMen(1);

		if (!validaForm()){
			return false
		}





		
		form.ttcard.disabled = 0;
		form.timelimit.disabled = 0;
		form.emergencia.disabled = 0;
		form.Grupo.disabled = 0;
		form.planpiloto.disabled = 0;
		form.canal1.disabled = 0;
		form.canal2.disabled = 0;
		form.canal3.disabled = 0;
		form.canal4.disabled = 0;
		form.Norden.disabled = 0;
		form.boleN.disabled = 0
		form.depoN.disabled = 0
		
		form.boleN.value = Leer();
		form.depoN.value = DLeer();
		
		
		
	}
	
/*	$("#SendFrom").click(function(){
		PopupCls();
		PopupMen(1);
	});*/
    //colocar el valor de horario emergencia
    emergenciaReal();
    //detectar la perdida del foco
   /** $("#inputOrden").blur(function(){
        console.log(form.inputOrden.value);
    		recuperarOrden(form.inputOrden.value,'emision');
    });*/
    $('#inputRuc').change(function() {
		form.inputRuc.className=claseNormal;
                var idEmp =  form.selectEmpresaRecibe.options[form.selectEmpresaRecibe.selectedIndex].value;
		//recuperarAgencia($(this).val(),idEmp); 
    });	
    
    $('#inputPwdAgente').change(function() {
		form.inputRuc.className=claseNormal;
                //var idEmp =  form.selectEmpresaRecibe.options[form.selectEmpresaRecibe.selectedIndex].value;
                var idEmp =  form.selectEmpresaRecibe.value;
                var usrAg =  form.inputUsuarioAgente.value;
                recuperarAgente(usrAg,idEmp,$(this).val()); 
    });
    
	$('#inputAgencia').change(function() {
        $('#inputAgencia').val(form.inputAgencia.value.toUpperCase());
		form.inputAgencia.className=claseNormal;
    });
	$('#inputAgente').change(function() {
        $('#inputAgente').val(form.inputAgente.value.toUpperCase());
		form.inputAgente.className=claseNormal;
    });
	$('#inputCorreo').change(function() {
		form.inputCorreo.className=claseNormal;
        $('#inputCorreo').val(form.inputCorreo.value.toLowerCase());
    });
	$('#inputTelefono').change(function() {
		form.inputTelefono.className=claseNormal;
    });
	$('#inputCelular').change(function() {
		form.inputCelular.className=claseNormal;
    });
	$('#selectCiudad').change(function() {
		form.selectCiudad.className=claseNormal;
    });
    //seleccion de boletos
    $('#selectBoletos').change(function() {
		Operadora();
		form.selectBoletos.className=claseNormal;
		
    });
    $('#selectOperador').change(function() {
		if(form.selectOperador.selectedIndex == 1){
			PopupMen(30);
		}
		if(form.selectOperador.selectedIndex == 2){
			PopupMen(31);
		}		
		form.selectOperador.className=claseNormal;
    });
    $('#selectServicio').change(function() {
        //alert(form.selectServicio.selectedIndex);
		ClearB();
                console.log(this.value);
		form.pasajero.style.visibility = "hidden";
		form.selectServicio.className=claseNormal;
		form.selectBoletos.selectedIndex = 0;
		form.selectOperador.selectedIndex = 0;
		
		if(this.value === 'EMISION'){
			filacoculta(false,true,false);
			filaVisual('idRowNumeroPasajeros',true);
                        filaVisual('idRowAerolineaDatosReserva',true);
                        classVisual('trRecordGdsNumeroBoletos',true);
                        //$('.trRecordGdsNumeroBoletos').css("display", "")
		}
		else if(this.value === 'REVISION'){
			form.pasajero.style.visibility = "visible";
			filacoculta(true,true,false);
			filaVisual('idRowNumeroPasajeros',false);
		}
		else if(this.value === 'ANULACION'){
			form.pasajero.style.visibility = "visible";
			filacoculta(true,false,true);
			filaVisual('idRowNumeroPasajeros',false);
		}
    });
    $('#inputRecord').change(function() {
            $('#inputRecord').val(form.inputRecord.value.toUpperCase());
		form.inputRecord.className=claseNormal;
    });
    $('#inputTourcode').change(function() {
        $('#inputTourcode').val(form.inputTourcode.value.toUpperCase());
		form.inputTourcode.className=claseNormal;
    });
    $('#Boletos').change(function() {
        form.Boletos.className=claseNormal;
    });
    $('#pasajero').change(function() {
        $('#pasajero').val(form.pasajero.value.toUpperCase());
		form.pasajero.className=claseNormal;
    });

    $('#inputOrden').change(function() {
    form.inputOrden.className=claseNormal;
    });
    $('#tktt').change(function() {
	form.tktt.className=claseNormal;
    });
    $('#inputPnr').change(function() {
		form.inputPnr.className=claseNormal;
    });
    $('#inputTarifa').change(function() {
//		form.inputTarifa.className=claseNormal;
    });
	$('#auto_canal1').change(function() {
//		form.auto_canal1.className=claseNormal;
		document.getElementById('sCanal1').className="Normal"
    });
	$('#selectTipo').change(function() {
//		form.selectTipo.className=claseNormal;
		document.getElementById('sCanal2').className="Normal"
    });
	$('#inputVal1').change(function() {
//		form.inputVal1.className=claseNormal;
		document.getElementById('sCanal3').className="Normal"
    });
	$('#auto_canal2').change(function() {
//		form.auto_canal2.className=claseNormal;
		document.getElementById('sCanal1').className="Normal"
    });
//	$('#selectTipo2').change(function() {
//		form.selectTipo2.className=claseNormal;
//   });
	$('#selectBan2').change(function() {
		form.selectBan2.className=claseNormal;
    });
	$('#inputVal21').change(function() {
		form.inputVal21.className=claseNormal;
    });
	$('#inputVal22').change(function() {
		form.inputVal22.className=claseNormal;
    });
	$('#auto_canal3').change(function() {
		form.auto_canal3.className=claseNormal;
    });
	$('#selectBan3').change(function() {
		form.selectBan2.className=claseNormal;
    });
	$('#inputVal31').change(function() {
		form.inputVal31.className=claseNormal;
        $('#inputVal31').val(form.inputVal31.value.toUpperCase());
    });
	$('#inputVal32').change(function() {
		form.inputVal32.className=claseNormal;
    });
	$('#auto_canal1').change(function() {
		ClaseCanal()
    });
	$('#auto_canal2').change(function() {
		ClaseCanal()
    });
	$('#auto_canal3').change(function() {
		ClaseCanal()
    });
	$('#auto_canal4').change(function() {
		ClaseCanal()
    });
	$('#tvtc').change(function() {
		form.tvtc.className=claseNormal;
		if(form.tvtc.selectedIndex== 1){
			form.tauto.selectedIndex = 3;
			form.tauto.disabled = 1;
			form.tautoriza.disabled = 1;
			form.tautorizav.disabled = 1;
		}else{
			form.tauto.selectedIndex = 0;
			form.tauto.disabled =0;
			form.tautoriza.disabled = 0;
			form.tautorizav.disabled = 0;
		}
		
    });
	$('#taereo').change(function() {
		form.taereo.className=claseNormal;
    });
	$('#tbanco').change(function() {
		form.tbanco.className=claseNormal;
		$('#tbanco').val(form.tbanco.value.toUpperCase());
    });
	$('#temisor').change(function() {
		form.temisor.className=claseNormal;
		Diferido();

    });
	$('#tnumero').change(function() {
		form.tnumero.className=claseNormal;
    });
	$('#tnombre').change(function() {
		form.tnombre.className=claseNormal;
        $('#tnombre').val(form.tnombre.value.toUpperCase());
    });
	$('#tmes').change(function() {
		form.tmes.className=claseNormal;
    });
	$('#tanio').change(function() {
		form.tanio.className=claseNormal;
    });
	$('#tcodigo').change(function() {
		form.tcodigo.className=claseNormal;
    });
	$('#tcodigov').change(function() {
		form.tcodigov.className=claseNormal;
    });
	$('#tpago').change(function() {
		Plazo();
		
		form.tpago.className=claseNormal;
    });
	$('#tplazo').change(function() {
		form.tplazo.className=claseNormal;
    });
	$('#tauto').change(function() {
		form.tauto.className=claseNormal;
    });
	$('#tautoriza').change(function() {
		form.tautoriza.className=claseNormal;
    });
	$('#tautorizav').change(function() {
		form.tautorizav.className=claseNormal;
    });
	$('#tautorizav').change(function() {
		form.tautorizav.className=claseNormal;
    });
	$('#tneto').change(function() {
		form.tneto.className=claseNormal;
    });
	$('#tinteres').change(function() {
		form.tinteres.className=claseNormal;
    });
	$('#ttotal').change(function() {
		form.ttotal.className=claseNormal;
    });
	$('#tpax').change(function() {
		form.tpax.className=claseNormal;
        $('#tpax').val(form.tpax.value.toUpperCase());
    });
	$('#selectPago').change(function() {
		form.selectPago.className=claseNormal;
		vfilas = false
		if(form.selectPago.selectedIndex > 1){
			vfilas = true
		}
		filaVisual('idRowNumeroVTC',vfilas);
              
    });
	$('#inputVtc').change(function() {
		form.inputVtc.className=claseNormal;
    });
	
	$('#file1').change(function() {
		form.file1.className=claseNormal;
    });
	$('#file2').change(function() {
		form.file2.className=claseNormal;
    });
	$('#file3').change(function() {
		form.file3.className=claseNormal;
    });
	$('#inputRuc').keypress(function(e) {
	    patron =/\d/; 
	    return TeclasP(e.which, patron); 		
    });
	$('#inputAgencia').keypress(function(e) {
	    patron =/([a-zA-ZñÑáÁéÉíÍóÓúÚ ])/; 
	    return TeclasP(e.which, patron); 		
	});
	$('#inputAgente').keypress(function(e) {
	    patron =/([a-zA-ZñÑáÁéÉíÍóÓúÚ ])/; 
	    return TeclasP(e.which, patron); 		
	});
	$('#inputCorreo').keypress(function(e) {
	    patron = /([0-9a-zA-Z._@-])/; 
	    return TeclasP(e.which, patron); 		
	});
	$('#inputTelefono').keypress(function(e) {
	    patron =/([0-9-/; ])/; 
	    return TeclasP(e.which, patron); 		
    });
	$('#inputCelular').keypress(function(e) {
	    patron =/\d/; 
	    return TeclasP(e.which, patron); 		
    });
	$('#inputOrden').keypress(function(e) {
	    patron =/\d/; 
	    return TeclasP(e.which, patron); 		
    });

	$('#boletos').keypress(function(e) {
	    patron =/\d/; 
	    return TeclasP(e.which, patron); 		
    });
	$('#pasajero').keypress(function(e) {
	    patron =/([a-zA-ZñÑáÁéÉíÍóÓúÚ ])/; 
	    return TeclasP(e.which, patron); 		
	});

	$('#inputRecord').keypress(function(e) {
	    patron =/([a-zA-Z0-9; ])/; 
	    return TeclasP(e.which, patron); 		
	});
	$('#inputTurcode').keypress(function(e) {
	    patron =/([a-zA-Z0-9; ])/; 
	    return TeclasP(e.which, patron); 		
	});
	$('#inputVal1').keypress(function(e) {
	    patron =/([0-9.])/; 
	    return TeclasP(e.which, patron); 		
	});
	$('#inputVal21').keypress(function(e) {
	    patron =/([0-9])/; 
	    return TeclasP(e.which, patron); 		
        });
	$('#inputVal22').keypress(function(e) {
	    patron =/([0-9.])/; 
	    return TeclasP(e.which, patron); 		
	});
	$('#inputVal31').keypress(function(e) {
	    patron =/([a-zA-Z0-9 ])/; 
	    return TeclasP(e.which, patron); 		
        });
	$('#inputVal32').keypress(function(e) {
	    patron =/([0-9.])/; 
	    return TeclasP(e.which, patron); 		
	});
	$('#tnumero').keypress(function(e) {
	    patron =/\d/; 
	    return TeclasP(e.which, patron); 		
	});
	$('#tbanco').keypress(function(e) {
	    patron =/([a-zA-Z ])/
	    return TeclasP(e.which, patron); 		
	});
	$('#tnombre').keypress(function(e) {
	    patron =/([a-zA-Z ])/
	    return TeclasP(e.which, patron); 		
	});
	$('#tcodigo').keypress(function(e) {
	    patron =/\d/
	    return TeclasP(e.which, patron); 		
	});
	$('#tcodigov').keypress(function(e) {
	    patron =/\d/
	    return TeclasP(e.which, patron); 		
	});
	$('#tautoriza').keypress(function(e) {
	    patron =/\d/
	    return TeclasP(e.which, patron); 		
	});
	$('#tautorizav').keypress(function(e) {
	    patron =/\d/
	    return TeclasP(e.which, patron); 		
	});
	$('#tneto').keypress(function(e) {
	    patron =/([0-9.])/;
	    return TeclasP(e.which, patron); 		
	});
	$('#tinteres').keypress(function(e) {
	    patron =/([0-9.])/;
	    return TeclasP(e.which, patron); 		
	});
	$('#inputVtc').keypress(function(e) {
	    patron =/\d/
	    return TeclasP(e.which, patron); 		
	});
	$('#tpax').keypress(function(e) {
	    patron =/([a-zA-ZñÑáÁéÉíÍóÓúÚ; ])/
	    return TeclasP(e.which, patron); 		
	});
	$('#inputVal1').blur(function() {
		form.inputVal1.className=claseNormal;
		valordec(form.inputVal1);
        });
	$('#inputVal22').blur(function() {
		valordec(form.inputVal22);
        });
	$('#inputVal32').blur(function() {
		valordec(form.inputVal32);
        });
        $('.inputNumero').keypress(function(e) {
	    patron =/([0-9.])/; 
	    return TeclasP(e.which, patron); 		
	});
	$('#tneto').blur(function() {
		valordec(form.tneto);
		if(form.tinteres.value == "") form.ttotal.value = form.tneto.value;
		else {
			if(parseFloat(form.tneto.value) > (parseFloat(form.tinteres.value) * 2)){
				form.ttotal.value = total(form.tneto,  form.tinteres);
				form.tneto.className=claseNormal;
				form.tinteres.className=claseNormal;
			}
			else form.tneto.className=claseError;
		}
		valordec(form.ttotal);
        });
	$('#tinteres').blur(function() {
		valordec(form.tinteres);
		if(form.tneto.value == "") form.ttotal.value = form.tneto.value;
		else{
			if(parseFloat(form.tneto.value) > (parseFloat(form.tinteres.value) * 2)){
				form.ttotal.value = total(form.tneto,  form.tinteres);
				form.tneto.className=claseNormal;
				form.tinteres.className=claseNormal;
			}
			else form.tinteres.className=claseError;
		}
		valordec(form.ttotal);
    });
	$('#tvtc').click(function() {
		var objBole=document.getElementById("tvtc")
		var val = 1;
		if (objBole.value=="MYM") var val = 0;
		form.tcodigo.disabled = val;
		form.tcodigov.disabled = val;
    });
	$('#selectBoletos').click(function(){
		Operadora();
	});
	$('#temisor').click(function(){
		Diferido();
	});
	
	
	$('#tpago').click(function() {
		Plazo();
	});
	$('#tcodigo').blur(function() {
		if(form.tcodigov.value !== ""){
			if(form.tcodigo.value == form.tcodigov.value){
				form.tcodigo.className=claseNormal;			
				form.tcodigov.className=claseNormal;			
			}
			else{
				form.tcodigo.className=claseError;			
				form.tcodigov.className=claseError;			
			}
		}
    });
	$('#tcodigov').blur(function() {
		if(form.tcodigo.value !== ""){
			if(form.tcodigo.value == form.tcodigov.value){
				form.tcodigo.className=claseNormal;			
				form.tcodigov.className=claseNormal;			
			}
			else{
				form.tcodigo.className=claseError;			
				form.tcodigov.className=claseError;			
			}
		}
    });
	$('#tautoriza').blur(function() {
		if(form.tautorizav.value !== ""){
			if(form.tautoriza.value == form.tautorizav.value){
				form.tautoriza.className=claseNormal;			
				form.tautorizav.className=claseNormal;			
			}
			else{
				form.tautoriza.className=claseError;			
				form.tautorizav.className=claseError;			
			}
		}
    });
	$('#tautorizav').blur(function() {
		if(form.tautoriza.value !== ""){
			if(form.tautoriza.value == form.tautorizav.value){
				form.tautoriza.className=claseNormal;			
				form.tautorizav.className=claseNormal;			
			}
			else{
				form.tautoriza.className=claseError;			
				form.tautorizav.className=claseError;			
			}
		}
    });

	$('#auto_canal1').blur(function() {
		ClaseCanal();
		if(form.auto_canal1.checked) form.canal1.value = true;
		else form.canal1.value = false;
    });
	$('#auto_canal2').blur(function() {
		ClaseCanal();
		if(form.auto_canal2.checked) form.canal2.value = true;
		else form.canal2.value = false;
    });
	$('#auto_canal3').blur(function() {
		ClaseCanal();
		if(form.auto_canal3.checked) form.canal3.value = true;
		else form.canal3.value = false;
    });
	$('#auto_canal4').blur(function() {
		if(numcard < 1){
			ClaseCanal();
		}
		if(form.auto_canal4.checked) form.canal4.value = true;
		else form.canal4.value = false;
    });
	$('#auto_canal1').click(function() {
        auto_canal_update1(form.auto_canal1.checked);
		if(form.auto_canal1.checked) form.canal1.value = true;
		else form.canal1.value = false;
    });
	$('#auto_canal2').click(function() {
        auto_canal_update2(form.auto_canal2.checked);
		if(form.auto_canal2.checked) form.canal2.value = true;
		else form.canal2.value = false;
    });
	$('#auto_canal3').click(function() {
        auto_canal_update3(form.auto_canal3.checked);
		if(form.auto_canal3.checked) form.canal3.value = true;
		else form.canal3.value = false;
    });
	$('#auto_canal4').click(function() {
		if(numcard <1){
			auto_canal_update4(form.auto_canal4.checked);
		}
		if(form.auto_canal4.checked) form.canal4.value = true;
		else form.canal4.value = false;
		
		
    });
	
	$('#inputVal1').click(function() {
		form.inputVal1.value = "";
    });
	$('#inputVal22').click(function() {
		form.inputVal22.value = "";
    });
	$('#inputVal32').click(function() {
		form.inputVal32.value = "";
    });
	$('#tneto').click(function() {
		form.tneto.value = "";
    });
	$('#tinteres').click(function() {
		form.tinteres.value = "";
    });

});

function ClaseCanal(){
	form.auto_canal1.className=claseNormal;			
	form.auto_canal2.className=claseNormal;			
	form.auto_canal3.className=claseNormal;			
	form.auto_canal4.className=claseNormal;			
	document.getElementById('sCanal1').className="Normal";
	document.getElementById('sCanal2').className="Normal";
	document.getElementById('sCanal3').className="Normal";
	document.getElementById('sCanal4').className="Normal";
}

function  Plazo(){
    var objBole=form.tpago;
	var x=form.tplazo;

	x.remove(x.all);		
	x.remove(x.all);
	x.remove(x.all);		
	x.remove(x.all);		
	x.remove(x.all);
	x.remove(x.all);		
	x.remove(x.all);		
	x.remove(x.all);
	x.remove(x.all);		
	x.remove(x.all);		
	x.remove(x.all);		

	selectadd(x,"Seleccione...");
	form.tinteres.disabled = 1;
	form.tplazo.disabled = 1;

	if (form.tpago.selectedIndex == 2)	{
		selectadd(x,"3 MESES");
		selectadd(x,"6 MESES");
		selectadd(x,"9 MESES");
		selectadd(x,"12 MESES");
		selectadd(x,"18 MESES");
		selectadd(x,"24 MESES");
		form.tinteres.disabled = 0;
		form.tplazo.disabled = 0;		

	} else if (form.tpago.selectedIndex == 3)	{
		selectadd(x,"3 MESES");
		selectadd(x,"4 MESES");
		selectadd(x,"6 MESES");
		selectadd(x,"7 MESES");
		selectadd(x,"9 MESES");
		selectadd(x,"12 MESES");
		selectadd(x,"15 MESES");
		selectadd(x,"18 MESES");
		selectadd(x,"24 MESES");

		form.tplazo.disabled = 0;
	} else if (form.tpago.selectedIndex == 4)	{
		selectadd(x,"6 MESES");
		selectadd(x,"9 MESES");
		selectadd(x,"12 MESES");
		selectadd(x,"18 MESES");
		selectadd(x,"24 MESES");
		form.tinteres.disabled = 0;
		form.tplazo.disabled = 0;
	}
}

function Diferido(){
	var x=form.tpago;
	
	x.remove(x.all);
	x.remove(x.all);
	x.remove(x.all);
	x.remove(x.all);
	x.remove(x.all);	

	selectadd(x,"Seleccione...");
	selectadd(x,"CORRIENTE");
	selectadd(x,"DIFERIDO CON INTERESES");
	selectadd(x,"DIFERIDO SIN INTERESES");

	if(form.temisor.selectedIndex == 2){
		selectadd(x,"DIFERIDO PLUS");
	}
}

function Operadora(){
	var objBole=form.selectBoletos;
	var x=form.selectOperador;
	var y=form.taereo;

	x.remove(x.all);		
	x.remove(x.all);
	x.remove(x.all);		
//	x.remove(x.all);		

	y.remove(y.all);		
	y.remove(y.all);		
	y.remove(y.all);		
	y.remove(y.all);		
	y.remove(y.all);		
	y.remove(y.all);		
	y.remove(y.all);		
	y.remove(y.all);		
	y.remove(y.all);		
	y.remove(y.all);		
	y.remove(y.all);		
	y.remove(y.all);		
	y.remove(y.all);		
	y.remove(y.all);		
	y.remove(y.all);		
	y.remove(y.all);		

	selectadd(x,"Seleccione...");
   	selectadd(x,"AMADEUS");
	selectadd(x,"SABRE");

	selectadd(y,"Seleccione...");
	
	if (objBole.value=="NACIONALES"){ 
//		selectadd(x,"KIU");
		
		////selectadd(y,"AEROGAL");
		//selectadd(y,"LAN ECUADOR");
		//selectadd(y,"TAME");
		recuperarAerolineas();
		
	}else if(objBole.value=="INTERNACIONALES"){
		/*selectadd(y,"AEROMEXICO");
		selectadd(y,"AEROGAL");
        selectadd(y,"AIR CANADA");
        selectadd(y,"ALITALIA");
        selectadd(y,"AMERICAN");
        selectadd(y,"AVIANCA");
        selectadd(y,"COPA");
        selectadd(y,"DELTA");
        selectadd(y,"IBERIA");
        selectadd(y,"KLM");
        selectadd(y,"LAN ECUADOR");
        selectadd(y,"LUFTHANSA");
        selectadd(y,"TACA IATA");
        selectadd(y,"TAME");
        selectadd(y,"UNITED");*/
		recuperarAerolineas();
	}
        recuperarAerolineasDatosReserva();
}

function Mayusculas(field) {
	field.value = field.value.toUpperCase();
}

function total(subtotal,interes){
	var num1=0,num2=0,resultado=0;
	num1=parseFloat(subtotal.value);
	num2=parseFloat(interes.value);
	resultado=num1+num2;
	return resultado.toFixed(2);
}

function valordec(valor){
	num=parseFloat(valor.value);
	if(isNaN(num)) num = 0; 
	else if(num=="") num = 0; 
	valor.value = num.toFixed(2);
}

function TeclasP(tecla, patron){
	if (tecla==8) return true; 
   	te = String.fromCharCode(tecla); 
    return patron.test(te); 		
}

function auto_canal_update1(value){
	if(value) var val = 0;
	else var val = 1;
	form.selectTipo.disabled = val;
	form.inputVal1.disabled = val;
}
		
function auto_canal_update2(value){
	if(value) var val = 0;
	else var val = 1;
//	form.selectTipo2.disabled = val;
	form.selectBan2.disabled = val;
	form.inputVal21.disabled = val;
	form.inputVal22.disabled = val;
	form.deposito.disabled = val;
}	

function auto_canal_update3(value){
	if(value) var val = 0;
	else var val = 1;
	form.selectBan3.disabled = val;
	form.inputVal31.disabled = val;
	form.inputVal32.disabled = val;
}

function eliminaEspacios(cadena){
// Funcion para eliminar espacios delante y detras de cada cadena
	while(cadena.charAt(cadena.length-1)==" ") cadena=cadena.substr(0, cadena.length-1);
	while(cadena.charAt(0)==" ") cadena=cadena.substr(1, cadena.length-1);
	return cadena;
}

function validaLongitud(valor, permiteVacio, minimo, maximo){
	var cantCar=valor.length;
	if(valor==""){
		if(permiteVacio) return true;
		else return false;
	}
	else{
		if(cantCar>=minimo && cantCar<=maximo) return true;
		else return false;
	}
}

function validaCorreo(valor){
	var reg=/(^[a-zA-Z0-9._-]{1,50})@([a-zA-Z0-9_-]{1,50}).([a-zA-z.]{2,50})$/;
//	var reg = /^(w+)@(w+).([a-zA-z]{2,6})$/;
	if(reg.test(valor)) return true;
	else return false;
}

function validaEntero(valor, permiteVacio, minimo, maximo){
	var reg=/(^[0-9]{1,50}$)/;
	if(reg.test(valor))	{
		var cantCar=valor.length;
		if(valor==""){
			if(permiteVacio) return true;
			else return false;
		}
		else{
			if(cantCar>=minimo && cantCar<=maximo) return true;
			else return false;
		}
	}
	else return false;
}

function validaNumero(valor, permiteVacio, minimo, maximo){
	var reg=/(^[0-9]{1,50}).([0-9]{1,2}$)/;
	if(valor < 4.99) return false;
	if(reg.test(valor)){
		var cantCar=valor.length;
		if(valor==""){
			if(permiteVacio) return true;
			else return false;
		}
		else{
			if(cantCar>=minimo && cantCar<=maximo) return true;
			else return false;
		}
	}
	else return false;
}
function validaSelect(valor){

	if(valor === 0 || valor < 0 || valor == ""){
//	if(valor == "Seleccione..." || valor == "") {
		return false;
	}
	else{
		return true;
	}
}
function validaCheckd(valor){
	if(valor=="") return false;
	else return true;
}
function campoNoError(campo){
	if(!campo.value==""){
		campo.className=claseNormal;
		error=0;
	}
}
function campoError(campo){
	campo.className=claseError;
	error=1;
}

function campoErrorElement(element){
    $(element).addClass(claseError);	
    error=1;
}
function FromReset(){
	for(i=1; i<=70; i++){
		form.elements[i].value="";
		form.elements[i].className=claseNormal;
	}
	ClearCanal();
	form.deposito.value="";
	form.ttcard.value="";
	form.tarjetac.value="";
	form.hdnttcard.value="";
	form.Grupo.value = "";
        form.inputComentario.value="";
	form.selectCiudad.selectedIndex = 0;
	form.selectBoletos.selectedIndex = 0;
	form.selectOperador.selectedIndex = 0;
	form.selectServicio.selectedIndex = 0;
	form.selectTipo.selectedIndex = 0;
//	form.selectTipo2.selectedIndex = 0;
	form.selectBan2.selectedIndex = 0;
	form.selectBan3.selectedIndex = 0;
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
	filacoculta(false,false,false);
	document.getElementById("boladd").value ="&nbsp;&nbsp;&nbsp;>>&nbsp;&nbsp;&nbsp;";
	document.getElementById("boldel").value ="&nbsp;&nbsp;&nbsp;<<&nbsp;&nbsp;&nbsp;";
	document.getElementById("depadd").value ="&nbsp;&nbsp;&nbsp;>>&nbsp;&nbsp;&nbsp;";
	document.getElementById("depdel").value ="&nbsp;&nbsp;&nbsp;<<&nbsp;&nbsp;&nbsp;";
	document.getElementById("tadd").value =" Guardar tarjeta";
	document.getElementById("tdel").value ="Borrar tarjetas";	
	document.getElementById("selectCiudad").focus();
	
//	form.inputRuc.focus();
}
function filacoculta(rfilas,efilas,afilas){
    //console.log(document.getElementById('formu').getElementsByTagName('tr')[0].id);
    //console.log($('.trRecordGdsNumeroBoletos'));
        classVisual('trRecordGdsNumeroBoletos',false);
        filaVisual('idRowAerolineaDatosReserva',false)
        
	filaVisual('idRowNumeroDeOrden',rfilas);
	filaVisual('idRowNumeroBoletoNumeroPasajero',rfilas);
        
	
	filaVisual('idRowCopiarReserva',efilas);
        filaVisual('idRowCopiarReserva2',efilas);
        filaVisual('idRowPagoDirecto',efilas);
	filaVisual('idRowTipoPago',efilas);
	filaVisual('idRowValorPago',efilas);
	
        filaVisual('idRowDepositoEfectivo',efilas);
	filaVisual('idRowDepositoAlBanco',efilas);
	filaVisual('idRowDepositoAlBancoComponente',efilas);

	
        filaVisual('idRowNumeroDocumento',efilas);
	filaVisual('idRowValorDeposito',efilas);
        
	filaVisual('idRowTransferenciaBancaria',efilas);
	filaVisual('idRowBancoMM',efilas);
	filaVisual('idRowNumeroDocumentoB',efilas);
	filaVisual('idRowValorTransferido',efilas);
	filaVisual('idRowNumeroTarjetaCredito',efilas);

	filaVisual('idRowEmisorVTC',efilas);
	filaVisual('idRowAereolina',efilas);
	filaVisual('idBancoEmisorTarjeta',efilas);
	filaVisual('idBancoTipoTarjetaCredito',efilas);
	filaVisual('idBancoNumeroTarjetaCredito',efilas);
	filaVisual('idBancoNombreTarjetaHabiente',efilas);
	filaVisual('idrowFechaCaucidadTarjeta',efilas);
	filaVisual('idrowCodigoSeguridadTarjeta',efilas);
	filaVisual('idRowTipoDePagoTarjeta',efilas);
	filaVisual('idRowPlazoTarjetaCredito',efilas);
	filaVisual('idRowTipoAutorizacionTarjeta',efilas);
	filaVisual('idRowNumeroAutorizacionTarjeta',efilas);
	filaVisual('idRowValorTarjeta',efilas);
	filaVisual('idRowinteresTarjeta',efilas);
	filaVisual('idRowValorTarjeta',efilas);
	filaVisual('idRowPagoAPasajerosTarjeta',efilas);
	filaVisual('idRowGuardarTarjeta',efilas);
	filaVisual('idRowTarjetaOservaciones',efilas);

	filaVisual('idRowFormaPagoT',afilas);
	filaVisual('idRowNumeroVTC',afilas);
        filaVisual('idRowCondiciones',false);
}
function recuperarAgencia(ruc, idEmp){
	 $.ajax({
        type: "POST",
        data: {action: 'dbAgencia', id: ruc, emp : idEmp},
        url: 'DBJSONInt.php',        
        success: function (data) {
            $("#inputAgencia").val("");		
            $("#hdnIdAgencia").val("");			
            var obj = JSON.parse(data);
			if(obj.error > 0 ){
				$("#inputRuc").val("");
				PopupMen(obj.error);
			}
			else{			
				$("#inputAgencia").val(obj.nombre);		
				$("#hdnIdAgencia").val(obj.id);
			}
        }
    });
}

function recuperarAgencia(ruc, idEmp){
	 $.ajax({
        type: "POST",
        data: {action: 'dbAgencia', id: ruc, emp : idEmp},
        url: 'DBJSONInt.php',        
        success: function (data) {
            $("#inputAgencia").val("");		
            $("#hdnIdAgencia").val("");			
            var obj = JSON.parse(data);
			if(obj.error > 0 ){
				$("#inputRuc").val("");
				PopupMen(obj.error);
			}
			else{			
				$("#inputAgencia").val(obj.nombre);		
				$("#hdnIdAgencia").val(obj.id);
			}
        }
    });
}

function recuperarOrden(numeroOrden,tipo){
     var bool = false;
     $.ajax({
        type: "POST",
        async: false,
        data: {action: 'dbOrden', numeroOrden: numeroOrden, tipo : tipo},
        url: 'DBJSONInt.php',        
        success: function (data) {
            datos=JSON.parse(data);
            if(datos.error != 0){
                bool =false;
            }else{
                bool= true;
            }
        }
    });
    return bool;
}

function recuperarAerolineas(){
	 $.ajax({
        type: "POST",
        data: {action: 'dbAero'},
        url: 'DBJSONInt.php',
        dataType: 'json',
        success: function (data) {
            var select = $("#taereo"), options = '';
            select.empty();
            select.append(" <OPTION value='' >Seleccione...</OPTION>");
            for (var i = 0; i < data.length; i++)
            {
                options += "<option value='" + data[i]['id'] + "'>" + data[i]['reg'] + "</option>";
            }

            select.append(options);
        }
    });
}

function recuperarAerolineasDatosReserva(){
	 $.ajax({
        type: "POST",
        data: {action: 'dbAero'},
        url: 'DBJSONInt.php',
        dataType: 'json',
        success: function (data) {
            var select = $("#idAerolineaDatosReserva"), options = '';
            select.empty();
            select.append(" <OPTION value='' >Seleccione...</OPTION>");
            for (var i = 0; i < data.length; i++)
            {
                options += "<option value='" + data[i]['id'] + "'>" + data[i]['reg'] + "</option>";
            }

            select.append(options);
        }
    });
}