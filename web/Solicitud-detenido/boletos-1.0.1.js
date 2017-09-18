function selectadd(selectx,texto){
	var option=document.createElement("option");

	option.text=texto;
	if (texto=="Seleccione..."){
		option.value="";
	}else{ 
		option.value=texto;
	}
	try	{
		selectx.add(option,selectx.options[null]);
	}
	catch (e){
		selectx.add(option,null);
	}
}

function Agregar(){
	error=0;
	form.boletos.className=claseNormal;
	form.pasajero.className=claseNormal;

	var boletos =form.boletos.value;
	var pasajero =form.pasajero.value;

	if(!validaLongitud(boletos, 0, 10, 14)) campoError(form.boletos);
//	if(form.selectServicio.selectedIndex == 3){
		if(!validaLongitud(pasajero, 0, 5, 30)) campoError(form.pasajero);
//	}
	if(error==1){
		PopupMen(7);
		return false;
	}

    var objBole = boletos + " " + pasajero; 
//	if(form.selectServicio.selectedIndex == 3){objBole = objBole + " " + pasajero;}
	var x=document.getElementById('tktt');
	selectadd(x, objBole);
	document.getElementById('boletos').value="";
	document.getElementById('pasajero').value="";
}

function Dadd(){
	error=0;
	form.inputVal21.className=claseNormal;
	form.inputVal21.className=claseNormal;
	form.inputVal22.className=claseNormal;

	var depos1 = (form.selectBan2.value);
	var depos2 = form.inputVal21.value;
	var depos3 = form.inputVal22.value;

	if(!validaSelect(depos1)) campoError(form.selectBan2)
	if(!validaLongitud(depos2, 0, 6, 30)) campoError(form.inputVal21);
	if(!validaLongitud(depos3, 0, 5, 10)) campoError(form.inputVal22);

	if(error==1){
		PopupMen(7);
		return false;
	}
	var objBole = ""
	objBole = objBole + depos1 + " - " + depos2 + " - " + depos3;
	var x=document.getElementById('deposito');
	selectadd(x, objBole);

	form.selectBan2.selectedIndex = 0;
	form.inputVal21.value = "";
	form.inputVal22.value = "";
}
function Ddel(){
	var x=document.getElementById('deposito');
	x.remove(x.selectedIndex);
}

function Remover(){
	var x=document.getElementById('tktt');
	x.remove(x.selectedIndex);
}
function DLeer(){
	var objBole=document.getElementById('deposito');
	TKTT = "";  
	var maximo =objBole.length-1;
	for (i=0; i<=maximo; i++){
		TKTT = TKTT + objBole.options[i].text + "\n";
	}
	return TKTT;
}

function DClearB(){
	var objBole=document.getElementById('deposito');
	var maximo = objBole.length-1;
	for (i=0; i<=maximo; i++){
		objBole.selectedIndex = 0;
		objBole.remove(objBole.selectedIndex);
	}
}

function Leer(){
	var objBole=document.getElementById('tktt');
	TKTT = "";  
	var maximo =objBole.length-1;
	for (i=0; i<=maximo; i++){
		TKTT = TKTT + objBole.options[i].text + "\n";
	}
	return TKTT;
}

function ClearB(){
	var objBole=document.getElementById('tktt');
	var maximo = objBole.length-1;
	for (i=0; i<=maximo; i++){
		objBole.selectedIndex = 0;
		objBole.remove(objBole.selectedIndex);
	}
}
