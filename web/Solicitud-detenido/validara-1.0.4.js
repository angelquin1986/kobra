function validaForm(){
//	document.getElementById('sCiudad').className="Normal";
	document.getElementById('sCanal1').className="Normal";
	document.getElementById('sCanal2').className="Normal";
	document.getElementById('sCanal3').className="Normal";
	document.getElementById('sCanal4').className="Normal";

	for(i=1; i<=69; i++) {
		form.elements[i].className=claseNormal;
	}
	var errorCondiciones = 0;
	PopupMen(1);
	error=0;
	var auto1=(form.auto_canal1.checked);
	var auto2=(form.auto_canal2.checked);
	var auto3=(form.auto_canal3.checked);
	var auto4=(form.auto_canal4.checked);	
    //    var condiciones = (form.chkCondiciones.checked);	

	var agencia=eliminaEspacios(form.inputAgencia.value);
	var ruc=eliminaEspacios(form.inputRuc.value);
	var correo=eliminaEspacios(form.inputCorreo.value);
	var agente=eliminaEspacios(form.inputAgente.value);
	var telefono=eliminaEspacios(form.inputTelefono.value);
	var celular=eliminaEspacios(form.inputCelular.value);

	var ciudad=(form.selectCiudad.selectedIndex);
	var boletos=(form.selectBoletos.selectedIndex);
        var nPasajeroEmitido=(form.selectPasajeroEmitir.selectedIndex);
	var norden=eliminaEspacios(form.inputOrden.value);	
	var operador=(form.selectOperador.selectedIndex);
	var servicio=(form.selectServicio.selectedIndex);
	
	
	var record=eliminaEspacios(form.inputRecord.value);
	var tourcode=eliminaEspacios(form.inputTourcode.value);
	var pnr=eliminaEspacios(form.inputPnr.value);
	var tarifa=eliminaEspacios(form.inputTarifa.value);

	var ptipo=(form.selectTipo.selectedIndex);
	var efeval2=eliminaEspacios(form.inputVal1.value);

//	var dtipo=(form.selectTipo2.value);
	var dbanc=(form.selectBan2.selectedIndex);
	var val21=eliminaEspacios(form.inputVal21.value);
	var val22=eliminaEspacios(form.inputVal22.value);

	var ban3=(form.selectBan3.selectedIndex);
	var val31=eliminaEspacios(form.inputVal31.value);
	var val32=eliminaEspacios(form.inputVal32.value);

	var card=form.tarjetac.value;

	var comentario=eliminaEspacios(form.inputComentario.value);
	var archivo1= document.getElementById("file1").value;
	
	if(!validaLongitud(ruc, 0, 10, 13)) campoError(form.inputRuc);
	if(!validaLongitud(agencia, 0, 4, 100)) campoError(form.inputAgencia);
	if(!validaCorreo(correo)) campoError(form.inputCorreo);
	if(!validaLongitud(agente, 0, 4, 100)) campoError(form.inputAgente);
	if(!validaLongitud(telefono, 0, 7, 30)) campoError(form.inputTelefono);
	if(!validaLongitud(celular, 0, 10, 12)) campoError(form.inputCelular);
	if(!validaSelect(ciudad)) campoError(form.selectCiudad);        
    /*
		if(!condiciones){ 
            document.getElementById('chkCondiciones').className="Error";  
            errorCondiciones =1;
        }
	*/
	if(!validaSelect(servicio)) campoError(form.selectServicio);
	if(form.selectServicio.selectedIndex > 1){
		if(!validaLongitud(norden, 0, 10, 10)) campoError(form.inputOrden);
	}
	if(!validaSelect(boletos)) campoError(form.selectBoletos);
        
	if(!validaSelect(operador)) campoError(form.selectOperador);

	
	if(!validaLongitud(record, 0, 5, 50)) campoError(form.inputRecord);
	if(!validaLongitud(tourcode, 1, 5, 50)) campoError(form.inputTourcode);

	if(form.selectServicio.selectedIndex >= 3){
		form.auto_canal1.checked = false;
		form.auto_canal2.checked = false;
		form.auto_canal3.checked = false;
		form.auto_canal4.checked = false;
		
		var pago=form.selectPago.value;
		if(form.tktt.length == 0) campoError(form.tktt);
		if(!validaSelect(pago)) campoError(form.selectPago);
		
		if(form.selectPago.selectedIndex > 1){
			var vtc =form.inputVtc.value;
			if(!validaLongitud(vtc, 0, 6, 10)) campoError(form.inputVtc)
		}
	}
	else{
		if(form.selectServicio.selectedIndex == 2) {
			if(form.tktt.length == 0) campoError(form.tktt);
		}
		if(!validaLongitud(pnr, 0, 10, 900000000000)) campoError(form.inputPnr);
		if(!validaLongitud(tarifa, 0, 10, 900000000000)) campoError(form.inputTarifa);
		if(auto1==false && auto2==false){
			if(auto3==false && auto4==false){
				if(!validaCheckd(auto1)){ document.getElementById('sCanal1').className="Error";  error =1;}
				if(!validaCheckd(auto2)){ document.getElementById('sCanal2').className="Error";   error =1;}
				if(!validaCheckd(auto3)){ document.getElementById('sCanal3').className="Error";  error =1;}
				if(!validaCheckd(auto4)){ document.getElementById('sCanal4').className="Error";  error =1;}
			}
		}
	}

	if((form.auto_canal1.checked)==true){
		if(!validaSelect(ptipo)) campoError(form.selectTipo);
		if(!validaNumero(efeval2, 0, 1, 10)) campoError(form.inputVal1);
	}
	
	if((form.auto_canal2.checked)==true){
		var Text = 0;
		if(form.selectBan2.selectedIndex > 0 ) Text = 1;
		if(form.inputVal21.value !== "") Text = 1;
		if(form.inputVal22.value !== "") Text = 1;
		if(form.deposito.length == 0 || Text==1)Dadd();
	}
	
	if((form.auto_canal3.checked)==true){
		if(!validaSelect(ban3)) campoError(form.selectBan3);
		if(!validaEntero(val31, 0, 4, 20)) campoError(form.inputVal31);
		if(!validaNumero(val32, 0, 1, 10)) campoError(form.inputVal32);
	}
	if((form.auto_canal4.checked)==true){
		cardtxt = false;
		if(form.tvtc.selectedIndex > 0) cardtxt = true;
		if(form.taereo.selectedIndex > 0) cardtxt = true;
		if(form.tbanco.value !== "") cardtxt = true;
		if(form.temisor.selectedIndex > 0) cardtxt = true;
		if(form.tnumero.value !== "") cardtxt = true;
		if(form.tnombre.value !== "") cardtxt = true;
		if(form.tmes.selectedIndex > 0) cardtxt = true;
		if(form.tanio.selectedIndex > 0) cardtxt = true;
		if(form.tcodigo.value !== "") cardtxt = true;
		if(form.tcodigov.value !== "") cardtxt = true;
		if(form.tauto.selectedIndex > 0) cardtxt = true;
		if(form.tautoriza.value !== "") cardtxt = true;
		if(form.tautorizav.value !== "") cardtxt = true;
		if(form.tneto.value !== "") cardtxt = true;
		if(form.tinteres.value !== "") cardtxt = true;
		if(form.tpax.value !== "") cardtxt = true;

		if(cardtxt == true) card_value();

		if(!validaLongitud(form.tarjetac.value, 0, 5, 9000000000)) campoError(form.tarjetac);
	}
       // alert($('#idAerolineaDatosReserva').prop('selectedIndex'));
        //valida el valor seleccionado
        if($('#selectServicio').val() === 'EMISION'){
           if(!validaSelect(nPasajeroEmitido)) campoError(form.selectPasajeroEmitir);
            //validar numero de boletos
            var numeroBoleto = eliminaEspacios($('#inputNumBoletos').val());
            if(!validaLongitud(numeroBoleto, 0, 1, 99)) campoErrorElement($('#inputNumBoletos'));
            //validar aereolinea
            if(!validaSelect($('#idAerolineaDatosReserva').prop('selectedIndex'))) campoErrorElement($('#idAerolineaDatosReserva'));
        }
        var errorOrden=false;
        //validar numero de orden 
        if($('#selectServicio').val() === 'REVISION' || $('#selectServicio').val() === 'ANULACION' ){
            //alert(recuperarOrden(form.inputOrden.value,'emision'));
             if(!recuperarOrden(form.inputOrden.value,'emision')){
                 errorOrden=true;
             }
        }
       
        
	if(error == 1){
            PopupMen(7);
	    return false;
	}
        if(errorCondiciones == 1){
		PopupMen(43);
		return false;
	}
        if(errorOrden){
		PopupMen(45,form.inputOrden.value);
		return false;
	}
	PopupMen(2);
}





