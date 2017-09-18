
// validar tarjeta de credito
function card_value(){

	form.tvtc.className=claseNormal;
	form.taereo.className=claseNormal;
	form.tbanco.className=claseNormal;
	form.temisor.className=claseNormal;
	form.tnumero.className=claseNormal;
	form.tnombre.className=claseNormal;
	form.tmes.className=claseNormal;
	form.tanio.className=claseNormal;
	form.tcodigo.className=claseNormal;
	form.tcodigov.className=claseNormal;
	form.tpago.className=claseNormal;
	form.tplazo.className=claseNormal;
	form.tauto.className=claseNormal;
	form.tautoriza.className=claseNormal;
	form.tautorizav.className=claseNormal;
	form.tneto.className=claseNormal;
	form.tinteres.className=claseNormal;
	form.ttotal.className=claseNormal;
	form.tpax.className=claseNormal;
	form.tarjetac.className=claseNormal;
	
//	form.ttcard.className=claseNormal;
	
	PopupMen(1);
	error=0;	
	var vtc=(form.tvtc.selectedIndex);
	var aereo=(form.taereo.selectedIndex);
	var banco= eliminaEspacios(form.tbanco.value);
	var emisor=(form.temisor.selectedIndex);
	var numero=eliminaEspacios(form.tnumero.value);
	var nombre=eliminaEspacios(form.tnombre.value);
	var pago=(form.tpago.selectedIndex);
	var plazo=(form.tplazo.selectedIndex);
	var mes=(form.tmes.selectedIndex);
	var anio=(form.tanio.selectedIndex);
	var codigo=eliminaEspacios(form.tcodigo.value);
	var codigov=eliminaEspacios(form.tcodigov.value);
	var auto=(form.tauto.selectedIndex);
	var autoriza=eliminaEspacios(form.tautoriza.value);
	var autorizav=eliminaEspacios(form.tautorizav.value);
	var neto=eliminaEspacios(form.tneto.value);
	var interes=eliminaEspacios(form.tinteres.value);
	var total=eliminaEspacios(form.ttotal.value);
	var paxx=eliminaEspacios(form.tpax.value);
	
	if(!validaSelect(vtc)) campoError(form.tvtc);
	if(!validaSelect(aereo)) campoError(form.taereo);
	if(!validaLongitud(banco,0, 5, 50)) campoError(form.tbanco);
	if(!validaSelect(emisor)) campoError(form.temisor);
	if(mascara == true){
		if(!validaLongitud(numero,0, 17, 19)) campoError(form.tnumero);
		if(form.temisor.value == "AMERICAN EXPRESS"){ if(!validaLongitud(numero,0, 18, 18)) campoError(form.tnumero); ;} // 15 + 3
		if(form.temisor.value == "DINERS CLUB"){ if(!validaLongitud(numero,0, 17, 17)) campoError(form.tnumero);}        // 14 + 3
		if(form.temisor.value == "DISCOVER"){ if(!validaLongitud(numero,0, 19, 19)) campoError(form.tnumero);}           // 16 + 3
		if(form.temisor.value == "MASTERCARD"){	if(!validaLongitud(numero,0, 19, 19)) campoError(form.tnumero);}         // 16 + 3 
		if(form.temisor.value == "VISA"){ if(!validaLongitud(numero,0, 19, 19)) campoError(form.tnumero);}               // 16 + 3
	}else{
		if(!validaLongitud(numero,0, 14, 16)) campoError(form.tnumero);
		if(form.temisor.value == "AMERICAN EXPRESS"){ if(!validaLongitud(numero,0, 15, 15)) campoError(form.tnumero);}
		if(form.temisor.value == "DINERS CLUB"){ if(!validaLongitud(numero,0, 14, 14)) campoError(form.tnumero);}
		if(form.temisor.value == "DISCOVER"){ if(!validaLongitud(numero,0, 16, 16)) campoError(form.tnumero);}
		if(form.temisor.value == "MASTERCARD"){	if(!validaLongitud(numero,0, 16, 16)) campoError(form.tnumero);}
		if(form.temisor.value == "VISA"){ if(!validaLongitud(numero,0, 16, 16)) campoError(form.tnumero);}
	}
	
	if(!validaLongitud(nombre,0, 4, 100)) campoError(form.tnombre);
	if(!validaSelect(pago)) campoError(form.tpago);
	if(form.tpago.selectedIndex > 1) if(form.tplazo.selectedIndex == 0) campoError(form.tplazo);
	if(!validaSelect(mes)) campoError(form.tmes);
	if(!validaSelect(anio)) campoError(form.tanio);
	
	var hoy=new Date();
	var fecha1=new Date(hoy.getFullYear(),hoy.getMonth());
	var fecha2=new Date((form.tanio.value),((form.tmes.value)-1));
	if(fecha1 > fecha2){ 
		campoError(form.tmes);
		campoError(form.tanio);
		form.tmes.focus();
	}
	
	if(!validaSelect(auto)) campoError(form.tauto);
	if(vtc == "MYM"){
		if(!validaEntero(codigo,0, 3, 4)) campoError(form.tcodigo);
		if(!validaEntero(codigov,0, 3, 4)) campoError(form.tcodigov);
	} 
	if(vtc == "AGENCIA"){
		if(!validaEntero(autoriza,0, 3, 7)) campoError(form.tautoriza);
		if(!validaEntero(autorizav,0, 3, 7)) campoError(form.tautorizav);
	}
	if(!validaNumero(neto, 0, 1, 10)) campoError(form.tneto);
	if(pago == "DIFERIDO CON INTERESES"){
		if(!validaNumero(interes, 0, 1, 10)) campoError(form.tinteres);
		if(neto < 100) campoError(form.tneto);
		if(interes > (neto / 2)) campoError(form.tinteres);
	}
	if(form.tarjetac.value !== ""){
		if(!validaLongitud(paxx,0, 3, 80)) campoError(form.tpax);
	}

	if (error == 1){
		PopupMen(7);
		return false;
	}
	
	PopupCls();
	numcard = numcard + 1;
	


	form.tarjetac.value=form.tarjetac.value+"        TARJETA "+form.temisor.value+ " BANCO " + form.tbanco.value +"\n"; 
	form.tarjetac.value=form.tarjetac.value+"--------------------------------------------------------------------------------"+"\n";
	form.tarjetac.value=form.tarjetac.value+"  EMISOR DE VTC            : " + form.tvtc.value + " \t  AEROLINEA  : "+form.taereo.options[form.taereo.selectedIndex].text+"\n"; 
	form.tarjetac.value=form.tarjetac.value+"  NUMERO DE TARJETA        : " + form.tnumero.value+"\n";
	form.tarjetac.value=form.tarjetac.value+"  NOMBRE TARJETA HABIENTE  : " + form.tnombre.value+"\n";
	form.tarjetac.value=form.tarjetac.value+"  FECHA DE CADUCIDAD       : " + form.tmes.value+"/"+form.tanio.value+" \t";
	if(form.tvtc.value=="MYM" ){
		form.tarjetac.value=form.tarjetac.value+"  COD. DE SEGURIDAD    : **** \n";
	}
	else form.tarjetac.value=form.tarjetac.value+" \n";
	form.tarjetac.value=form.tarjetac.value+"  TIPO DE PAGO             : "+form.tpago.value;

	if(form.tpago.selectedIndex == 1){ form.tarjetac.value=form.tarjetac.value+"\n";}
	else{ form.tarjetac.value=form.tarjetac.value+" "+form.tplazo.value +"\n"; }
		
	form.tarjetac.value=form.tarjetac.value+"  TIPO DE AUTORIZACION     : "+form.tauto.value+"\t";
	form.tarjetac.value=form.tarjetac.value+"NUM. DE AUTORIZACION : ***** \n";
	if (!form.tinteres.value == "") {
		form.tarjetac.value=form.tarjetac.value+"  VALOR TARJETA            :  $ "+form.tneto.value+" \t";
		form.tarjetac.value=form.tarjetac.value+" INTERESES  :  $ "+form.tinteres.value+"\n"; 
	}
	form.tarjetac.value=form.tarjetac.value+"  VALOR TOTAL              :  $ "+form.ttotal.value+"\n";
	if(!form.tpax.value == ""){
		form.tarjetac.value=form.tarjetac.value+"  PAGO A PASAJEROS         : "+form.tpax.value+" \n\n";
	}else form.tarjetac.value=form.tarjetac.value+" \n\n";


	form.ttcard.value=form.ttcard.value+"        TARJETA "+form.temisor.value+ " BANCO " + form.tbanco.value +"\n";
	form.ttcard.value=form.ttcard.value+"--------------------------------------------------------------------------------"+"\n";
	form.ttcard.value=form.ttcard.value+"  EMISOR DE VTC            : "+form.tvtc.value+ " \t  AEROLINEA  : "+form.taereo.options[form.taereo.selectedIndex].text+"\n";
	form.ttcard.value=form.ttcard.value+"  NUMERO DE TARJETA        : "+ numero.replace(/\s/g,'')+"\n";  //form.tnumero.value+"\n";
	form.ttcard.value=form.ttcard.value+"  NOMBRE TARJETA HABIENTE  : "+form.tnombre.value+"\n";
	form.ttcard.value=form.ttcard.value+"  FECHA DE CADUCIDAD       : "+form.tmes.value+"/"+form.tanio.value+" \t";
	if(form.tvtc.value == "MYM"){
		form.ttcard.value=form.ttcard.value+"   COD. DE SEGURIDAD    : "+form.tcodigov.value+" \n";
	}
	else form.ttcard.value=form.ttcard.value+" \n";
	form.ttcard.value=form.ttcard.value+"  TIPO DE PAGO             : "+form.tpago.value;

	if (form.tpago.selectedIndex == 1){ form.ttcard.value=form.ttcard.value+"\n"; }
	else{ form.ttcard.value=form.ttcard.value+" "+form.tplazo.value+"\n"; }

	form.ttcard.value=form.ttcard.value+"  TIPO DE AUTORIZACION     : "+form.tauto.value+" \t";
	form.ttcard.value=form.ttcard.value+"  NUM. DE AUTORIZACION : "+form.tautorizav.value+"\n";
	if (!form.tinteres.value == "") {
		form.ttcard.value=form.ttcard.value+"  VALOR TARJETA            :  $ "+form.tneto.value+" \t";
		form.ttcard.value=form.ttcard.value+" INTERESES  :  $ "+form.tinteres.value+"\n"; 
	}
	form.ttcard.value=form.ttcard.value+"  VALOR TOTAL              :  $ "+form.ttotal.value+"\n";
	if (!form.tpax.value == ""){
		form.ttcard.value=form.ttcard.value+"  PAGO A PASAJEROS         : "+form.tpax.value+"\n\n";
	}else form.ttcard.value=form.ttcard.value+"\n";

	if(form.tauto.value=="MANUAL DIGITADA") form.timelimit.value=30;
	
	var jsonttcard = "";
	if (form.hdnttcard.value===""){
		jsonttcard = llenarTTcardJSON(numero);
		jsonttcard = '{"ttcard":[' + jsonttcard;
	}else{
		jsonttcard = form.hdnttcard.value;
		jsonttcard += ','+llenarTTcardJSON(numero);
	}	
	form.hdnttcard.value =  jsonttcard;
	ClearCard();

	if (numcard > 1){
		blookcard();
		PopupMen(24);
	}else{
		auto_canal_update4(1);
		form.tvtc.focus();
	}
	
}

