<?php

//echo "jairo";


if($_POST['email']==""){
	echo "<div class='respuesta-email'>Necesitamos su mail</div>";
	
	}
	
else{
 $mensaje =
'<table width="400" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><strong>E-mail:</strong></td>
    <td>&quot;'.$_POST['email'].'&quot;</td>
  </tr>
</table>

';

$asunto = $_POST['asunto'];

$cabeceras  = "MIME-Version: 1.0\n";
$cabeceras .= "Content-type: text/html; charset=utf-8\n";
$cabeceras .= "To: ".$_POST['name_control']." <@.com>\n";

$cabeceras .= "From: MafriElectric <no-replay@.com>\n";
 

//echo "<div class='enviado'>La Información ha sido Enviada</div>";
mail($_POST['email'] , $asunto, $mensaje, $cabeceras);
header("Location: index.php");

}
?>