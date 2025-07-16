<?php
$dalTableservicios = array();
$dalTableservicios["id_Servicio"] = array("type"=>3,"varname"=>"id_Servicio", "name" => "id_Servicio", "autoInc" => "1");
$dalTableservicios["Tipología"] = array("type"=>3,"varname"=>"Tipolog_a", "name" => "Tipología", "autoInc" => "0");
$dalTableservicios["Nombre_Servicio"] = array("type"=>200,"varname"=>"Nombre_Servicio", "name" => "Nombre_Servicio", "autoInc" => "0");
$dalTableservicios["fk_laboratorio"] = array("type"=>3,"varname"=>"fk_laboratorio", "name" => "fk_laboratorio", "autoInc" => "0");
$dalTableservicios["id_Servicio"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__servicios"] = &$dalTableservicios;
?>