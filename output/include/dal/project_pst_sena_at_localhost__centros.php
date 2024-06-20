<?php
$dalTablecentros = array();
$dalTablecentros["id_centro"] = array("type"=>3,"varname"=>"id_centro", "name" => "id_centro", "autoInc" => "1");
$dalTablecentros["nom_centro"] = array("type"=>200,"varname"=>"nom_centro", "name" => "nom_centro", "autoInc" => "0");
$dalTablecentros["id_municipio"] = array("type"=>200,"varname"=>"id_municipio", "name" => "id_municipio", "autoInc" => "0");
$dalTablecentros["barrio_centro"] = array("type"=>200,"varname"=>"barrio_centro", "name" => "barrio_centro", "autoInc" => "0");
$dalTablecentros["direc_centro"] = array("type"=>200,"varname"=>"direc_centro", "name" => "direc_centro", "autoInc" => "0");
$dalTablecentros["img_centro"] = array("type"=>128,"varname"=>"img_centro", "name" => "img_centro", "autoInc" => "0");
$dalTablecentros["fecha_reg_centro"] = array("type"=>7,"varname"=>"fecha_reg_centro", "name" => "fecha_reg_centro", "autoInc" => "0");
$dalTablecentros["extension"] = array("type"=>200,"varname"=>"extension", "name" => "extension", "autoInc" => "0");
$dalTablecentros["id_regional"] = array("type"=>200,"varname"=>"id_regional", "name" => "id_regional", "autoInc" => "0");
$dalTablecentros["departamento"] = array("type"=>200,"varname"=>"departamento", "name" => "departamento", "autoInc" => "0");
$dalTablecentros["id_centro"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__centros"] = &$dalTablecentros;
?>