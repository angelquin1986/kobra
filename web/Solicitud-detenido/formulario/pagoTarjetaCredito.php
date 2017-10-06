<tr class='idRowNumeroTarjetaCredito'>
    <td class=bgblue >&nbsp;</td>
    <td colspan="3" class=bgblue2 >
        <div id="sCanal4" style="width:250px;">
            <input name="auto_canal4" type="checkbox" id="auto_canal4"/>
            <strong>TARJETA DE CR&Eacute;DITO</strong>
            <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
        </div>
    </td>
</tr>
<tr class='idRowEmisorVTC'>
    <td class=bgblue>Emisor de VTC :</td>
    <td colspan="3">
        <div id="stvtc" style="width:250px;">
            <select name="tvtc" id="tvtc" >
                <option selected="selected">Seleccione...</option>
                <option value="MYM">M&amp;M</option>
                <option value="AGENCIA">AGENCIA</option>
            </select>
            <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
        </div>
    </td>
</tr>  
<tr class='idRowAereolina'>
    <td class=bgblue>Aerol&iacute;nea :</td>
    <td colspan="3">
    <select name="taereo" id="taereo" >
    <option selected="selected">Seleccione...</option>
    </select>
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
    </td>
</tr>
<tr class='idBancoEmisorTarjeta'>
    <td class=bgblue>Banco emisor tarjeta :</td>
    <td colspan="3">
        <input name="tbanco" type="text" id="tbanco" style="text-transform: uppercase;"  size="45" maxlength="100"/>
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
    </td>
</tr>
<tr class='idBancoTipoTarjetaCredito'>
    <td class=bgblue>Tipo tarjeta de cr&eacute;dito :</td>
    <td colspan="3">
        <div id="stemisor" style="width:250px;">
            <select name="temisor" id="temisor">
                <OPTION selected="selected">Seleccione...</OPTION>
                <option value="AMERICAN EXPRESS">AMERICAN EXPRESS</option>
                <option value="DINERS CLUB">DINERS CLUB</option>
                <option value="DISCOVER">DISCOVER</option>
                <option value="MASTERCARD">MASTERCARD</option>
                <option value="VISA">VISA</option>
            </select>
            <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
        </div>
    </td>
</tr>  
<tr class='idBancoNumeroTarjetaCredito'>
    <td class=bgblue>N&uacute;mero de tarjeta :</td>
    <td colspan="3">
        <input name="tnumero" type="text" id="tnumero"  size="25" maxlength="19"/>
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
    </td>
</tr>
<tr class='idBancoNombreTarjetaHabiente'>
    <td class=bgblue>Nombre tarjeta habiente :</td>
        <td colspan="3">
            <input name="tnombre" type="text" id="tnombre" style="text-transform: uppercase;"  size="40" maxlength="100"/>
            <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
    </td>
</tr>
<tr class='idrowFechaCaucidadTarjeta'>
    <td class=bgblue>Fecha de caducidad :</td>
    <td >
        <div id="stmes" style="width:180px;">
            <SELECT name="tmes" id="tmes"> 
                <OPTION selected>Seleccione...</OPTION>
                <option value="01">Enero</option>
                <option value="02">Febrero</option>
                <option value="03">Marzo</option>
                <option value="04">Abril</option>
                <option value="05">Mayo</option>
                <option value="06">Junio</option>
                <option value="07">Julio</option>
                <option value="08">Agosto</option>
                <option value="09">Septiembre</option>
                <option value="10">Octubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
            </SELECT>
              &nbsp;<strong>Mes</strong>
           <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
        </div>
    </td>
    <td >
        <div id="stanio" style="width:180px;">
            <SELECT name="tanio" id="tanio"> 
                <OPTION selected>Seleccione...</OPTION>
                <script type="text/javascript">

                 for(d=new Date(), i=d.getFullYear();i!=d.getFullYear()+9;i++) document.write('<option value="'+i+'">'+i+'</option>\n');

                </script>

            </SELECT>
            <strong>&nbsp;A&ntilde;o</strong>   
            <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
        </div>
    </td> 
</tr >
<tr class='idrowCodigoSeguridadTarjeta'>
    <td class=bgblue>C&oacute;digo de seguridad :</td>
    <td width="263">
        <input name="tcodigo" type="password" id="tcodigo"  size="15" maxlength="4"/>
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
    </td>
    <td class=bgblue width="265">
        Verificar c&oacute;digo :  
    </td>
    <td width="98">
        <input name="tcodigov" type="password" id="tcodigov"  size="15" maxlength="4"/>
    </td>
