<?php
$dalTablesolicitudes = array();
$dalTablesolicitudes["id_Solicitudes"] = array("type"=>3,"varname"=>"id_Solicitudes", "name" => "id_Solicitudes", "autoInc" => "1");
$dalTablesolicitudes["Fecha"] = array("type"=>7,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTablesolicitudes["Hora"] = array("type"=>134,"varname"=>"Hora", "name" => "Hora", "autoInc" => "0");
$dalTablesolicitudes["Estado"] = array("type"=>200,"varname"=>"Estado", "name" => "Estado", "autoInc" => "0");
$dalTablesolicitudes["Cantidad"] = array("type"=>3,"varname"=>"Cantidad", "name" => "Cantidad", "autoInc" => "0");
$dalTablesolicitudes["Descripcion"] = array("type"=>201,"varname"=>"Descripcion", "name" => "Descripcion", "autoInc" => "0");
$dalTablesolicitudes["TipoSolicitud"] = array("type"=>129,"varname"=>"TipoSolicitud", "name" => "TipoSolicitud", "autoInc" => "0");
$dalTablesolicitudes["fk_id_Servicio"] = array("type"=>3,"varname"=>"fk_id_Servicio", "name" => "fk_id_Servicio", "autoInc" => "0");
$dalTablesolicitudes["fk_id_Cliente"] = array("type"=>3,"varname"=>"fk_id_Cliente", "name" => "fk_id_Cliente", "autoInc" => "0");
$dalTablesolicitudes["id_Solicitudes"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__solicitudes"] = &$dalTablesolicitudes;
?>