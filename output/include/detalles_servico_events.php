<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_detalles_servico  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeAdd"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		/*
// Obtén el valor del campo "Tipo Servicio"
$tipoServicio = $values['TipoServicio'];

// Define la URL de redirección basada en el valor del campo "Tipo Servicio"
$redirectUrl = "";
if ($tipoServicio == "Calibración") {
$redirectUrl = "calibracion_add.php";
} elseif ($tipoServicio == "Ensayo") {
$redirectUrl = "ensayo_add.php";
}

// Si se ha definido una URL de redirección, genera el código HTML para redirigir
if (!empty($redirectUrl)) {
$html =
"<script>
window.open('".$redirectUrl."');
</script>";
echo $html;
exit();
}
*/
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		
$user=$_SESSION['UserID'];
$permiso=Security::getUserGroup();
if($permiso<>'SuperAdmin'){

$rs = DB::Query("select id_User FROM usuario WHERE Usuario='".$user."'");
$data=$rs->fetchAssoc();

$id_laboratorio = DB::Query("select id_Laboratorio FROM Laboratorio WHERE fk_id_User='".$data['id_User']."'");
$response = $id_laboratorio->fetchAssoc();

$values['fk_id_Laboratorio']=$response['id_Laboratorio'];

return true;

}else{}
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
