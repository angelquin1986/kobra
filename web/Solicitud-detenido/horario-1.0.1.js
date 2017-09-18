
function Horarios(){
	$.ajax({
		url: "hora.php",
		cache: false,
		success: function(msg){	
			fechac = msg; 
		},
		error: function(jqXHR, textStatus, errorThrown){ 
			fechac = 'Conexón no responde : '+textStatus; 
		},
		timeout: 100000 

	});	
//	fechac=Muestrafecha();
	
	if (fechac !== form.fecha.value || Eme==0){
		
		form.fecha.value = fechac;
		Eme=60;
	}
	divTitulo=document.getElementById('tituloA');
	if (emergencia() && helpm){
		PopupMen(9);
		helpm = false;
		form.selectFee.selectedIndex=4 ;
		form.selectFee.disabled = 1;
		
		
	}
	else if(!emergencia() && !helpm){
		helpm = true;
		form.selectFee.selectedIndex=0 ;
		form.selectFee.disabled = 0;
	}
	titulofrom = TituloSolicitud();
	divTitulo.innerHTML=titulofrom;
	divTitulo.style.display="block";
    Eme--;		
}
function emergencia() {
	if (Eme == 60){
		$.ajax({
			url: "timer.php",
			cache: false,
			success: function(msg){	
				document.getElementById('emergencia').value = msg; 
			}
		});		
	}
	if(document.getElementById('emergencia').value =="T"){ return true;}
	return false;
}

function makeArray(n){
	this.length = n;
	for (i=1;i<=n;i++){this[i]=0;}
	return this;
}

function Muestrafecha() {
//arreglo de los meses
	var meses = new makeArray();
	meses[0] = "enero";
	meses[1] = "febrero";
	meses[2] = "marzo";
	meses[3] = "abril";
	meses[4] = "mayo";
	meses[5] = "junio";
	meses[6] = "julio";
	meses[7] = "agosto";
	meses[8] = "septiembre";
	meses[9] = "octubre";
	meses[10] = "noviembre";
	meses[11] = "diciembre";
//arreglo de las semanas
	var dias = new makeArray(12);
	dias[0] = "Domingo";
	dias[1] = "Lunes";
	dias[2] = "Martes";
	dias[3] = "Miércoles";
	dias[4] = "Jueves";
	dias[5] = "Viernes";
	dias[6] = "Sábado";

	var hoy=new Date();
	var s = hoy.getSeconds(); 
	var m = hoy.getMinutes(); 
	var h = hoy.getHours(); 
	var S = hoy.getDay(); 
	var d = hoy.getDate();
	var M = hoy.getMonth(); 
	var Y = hoy.getFullYear();
// agregamos un cero al principio para los números <10
	h = checaNum(h);
	m = checaNum(m);
	return dias[S]+", "+d+" de "+meses[M]+" del "+Y +", " + h+":"+m;
} 