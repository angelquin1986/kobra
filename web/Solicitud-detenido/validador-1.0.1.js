$(document).ready(function(){
	$("button").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    }); 
	
	$('#formulario').ajaxForm({
		type: "POST",
	    processData: true,
		url: "mail.php",

// Respuesta envio satisfactorio		
		beforeSubmit: validate,

// Respuesta envio satisfactorio		
		success: function(data, statusText, xhr, form) {	

			var Mensaje = data.split(",");
			if(Mensaje[0] == "ERROR1"){
				PopupMen(4);
			}else if(Mensaje[0] == "ERROR2"){
				PopupMen(4);
			}else if(Mensaje[0] == "ERROR3"){
				PopupMen(27, Mensaje[1] );
			}else if(Mensaje[0] == "ERROR4"){
				PopupMen(27, Mensaje[1]);
			}else if(Mensaje[0] == "ERROR5"){
				PopupMen(27, Mensaje[1]);
			}else if(Mensaje[0] == "ERROR6"){
				PopupMen(42, Mensaje[1]);
			}else {
				PopupMen(3, data);
				numcard = 0;			
				ClearFrom();
				ClearCard();
				ClearCanal();
				ClearB();
				DClearB();
				document.getElementById('canal1').value = "";
				document.getElementById('canal2').value = "";
				document.getElementById('canal3').value = "";
				document.getElementById('canal4').value = "";
				document.getElementById('auto_canal1').value = false;
				document.getElementById('auto_canal2').value = false;
				document.getElementById('auto_canal3').value = false;
				document.getElementById('auto_canal4').value = false;

			}
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

		},

// Errores de Formulario
		error: function(jqXHR, textStatus, error) {

		}
	});

// Validador del Formulaario
	function validate(formData, jqForm, options) {

		PopupCls();
		PopupMen(1);

		if (emergencia()) form.selectFee.disabled = 0;
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
});
