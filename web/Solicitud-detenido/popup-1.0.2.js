
function PopupMen(mensaje, datos){

	var Titulo = "";	
	var Cuerpo = "";	
	var Boton1 = "";	
	var Boton2 = "";	

	var ciudad = form.selectCiudad.options[form.selectCiudad.selectedIndex].text;

	document.getElementById("Botonsubmit").style.display="none";	

	divBoton1=document.getElementById("Boton1");
	divBoton1.style.display="none";	
	divBoton2=document.getElementById("Boton2");
	divBoton2.style.display="none";	

	if(mensaje==1){
		Titulo = "<img src='img/icon-48-upload.png'>&nbsp;Cargando solicitud &nbsp;&nbsp;";
		Cuerpo = "Espere un momento... &nbsp; <img src='img/progress.gif'> <br> ";
		
	}
// Mensaje envio de solicitud
	else if(mensaje==2){
		Titulo = "<img src='img/icon-48-notice.png'>&nbsp;AVISO DE ENVIO";
		Cuerpo = "&iquest;Desea enviar la solicitud con los datos proporcionados <br>a la Ciudad de <strong>" + ciudad + "</strong>.? <br> <br>S&iacute; presiona <strong>&ldquo;Enviar Solicitud&rdquo;</strong> ser&aacute; bajo su responsabilidad.<br> <strong>&ldquo;Cancelar&rdquo;</strong> para corregir los datos en la solicitud.";
		Boton2="<button type='button' onclick='PopupCls(); return false;' style='width: 90px;' >Cancelar</button>";
		document.getElementById("Botonsubmit").disabled = 0;

		divBoton1=document.getElementById("Botonsubmit");
	}
//retorno de mensaja
	else if(mensaje==3){

		Ciu = " SOLICITUD " + form.selectServicio.value + " WEB " +  form.selectCiudad.options[form.selectCiudad.selectedIndex].text + " BOLETOS " +  form.selectBoletos.value;
		if(emergencia()) 
		Ciu = " EMERGENCIA " + form.selectServicio.value + " WEB " + form.selectCiudad.options[form.selectCiudad.selectedIndex].text + " BOLETOS " + form.selectBoletos.value;
		Titulo = "<img src='img/icon-48-checkin.png'>&nbsp;Solicitud enviada";
		Cuerpo = "Solicitud enviada exitosamente<br>Con n&uacutemero de orden <strong>" + datos + "</strong><br>Su orden fue enviada a la Ciudad <strong>" + ciudad + "</strong> <br><br>Gracias por enviar la <strong>" + Ciu + "</strong> la misma ser&aacute; procesada por uno de nuestros agentes a la brevedad posible.";
		Boton1="<button type='button' onclick='PopupCls();' style='width: 60px;' >Cerrar</button>";
	}
	else if(mensaje==4){
		Titulo = "<img src='img/icon-48-alert.png'>&nbsp;Error de envio";
		Cuerpo = "La solicitud no fue enviada, intente más tarde. <br> <br> Si el problema persiste consulte con su proveedor de servicio Internet";
		Boton1="<button type='button' onclick='PopupCls();' style='width: 60px;' >Cerrar</button>";
	}	
	else if(mensaje==5){
		Titulo = "<img src='img/icon-48-trash.png'>&nbsp;Borrar datos";
		Cuerpo = "&iquest;Desea borrar los datos actuales en la solicitud.? ";
		Boton2="<button type='button' onclick='FromReset(); PopupCls();' style='width: 60px;' > S&iacute;</button>";
		Boton1="<button type='button' onclick='PopupCls();' style='width: 60px;' >No</button>";
	}	
	else if(mensaje==6){
		Titulo = "<img src='img/icon-48-trash.png'>&nbsp;Borrar datos tarjetas";
		Cuerpo = "&iquest;Desea borrar los datos actuales de las tarjetas.? ";
		Boton2="<button type='button' style='width: 60px;' >S&iacute;</button>";
		Boton1="<button type='button' style='width: 60px;' >No</button>";
	}	
	else if(mensaje==7){
		CampoID=" Ruc o C&eacute;dula";
		Titulo = "<img src='img/icon-48-deny.png'>&nbsp;Datos incompletos";
		Cuerpo = "Uno o varios campos no cumplen con la validaci&oacute;n minima requerida. <br> Verifique los campos marcados de rojo.<br><br>Presione <strong>&ldquo;Cerrar&rdquo;</strong> para corregir ...";
		Boton1="<button type='button' onclick='PopupCls();' style='width: 100px;' >Cerrar</button>";
	}	
	else if(mensaje==8){
		
		respuesta = "000001";
		Ciu = " EMISION QUITO";
		Titulo = "<img src='img/icon-48-checkin.png'>&nbsp;Emergancia enviada";
		Cuerpo = "Solicitud enviada exitosamente<br>Con n&uacutemero de orden <strong>" + form.Norden.value + "</strong><br> <br>Gracias por enviar la solicitud de emergencia la misma será procesada por nuestro agente a la brevedad posible.";
		Boton1="<button type='button'  style='width: 100px;' >Cerrar</button>";
	}	
	else if(mensaje==9){
		Titulo = "<img src='img/icon-48-notice.png'>&nbsp;Horario de emergencia";
		Cuerpo = "Nuestro horario normal ha concluido a partir de este momento las solicitudes se enviaran a emergencia, cada solicitud tiene un costo adicional.";
		Boton1="<button type='button' onclick='PopupCls();' style='width: 100px;' >Cerrar</button>";
	}	
	else if(mensaje==10){
		Titulo = "<img src='img/icon-48-alert.png'>&nbsp;Archivo incorrecto";
		Cuerpo = "El archivo no debe ser mayor a 1 Mega bytes o el tipo imagen, documentos, PDF.";
		Boton1="<button type='button' onclick='PopupCls();' style='width: 100px;' >Cerrar</button>";
	}
	else if(mensaje==11){
		Titulo = "<img src='img/icon-48-trash.png'>&nbsp;Borrar datos";
		Cuerpo = "&iquest;Desea borrar los datos actuales en la solicitud.? ";
		Boton2="<button type='button' onclick='CardReset()' style='width: 60px;' >S&iacute;</button>";
		Boton1="<button type='button' onclick='PopupCls();' style='width: 60px;' >No</button>";
	}	
	else if(mensaje==12){
		Titulo = "<img src='img/icon-48-clear.png'>&nbsp;Procesando solicitud";
		Cuerpo = "Espere un momento... &nbsp; <img src='img/progress.gif'>";
	}	
	else if(mensaje==20){
		Titulo = "<img src='img/icon-48-alert.png'>&nbsp;Advertencia ";
		Cuerpo = "Su navegador " + datos + "</br> no es compatible para envio de solicitudes, </br>utilice la una versi&oacute;n mas actual del neavegador.";
		Boton1="<button type='button' onclick='PopupCls();' style='width: 100px;' >Cerrar</button>";
	}	
	else if(mensaje==21){
		Titulo = "<h3><img src='img/icon-48-alert.png'>&nbsp;Advertencia Horario de emergencias</h3> ";
		Cuerpo = "Nuestro horario de emisiones ha concluido a partir de este momento las solicitudes deberan ser envidas solo a emergencia, cada solicitud tiene un costo adicional.</br></br>Cerrar el formulario de Solicitudes o enviar solicitudes de emergencia";
		Boton2="<button type='button' onclick='window.opener = self; self.window.close();' style='width: 160px;'>Cerrar formulario</button>";
		Boton1="<button type='button' onclick='PopupCls();' style='width: 160px;' >Enviar emergencias</button>";
	}		
	else if(mensaje==22){
		Titulo = "<img src='img/icon-48-alert.png'>&nbsp; Advertencia";
		Cuerpo = "Su navegador " + datos + ", no es compatible para envio de solicitudes,</br> se recomienda utilizar: </br></br> * Internet Explorer ver(8, 9 o 10).</br> * Google Chrome ver(28 en adelante).</br> * Morzila Fire Fox ver(20 en adelante).";
		Boton1="<button type='button' onclick='PopupCls();' >Cerrar</button>";
	}	
	else if(mensaje==23){
		Titulo = "<img src='img/icon-48-alert.png'>&nbsp;Advertencia ";
		Cuerpo = "Su navegador " + datos + ", no es compatible para envio de solicitudes,</br> se recomienda utilizar: </br></br> * Internet Explorer ver(8, 9 o 10).</br> * Google Chrome ver(28 en adelante).</br> * Morzila Fire Fox ver(20 en adelante).";
		Boton1="<button type='button' onclick='PopupCls();' >Cerrar</button>";
	}	

	else if(mensaje==24){
		Titulo = "<img src='img/icon-48-alert.png'>&nbsp;Advertencia ";
		Cuerpo = "Por cada orden de servicio solo se admite dos tarjetas de cr&eacute;dito </br>como maximo.</br></br> Ya no puede ingresar otra tarjetas de credito en la orden se servicio.";
		Boton1="<button type='button' onclick='PopupCls();' >Cerrar</button>";
	}	
	else if(mensaje==25){
		Titulo = "<img src='img/icon-48-alert.png'>&nbsp;Advertencia ";
		Cuerpo = "Por cada orden de servicio dos tarjetas de cr&eacute;dito como maximo.</br></br> Ya no puede ingresar mas tarjetas.";
		Boton1="<button type='button' onclick='PopupCls();' >Cerrar</button>";
	}	
	else if(mensaje==26){
		Titulo = "<img src='img/icon-48-alert.png'>&nbsp;Advertencia ";
		Cuerpo = "Por cada orden de servicio dos tarjetas de cr&eacute;dito como maximo.</br></br> Ya no puede ingresar mas tarjetas.";
		Boton1="<button type='button' onclick='PopupCls();' >Cerrar</button>";
	}	
	else if(mensaje==27){
		Titulo = "<img src='img/icon-48-alert.png'>&nbsp;Error de envio";
		Cuerpo = "El archivo es demasiado grande para enviar <br>tama&ntilde;o maximo para envio por archivo es de 4 MB <br> <br>Arhivo no valido; <br>"+datos;
		Boton1="<button type='button' onclick='PopupCls();' >Cerrar</button>";
	}	
	else if(mensaje==28){
		Titulo = "<img src='img/icon-48-alert.png'>&nbsp;Advertencia ";
		Cuerpo = "Por cada orden de servicio dos tarjetas de cr&eacute;dito como maximo.</br></br>No puede ingresar mas tarjetas.";
		Boton1="<button type='button' onclick='PopupCls();' >Cerrar</button>";
	}	
	else if(mensaje==29){
		Titulo = "<img src='img/promocion-vigente.jpg'>";
		Cuerpo = "<br><br><br><br><br><br><br><br><br><br><br><br>";
		Boton1="<button type='button' onclick='PopupCls();' >Cerrar</button>";
	}
	else if(mensaje==30){
		Titulo = "<img src='img/icon-48-alert.png'>&nbsp;Advertencia ";
		Cuerpo = "No olvide compartir su reserva usando el siguiente formato en Amadeus:<br/><br/> <strong>ESUIOE127HA-B,UIOE12111-B,GYEE127E8-B,GYEE12424-B</strong>";
		Boton1="<button type='button' onclick='PopupCls();' >Cerrar</button>";
	}	
	else if(mensaje==31){
		Titulo = "<img src='img/icon-48-alert.png'>&nbsp;Advertencia ";
		Cuerpo = "No olvide compartir su reserva usando el siguiente formato en Sabre:<br/><br/> <strong>6¤TA/4PTB </strong> ó <strong> 6¤TA/7X5B </strong>";
		Boton1="<button type='button' onclick='PopupCls();' >Cerrar</button>";
	}
	else if(mensaje==40){
		Titulo = "<img src='img/icon-48-alert.png'>&nbsp;Advertencia ";
		Cuerpo = "La agencia solicitada no existe o no tiene ninguna relaci&oacuten con la empresa seleccionada ";
		Boton1="<button type='button' onclick='PopupCls();' >Cerrar</button>";
	}
	else if(mensaje==41){
		Titulo = "<img src='img/icon-48-alert.png'>&nbsp;Advertencia ";
		Cuerpo = "El agente ingresado no es v&aacute;lido; Favor verifique lo siguiente : <br/> <ul><li> Que su usuario este escrito correctamente</li><li> Que su password este escrito correctamente</li><li> Que su empresa seleccionada sea la correcta</li></ul> Caso contrario cont&aacute;ctenos para ayudarle con el problema <br/><br/> Por favor recuerde que tiene un máximo de <b>"+datos+"</b> intento(s) antes de que se bloquee su usuario";
		Boton1="<button type='button' onclick='PopupCls();' >Cerrar</button>";
	}else if(mensaje==42){
		Titulo = "<img src='img/icon-48-alert.png'>&nbsp;Error de env&iacute;o ";
		Cuerpo = "El servicio de emisi&oacute;n no recibio su solicitud<br/> Respuesta del servicio: <b>"+datos;
		Boton1="<button type='button' onclick='PopupCls();' >Cerrar</button>";
	}else if(mensaje==43){
		Titulo = "<img src='img/icon-48-alert.png'>&nbsp;Error de env&iacute;o ";
		Cuerpo = "Debe aceptar las Politicas de Seguridad antes de continuar";
		Boton1="<button type='button' onclick='PopupCls();' >Cerrar</button>";
	}else if(mensaje==44){
		Titulo = "<img src='img/icon-48-alert.png'>&nbsp;Advertencia ";
		Cuerpo = "Estimado agente, su usuario se encuentra <b>bloqueado</b> <br/> Por favor contactes&eacute; con el Dpto. Comercial de MYM Travel ";
		Boton1="<button type='button' onclick='PopupCls();' >Cerrar</button>";
	}

	divTransparente=document.getElementById("transparencia");
	divVentana=document.getElementById("transparenciaMensaje");

	divMensaje=document.getElementById("TituloM");
	divMensaje.innerHTML=Titulo;
	divMensaje=document.getElementById("CuerpoM");
	divMensaje.innerHTML=Cuerpo;

//	divBoton1.innerHTML=Boton1; 
	divBoton2.innerHTML=Boton2; 
	
	if (mensaje!==2){divBoton1.innerHTML=Boton1; }
	
	divBoton1.style.display="block";	
	divBoton2.style.display="block";	

	divTransparente.style.display="block";	
	divVentana.style.display="block";	
}

function PopupCls(){
	divTransparente=document.getElementById("transparencia");
	divVentana=document.getElementById("transparenciaMensaje");
	divTransparente.style.display="none";
	divVentana.style.display="none";

	document.getElementById("Botonsubmit").disabled = 1;	
//	document.getElementById("Botonsubmit").style.visibility = "visible";	

}