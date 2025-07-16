<?php
$dalTableensayo = array();
$dalTableensayo["id_Ensayo"] = array("type"=>3,"varname"=>"id_Ensayo", "name" => "id_Ensayo", "autoInc" => "1");
$dalTableensayo["Tipo_Material"] = array("type"=>200,"varname"=>"Tipo_Material", "name" => "Tipo_Material", "autoInc" => "0");
$dalTableensayo["Numeral"] = array("type"=>200,"varname"=>"Numeral", "name" => "Numeral", "autoInc" => "0");
$dalTableensayo["Report_Results"] = array("type"=>200,"varname"=>"Report_Results", "name" => "Report_Results", "autoInc" => "0");
$dalTableensayo["Cantidad"] = array("type"=>200,"varname"=>"Cantidad", "name" => "Cantidad", "autoInc" => "0");
$dalTableensayo["Tipo_Probeta"] = array("type"=>200,"varname"=>"Tipo_Probeta", "name" => "Tipo_Probeta", "autoInc" => "0");
$dalTableensayo["fk_id_Servicio"] = array("type"=>3,"varname"=>"fk_id_Servicio", "name" => "fk_id_Servicio", "autoInc" => "0");
$dalTableensayo["id_Ensayo"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__ensayo"] = &$dalTableensayo;
?>