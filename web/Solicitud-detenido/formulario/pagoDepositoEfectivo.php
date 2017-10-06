<tr class='idRowDepositoEfectivo'>
    <td class=bgblue >&nbsp;</td>
    <td colspan="3" class=bgblue2 >
        <div id="sCanal2" style="width:250px;">
            <input name="auto_canal2" type="checkbox" id="auto_canal2"/>
            <strong>DEP&Oacute;SITO EN EFECTIVO</strong>
            <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
        </div>
    </td>
</tr>
<tr class='idRowDepositoAlBanco'>
    <td class=bgblue >Dep&oacute;sito al banco M&amp;M :</td>
    <td rowspan="3" colspan="3">
        <table width="580px">
            <tr class='idRowDepositoAlBancoComponente' >
                <td width="150px"><span style="width:150px;">
                    <select name="selectBan2" id="selectBan2">
                       <option selected="selected">Seleccione...</option>
                       <option value="BOLIVARIANO">BOLIVARIANO</option>
                       <option value="GUAYAQUIL">GUAYAQUIL</option>
                       <option value="INTERNACIONAL">INTERNACIONAL</option>
                       <option value="PICHINCHA">PICHINCHA</option>
                       <option value="PRODUBANCO">PRODUBANCO</option>
                    </select>
                    </span></td>
                <td width="50px">
                    <button type="button" onClick="Dadd();" id="depadd"  name="depadd" > >> </button>
                </td>
                <td width="377px" rowspan="3" valign="top" >
                    <div id="stktt" style="width:377px;">
                        <select size="4" id="deposito" name="deposito" style="width: 300px;" >
                        </select>
                        <img src='img/requerido.png' alt='Campo obligatorio' width='8' height='8' vspace='4'>
                    </div>
               </td>
            </tr>
            <tr class='idRowDepositoAlBancoComponente'>
                <td>
                    <input name="inputVal21" type="text" id="inputVal21"  size="15" maxlength="25"/>
                </td>
                <td>
                    <button type="button" onClick="Ddel();" id="depdel"  name="depdel" > << </button>
                </td>
            </tr>
            <tr class='idRowDepositoAlBancoComponente' >
                <td>
                    <input name="inputVal22" type="text" id="inputVal22"  size="15" maxlength="15"/>
                </td>
            </tr>
        </table>


    </td>
</tr>
<tr class='idRowNumeroDocumento'>
    <td class=bgblue >N&uacute;mero de documento :</td>
</tr>  
<tr class='idRowValorDeposito'>
    <td class=bgblue>Valor deposito :</td>
</tr>  