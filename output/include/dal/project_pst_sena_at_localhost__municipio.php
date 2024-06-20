<?php
$dalTablemunicipio = array();
$dalTablemunicipio["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablemunicipio["departamento"] = array("type"=>200,"varname"=>"departamento", "name" => "departamento", "autoInc" => "0");
$dalTablemunicipio["municipio"] = array("type"=>200,"varname"=>"municipio", "name" => "municipio", "autoInc" => "0");
$dalTablemunicipio["orden"] = array("type"=>20,"varname"=>"orden", "name" => "orden", "autoInc" => "0");
$dalTablemunicipio["id"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__municipio"] = &$dalTablemunicipio;
?>