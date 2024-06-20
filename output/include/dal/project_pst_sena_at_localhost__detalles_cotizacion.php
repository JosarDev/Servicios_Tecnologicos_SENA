<?php
$dalTabledetalles_cotizacion = array();
$dalTabledetalles_cotizacion["id_Det_Cot"] = array("type"=>3,"varname"=>"id_Det_Cot", "name" => "id_Det_Cot", "autoInc" => "1");
$dalTabledetalles_cotizacion["fk_id_Cotizacion"] = array("type"=>3,"varname"=>"fk_id_Cotizacion", "name" => "fk_id_Cotizacion", "autoInc" => "0");
$dalTabledetalles_cotizacion["fk_id_Servicio"] = array("type"=>3,"varname"=>"fk_id_Servicio", "name" => "fk_id_Servicio", "autoInc" => "0");
$dalTabledetalles_cotizacion["id_Det_Cot"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__detalles_cotizacion"] = &$dalTabledetalles_cotizacion;
?>