<tr>
    <td class=FondoNegro colspan="4">DATOS DE RESERVA</td>
</tr>
<tr> <!--12 -->
    <td class=bgblue >Tipo de servicio :</td>
    <td colspan="4" >
        <div id="sServicio" style="width:250px;">
            <SELECT name="selectServicio" id="selectServicio" > 
                <OPTION selected>Seleccione...</OPTION>
                <option value="EMISION">EMISI&Oacute;N DE BOLETOS</option>
                <option value="REVISION">REVISI&Oacute;N DE BOLETOS</option>
                <option value="ANULACION">ANULACI&Oacute;N DE BOLETOS</option>
            </SELECT> 
            <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
        </div>
    </td>
</tr>
<tr class='idRowNumeroDeOrden'>
    <td class=bgblue colspan="1" >N&uacute;mero de orden :</td>
    <td colspan="4">
        <input name="inputOrden" type="text" id="inputOrden" size="15" maxlength="10"/>
        <span style="width:250px;"><img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4' /></span></td>
</tr>
<tr>
    <td class=bgblue>Boletos :</td>
    <td colspan="3">
        <div id="sBoletos" style="width:250px;">
            <SELECT name="selectBoletos" id="selectBoletos">
              <OPTION selected >Seleccione...</OPTION>
              <option value="NACIONALES">NACIONALES</option>
              <option value="INTERNACIONALES">INTERNACIONALES</option>
            </SELECT>
            <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
       </div>
    </td>
</tr>
<tr class='idRowNumeroPasajeros'>
    <td class=bgblue>N&uacute;mero de pasajeros:</td>
    <td colspan="3">
        <div id="sNPasajerosEmitir" style="width:250px;">
            <SELECT name="selectPasajeroEmitir" id="selectPasajerosEmitir">
                <OPTION selected >Seleccione...</OPTION>
                <option selected value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>        
            </SELECT>
            <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
       </div>
    </td>
</tr>
<tr>
    <td class=bgblue>Sistema GDS operadora :</td>
    <td colspan="3">
        <div id="sOperador" style=";width:250px;">
            <SELECT name="selectOperador" id="selectOperador" > 
                <OPTION selected>Seleccione...</OPTION>
            </SELECT>
           <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
        </div>
    </td>
</tr>
<tr id="trRecordGds">
    <td class=bgblue>Record del GDS :</td>
    <td colspan="1">
        <input name="inputRecord" type="text" id="inputRecord" style="text-transform: uppercase;"  size="30" maxlength="50" />	
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
    </td>
    <td class="bgblue trRecordGdsNumeroBoletos" >N&uacute;mero de boletos :</td>
    <td id="trRecordGdsNumeroBoletos" class="trRecordGdsNumeroBoletos">
        <input name="inputNumeroBoletos"  class="inputNumero inputNumeroBoletos" type="text" id="inputNumBoletos" style="text-transform: uppercase;"  size="10" maxlength="2" />	
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
    </td>
</tr>
<tr>
    <td class=bgblue>Tour code :</td>
    <td colspan="3">
        <input name="inputTourcode" type="text" id="inputTourcode" style="text-transform: uppercase;"  size="40" maxlength="50" />
    </td>
</tr>
<tr class='idRowAerolineaDatosReserva'> <!--18 -->
    <td class=bgblue>Aerol&iacute;nea calculo Fee  M&amp;M :</td>
    <td colspan="1" >
        <select name="valueAereolinea" id="idAerolineaDatosReserva" >
          <option selected="selected">Seleccione...</option>
        </select>
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>   
    </td>
    <!--td class=bgblue>Fee por servicios M&amp;M :</td>
    <td colspan="1">
        <div id="sFee" style="width:250px;">
            <SELECT name="selectFee" id="selectFee" > 
              <OPTION>Seleccione...</OPTION>
              <option value="5">$ 5</option>
              <option value="10">$ 10</option>
              <option value="25">$ 25</option>
              <option value="30">$ 30</option>
              <option value="40">$ 40</option>
              <option value="0">NO APLICA</option>
            </select>
            <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'> <strong> + IVA </strong>
        </div>       
    </td-->
</tr>
<tr class='idRowNumeroBoletoNumeroPasajero'>
    <td colspan="1" class=bgblue >N&uacute;mero de boleto : <br /> <br />Nombre del pasajero :
    </td>
    <td colspan="4">
        <table width="560">
            <tr>
                <td width="100">
                    <input name="boletos" type="text" id="boletos" size="18" maxlength="13" />
                </td>
                <td width="50">
                    <button type="button" onClick="Agregar()" id="boladd" name="boladd" > >> </button>
                </td>
                <td width="400" rowspan="3">
                    <div id="stktt" style="width:400px;">
                        <select size="4" id="tktt" name="tktt" style="width: 350px;">
                        </select>
                        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
                    </div>
               </td>
            </tr>
            <tr>
                <td>
                    <input name="pasajero" type="text" id="pasajero" style="text-transform: uppercase;" size="18" maxlength="30" />
                </td>
                <td>
                 <button type="button" onClick="Remover()" id="boldel" name="boldel" > << </button>
               </td>
            </tr>
        </table>
    </td>
</tr>
<tr class='idRowCopiarReserva' >
    <td colspan="1" class=bgblue>Copiar reserva (PNR) :</td>
</tr> 
<tr class='idRowCopiarReserva'>
    <td colspan="5">
        <textarea name="inputPnr" cols="80" rows="10" id="inputPnr" ></textarea>
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
    </td>
</tr>  
<tr class='idRowCopiarReserva2'>
    <td colspan="1" class=bgblue>Copiar tarifa reserva :</td>
</tr>
<tr class='idRowCopiarReserva2'>
    <td colspan="4"><textarea name="inputTarifa" cols="80" rows="10" id="inputTarifa"></textarea>
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
    </td>
</tr>