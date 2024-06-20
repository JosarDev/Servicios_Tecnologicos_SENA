<?php
$dalTablenodos = array();
$dalTablenodos["id_nodo"] = array("type"=>3,"varname"=>"id_nodo", "name" => "id_nodo", "autoInc" => "1");
$dalTablenodos["nom_nodo"] = array("type"=>200,"varname"=>"nom_nodo", "name" => "nom_nodo", "autoInc" => "0");
$dalTablenodos["id_centro"] = array("type"=>3,"varname"=>"id_centro", "name" => "id_centro", "autoInc" => "0");
$dalTablenodos["matricula_inmobiliario"] = array("type"=>200,"varname"=>"matricula_inmobiliario", "name" => "matricula_inmobiliario", "autoInc" => "0");
$dalTablenodos["barrio_nodo"] = array("type"=>200,"varname"=>"barrio_nodo", "name" => "barrio_nodo", "autoInc" => "0");
$dalTablenodos["direc_nodo"] = array("type"=>200,"varname"=>"direc_nodo", "name" => "direc_nodo", "autoInc" => "0");
$dalTablenodos["localidad"] = array("type"=>200,"varname"=>"localidad", "name" => "localidad", "autoInc" => "0");
$dalTablenodos["img_nodo"] = array("type"=>200,"varname"=>"img_nodo", "name" => "img_nodo", "autoInc" => "0");
$dalTablenodos["fecha_reg_nodo"] = array("type"=>135,"varname"=>"fecha_reg_nodo", "name" => "fecha_reg_nodo", "autoInc" => "0");
$dalTablenodos["id_nodo"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__nodos"] = &$dalTablenodos;
?>