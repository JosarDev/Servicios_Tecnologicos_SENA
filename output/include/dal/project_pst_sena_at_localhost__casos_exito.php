<?php
$dalTablecasos_exito = array();
$dalTablecasos_exito["id_CAEX"] = array("type"=>3,"varname"=>"id_CAEX", "name" => "id_CAEX", "autoInc" => "1");
$dalTablecasos_exito["Video"] = array("type"=>200,"varname"=>"Video", "name" => "Video", "autoInc" => "0");
$dalTablecasos_exito["Titulo"] = array("type"=>200,"varname"=>"Titulo", "name" => "Titulo", "autoInc" => "0");
$dalTablecasos_exito["Descripcion"] = array("type"=>201,"varname"=>"Descripcion", "name" => "Descripcion", "autoInc" => "0");
$dalTablecasos_exito["fk_id_Laboratorio"] = array("type"=>3,"varname"=>"fk_id_Laboratorio", "name" => "fk_id_Laboratorio", "autoInc" => "0");
$dalTablecasos_exito["id_CAEX"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__casos_exito"] = &$dalTablecasos_exito;
?>