<?php
$dalTablecentro = array();
$dalTablecentro["Codigo_Centro"] = array("type"=>3,"varname"=>"Codigo_Centro", "name" => "Codigo_Centro", "autoInc" => "1");
$dalTablecentro["Nombre_Centro"] = array("type"=>200,"varname"=>"Nombre_Centro", "name" => "Nombre_Centro", "autoInc" => "0");
$dalTablecentro["Direccion"] = array("type"=>200,"varname"=>"Direccion", "name" => "Direccion", "autoInc" => "0");
$dalTablecentro["Celular"] = array("type"=>3,"varname"=>"Celular", "name" => "Celular", "autoInc" => "0");
$dalTablecentro["Codigo_Centro"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__centro"] = &$dalTablecentro;
?>