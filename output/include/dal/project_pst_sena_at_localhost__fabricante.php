<?php
$dalTablefabricante = array();
$dalTablefabricante["id_Fabricante"] = array("type"=>3,"varname"=>"id_Fabricante", "name" => "id_Fabricante", "autoInc" => "1");
$dalTablefabricante["Nombre_Fab"] = array("type"=>200,"varname"=>"Nombre_Fab", "name" => "Nombre_Fab", "autoInc" => "0");
$dalTablefabricante["id_Fabricante"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__fabricante"] = &$dalTablefabricante;
?>