<?php

require_once('funciones.inc');
$conexion= CONNECT ();
/*
* The 'campaign' admin defined origin for the lead
* Usage '?cmpsrc=thecampaignsource'
*/
$cmpsrc=$cmpsrc;
/*
* The 'organic' admin defined origin for the lead
* Usage '?origen=thecampaignsource'
*/
$origen=$proveniencia;
//The Full URL from which the lead was created
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//$cmpsrc=$_REQUEST['cmpsrc'];
//$origen=$_REQUEST['origen'];

//if( (empty($cmpsrc))or($cmpsrc=="")){
//mail("test@test.com","Origen vacio landing",$_SERVER['HTTP_REFERER'],"From: formol@no-reply.com");
//}

?>

<form name="formol" id="formol" class="formulario" method="post" action="gracias.php?origen=<?php echo($origen); ?>">

  <input type="hidden" name="cmpsrc" id="cmpsrc" value="<?php echo($cmpsrc)?>">
  <input type="hidden" value="<?php echo($origen);?>" name="origen" id="origen" />
  <input type="hidden" value="REGISTRO EN FORM" name="solicitud" id="solicitud" />
  <input type="hidden" name="actual_link" id="actual_link" value="<?php echo($actual_link)?>">

  <div class="row">
    <div class="col-xs-12 col-sm-6">
      <div class="form-group formfield-required field">
        <label for="nombre_suc" class="sr-only">¿Qué ciudad eliges?</label>
        <select class="nombre_suc form-control" id="nombre_suc" name="nombre_suc">
          <option value="" >Selecciona la ciudad</option>
          <option value="CIUDAD DE MEXICO" >Ciudad de México</option>
          <option value="GUADALAJARA">Guadalajara</option>
          <option value="MONTERREY">Monterrey</option>
        </select>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6">
      <div class="form-group formfield-required field">
        <label for="estado" class="sr-only">¿En qué estado vives?</label>
        <select name="estado" class="estado form-control" id="estado">
          <option select="" value="">¿En qué estado vives?</option>
          <option value="Aguascalientes">Aguascalientes</option>
          <option value="Baja California Sur">Baja California Sur</option>
          <option value="Baja California Norte">Baja California Norte</option>
          <option value="Campeche">Campeche</option>
          <option value="Coahuila">Coahuila</option>
          <option value="Colima">Colima</option>
          <option value="Chiapas">Chiapas</option>
          <option value="Chihuahua">Chihuahua</option>
          <option value="Distrito federal">Ciudad de México</option>
          <option value="Durango">Durango</option>
          <option value="Guanajuato">Guanajuato</option>
          <option value="Guerrero">Guerrero</option>
          <option value="Hidalgo">Hidalgo</option>
          <option value="Jalisco">Jalisco</option>
          <option value="México">Estado de México</option>
          <option value="Michoacán">Michoacán</option>
          <option value="Morelos">Morelos</option>
          <option value="Nayarit">Nayarit</option>
          <option value="Nuevo león">Nuevo León</option>
          <option value="Oaxaca">Oaxaca</option>
          <option value="Puebla">Puebla</option>
          <option value="Querétaro">Querétaro</option>
          <option value="Quintana Roo">Quintana Roo</option>
          <option value="San Luis Potosí">San Luis Potosí</option>
          <option value="Sinaloa">Sinaloa</option>
          <option value="Sonora">Sonora</option>
          <option value="Tabasco">Tabasco</option>
          <option value="Tamaulipas">Tamaulipas</option>
          <option value="Tlaxcala">Tlaxcala</option>
          <option value="Veracruz">Veracruz</option>
          <option value="Yucatán">Yucatán</option>
          <option value="Zacatecas">Zacatecas</option>
          <option value="Otro país">Otro país</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-6">
      <div class="form-group formfield-required field">
        <label for="nombre" class="sr-only"></label>
        <input id="nombre" placeholder="Nombre(s)" class="nombre form-control" name="nombre"  value="<? echo($nombre)?>" onkeypress="return alpha(event)" onKeyUp="this.value=this.value.toUpperCase();"  maxlength="20"/>
      </div>
    </div>
    <div class="col-xs-6">
      <div class="form-group formfield-required field">
        <label for="paterno" class="sr-only"></label>
        <input type="text" id="paterno" name="paterno" placeholder="Apellido Paterno" class="apellido-mat form-control" value="<? echo($paterno)?>" onkeypress="return alpha(event)" onKeyUp="this.value=this.value.toUpperCase();"/>
      </div>
    </div>
    <div class="col-xs-6">
      <div class="form-group field">
        <label for="materno" class="sr-only"></label>
        <input type="text" id="materno" name="materno" placeholder="Apellido Materno" class="apellido-pat form-control" value="<? echo($materno)?>" onkeypress="return alpha(event)" onKeyUp="this.value=this.value.toUpperCase();" />
      </div>
    </div>
    <div class="col-xs-6">
      <div class="form-group formfield-required field">
        <select  id="edad" name="edad" class="form-control edad">
          <option value="">Edad</option>
          <?php for($e=18;$e<100;$e++){?>
          <option value="<?php echo ($e);?>"<?php if($edad==$e){ echo('selected');}?>><?php echo($e)?></option>
          <?php }?>
         </select>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-xs-7 col-sm-12 col-md-8 col-lg-8">
      <div class="form-group formfield-required field">
        <label for="email" class="sr-only">E-mail</label>
        <input type="text" name="email" id="email" class="email form-control" value="<? echo($email)?>" onKeyUp="this.value=this.value.toUpperCase();" maxlength="30" onKeyPress="return alphaskype(event)" placeholder="E-mail" />
      </div>
    </div>
    <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 hidden-sm">
      <div class="checkbox checkbox-nomail">
        <label>
          <input type="checkbox" name="noemail" id="noemail" onClick="email.disabled = this.checked; email.value='';" <?php if ($noemail=='on') {echo("checked");} else {echo("");}?> title="No tengo Email" class="check"><span class="no-mail">No tengo E-mail</span>
        </label>
      </div>
    </div>
  </div>

  <!-- tel 1 -->
  <div class="row">
    <div id="type1" class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
      <!--p class="phone-label"><small>Tipo <span class="hidden-md hidden-sm hidden-xs">de</span> tel<span class="hidden-md hidden-sm hidden-xs">éfono</span></small></p-->
      <div class="form-group formfield-required field">
        <label for="tel_principal_op" class="sr-only">Tipo de teléfono</label>
        <select class="form-control  tipo-tel" name="tel_principal_op" id="tel_principal_op" onchange="Refresh_tel_principal_op(this.value)">
          <option value="">Tipo <span class="hidden-md hidden-sm hidden-xs">de</span> tel<span class="hidden-md hidden-sm hidden-xs">éfono</span></option>
          <option value="CASA" <?php if($tel_sec1_op=="CASA"){ echo("selected");}?>>Casa</option>
          <option value="OFICINA" <?php if($tel_sec1_op=="OFICINA"){ echo("selected");}?>>Oficina</option>
          <option value="CELULAR" <?php if($tel_sec1_op=="CELULAR"){ echo("selected");}?>>Celular</option>
        </select>
        <input type="hidden" name="long" id="long" readonly="readonly" class="digitos">
        <input type="hidden" name="varPais" id="varPais" readonly="readonly" class="digitos">
      </div>
    </div>
    <div id="first_tel" class="col-xs-7 col-sm-9 col-md-9 col-lg-9">
      <!--p class="phone-label"><small>Teléfono principal</small></p-->
      <div class="form-group formfield-required field">
        <div id="cel_1_input" class="cell-holder">
          <label for="tel_principal" class="sr-only">Teléfono principal</label>
          <div id="cel_1_addon" class="input-group-addon hidden">044</div>
          <input type="text" class="form-control telefono-1" id="tel_principal" name="tel_principal" placeholder="Teléfono principal" onkeypress="return numeric(event)" onpaste="return false" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" maxlength="10" value="<? echo($tel_sec1)?>">
        </div>
      </div>
    </div>
    <div id="extension1" class="col-xs-3 col-sm-2 col-md-2 col-lg-2 hidden-class">
      <!--p class="phone-label"><small>Ext.</small></p-->
      <div class="form-group field">
        <label for="ext1" class="sr-only">Ext.</label>
        <input name="ext1" id="ext1" class="form-control  telefono-1" onkeypress="return numeric(event)" maxlength="4" onkeyup="this.value=this.value.toUpperCase();" placeholder="Ext." >
      </div>
    </div>
  </div>

  <!-- tel 2 -->
  <div class="row">
    <div id="type2" class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
      <!--p class="phone-label"><small>Tipo <span class="hidden-md hidden-sm hidden-xs">de</span> tel<span class="hidden-md hidden-sm hidden-xs">éfono</span></small></p-->
      <div class="form-group field">
        <label for="tel_sec1_op" class="sr-only">Tipo de teléfono</span></label>
        <select class="form-control tipo-tel" name="tel_sec1_op" id="tel_sec1_op" onchange="Refresh_tel_sec2_op(this.value)">
          <option value="">Tipo <span class="hidden-md hidden-sm hidden-xs">de</span> tel<span class="hidden-md hidden-sm hidden-xs">éfono</span></option>
          <option value="CASA"<?php if($tel_sec1_op=="CASA"){ echo("selected");}?>>Casa</option>
          <option value="OFICINA"<?php if($tel_sec1_op=="OFICINA"){ echo("selected");}?>>Oficina</option>
          <option value="CELULAR"<?php if($tel_sec1_op=="CELULAR"){ echo("selected");}?>>Celular</option>
        </select>
      </div>
    </div>
    <div id="second_tel" class="col-xs-7 col-sm-9 col-md-9 col-lg-9">
      <!--p class="phone-label"><small>Teléfono principal</small></p-->
      <div class="form-group field">
        <div id="cel_2_input" class="cell-holder">
          <div id="cel_2_addon" class="input-group-addon hidden">044</div>
          <label for="tel_sec1" class="sr-only">Teléfono Secundario</label>
          <input type="text" class="form-control telefono-2" id="tel_sec1" name="tel_sec1" onkeypress="return numeric(event)" placeholder="Teléfono Secundario" onselectstart="return false" onpaste="return false;" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" maxlength="10" value="<? echo($tel_sec1)?>">
        </div>
      </div>
    </div>
    <div id="extension2" class="col-xs-3 col-sm-2 col-md-2 col-lg-2 hidden-class">
      <!--p class="phone-label"><small>Ext.</small></p-->
      <div class="form-group field">
        <label for="ext2" class="sr-only">Ext.</label>
        <input name="ext2" id="ext2" class="form-control  telefono-2" onkeypress="return numeric(event)" maxlength="4" onkeyup="this.value=this.value.toUpperCase();" placeholder="Ext.">
      </div>
    </div>
  </div>

  <!-- tel 3 -->
  <div class="row">
    <div id="type3" class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
      <!--p class="phone-label"><small>Tipo <span class="hidden-md hidden-sm hidden-xs">de</span> tel<span class="hidden-md hidden-sm hidden-xs">éfono</span></small></p-->
      <div class="form-group field">
        <label for="tel_sec2_op" class="sr-only">Tipo de teléfono</span></label>
        <select class="form-control  tipo-tel" name="tel_sec2_op" id="tel_sec2_op" onchange="Refresh_tel_sec3_op(this.value)">
          <option value="">Tipo <span class="hidden-md hidden-sm hidden-xs">de</span> tel<span class="hidden-md hidden-sm hidden-xs">éfono</span></option>
          <option value="CASA">Casa</option>
          <option value="OFICINA">Oficina</option>
          <option value="CELULAR">Celular</option>
        </select>
      </div>
    </div>
    <div id="third_tel" class="col-xs-7 col-sm-9 col-md-9 col-lg-9">
      <!--p class="phone-label"><small>Teléfono principal</small></p-->
      <div class="form-group field">
        <div id="cel_3_input" class="cell-holder">
          <div id="cel_3_addon" class="input-group-addon hidden">044</div>
          <label for="tel_sec2" class="sr-only">Teléfono otro</label>
          <input type="text" class="form-control " name="tel_sec2" id="tel_sec2" onkeypress="return numeric(event)" placeholder="Teléfono otro" value="" onselectstart="return false" onpaste="return false;" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off"  maxlength="10">
        </div>
      </div>
    </div>
    <div id="extension3" class="col-xs-3 col-sm-2 col-md-2 col-lg-2 hidden-class">
      <!--p class="phone-label"><small>Ext.</small></p-->
      <div class="form-group field">
        <label for="ext3" class="sr-only">Ext.</label>
        <input name="ext3" class="form-control  telefono-3" id="ext3" onkeypress="return numeric(event)" maxlength="4" onkeyup="this.value=this.value.toUpperCase();" placeholder="Ext.">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group formfield-required field">
        <label for="medio" class="sr-only">Medio</label>
        <select name="medio" class="form-control" id="medio">
          <option value="">¿Medio por el cual te enteraste de nosotros?</option>
          <option value="TELEVISION">Televisión</option>
          <option value="INTERNET">Internet</option>
          <option value="RECOMENDACION">Recomedación</option>
          <option value="RADIO">Radio</option>
          <option value="PUBLICIDAD IMPRESA">Publicidad Impresa</option>
          <option value="OTRO">OTRO</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <textarea class="form-control " id="comentarios2" name="comentarios2" rows="3" placeholder="Comentarios" onkeyup="this.value=this.value.toUpperCase();" maxlength="250" ></textarea>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group formfield-required text-left privacy-policy">
        <div class="checkbox checkbox-privacy"><label><input type="checkbox" name="acepto" value="1" id="acepto" class="check"><span class="terms-accept">He leído el <a href="aviso-privacidad.html" target="_blank">aviso de privacidad</a></span></label></div>
      </div>
    </div>
  </div>

  <input type="hidden" name="pais" value="MEXICO" />
  <input type="hidden" name="hispana" value="1" />

  <div class="row">
    <div class="col-xs-12">
      <input type="button" class="btn btn-success btn-block btn-lg" id="boton" onClick="submitForm()" value="REGISTRARME">
      <p class="text-center"><small><strong>(Llámenme después)</strong></small></p>
    </div>
  </div>




</form>
