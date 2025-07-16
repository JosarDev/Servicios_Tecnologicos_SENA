<?php
$dalTabletipo_material = array();
$dalTabletipo_material["id_Material"] = array("type"=>3,"varname"=>"id_Material", "name" => "id_Material", "autoInc" => "1");
$dalTabletipo_material["Nombre_Mat"] = array("type"=>200,"varname"=>"Nombre_Mat", "name" => "Nombre_Mat", "autoInc" => "0");
$dalTabletipo_material["id_Material"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__tipo_material"] = &$dalTabletipo_material;
?>