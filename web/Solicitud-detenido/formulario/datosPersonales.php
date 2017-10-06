<tr class='idRowDatosPersonales'>
      <td class=FondoNegro colspan="4">DATOS PERSONALES
            <input name="timelimit" type="text" disabled="disabled" id="timelimit" style="visibility:hidden" size="1" />
            <input name="emergencia" type="text" disabled="disabled" id="emergencia" style="visibility:hidden" size="1" />
            <input name="emergenciaPersistir" type="text"  id="emergenciaPersistir" style="visibility:hidden" size="1" />
            <input name="planpiloto" type="text" disabled="disabled" id="planpiloto" style="visibility:hidden" size="1" />
            <input name="fecha6" type="text" disabled="disabled" id="fecha3" style="visibility:hidden" size="1" />
             
      </td>
</tr>
<tr>
      <td class=bgblue>Fecha y hora de env&iacute;o  :</td>
      <td colspan="3"><input name="fecha" type="text" id="fecha" size="40" readonly /> </td>
</tr>
<tr>
      <td class=bgblue>Ciudad destino solicitud :</td>
      <td colspan="3"> 
        <div id="sCiudad" style="width:250px;">
            <SELECT name="selectCiudad" id="selectCiudad">
              <OPTION selected >Seleccione...</OPTION>        
            </SELECT>
            <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
            </div>
        </td>
</tr>
<tr> <!--11 -->
      <td class=bgblue >Empresa destino solicitud :</td>
      <td colspan="4" >
        <div id="sEmpresaRecibe" style="width:250px;">
            <SELECT name="selectEmpresaRec" id="selectEmpresaRec" disabled="" > 
          <!--OPTION selected>Seleccione...</OPTION-->
        </SELECT> 
            <input type="hidden" name="selectEmpresaRecibe" id="selectEmpresaRecibe" value=""/>

        </div>
      </td>
</tr>
<tr>
    <td class=bgblue>Ruc de la agencia:</td>
        <td colspan="3"><input type="text" size="15" maxlength="13" id="inputRuc" name="inputRuc" title="Required to proceed" style="background-color: #CCCCCC;" readonly/>
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
    </td>
</tr>
<tr>
    <td class=bgblue>Nombre de la agencia :</td>
    <td colspan="3"><input name="inputAgencia" type="text" id="inputAgencia" style="text-transform: uppercase;background-color: #CCCCCC;" readonly size="40" maxlength="100" />
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
        <input type="hidden" name="hdnIdAgencia" id="hdnIdAgencia"/>
    </td>
</tr>
<tr>
      <td class=bgblue>Usuario del agente :</td>
      <td colspan="3"><input name="inputUsuarioAgente" type="text"  id="inputUsuarioAgente" style="" size="40" maxlength="100" /> 
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
      </td>
</tr>
<tr>
    <td class=bgblue>Contrase&ntilde;a del agente:</td>
    <td colspan="3"><input name="inputPwdAgente" type="password"  id="inputPwdAgente" style="" size="40" maxlength="100" /> 
       <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
    </td>
</tr>
<tr>
    <td class=bgblue>Nombre del agente :</td>
    <td colspan="3"><input name="inputAgente" type="text"  id="inputAgente" style="text-transform: uppercase;background-color: #CCCCCC;" readonly size="40" maxlength="100" /> 
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
        <input type="hidden" name="hdnIdAgente" id="hdnIdAgente"/>
    </td>
</tr>
<tr>
      <td class=bgblue>Correo electr&oacute;nico :</td>
      <td colspan="3"><input name="inputCorreo" type="text" id="inputCorreo" style="text-transform:lowercase;background-color: #CCCCCC;"  readonly="true" size="40" maxlength="100" /> 
       <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
      </td>
</tr>
<tr>
    <td class=bgblue>Tel&eacute;fono del agente:</td>
    <td colspan="3">
        <input name="inputTelefono" type="text"  id="inputTelefono" style="background-color: #CCCCCC;" readonly size="40" maxlength="30"/> 
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
    </td>
</tr>
<tr>
    <td class=bgblue>Celular del agente:</td>
    <td colspan="3">
        <input name="inputCelular" type="text"  id="inputCelular" readonly style="background-color: #CCCCCC;" size="15" maxlength="12"/> 
        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
    </td>
</tr>