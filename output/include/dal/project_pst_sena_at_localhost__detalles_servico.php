<?php
$dalTabledetalles_servico = array();
$dalTabledetalles_servico["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabledetalles_servico["fk_T_Servicio"] = array("type"=>3,"varname"=>"fk_T_Servicio", "name" => "fk_T_Servicio", "autoInc" => "0");
$dalTabledetalles_servico["Nombre_Servicio"] = array("type"=>200,"varname"=>"Nombre_Servicio", "name" => "Nombre_Servicio", "autoInc" => "0");
$dalTabledetalles_servico["Norma_Requerida"] = array("type"=>201,"varname"=>"Norma_Requerida", "name" => "Norma_Requerida", "autoInc" => "0");
$dalTabledetalles_servico["Valor_Servicio"] = array("type"=>14,"varname"=>"Valor_Servicio", "name" => "Valor_Servicio", "autoInc" => "0");
$dalTabledetalles_servico["Observaciones"] = array("type"=>201,"varname"=>"Observaciones", "name" => "Observaciones", "autoInc" => "0");
$dalTabledetalles_servico["fk_id_Laboratorio"] = array("type"=>3,"varname"=>"fk_id_Laboratorio", "name" => "fk_id_Laboratorio", "autoInc" => "0");
$dalTabledetalles_servico["id"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__detalles_servico"] = &$dalTabledetalles_servico;
?>