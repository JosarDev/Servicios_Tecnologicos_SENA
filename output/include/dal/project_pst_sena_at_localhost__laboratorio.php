<?php
$dalTablelaboratorio = array();
$dalTablelaboratorio["id_Laboratorio"] = array("type"=>3,"varname"=>"id_Laboratorio", "name" => "id_Laboratorio", "autoInc" => "1");
$dalTablelaboratorio["Nombre_Laboratorio"] = array("type"=>200,"varname"=>"Nombre_Laboratorio", "name" => "Nombre_Laboratorio", "autoInc" => "0");
$dalTablelaboratorio["Tipologia"] = array("type"=>200,"varname"=>"Tipologia", "name" => "Tipologia", "autoInc" => "0");
$dalTablelaboratorio["Descripcion"] = array("type"=>201,"varname"=>"Descripcion", "name" => "Descripcion", "autoInc" => "0");
$dalTablelaboratorio["Direccion"] = array("type"=>200,"varname"=>"Direccion", "name" => "Direccion", "autoInc" => "0");
$dalTablelaboratorio["Mision"] = array("type"=>201,"varname"=>"Mision", "name" => "Mision", "autoInc" => "0");
$dalTablelaboratorio["Vision"] = array("type"=>201,"varname"=>"Vision", "name" => "Vision", "autoInc" => "0");
$dalTablelaboratorio["fk_Codigo_Centro"] = array("type"=>3,"varname"=>"fk_Codigo_Centro", "name" => "fk_Codigo_Centro", "autoInc" => "0");
$dalTablelaboratorio["fk_id_User"] = array("type"=>3,"varname"=>"fk_id_User", "name" => "fk_id_User", "autoInc" => "0");
$dalTablelaboratorio["id_Laboratorio"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__laboratorio"] = &$dalTablelaboratorio;
?>