function ClearCard(){

	form.tvtc.selectedIndex = 0;
	form.taereo.selectedIndex = 0;
	form.tbanco.value = "";
	form.temisor.selectedIndex = 0;
	form.tnumero.value = "";
	form.tnombre.value = "";
	form.tmes.selectedIndex = 0;
	form.tanio.selectedIndex = 0;
	form.tcodigo.value = "";
	form.tcodigov.value = "";
	form.tpago.selectedIndex = 0;
	form.tplazo.selectedIndex = 0;
	form.tauto.selectedIndex = 0;
	form.tautoriza.value = "";
	form.tautorizav.value = "";
	form.tneto.value = "";
	form.tinteres.value = "";
	form.ttotal.value = "";
	form.tpax.value = "";
}

function blookcard(){
	var val = 1;
	//alert ("Hola");
	form.tvtc.disabled = val;
	form.taereo.disabled = val;
	form.tbanco.disabled = val;
	form.temisor.disabled = val;
	form.tnumero.disabled = val;
	form.tnombre.disabled = val;
	form.tpago.disabled = val;
	form.tplazo.disabled = val;
	form.tmes.disabled = val;
	form.tanio.disabled = val;
	form.tcodigo.disabled = val;
	form.tcodigov.disabled = val;
	form.tautoriza.disabled = val;
	form.tauto.disabled = val;
	form.tautorizav.disabled = val;
	form.tneto.disabled = val;
	form.tinteres.disabled = val;
	form.ttotal.disabled = val;
	form.tpax.disabled = val;
	form.tadd.disabled = val;
}

