<?php


require "phpmailer.php";
require "smtp.php";
require_once('funciones.inc');
$conexion= CONNECT ();
$prueba_tel="5591862142";

/*
* Data Validations
* We leave a ternary option commented out in case you're hxc and wanna use them
*/
//First Name (& Surname)
if (!empty($_REQUEST['nombre'])){
  $nombre = trim(strtoupper(htmlspecialchars($_REQUEST['nombre'])));
}
//$nombre=trim(strtoupper($_REQUEST['nombre']));

//Last Name
if (!empty($_REQUEST['paterno'])){
  $paterno = trim(strtoupper(htmlspecialchars($_REQUEST['paterno'])));
}
//$paterno=trim(strtoupper($_REQUEST['paterno']));

//Other Name
if (!empty($_REQUEST['materno'])){
  $materno = trim(strtoupper(htmlspecialchars($_REQUEST['materno'])));
}
//$materno=empty($_REQUEST['materno']) ? "" : trim(strtoupper($_REQUEST['materno']));

//Skype
if (!empty($_REQUEST['skype'])){
  $skype = trim(strtoupper($_REQUEST['skype']));
}
//$skype=empty($_REQUEST['skype']) ? "" : trim(strtoupper($_REQUEST['skype']));

//Email
if (!empty($_REQUEST['email'])){
  if (filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) { //Check if it is a valid email
    $email = trim(strtoupper($_REQUEST['email']));
  }
}
//$email=empty($_REQUEST['email']) ? "" : trim(strtoupper($_REQUEST['email']));

//Main Phone Number
if (!empty($_REQUEST['tel_principal'])){
  if (is_numeric($_REQUEST['tel_principal'])) { //Check if it is a number
    $tel_principal = $_REQUEST['tel_principal'];
  }
}
//$tel_principal=empty($_REQUEST['tel_principal']) ? "" : $_REQUEST['tel_principal'] ;

//Type of Main Phone Number
if (!empty($_REQUEST['tel_principal_op'])){
  $tel_principal_op = trim(strtoupper(htmlspecialchars($_REQUEST['tel_principal_op'])));
}
//$tel_principal_op=empty($_REQUEST['tel_principal_op']) ? "" : trim($_REQUEST['tel_principal_op']);

if (!empty($_REQUEST['tel_sec1'])){
  $tel_sec1 = trim($_REQUEST['tel_sec1']);
}
//$tel_sec1=empty($_REQUEST['tel_sec1']) ? "" : trim($_REQUEST['tel_sec1']);
if (!empty($_REQUEST['tel_sec1_op'])){
  $tel_sec1_op = $_REQUEST['tel_sec1_op'];
}
//$tel_sec1_op=empty($_REQUEST['tel_sec1_op']) ? "" : $_REQUEST['tel_sec1_op'];
if (!empty($_REQUEST['tel_sec2'])){
  $tel_sec2 = trim($_REQUEST['tel_sec2']);
}
//$tel_sec2=empty($_REQUEST['tel_sec2']) ? "" :trim($_REQUEST['tel_sec2']);
if (!empty($_REQUEST['tel_sec2_op'])){
  $tel_sec2_op = $_REQUEST['tel_sec2_op'];
}
//$tel_sec2_op=empty($_REQUEST['tel_sec2_op']) ? "" :$_REQUEST['tel_sec2_op'];

//País
if (empty($_REQUEST['pais'])){
  $pais = "MEXICO";
}else{
  $pais = $_REQUEST['pais'];
}
//$pais=empty($_REQUEST['pais']) ? "MEXICO" :$_REQUEST['pais'];

//Estado
if (!empty($_REQUEST['tel_sec2_op'])){
  $estado = $_REQUEST['estado'];
}
//$estado=empty($_REQUEST['estado']) ? "" :$_REQUEST['estado'];

//Sucursal
//País
if (empty($_REQUEST['nombre_suc'])){
  $sucursal = "CIUDAD DE MEXICO";
}else{
  $sucursal = $_REQUEST['nombre_suc'];
}
//$sucursal=empty($_REQUEST['nombre_suc']) ? "CIUDAD DE MEXICO" :$_REQUEST['nombre_suc'];

//Discovery Medium
if (!empty($_REQUEST['medio'])){
  $medio = $_REQUEST['medio'];
}
//$medio=empty($_REQUEST['medio']) ? "" :$_REQUEST['medio'];

//Required Service
if (!empty($_REQUEST['solicitud'])){
  $solicitud = $_REQUEST['solicitud'];
}
//$solicitud=empty($_REQUEST['solicitud']) ? "" :$_REQUEST['solicitud'];