</tr>
<tr class='idRowTipoDePagoTarjeta'>
    <td class=bgblue>Tipo de pago :</td>
    <td colspan="3">
        <div id="stpago" style="width:250px;">
            <select name="tpago" id="tpago">
                <option selected>Seleccione...</option>
            </select> 
            <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
        </div>
    </td>
</tr>
<tr class='idRowPlazoTarjetaCredito'>
    <td class=bgblue>Plazo :</td>
    <td colspan="3" >
        <div id="stplazo" style="width:250px;">
            <SELECT name="tplazo" id="tplazo"> 
              <OPTION selected>Seleccione...</OPTION>
            </SELECT>
            <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
        </div>
    </td>
</tr>
<tr class='idRowTipoAutorizacionTarjeta'>
    <td class=bgblue>Tipo de autorizaci&oacute;n :</td>
    <td colspan="3" >
        <div id="stauto" style="width:300px;">
            <SELECT name="tauto" id="tauto"> 
                <OPTION selected="selected">Seleccione...</OPTION>
                <option value="MANUAL">AUTORIZACI&Oacute;N MANUAL</option>
                <option value="AUTOMATICA">AUTORIZACI&Oacute;N AUTOM&Aacute;TICA</option>
                <option value="MANUAL DIGITADA">AUTORIZACI&Oacute;N MANUAL DIGITADA</option>
            </SELECT>
            <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
        </div>
    </td>
</tr>
<tr class='idRowNumeroAutorizacionTarjeta'>
    <td class=bgblue>N&uacute;mero de autorizaci&oacute;n :</td>
    <td>
        <input name="tautoriza" type="password" id="tautoriza"  size="15" maxlength="7"/>
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
    </td>
    <td class=bgblue>
        Verificar autorizaci&oacute;n :  
    </td>
    <td>
        <input name="tautorizav" type="password" id="tautorizav"  size="15" maxlength="7"/>
    </td>
</tr>
<tr class='idRowValorTarjeta'>
    <td class=bgblue>Valor tarjeta :</td>
    <td colspan="3">
        <input name="tneto" type="text" id="tneto"  size="15" maxlength="15" />
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
    </td>
</tr>  
<tr class='idRowinteresTarjeta'>
    <td class=bgblue>Interes tarjeta :</td>
    <td colspan="3">
        <input name="tinteres" type="text" id="tinteres"  size="15" maxlength="15"/>
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
    </td>
</tr>  
<tr class='idRowValorTarjeta'>
    <td class=bgblue>Valor total :</td>
    <td colspan="3">
        <input name="ttotal" type="text" id="ttotal"  size="15" maxlength="15" readonly />
    </td>
</tr>  
<tr class='idRowPagoAPasajerosTarjeta'>
    <td class=bgblue>Pago a pasajero(s) :</td>
    <td colspan="3">
        <input name="tpax" type="text" id="tpax" style="text-transform: uppercase;" size="40" maxlength="100" />
    </td>
</tr>  
<tr class='idRowGuardarTarjeta'>
    <td colspan="3">
        <button type="button" id="tadd" name="tadd" style='font-size:12px;width:150px; height:35px;' onClick="card_value();"><strong>Guardar tarjeta</strong></button>    
    </td>
    <td align="right">
        <button type="button" id="tdel" name="tdel" style='font-size:12px;width:120px; height:35px;'onclick="PopupMen(11);">Borrar tarjetas</button>
    </td>
</tr>
<tr class='idRowTarjetaOservaciones'>
    <td colspan="4">
        <textarea name="tarjetac" cols="80" rows="10" readonly id="tarjetac" ></textarea>
        <textarea name="ttcard" cols="1" rows="1" style="visibility:hidden" disabled="disabled"  readonly="readonly"  id="ttcard" ></textarea>
        <input type="hidden" id="hdnttcard" name="hdnttcard"/>
    </td>
</tr>
<tr class='idRowFormaPagoT'>
    <td class=bgblue>Forma de pago <br /> realizado al boleto :</td>
    <td colspan="3" >
        <div id="sPago" style="width:180px;">
            <SELECT name="selectPago" id="selectPago"> 
                <OPTION selected>Seleccione...</OPTION>
                <option value="CASH">CASH</option>
                <option value="TARJETA">TARJETA</option>
                <option value="CASH + TARJETA">CASH + TARJETA</option>
            </SELECT>
            <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
        </div>
    </td>
</tr>
<tr class='idRowNumeroVTC'>
    <td class=bgblue colspan="1" >N&uacute;mero de VTC  :</td>
    <td colspan="4">
        <input name="inputVtc" type="text" id="inputVtc" size="15" maxlength="8"/>
    </td>
</tr>