function CardReset(){
	numcard = 0;
	ClearCard();
	form.tarjetac.value="";
	form.ttcard.value="";
	form.hdnttcard.value = "";
	form.tvtc.focus();
	PopupCls();	
}

function auto_canal_update4(value){
	if(value) var val = 0;
	else var val = 1;
	
	form.tvtc.disabled = val;
	form.taereo.disabled = val;
	form.tbanco.disabled = val;
	form.temisor.disabled = val;
	form.tnumero.disabled = val;
	form.tnombre.disabled = val;
	form.tpago.disabled = val;
	form.tplazo.disabled = 1;
	form.tmes.disabled = val;
	form.tanio.disabled = val;
	form.tcodigo.disabled = 1;
	form.tcodigov.disabled = 1;
	form.tautoriza.disabled = val;
	form.tauto.disabled = val;
	form.tautorizav.disabled = val;
	form.tneto.disabled = val;
	form.tinteres.disabled = 1;
	form.ttotal.disabled = val;
	form.tpax.disabled = val;
	form.tadd.disabled = val;
	form.tarjetac.disabled = val;
	form.tdel.disabled = val;
}
function llenarTTcardJSON(numero)
{
	var jsonttcard = '{"temisor":"'+form.temisor.value+'", "tbanco":"'+ form.tbanco.value +'","tvtc":"'+form.tvtc.value +'","taereo":"'+ form.taereo.value+'",';
		jsonttcard += '"numero":"'+ numero.replace(/\s/g,'') +'","tnombre":"'+form.tnombre.value +'","tmes":"'+form.tmes.value +'","tanio":"'+form.tanio.value+'",';
		jsonttcard += '"tcodigov":"'+ form.tcodigov.value +'","tpago":"'+form.tpago.value +'","tplazo":"'+form.tplazo.value +'","tauto":"'+form.tauto.value+'",';
		jsonttcard += '"tautorizav":"'+ form.tautorizav.value +'","tneto":"'+form.tneto.value +'","tinteres":"'+form.tinteres.value +'","ttotal":"'+form.ttotal.value+'",';
		jsonttcard += '"tpax":"'+form.tpax.value+'"}';
	return jsonttcard;
}