//Required Service
if (!empty($_REQUEST['actual_link'])){
  $actual_link = htmlspecialchars($_REQUEST['actual_link']);
}
//$actual_link=empty($_REQUEST['actual_link']) ? "" :$_REQUEST['actual_link'];

//Contact Times
if (!empty($_REQUEST['horario'])){
  $horario = $_REQUEST['horario'];
}
//$horario=empty($_REQUEST['horario']) ? "" :$_REQUEST['horario'];

//Comments
if (!empty($_REQUEST['comentarios'])){
  $comentarios = htmlspecialchars($_REQUEST['comentarios']);
}
//$comentarios=empty($_REQUEST['comentarios']) ? "" :$_REQUEST['comentarios'];

//Language
if (!empty($_REQUEST['hispana'])){
  $hispana = htmlspecialchars($_REQUEST['hispana']);
}
//$hispana=empty($_REQUEST['hispana']) ? "" :$_REQUEST['hispana'];

//Ignore lead
if (empty($_REQUEST['descartar'])){
  $descartar = "0";
}else{
  $descartar = $_REQUEST['descartar'];
}
//$descartar=empty($_REQUEST['descartar']) ? "0" :$_REQUEST['descartar'];

//Terms & Conditions
if (empty($_REQUEST['acepto'])){
  $aviso = "0";
}else{
  $aviso = $_REQUEST['acepto'];
}
//$aviso=empty($_REQUEST['acepto']) ? "0" :$_REQUEST['acepto'];

//The 'organic' admin defined origin for the lead
if (!empty($_REQUEST['origen'])){
  $proviene = htmlspecialchars($_REQUEST['origen']);
}
//$proviene=empty($_REQUEST['origen']) ? "" :$_REQUEST['origen'];
$proviene=strtoupper($proviene);

// Telephone extensions
$ext1=empty($_REQUEST['ext1']) ? "" :$_REQUEST['ext1'];
$ext2=empty($_REQUEST['ext2']) ? "" :$_REQUEST['ext2'];
$ext3=empty($_REQUEST['ext3']) ? "" :$_REQUEST['ext3'];

// Referer
$referidor=empty($_REQUEST['referidor']) ? "" :$_REQUEST['referidor'];

// The 'campaign' admin defined origin for the lead
$adwords=strtolower($_REQUEST['cmpsrc']);

$agente="";

//Postal Code
$cp=empty($_REQUEST['cp']) ? "" :$_REQUEST['cp'];

//Age
if (!empty($_REQUEST['edad'])){
  $edad = $_REQUEST['edad'];
}
//$edad=empty($_REQUEST['edad']) ? "" :$_REQUEST['edad'];

//Treatments
$tratamientos=$_REQUEST['tratamientos'];
$si_tratamientos=empty($_REQUEST['si_tratamientos']) ? "0" :$_REQUEST['si_tratamientos'];
$tratrReal=empty($_REQUEST['tratrReal']) ? "0" :$_REQUEST['tratrReal'];
//If no treatments
if($tratamientos=="NO"){
  $tratrReal=0;
}

//If Country Mexico
if($pais=="MEXICO"){
	$prueba="";
}else{
	$estado="";
}

//Origin in case there is none
$findme   = 'LANDING';
$pos = strpos($proviene, $findme);
if ($pos !== false) {
   $medio="LANDING";
}

if($pais=="MEXICO"){
	$array=array('0000000000','1111111111','2222222222','3333333333','4444444444','5555555555','6666666666','7777777777','8888888888','9999999999');
	$var_numero = 10;
	$concatena_2 =" ";
	if ($estado == 'OTRO PAÍS') {
		$var_numero = 13;
		$concatena_2 =" ";
	}
}else{
	$array=array('0000000000','1111111111','2222222222','3333333333','4444444444','5555555555','6666666666','7777777777','8888888888','9999999999');
	$var_numero = 10;
	$concatena_2 =" and(CHAR_LENGTH(Tel1)= 10 or CHAR_LENGTH(Tel2) =10 or CHAR_LENGTH(Tel3)=10) ";
}

if((!in_array($tel_principal,$array))&&(strlen($tel_principal)>=10)){
	$concatena=("('".$tel_principal."'");
	$decide=",";

}else{
	$concatena=("(");
	$decide="";
}

if(	(strlen($tel_sec1)>=10) && (!in_array($tel_sec1,$array))	){
	$concatena.=$decide."'".$tel_sec1."'";
	$decide=",";
}//else{
	//$decide="";
//}

