<?php
$dalTableinstrumento = array();
$dalTableinstrumento["id_Instrumento"] = array("type"=>3,"varname"=>"id_Instrumento", "name" => "id_Instrumento", "autoInc" => "1");
$dalTableinstrumento["Nombre_Inst"] = array("type"=>200,"varname"=>"Nombre_Inst", "name" => "Nombre_Inst", "autoInc" => "0");
$dalTableinstrumento["id_Instrumento"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__instrumento"] = &$dalTableinstrumento;
?>