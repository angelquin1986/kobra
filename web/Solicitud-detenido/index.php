<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>

<title>SOLICITUD WEB BOLETOS</title>

<link rel="stylesheet" type="text/css" href="style-1.0.1.css">
<!--
	<script type="text/javascript" src="cssrefresh.js">							</script>
 -->   
	<script type="text/javascript" src="jquery-1.7.2.min.js">					
    </script>
	<script type="text/javascript" src="jquery.form.js">						
    </script>
	<script type="text/javascript" src="jquery.maskedinput-1.2.2.js">			
    </script>   

	<script type="text/javascript" src="funcion-1.0.3.js">						
    </script>
	<script type="text/javascript" src="validador-1.0.1.js">							
    </script>
	<script type="text/javascript" src="popup-1.0.2.js">								
    </script>
	<script type="text/javascript" src="js-ynnova.js">							
    </script>  
	<script type="text/javascript" src="validara-1.0.4.js?v=1.1">							
    </script>

	<script type="text/javascript" src="campos-1.0.1.js?v=1.1">								
    </script>
	<script type="text/javascript" src="validcard-1.0.1.js">							
    </script>
	<script type="text/javascript" src="horario-1.0.1.js">							
    </script>
	<script type="text/javascript" src="boletos-1.0.1.js">							
    </script>
 
</head>    

<body>
<form id="formulario" name="formulario" method="POST"  action="" target='_self' enctype="multipart/form-data" > 

<div id="transparencia" >
 <div id="transparenciaMensaje">    
  <div class=redondiadas > 
    	<table width='100%' height='100%' >
            <tr>
		<th align="center" >
                    <div class="Mtitulo" id="TituloM"> </div> 
                </th>
            </tr>
            <tr>
    		<td height='70%' align='left' style="border: black 3px solid #FFF;">&nbsp;
                    <div class="Mcuerpo" id="CuerpoM" > </div> &nbsp;         
                </td>
            </tr>
                <tr>
                    <td height='50px' align="center"  >
                        <table width='100%' height='100%' >
                            <tr style="VERTICAL-ALIGN: bottom;"> 
                                <th>	            			
                                    <div id="Boton2">&nbsp; </div>
                                </th>
                                <th>	            			
                                    <div id="Botonsubmit">  
                                        <button type='submit' id='SendFrom' style='width: 130px;' >Enviar Solicitud</button> 
                                    </div>
                                    <div id="Boton1">  </div>
                                </th>
                            </tr>
                        </table>
                    </td>
  		</tr>
	</table>
  </div>
 </div>
</div>


 	<div class="social1">
    	<div class="divspoiler" >
			<a id="button1" href="#" class="myButton" onclick="if (document.getElementById('Public1').style.display != '') {document.getElementById('Public1').style.display = ''; document.getElementById('button1').text ='ocultar';} else {document.getElementById('Public1').style.display = 'none'; document.getElementById('button1').text = 'mostrar'; }" />
            ocultar </a>
 		</div>
    	<div id="Public1">
	    	<a href="http://catalogomym.com/mym/" target="_blank" >
				<img src="img/Public_MYM-03.png" width="250" height="600"  />
        	</a>
        </div>
	</div>

 	<div class="social2" >
    	<div class="divspoiler2" align="right">
			<a id="button2" href="#" class="myButton" onclick="if (document.getElementById('Public2').style.display != '') {document.getElementById('Public2').style.display = ''; document.getElementById('button2').text ='ocultar';} else {document.getElementById('Public2').style.display = 'none'; document.getElementById('button2').text = 'mostrar'; }" />
            ocultar </a>
 		</div>
    	<div id="Public2">
			<a href="http://catalogomym.com/mym/" target="_blank" >
    	        <img src="img/Public_MYM-04.png" width="250" height="600"  />
        	</a>
        </div>
	</div>

<script type="text/javascript">
mascara = false;
BrowserDetect.init();

function detectIE() {

	
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf('MSIE ');
    var trident = ua.indexOf('Trident/');

    if (msie > 0) {
        // IE 10 or older => return version number
        return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
    }

    if (trident > 0) {
        // IE 11 (or newer) => return version number
        var rv = ua.indexOf('rv:');
        return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
    }

    // other browser
    return false;
}	
if(detectIE() ){
	
	if(detectIE() > 6){
		maskara();
	}else{
		PopupMen(20,"Internet Explorer ver. " + detectIE())
	}

}else{
	
	if(BrowserDetect.browser == "Mozilla"){

		if(BrowserDetect.version !== 11){
			PopupMen(20,"Google Chrome  ver. " + BrowserDetect.version);
		}else maskara();

	}else if(BrowserDetect.browser == "Chrome"){
		if(BrowserDetect.version < 28){
			PopupMen(20,"Google Chrome  ver. " + BrowserDetect.version);
		}else maskara();
	}else if(BrowserDetect.browser == "Firefox"){
		if(BrowserDetect.version < 24){
			PopupMen(20,"Mozilla Firefox ver. " + BrowserDetect.version);
		}else maskara();
	}else{
		PopupMen(21, BrowserDetect.browser +" ver. "+ BrowserDetect.version);
	}
	
	
}
</script>

<div id="formContenedor" >
    <div>
            <a style="font-size:24px;" href="https://kobramymtravel.com/resetting/request" target="_blank"> Obtener Contraseña </a>
    </div>
  <table style="border: black 3px solid;" id="formu" name="formu" >
    <tr id="trLogo">
      <td width="160"  align="center"><img src="img/Logo MYM.jpg" width="110" height="110"  /></td>
      <td width="640" colspan="3" class="headerbg"><div id="tituloA"></div></td>
    </tr>
    
    <?php include("formulario/datosPersonales.php"); ?>
    
    <?php include("formulario/datosReserva.php"); ?>
    
    <?php include("formulario/pagoDirecto.php"); ?>
    
    <?php include("formulario/pagoDepositoEfectivo.php"); ?>
    
    <?php include("formulario/pagoTransferenciaBancaria.php"); ?>
    
    <?php include("formulario/pagoTarjetaCredito.php"); ?>
    
    <?php include("formulario/observaciones.php"); ?>
    
    <?php include("formulario/cargaArchivo.php"); ?>
    
    <tr class='idRowCondiciones'>
      <td colspan="4" align="center">
          <h3> <input type="checkbox" id="chkCondiciones" >He leido y acepto los <a href="#" target="_blank"> términos y condiciones </a></h3>
      </td>
    </tr>
    <tr>
      <td colspan="3">
            <button type="button" style='font-size:14px;width:150px; height:35px;' onClick="validaForm();"  > 
        <strong>Enviar solicitud</strong></button>    
      </td>
      <td align="right">
        <button type="button" style='font-size:12px;width:150px; height:35px;' onClick="PopupMen(5);" >
        Borrar datos</button>
      </td>
    </tr>
  </table>

<table width='100%' border="0" >
  <tr>
    <td width='50%' align='left'>
      <span id="siteseal">
	  <script type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=ZfWUDxZRRPqezD3IWqQSHilt5q7CkOfsasNFVemwPJxP9DVmhGjLsDvxxekC">
      </script>
      </span>

    </td>
    <td width='50%' align='right'>
    <div class="Copyright" align="right">
      <br />
      &copy; Copyright 2014 M&M TRAVEL GROUP 
      <br />
      Realizado por TLG. Marcelo
      <br />
      Versi&oacute;n: 2.3.8 &nbsp;&nbsp;&nbsp;&nbsp;
      Update: 2015/01/08
    </div>
    </td>
  </tr>
</table>    
    
    <br />
  </div>


</form>

</body>
</html>