if(	(strlen($tel_sec2)>=10) &&	(!in_array($tel_sec2,$array))){
	$concatena.=$decide."'".$tel_sec2."'";
	$decide="";
} else {
	$decide="";
}

$concatena.=$decide.")";
//echo($concatena."<br>");

if($concatena<>"()"){

  $qry_select="select * from formulario where
    ((right(Tel1,$var_numero) in $concatena)
    OR (right(Tel2,$var_numero) in $concatena)
    OR (right(Tel3,$var_numero) in $concatena))
    and Nombre=$nombre
    and ApellidoP=$paterno
    and ApellidoM=$materno $concatena_2 order by FecReg desc limit 1";

  $ejecuta=mysql_query($qry_select);// or die("fallo select");
  $cuenta=mysql_num_rows($ejecuta);
  //echo($qry_select);


  if($cuenta>0){
  $linea=mysql_fetch_array($ejecuta);

  	$Fecreg=strtotime(date($linea['FecReg']));
  	$fin=strtotime(date("Y-m-d H:i:s"))-25200;
  	$inicio= date( strtotime("-24 hours")-25200);

  	if(($Fecreg>=$inicio) && ($Fecreg<=$fin)){
  	   $duplicado=1;
  	}else{
  	   $duplicado=0;
  	}
  }else{
  	$duplicado=0;
  }
  //echo(" Duplicado: ".$duplicado);

  $qry_telefonos="select * from cat_pruebas where (tel_prueba in $concatena)";
  $ejecuta_tels=mysql_query($qry_telefonos);// or die("fallo telefonos");
  $prueba_tel=mysql_num_rows($ejecuta_tels);


  }else{
  	$duplicado=1;
  }// fin vacio tel

if(empty($email)){
  $email="";
}

if($prueba_tel==0){
  $prueba=0;
}else{
  $prueba=1;
}

if(empty($tel_sec1)){
  $tel_sec1="";
  $tel_sec1_op="";
}

if(empty($tel_sec2)){
  $tel_sec2="";
  $tel_sec2_op="";
}
if (empty($descartar)){
  $descartar=0;
}

if(empty($comentarios)){
  $comentarios="";
}

$tel1="";
$tel2="";
$tel3="";

//Validate Main Cellphone
//I got 99 problems and all of them involve the following code:
if($pais=="MEXICO"){
	if(($tel_principal_op=="CELULAR")){
  	if(substr($tel_principal,0,2)<>"04"){
    	if(substr($tel_principal,0,2)=="55"){
    	   $tel1="044".$tel_principal;
      	}else{
      	   $tel1="045".$tel_principal;
      	}
  	}else{
  	   $tel1=$tel_principal;
  	}
	}else{
	   $tel1=$tel_principal;
	}
	//validacion celular secundario1
	if(($tel_sec1_op=="CELULAR")){
  	if(substr($tel_sec1,0,2)<>"04"){
    	if(substr($tel_sec1,0,2)=="55"){
    	   $tel2="044".$tel_sec1;
    	}else{
    	   $tel2="045".$tel_sec1;
    	}
  	}else{
  	   $tel2=$tel_sec1;
  	}
	}else{
	   $tel2=$tel_sec1;
	}
	//validacion celular secundario1
  if(($tel_sec2_op=="CELULAR")){
    if(substr($tel_sec2,0,2)<>"04"){
      if(substr($tel_sec2,0,2)=="55"){
        $tel3="044".$tel_sec2;
      }else{
        $tel3="045".$tel_sec2;
      }
    }else{
      $tel3=$tel_sec2;
    }
  }else{
      $tel3=$tel_sec2;
    }
}else{
    $tel1= $tel_principal;
    $tel2= $tel_sec1;
    $tel3= $tel_sec2;
  }

$aviso=1;

//Profile Definitions
//Maybe teach the kids how to use a switch?
if ((intval($edad)>=35)&&(intval($edad)<=44)&&($tratamientos=="SI")){
	$perfil=1;
}
elseif ((intval($edad)>=28)&&(intval($edad)<=34)&&($tratamientos=="SI")){
	$perfil=2;
}
elseif ((intval($edad)>=35)&&(intval($edad)<=44)&&($tratamientos=="NO")){
	$perfil=3;
}
elseif ((intval($edad)>=28)&&(intval($edad)<=34)&&($tratamientos=="NO")){
	$perfil=4;
}
elseif ((intval($edad)<28)&&($tratamientos=="SI")){
	$perfil=5;
}
elseif ((intval($edad)<28)&&($tratamientos=="NO")){
	$perfil=6;
}
else{
	$perfil=7;
}


$Fecreg=date("Y-m-d H:i:s",((strtotime(date("Y-m-d H:i:s")))-25200));
$qry_insertar="insert into formulario(
  FecReg,
  Proviene,
  nombre_suc,
  Nombre,
  ApellidoP,
  ApellidoM,
  Skype,
  Email,
  Tel1,
  tipo1,
  Tel2,
  tipo2,
  Tel3,
  tipo3,
  estado,
  pais,
  medio,
  Solicitud,
  actual_link,
  horario,
  Comentarios,
  Aviso,
  Adwords,
  Hispana,
  Descartar,
  Duplicado,
  Prueba,
  Descargado,
  Agente,
  cp,
  edad,
  tratamientos,
  numero_tratamientos,
  perfil,
  tratRealizado,
  ext1,
  ext2,
  ext3,
  referidor,
  donaovu)
    values(
  '$Fecreg',
  '$proviene',
  '$sucursal',
  '$nombre',
  '$paterno',
  '$materno',
  '$skype',
  '$email',
  '$tel1',
  '$tel_principal_op',
  '$tel2',
  '$tel_sec1_op',
  '$tel3',
  '$tel_sec2_op',
  '$estado',
  '$pais',
  '$medio',
  '$solicitud',
  '$actual_link',
  '$horario',
  '$comentarios',
  $aviso,
  '$adwords',
  $hispana,
  $descartar,
  $duplicado,
  $prueba,
  0,
  '$agente',
  '$cp',
  $edad,
  '$tratamientos',
  $si_tratamientos,
  $perfil,
  $tratrReal,
  '$ext1',
  '$ext2',
  '$ext3',
  '$referidor',
  0)";
$inserta=mysql_query($qry_insertar) or die('No se logró crear el registro. Sorry mate.');
$registro="
  select max(ID) as ID from formulario where FecReg='$Fecreg'
  and nombre_suc='$sucursal'
  and Nombre='$nombre'
  and ApellidoP='$paterno'
  and ApellidoM='$materno'
  and Skype='$skype'
  and Email='$email'
  and Tel1='$tel1'
  and tipo1='$tel_principal_op'
  and Tel2='$tel2'
  and tipo2='$tel_sec1_op'
  and Tel3='$tel3'
  and tipo3='$tel_sec2_op'
  and estado='$estado'
  and pais='$pais'
  and medio='$medio'
  and Solicitud='$solicitud'
  and actual_link='$actual_link'
  and horario='$horario'
  and Comentarios='$comentarios'
  and Aviso=$aviso
  and Adwords='$adwords'
  and Hispana=$hispana
  and Descartar=$descartar
  and Duplicado=$duplicado
  and Prueba=$prueba
  and cp='$cp'
  and edad=$edad
  and tratamientos='$tratamientos'
  and numero_tratamientos=$si_tratamientos";

$registro_sql=mysql_query($registro) or die('Fallo Registro');
//$registro_datos=mysql_fetch_array($registro_sql);


/*****************SERVICIO WEB INSERTA EVOLUTION/PROSPECTOS ***********************/
// $esEvulution=false;
// include "../includes/formulario-other.php";
 /*****************SERVICIO WEB INSERTA EVOLUTION/PROSPECTOS ***********************/

$no_spam="01 800 600 7007";

  if($email<>""){

  // $mail = new PHPMailer();
  // $mail->IsSMTP();
  // $mail->SMTPAuth = true;
  // $mail->SMTPSecure = "tls";
  // $mail->Host = "smtp.gmail.com";
  // $mail->Username = "mail@domain.com";
  // $mail->Password = "domain123";
  // $mail->Port =587;
  // $mail->From = "mail@domain.com";
  // $mail->FromName = "Bienvenida & Gracias";
  // $mail->AddAddress($email);
  // $mail->IsHTML(true);
  // $mail->Subject = "Bienvenida";
  // $mail->AltBody = 'Texto plano';
  //
	// $message='<html>
  //           <head>
  //           	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  //           </head>
  //           	<body>
  //           		<p>Gracias por tu registro</p>
  //           	</body>
  //           </html>';
  //
  //   //mail($to,$subject,$message,$additional_headers);
  //
  //   $mail->MsgHTML($message);
  //
	// 	if(!$mail->Send()) {//finalmente enviamos el email
  //     echo $mail->ErrorInfo;//si no se env?a correctamente se muestra el error que ocurri?
  //   }

  //include("gracias-content.php");
	}

	//* Ends the insert
	//------------------
	//* Begins the page
	include("gracias-content.php");
?>
